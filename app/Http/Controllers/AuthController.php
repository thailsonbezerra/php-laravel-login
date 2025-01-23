<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard'); 
        }

        return view('login');
    }

    public function login(Request $request) {
        $messages = [
            'email.required' => 'Opa! Parece que você esqueceu de digitar seu e-mail.',
            'email.email' => 'Hmm... Não sei seu e-mail, mas com certeza não é esse, tente novamente.',
            'password.required' => 'Calma lá, você precisa preencher sua senha para continuar.',
        ];

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],$messages);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withInput()->with('error', 'E-mail ou senha inválidos.');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
}
