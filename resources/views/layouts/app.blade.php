<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ $app = App\Models\setting::latest()->first() }}>
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
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ $app ? config('app.url') . 'storage/' . $app->favicon_path : config("app.url").'images/fevicon.ico.png'}} " type="image/x-icon" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.smartmenus.bootstrap-4.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/jssor-slider.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/magnified.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href=    "{{ asset('css/bootstrap.min.css') }}"/>
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
            <h1><a href="index.html"><img src="{{ $app ? config('app.url') . 'storage/' . $app->logo_path : config("app.url").'images/logo.png'}} "/></a></h1>
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
                    <li class="nav-item"><a  href="{{ route('register') }}" class="nav-link "><span class="data-hover"data-hover="sign up">{{ __('sign up') }}</span></a></li>
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
    <section id="page-head" class="col-sm-12">
        <div class="page_title">
            <h2>Jobs news home</h2>
        </div>
        <nav id="breadcrumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </nav>
    </section>
    </div>
    </div>
    </header>
    <!--End Header-->
            @yield('content')
        </main>

	<!--start footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>About Us</span></h4>
                    </div>
                    <div class="widget_content">
                        <p>{{ ($app ? $app->about: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, laudantium rerum! Maiores, magnam earum? Aut dicta corrupti veritatis dolor nisi exercitationem minima, quod eius autem itaque qui aliquam vel fuga.') }}</p>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:{{ ($app ? $app->business_phone:'+923429382554') }}</p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">{{ ($app ?$app->business_email:'tauseedzaman@test.com') }}</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Recent Posts</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="links">
                        <li> <a href="#">Aenean commodo ligula eget dolor<span>November 07, 2020</span></a></li>
                        <li> <a href="#">Temporibus autem quibusdam <span>November 05, 2020</span></a></li>
                        <li> <a href="#">Debitis aut rerum saepe <span>November 03, 2020</span></a></li>
                        <li> <a href="#">Et voluptates repudiandae <span>November 02, 2020</span></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Twitter</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="tweet_list">
                            <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2020</span>
                        </li>
                            <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2020</span>
                        </li>
                            <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2020</span>
                        </li>
                        </ul>
                    </div>
                    <div class="widget_content">
                        <div class="tweet_go"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Flickr Gallery</span></h4>
                    </div>
                    <div class="widget_content">
                        <div class="flickr">
                            <ul id="flickrFeed" class="flickr-feed"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!--end footer-->

	<section class="footer_bottom">
		<div class="container">
			<div class="row">
            <div class="col-sm-6">
                <p class="copyright">&copy; Copyright {{ date('Y') }} Yahoo baba and Tauseed Zaman</a></p>
            </div>

            <div class="col-sm-6 ">
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
		</div>
	</section>

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
