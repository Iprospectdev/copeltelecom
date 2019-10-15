const css = require('../styles/app.scss');


import 'bootstrap';
import 'popper.js';
import 'owl.carousel';
import './home.js';
import './header.js';
import './slider.js';
import './planos.js';
import './acessibilidade.js';
import './wvt.js';
import flatpickr from "flatpickr";


window.onload = function() {

    $('[data-toggle="tooltip"]').tooltip({
        boundary: 'window'
    });

    flatpickr(".flatpickr", {
        dateFormat: "d-m-Y",
    });

    $('.header-mobile-button').on('click', function(){
        $(this).toggleClass('active')
        $('.header-mobile-nav, body').toggleClass('menu-opened')
    })

    $('.js-scrollto').on('click', function(e){
        var hash = $(this).attr('href')
        var offset = $('.header-nav.fixed').height() ? $('.header-nav.fixed').height() : 0
        $('html,body').animate({
          scrollTop: $(hash).offset().top - offset
        }, 400);
        return false;
    })

    $('.js-scrolltop').on('click', function(e){
        $('html,body').animate({
          scrollTop: 0
        }, 800);
        return false;
    })

} //window on load
