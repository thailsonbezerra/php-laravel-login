@extends('layouts.app')

@section('content')
    <section class="register-pg container d-flex flex-column flex-lg-row justify-content-between p-5 h-auto">
        <div class="text-center text-lg-left mb-4 mb-lg-0 mr-lg-4">
            <h1 class="highlight-title">Criar sua conta!</h1>
            <p>Se você ainda não tem uma conta, crie uma para acessar o conteúdo.</p>
        </div>
        <form method="POST" action="{{route('create-user')}}" class="p-4 col-12 col-lg-6 rounded custom-form">
          @csrf
          <div class="form-group">
              <input type="name" class="form-control custom-input" id="name" name="name" placeholder="Nome" value="{{ old('name') }}">
              @error('name')
                <p class="text-danger font-weight-bold mb-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
              @error('email')
                <p class="text-danger font-weight-bold mb-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Senha">
              @error('password')
                <p class="text-danger font-weight-bold mb-2">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-teal-dark w-100">Criar nova conta</button>
        </form>
    </section>
@endsection
