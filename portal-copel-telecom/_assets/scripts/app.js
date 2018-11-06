const css = require('../styles/app.scss');


import 'bootstrap';
import 'popper.js';
import 'owl.carousel';

window.onload = function() {

  const sizeToFixed = $('.header').height() + 70;
  $(window).on('scroll', function () {
    if( $(window).scrollTop() > sizeToFixed) {
      $('.header-nav.fixed').addClass('active');
    } else {
      $('.header-nav.fixed').removeClass('active');
    }
  });
  
  $('body').scrollspy({ target: '.js-scrollspy', offset: $('.header-nav.fixed').height()+10 })

  $(window).on('activate.bs.scrollspy', function () {
    const middle = $('.header-nav.fixed .active').outerWidth()/2
    const position = $('.header-nav.fixed .active').position().left
    $('.header-nav--loader').width(position+middle);
  })

  $('.header-mobile-button').on('click', function(){
      $(this).toggleClass('active')
      $('.header-mobile-nav, body').toggleClass('menu-opened')
  })

  $('.js-scrollto').on('click', function(e){
    var hash = $(this).attr('href')
    var offset = $('.header-nav.fixed').height()
    $('html,body').animate({
      scrollTop: $(hash).offset().top - offset
    }, 800);
    return false;
  })
  
  $('.js-scrolltop').on('click', function(e){
    $('html,body').animate({
      scrollTop: 0
    }, 800);
    return false;
  })
    
  $(window).on('activate.bs.scrollspy', function (data) {
  	var active = $('.section-header .active').attr('href');
  	$('.section').removeClass('active');
  	$(active).addClass('active');
  })

  if($(".home-carousel").length > 0) {
   
      var dot = '<svg width="32" height="32" class="svg-dot" data-percent="100"><circle class="svg-dot--circle" cx="16" cy="16" r="13"></circle><circle class="svg-dot--animation" cx="16" cy="16" r="13"></circle></svg>';
   
      $(".home-carousel--item").attr("data-dot", dot);

      $(".home-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        dotsData: true,
        loop: true
      });
      
      dotsPosition();
      $(".home-carousel").on('changed.owl.carousel', function(event) {
        dotsPosition();
      })

      function dotsPosition(){
        let top;
        if($(window).width() <= 768){
          top = $('.home-carousel .active img.d-block').height() - 45;
          $('.home-carousel .owl-dots').css('top', top);
        }
      }
  }

  if($(".home-carousel-planos").length > 0) {
   
      $(".home-carousel-planos").owlCarousel({
        autoplay: false,
        loop: false,
        responsive : {
          0: {
            items: 1,
          },
          769: {
            items: 4
          }
        }
      });
      
      dotsPosition();
      $(".home-carousel").on('changed.owl.carousel', function(event) {
        dotsPosition();
      })

      function dotsPosition(){
        let top;
        if($(window).width() <= 768){
          top = $('.home-carousel .active img.d-block').height() - 45;
          $('.home-carousel .owl-dots').css('top', top);
        }
      }
  }

} //window on load
