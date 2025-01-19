@extends('layouts.app')

@section('content')
    <section class="login-pg container d-flex flex-column flex-lg-row justify-content-between p-5 h-auto">
        <div class="text-center text-lg-left mb-4 mb-lg-0">
            <h1 class="highlight-title">Fazer login!</h1>
            <p>Se você já tem uma conta, faça login para acessar o conteúdo.</p>
        </div>
        <form class="p-4 col-12 col-lg-6 rounded custom-form">
            <div class="form-group">
              <input type="email" class="form-control custom-input" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group bg-dark">
              <input type="password" class="form-control custom-input" id="inputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-teal-dark w-100">Entrar</button>
        </form>
    </section>
@endsection
