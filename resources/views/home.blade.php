<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Escopar</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar d-flex justify-content-between align-content-center px-4" style="height: 80px;">
            <img src="{{ asset('images/logo_80px320px.png') }}" alt="Logo">
            <div class="d-flex justify-content-between">
                <div class="nav-item mr-2">
                    <a class="nav-link btn btn-outline-teal-dark">Criar Conta</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link btn btn-teal-dark" >Login</a>
                </div>
            </div>
        </nav>
        {{-- <h1>
            Que tal organizar seus <span>escopos</span> de forma simples e eficiente?
        </h1> --}}
    </body>
</html>
