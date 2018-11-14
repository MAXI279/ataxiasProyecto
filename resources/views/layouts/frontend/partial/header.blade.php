<header>

<!-- DE ACA PARA ABAJO CHARITY -->
    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        EMAIL: <a href="mailto:ataxias@atar.org.ar">ataxias@atar.org.ar</a>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>TELÉFONO: <span>(011) 4585-1290 de lunes a viernes de 18 a 22Hs</span></p>
                    </div><!-- .header-bar-text -->

                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                        <a href="#">Colaborá</a>
                    </div><!-- .donate-btn -->
                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="img/atar.png" width="150" height="150" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <nav class="collapse navbar-collapse site-navigation d-flex justify-content-end align-items-center">
                <ul class="navbar-nav d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
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
                    <li class="nav-item {{ Request::is('contact') ? 'current-menu-item active' : '' }}">
                        <a class="nav-link" href="contact.html">Contacto</a>
                    </li>
                    @guest
                        <li class="nav-item {{ Request::is('login') ? 'current-menu-item active' : '' }}">
                            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        </li>
                    @else
                        @if(Auth::user()->role->id == 1)
                            <li class="nav-item {{ Request::is('admin*') ? 'current-menu-item active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Tablero</a>
                            </li>
                        @endif
                        @if(Auth::user()->role->id == 2)
                            <li class="nav-item {{ Request::is('author*') ? 'current-menu-item active' : '' }}">
                                <a class="nav-link" href="{{ route('author.dashboard') }}">Tablero</a>
                            </li>
                        @endif
                    @endguest
                </ul>
            </nav><!-- .site-navigation -->

        </div><!-- .col -->
    </div><!-- .nav-bar -->


</header>
