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


/*url: 'http://clientes.webcuringa.com.br/iProspect/copeltelecom/wp-content/themes/portal-copel-telecom/_theme/empresas/produto-save.php',*/
    $('#form-empresas-contato').on('submit', function(e) {

      var $form = $(this);
      var formData = new FormData(this); 
      e.preventDefault();

        var nome = $('#nome').val();
        var email = $('#email').val();
        var telefone = $('#telefone').val();
        var mensagem = $('#mensagem').val();

        if(nome == ''){
            $('#nome').parent().addClass('error');
        }else if(email == ''){
            $('#email').parent().addClass('error');
        }else if(telefone == ''){
            $('#telefone').parent().addClass('error');
        }else if(mensagem == ''){
            $('#mensagem').parent().addClass('error');
        }else{
            $.ajax({
              url: copel.url + '/wp-content/themes/portal-copel-telecom/_theme/empresas/produto-save.php',
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              dataType: 'json',
              success: function(response){
                console.log(response);
                if (typeof response == 'string') {
                  response = JSON.parse(response);
                }
                if (response.status == "success") {
                   window.location.href = copel.url + '/sucesso/'
                } else {
                  $(this).addClass('error');
                } 
              }
            });
        }


    });

} //window on load


$('#form-ligamos-pravc').on('submit', function(e) {

      var $form = $(this);
      var formData = new FormData(this); 
      e.preventDefault();

        var nome = $('#nome').val();
        var email = $('#email').val();
        var telefone = $('#telefone').val();

        if(nome == ''){
            $('#nome').parent().addClass('error');
        }else if(email == ''){
            $('#email').parent().addClass('error');
        }else if(telefone == ''){
            $('#telefone').parent().addClass('error');
        }else{
            $.ajax({
              url: copel.url + '/wp-content/themes/portal-copel-telecom/_theme/ligamos/ligamos-save.php',
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              dataType: 'json',
              success: function(response){
                console.log(response);
                if (typeof response == 'string') {
                  response = JSON.parse(response);
                }
                if (response.status == "success") {
                   window.location.href = copel.url + '/sucesso/'
                } else {
                  $(this).addClass('error');
                } 
              }
            });
        }


    });