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
