<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {

        $messages = [
            'name.required' => 'Opa! Parece que você se esqueceu de digitar seu nome.',
            'name.min' => 'Calma aí, seu nome só tem duas letras? Tente novamente com seu nome real e seu sobrenome',
            'email.required' => 'Hmm... Parece que você esqueceu de digitar seu e-mail.',
            'email.email' => 'Hmm... Não sei seu e-mail, mas com certeza não é esse, tente novamente.',
            'email.unique' => 'Opa! Esse e-mail já está cadastrado.',
            'password.required' => 'Calma lá, você precisa escolher uma senha segura para continuarmos.',
            'password.min' => 'Sua senha é muito curta, tente novamente com uma senha mais segura.',   
        ];

        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8',
        ], $messages);

        $user = $user->fill($validated);
        $user->password = Hash::make($validated['password']);

        if ($user->save()) {
            return back()->with('success', 'Usuário cadastrado com sucesso!');
        }
    
        return back()->with('error', 'Ocorreu um problema ao cadastrar o usuário. Tente novamente.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
