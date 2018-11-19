<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CHARITY -->
    <link rel="stylesheet" href="charity/css/bootstrap.min.css">
    <link rel="stylesheet" href="charity/css/font-awesome.min.css">
    <link rel="stylesheet" href="charity/css/elegant-fonts.css">
    <link rel="stylesheet" href="charity/css/themify-icons.css">
    <link rel="stylesheet" href="charity/css/swiper.min.css">
    <link rel="stylesheet" href="charity/style.css">

    <!-- BLOG -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/backend/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{ asset('assets/backend/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="{{ asset('assets/backend/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/backend/css/themes/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- REDES SOCIALES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BOOTSTRAP -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- icon -->
    <link rel="icon" type="image/png" href="/img/atar.png" />

    <title>@yield('title') - {{ config('app.name', 'ATAR') }}</title>
    @stack('css')
</head>
<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
    @include('layouts.frontend.partial.header')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('layouts.backend.partial.sidebar')
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    @yield('content')
</section>
<!-- CHARITY -->
    <script type='text/javascript' src='charity/js/jquery.js'></script>
    <script type='text/javascript' src='charity/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='charity/js/swiper.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='charity/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='charity/js/custom.js'></script>

<!-- BLOG -->
<!-- Jquery Core Js -->
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap Core Js -->
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.js') }}"></script>
<!-- Select Plugin Js -->
{{--<script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>--}}
<!-- Slimscroll Plugin Js -->
<script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{ asset('assets/backend/plugins/node-waves/waves.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/backend/js/admin.js') }}"></script>
<!-- Demo Js -->
<script src="{{ asset('assets/backend/js/demo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stack('js')
</body>
</html>
