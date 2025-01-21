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
              @error('name')
                <p class="text-danger font-weight-bold mb-0">{{ $message }}</p>
              @enderror
              <input type="name" class="form-control custom-input @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nome" value="{{ old('name') }}">
            </div>
            <div class="form-group">
              @error('email')
                <p class="text-danger font-weight-bold mb-0">{{ $message }}</p>
              @enderror
              <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
              @error('password')
                <p class="text-danger font-weight-bold mb-0">{{ $message }}</p>
              @enderror
              <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-teal-dark w-100">Criar nova conta</button>
            @if (session('success'))
              <p class="text-success text-center font-weight-bold mt-2 mb-0"> {{ session('success') }} </p>
            @endif
            @if (session('error'))
              <p class="text-danger text-center font-weight-bold mt-2 mb-0"> {{ session('error') }} </p>
            @endif
        </form>
     
    </section>
@endsection
