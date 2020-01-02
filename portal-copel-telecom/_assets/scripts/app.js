const css = require('../styles/app.scss');


import 'bootstrap';
import 'popper.js';
import 'jquery-mask-plugin';
import 'owl.carousel';
import './home.js';
import './header.js';
import './slider.js';
import './planos.js';
import './acessibilidade.js';
import './internas.js';
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
                   window.location.href = copel.url + '/sucesso-contato/'
                } else {
                  $(this).addClass('error');
                } 
              }
            });
        }


    });

    //Solicitacao de gravacao sem protocolo
    $('#form-solicitar-gravacao-sprotocolo').on('submit', function(e) {

      var $form = $(this);
      var formData = new FormData(this); 
      e.preventDefault();

        var nome_atendente = $('#nome_atendente').val();
        var data_ligacao = $('#data_ligacao').val();
        var hora_ligacao = $('#hora_ligacao').val();
        var numero_ligacao = $('#numero_ligacao').val();
        var numero_contrato = $('#numero_contrato').val();
        var nome_solicitante = $('#nome_solicitante').val();
        var email_solicitante = $('#email_solicitante').val();
        var telefone = $('#telefone_solicitante').val();

        if(nome_atendente == ''){
            $('#nome_atendente').parent().addClass('error');
        }else if(data_ligacao == ''){
           $('#data_ligacao').parent().addClass('error');
        }else if(hora_ligacao == ''){
           $('#hora_ligacao').parent().addClass('error');
        }else if(numero_ligacao == ''){
           $('#numero_ligacao').parent().addClass('error');
        }else if(numero_contrato == ''){
           $('#numero_contrato').parent().addClass('error');
        }else if(nome_solicitante == ''){
           $('#nome_solicitante').parent().addClass('error');
        }else if(telefone == ''){
            $('#telefone_solicitante').parent().addClass('error');
        }else if(email_solicitante == ''){
            $('#email_solicitante').parent().addClass('error');
        }else{
            $.ajax({
              url: copel.url + '/wp-content/themes/portal-copel-telecom/_theme/gravacao/front-save.php',
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
                   window.location.href = copel.url + '/sucesso-contato/'
                } else {
                  $(this).addClass('error');
                } 
              }
            });
        }

      });

      //Solicitacao de gravacao com protocolo
      $('#form-solicitar-gravacao').on('submit', function(e) {

        var $form = $(this);
        var formData = new FormData(this); 
        e.preventDefault();

        var protocolo_num = $('#protocolo_num').val();
        var nome_solicitante = $('#nome').val();
        var email_solicitante = $('#email').val();
        var telefone_solicitante = $('#telefone').val();

        if(protocolo_num == ''){
           $('#protocolo_num').parent().addClass('error');
        }else if(nome_solicitante == ''){
            $('#nome').parent().addClass('error');
        }else if(telefone_solicitante == ''){
            $('#telefone').parent().addClass('error');
        }else if(email_solicitante == ''){
            $('#email').parent().addClass('error');
        }else{
            $.ajax({
              url: copel.url + '/wp-content/themes/portal-copel-telecom/_theme/gravacao/front-save.php',
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
                   window.location.href = copel.url + '/sucesso-contato/'
                } else {
                  $(this).addClass('error');
                } 
              }
            });
        }

      });

      var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }   
    };
    $('.mask-tel').mask(SPMaskBehavior, spOptions);
    $('.mask-data').mask('00/00/0000');
    $('.mask-hora').mask('00:00');

      $('#form-ligamos-pravc').on('submit', function(e) {
            var $form = $(this);
            var formData = new FormData(this); 
            e.preventDefault();

              var nome = $('#inpt-nome').val();
              var email = $('#inpt-email').val();
              var telefone = $('#inpt-telefone').val();

              if(nome == ''){
                  $('#inpt-nome').parent().addClass('error');
              }else if(email == ''){
                  $('#inpt-email').parent().addClass('error');
              }else if(telefone == ''){
                  $('#inpt-telefone').parent().addClass('error');
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
                         window.location.href = copel.url + '/sucesso-contato/'
                      } else {
                        $(this).addClass('error');
                      } 
                    }
                  });
              }


          }); 
      
} //window on load