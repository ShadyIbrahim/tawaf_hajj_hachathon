<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="هاكثون الحج">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>هاكثون الحج  </title>

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

    <!-- Log in form
    ================================================== -->
  <section class="bg-color margin">
      <div class="container shadow my-4"> 
        <!-- First Row -->
        <div class="row d-flex justify-content-center flex-nowrap my-1 text-center">
            <div class="text-center col-md-12 mb-2">
                <img class="mb-1" src="{{ asset('frontendAsset/img/logo-login.png') }}" width="120" height="120"> 
            </div>
        </div>
        <div class="row d-flex justify-content-center flex-nowrap my-1 px-4 text-center">
          <div class="mx-1 col-lg-6 px-4 mx-4">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
            <div class="form-group row px-4 mx-4">

                <label for="inputEmail " class="sr-only">لبريد الإلكتروني</label>
                <input id="email" type="email" placeholder="البريد الإلكتروني" class="form-control my-3 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                <label for="inputPassword " class="sr-only">كلمة المرور</label>
                <input id="password" type="password" placeholder="كلمة المرور" class="form-control my-3 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <div class="checkbox mb-3">
                    <label>
                        <input value="remember-me" type="checkbox"> تذكرني
                    </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit"> تسجيل الدخول</button>
            </div>
          </div>
          <!-- END col 6 -->
        </div>
        <!-- END Row -->
      </div>
    </section>
      



  <!-- <section class="bg-color margin section-padding">   
     <div class="container justify-content-center">
        <div class="row">
            <div class="text-center col-md-12 mb-2">
                <img class="mb-1" src="{{ asset('frontendAsset/img/logo-login.png') }}" width="120" height="120"> 
            </div>
          </div>
          <div class="form-group row d-flex flex-nowrap">
              <div class="col-lg-6 text-center">
                <form class = "form-login">
                    <label for="inputEmail " class="sr-only">Email address</label>     
                    <input id="inputEmail " class="form-control my-3" placeholder="البريد الإلكتروني" required="" autofocus="" type="email">
                    <label for="inputPassword " class="sr-only">Password</label>
                    <input id="inputPassword " class="form-control my-3" placeholder="كلمة المرور" required="" type="password">
                    <div class="checkbox mb-3">
                        <label>
                            <input value="remember-me" type="checkbox"> تذكرني
                        </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit"> تسجيل الدخول</button>
                  </form>
              </div>
            </div>
           </div>
        </div>
    </div>
  </section> -->
    

    <!-- End Log in form
    ================================================== -->


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
      <!-- jQuery first, then Popper.js') }}, then Bootstrap JS -->
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
  
