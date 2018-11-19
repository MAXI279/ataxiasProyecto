<!-- MENU DE NAVEGACION -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="img/atar.png" width="150" height="125" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'current-menu-item active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('asociacion') ? 'current-menu-item active' : '' }}">
                <a class="nav-link" href="{{ route('asociacion') }}">Asociación</a>
            </li>
            <li class="nav-item {{ Request::is('post*') ? 'current-menu-item active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}"">Posts</a>
            </li>
            <li class="nav-item {{ Request::is('portfolio') ? 'current-menu-item active' : '' }}">
                <a class="nav-link" href="portfolio.html">Galería</a>
            </li>
            <li class="nav-item {{ Request::is('contacto') ? 'current-menu-item active' : '' }}">
                <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
            </li>
            @guest
                <li class="nav-item {{ Request::is('login') ? 'current-menu-item active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
            @else
                @if(Auth::user()->role->id == 1)
                    <li class="nav-item {{ Request::is('admin*') ? 'current-menu-item active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Panel</a>
                    </li>
                @endif
                @if(Auth::user()->role->id == 2)
                    <li class="nav-item {{ Request::is('author*') ? 'current-menu-item active' : '' }}">
                        <a class="nav-link" href="{{ route('author.dashboard') }}">Panel</a>
                    </li>
                @endif
            @endguest
        </ul>
    </div><!-- .col -->
</nav><!-- .nav-bar -->