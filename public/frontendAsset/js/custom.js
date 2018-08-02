
/*
  [JS Index]
  ---
  Template Weffa - One Page Personal HTML Template.
  Theme URI: http://Weffa-per.bitballoon.com
  Author:  A90Theme
  Version: 1.0
*/

$(function () {

  "use strict";

  var wind = $(window);

  var oheight = $('.footer').outerHeight();

  /* 1. margin bottom main
  -------------------------------------------------------*/
  $('main').css('marginBottom',oheight);

  /* navbar scrolling background and change logo
  -------------------------------------------------------*/
  wind.on("scroll",function () {

      var bodyScroll = wind.scrollTop(),
          navbar = $(".navbar");

      if(bodyScroll > 300){

          navbar.addClass("nav-scroll");
          $('.navbar-brand img').attr('src','assets/img/logo.png');


      }else{

          navbar.removeClass("nav-scroll");
          $('.navbar-brand img').attr('src','assets/img/logo-2.png');

      }

  });


  function headHover() {
          if($(document).width() > 991) {
            $('.navbar .dropdown').hover(function() {
              $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn();
            }, function() {
              $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeOut()
            });
          } else {
              $(".navbar .dropdown").click('hover');
          }
      }

      headHover();

      $(document).resize(function() {
          headHover();
      });



  /* sections background image from data background
  -------------------------------------------------------*/
  $( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }

  });

  $('.owner .item-sl .owl-carousel').owlCarousel({
      autoplay:true,
      items:1,
      rtl:true,
      margin:0,
      loop: true,
      stagePadding:0,
      smartSpeed:600,
      dots: true,
      nav: false,
  });



   var rellax = new Rellax('.rellax');


   var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();


});


$(window).on("load",function (){

  /* Preloader
  -------------------------------------------------------*/
  $("#preloader").fadeOut(500);



    /* owl carousel Header
    -------------------------------------------------------*/
    $('.demo-slider .owl-carousel').owlCarousel({
        autoplay:true,
        items:1,
        rtl:true,
        margin:0,
        loop: true,
        stagePadding:0,
        smartSpeed:600,
        dots: false,
        nav: true,
        navText:['<span> <i class="jam jam-arrow-left"></i> </span>',
        '<span> <i class="jam jam-arrow-right"></i> </span>'],
    });

    var owl = $('.demo-slider .owl-carousel');
    // add animate.css class(es) to the elements to be animated
     function setAnimation ( _elem, _InOut ) {
       // Store all animationend event name in a string.
       // cf animate.css documentation
       var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

       _elem.each ( function () {
         var $elem = $(this);
         var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

         $elem.addClass($animationType).one(animationEndEvent, function () {
           $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
         });
       });
     }

    // Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
       var $currentItem = $('.owl-item', owl).eq(event.item.index);
       var $elemsToanim = $currentItem.find("[data-animation-out]");
       setAnimation ($elemsToanim, 'out');
    });

      // Fired after current slide has been changed
     owl.on('changed.owl.carousel', function(event) {

         var $currentItem = $('.owl-item', owl).eq(event.item.index);
         var $elemsToanim = $currentItem.find("[data-animation-in]");
         setAnimation ($elemsToanim, 'in');
     });


     /* Swiper Caroursel
     -------------------------------------------------------*/
     var swiper = new Swiper('.portfolio .swiper-container', {
       slidesPerView: 3,
       spaceBetween: 30,
       pagination: {
         el: '.swiper-pagination',
         clickable: true,
       },
       scrollbar: {
         el: '.swiper-scrollbar',
         hide: false,
         draggable: true,
       },
       breakpoints: {
         991: {
           slidesPerView: 2,
           spaceBetween: 30,
         },
         676: {
           slidesPerView: 1,
           spaceBetween: 30,
         }
       }
     });
      $(".single-image").fancybox({
       'transitionIn'  : 'elastic',
       'transitionOut' : 'elastic',
       'speedIn'   : 600,
       'speedOut'    : 200,
       'overlayShow' : false
     });
     /* isotope
     -------------------------------------------------------*/
     var $gallery = $('.gallery').isotope({});
     $('.gallery').isotope({

         // options
         itemSelector: '.item-img',
         transitionDuration: '0.5s',
         filter: '.status'

     });

     $(".gallery .single-image").fancybox({
       'transitionIn'  : 'elastic',
       'transitionOut' : 'elastic',
       'speedIn'   : 600,
       'speedOut'    : 200,
       'overlayShow' : false
     });


     /* filter items on button click
     -------------------------------------------------------*/
     $('.filtering').on( 'click', 'button', function() {

         var filterValue = $(this).attr('data-filter');

         $gallery.isotope({ filter: filterValue });

         });

     $('.filtering').on( 'click', 'button', function() {

         $(this).addClass('active').siblings().removeClass('active');

     });

});
