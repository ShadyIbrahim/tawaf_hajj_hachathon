<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="هاكثون الحج">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700,900&amp;subset=arabic" rel="stylesheet">


    <!-- custom styles (optional) -->
    <link href="{{ asset('frontendAsset/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('frontendAsset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontendAsset/css/responsive.css') }}" rel="stylesheet">
  </head>
  <body >

    <!-- Loader
    ================================================== -->
    <div id="preloader">
      <div class="loader">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
          </filter>
        </defs>
      </svg>
    </div>
    <!-- End Loader
    ================================================== -->

<!-- Navbar
================================================== -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

    <a class="navbar-brand" href="#">
        <img class="my-1" src="{{ asset('frontendAsset\img\logo-nav.png') }}" width="65" height="65" alt="twaf logo"> 
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        <li class="nav-item">
            <a class="nav-link" href="{{ url('portal/dashboard') }}">
                <i class="fa fa-home"></i><br>
            الرئيسية
            <span class="sr-only">(current)</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ url('portal/requests') }}">
                <i class="fa fa-bars"></i><br>
                الرحلات <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="0">
                <i class="fa fa-user"></i><br>
                صفحتى    <span class="sr-only">(current)</span></a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="0">
                <i class="fa fa-users"></i><br>
                المرشدين    <span class="sr-only">(current)</span></a>
        </li>
            <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="0">
                <i class="fa fa-bell"></i><br>
                التنبيهات     <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fa fa-cogs"></i><br>
                الاعدادت
                <span class="sr-only">(current)</span></a>
        </li>
        </ul>

        
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @else
            <div class="mr-4 pr-4">
                <a class="sign-out-icon fa fa-user" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <span class="font-small mr-3"> مرحبا {{ Auth::user()->name }} </span>
        </div>
        @endguest

    </div>
    </div>
</nav>
<!-- End Navbar
================================================== -->

<div class="page-content-wrapper">
        <div class="page-content">
            @if(Session::has('error'))
                <div class="alert alert-danger display-hide" style="display: block;">
                    <button class="close" data-close="alert"></button> {{ Session::get('error') }}
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success display-hide" style="display: block;">
                    <button class="close" data-close="alert"></button> {{ Session::get('success') }}
                </div>
            @endif
            
        </div>
    </div>

@yield('content')

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <div class="row">

          <div class="col-12 footer-bottom ">
            <div class="row">
              <div class="col-md-6">
                <p> جميع الحقوق محفوظه <a href="#"> هاكثون الحج </a>  2018 - 2019  </p>
              </div>

              <div class="col-md-6">
                <div class="social-icon">
                  <a target="_blank" href="#"><i class="font-white fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#"><i class="font-white fab fa-twitter"></i></a>
                  <a target="_blank" href="#"><i class="font-white fab fa-instagram"></i></a>
                  <a target="_blank" href="#"><i class="font-white fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer
    ================================================== -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontendAsset/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontendAsset/js/Migrate.js') }}"></script>
    <script src="{{ asset('frontendAsset/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontendAsset/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('frontendAsset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontendAsset/js/wow.min.js') }}"></script>

    <!-- rellax js -->
    <script src="{{ asset('frontendAsset/js/rellax.min.js') }}"></script>
    <!-- fancybox -->
    <script src="{{ asset('frontendAsset/js/jquery.fancybox.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('frontendAsset/js/isotope.pkgd.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontendAsset/js/swiper.min.js') }}"></script>

    <!-- custom JavaScript -->
    <script src="{{ asset('frontendAsset/js/custom.js') }}"></script>

  </body>
</html>
