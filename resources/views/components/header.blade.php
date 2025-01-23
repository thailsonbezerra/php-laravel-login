<header class="d-flex justify-content-between">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo_80px320px.png') }}" alt="Logo">
    </a>    
    @if (Auth::check())
        <nav class="navbar d-flex justify-content-between align-content-center px-4">
            <div class="nav-item dropdown mr-2">
                <span class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Olá, {{ Auth::user()->name }}!</span>
                <div class="dropdown-menu">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="dropdown-item">Sair</button>
                </form>
            </div>
        </nav>
    @else
        <nav class="navbar d-flex justify-content-between align-content-center px-4">
            <div class="nav-item mr-2">
                <a href="{{ route('register') }}"  class="nav-link btn btn-outline-teal-dark">Criar Conta</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('login') }}" class="nav-link btn btn-teal-dark">Login</a>
            </div>
        </nav>
    @endif
</header>
