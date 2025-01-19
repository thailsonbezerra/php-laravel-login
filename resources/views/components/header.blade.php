<header class="d-flex justify-content-between">
    <img src="{{ asset('images/logo_80px320px.png') }}" alt="Logo">
    <nav class="navbar d-flex justify-content-between align-content-center px-4">
        <div class="nav-item mr-2">
            <a href="{{ route('register') }}"  class="nav-link btn btn-outline-teal-dark">Criar Conta</a>
        </div>
        <div class="nav-item">
            <a href="{{ route('login') }}" class="nav-link btn btn-teal-dark">Login</a>
        </div>
    </nav>
</header>
