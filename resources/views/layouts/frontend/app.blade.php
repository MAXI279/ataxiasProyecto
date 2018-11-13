<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


    <!-- Font -->

    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> -->


    <!-- Stylesheets -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->

    <!-- @stack('css') -->
</head>
<body>

@include('layouts.frontend.partial.header')
@include('layouts.frontend.partial.slider')

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- SCIPTS -->
<!-- <script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@stack('js') -->
<!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- CHARITY -->
    <script type='text/javascript' src='charity/js/jquery.js'></script>
    <script type='text/javascript' src='charity/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='charity/js/swiper.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='charity/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='charity/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='charity/js/custom.js'></script>

</body>
</html>
