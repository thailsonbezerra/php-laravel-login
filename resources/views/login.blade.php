@extends('layouts.app')

@section('content')
    <section class="login-pg container d-flex flex-column flex-lg-row justify-content-between p-5 h-auto">
        <div class="text-center text-lg-left mb-4 mb-lg-0 mr-lg-4">
            <h1 class="highlight-title">Fazer login!</h1>
            <p>Se você já tem uma conta, faça login para acessar o conteúdo.</p>
        </div>
        <form method="POST" action="{{route('auth')}}" class="p-4 col-12 col-lg-6 rounded custom-form">
          @csrf
            <div class="form-group">
              @error('email')
                <p class="text-danger font-weight-bold mb-0">{{ $message }}</p>
              @enderror
              <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Email">
            </div>
            <div class="form-group">
              @error('password')
                <p class="text-danger font-weight-bold mb-0">{{ $message }}</p>
              @enderror
              <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-teal-dark w-100 d-flex justify-content-center align-items-center">Entrar <x-simpleline-login class="ml-2"/></button>
            @if (session('error'))
              <p class="text-danger text-center font-weight-bold mt-2 mb-0"> {{ session('error') }} </p>
            @endif
          </form>
    </section>
@endsection
