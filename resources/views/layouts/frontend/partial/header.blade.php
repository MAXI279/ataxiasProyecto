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

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <!-- <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.html" rel="home"><img class="d-block" src="img/atar.png" alt="logo"></a>
                    </div>.site-branding -->
                    
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="img/atar.png" width="150" height="150" alt="logo">
                    </a>                    
                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="about.html">Sobre nosotros</a></li>
                            <li><a href="{{ route('post.index') }}"">Posts</a></li>
                            <li><a href="portfolio.html">Galería</a></li>
                            <li><a href="contact.html">Contacto</a></li>
                            @guest
                                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                            @else
                                @if(Auth::user()->role->id == 1)
                                    <li><a href="{{ route('admin.dashboard') }}">Tablero</a></li>
                                @endif
                                @if(Auth::user()->role->id == 2)
                                    <li><a href="{{ route('author.dashboard') }}">Tablero</a></li>
                                @endif
                            @endguest
                        </ul>
                    </nav><!-- .site-navigation -->

                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->


</header>
