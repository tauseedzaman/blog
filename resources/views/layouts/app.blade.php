<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.smartmenus.bootstrap-4.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/jssor-slider.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/magnified.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.smartmenus.bootstrap-4.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="">
        <main class="">

<!--Start Header-->
<header id="header">
    <div class="container">
    <div class="row">
    <div id="logo-bar" class="col-sm-12">
        <div id="logo">
            <h1><a href="index.html"><img src="images/logo.png"/></a></h1>
        </div>
    </div>

    <!-- Navigation
    ================================================== -->
    <div id="menu-bar" class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light  rounded mb-4">
            <!--  <div class="container">-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link "><span class="data-hover"data-hover="home">home</span></a></li>

                    <li class="nav-item"><a href="{{ url('/categories') }}" class="nav-link "><span class="data-hover"data-hover="categories ">categories</span></a></li>

                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link "><span class="data-hover"data-hover="about">about</span></a></li>

                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link "><span class="data-hover"data-hover="contact">contact</span></a></li>

                    @guest
                    @if (Route::has('register'))
                    <li class="nav-item"><a  href="{{ route('register') }}" class="nav-link "><span class="data-hover"data-hover="contact">{{ __('sign up') }}</span></a></li>
                     @endif
                    @if (Route::has('login'))

                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link "><span class="data-hover"data-hover="login">{{ __('Login') }}</span></a></li>

                @endif
                @else




                    <li class="nav-item"><a class="nav-link " href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <span class="data-hover"data-hover="contact">{{ __('Logout') }}</span></a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </ul>
        </nav>
    </div>
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('js/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/js/retina-1.1.0.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('js/js/jquery.smartmenus.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/jquery.smartmenus.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/jquery.jcarousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/jflickrfeed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js/swipe.js') }}"></script>
</body>
</html>
