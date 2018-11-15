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

    <!-- icon -->
    <link rel="icon" type="image/png" href="/img/atar.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'ATAR') }}</title>

    <!-- REDES SOCIALES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

@include('layouts.frontend.partial.header')

@if(\Request::is('/'))
    @include('layouts.frontend.partial.slider')
@endif

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- CHARITY -->
    <script type='text/javascript' src='charity/js/jquery.js'></script>
    <script type='text/javascript' src='charity/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='charity/js/swiper.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='charity/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='charity/js/custom.js'></script>

<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
