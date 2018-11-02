const css = require('../styles/app.scss');

import 'bootstrap';
import 'popper.js';
import 'owl.carousel';

window.onload = function() {

  const sizeToFixed = $('.header-top').height() + $('.header-fixed').height() + $('.home-slider').height();
  console.log(sizeToFixed);
  $(window).on('scroll', function () {
    if( $(window).scrollTop() > sizeToFixed) {
      $('.header-fixed').addClass('active');
    } else {
      $('.header-fixed').removeClass('active');
    }
  });

  $('.toggle-menu').on('click', function(){
      $(this).toggleClass('active')
      $('.section-header').toggleClass('active')
  })

  $('.js-scrollto').on('click', function(e){
    var hash = $(this).attr('href')
    var offset = $('.section-header').height() + $('#wpadminbar').height()
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

  var owl = $('.owl-carousel-cases')
  owl.owlCarousel({
      items:1,
      URLhashListener:true,
      loop: true,
      responsive: {
        0 : {
          nav:false,
          dots:true,
          autoHeight: true,
        },
        768 : {
          nav:true,
          dots:false,
          autoHeight: true,
        }
      }
  })

} //window on load
