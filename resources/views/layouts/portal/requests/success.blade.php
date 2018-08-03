<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="هاكثون الحج">

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
  <section class="margin extra" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center col-md-12 mb-2">
                <img class="mb-1" src="{{ asset('frontendAsset/img/logo-login.png')}} " width="120" height="120"> 
            </div>
          </div>
              <div class="text-center col-md-6 mx-auto">
                @if(Session::has('success'))
                   <h6  class="sucess-color py-3 mb-3"> {{ Session::get('success') }}</h6>
                @endif
                

              </div>
           </div>
        </div>
    </div>
  </section>
    

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
  
