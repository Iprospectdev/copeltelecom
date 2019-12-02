jQuery(document).ready(function($) {
    var navAberta = 'geral';

    // $('.bt-nav').on('click', function(){
    //     $('.nav-' + navAberta).slideUp();
    //     $('.bt-nav').removeClass('active');

    //     if($(this).attr('data-target') != navAberta){
    //         $(this).addClass('active');
    //         $('.nav-' + $(this).attr('data-target')).slideDown();
    //         navAberta = $(this).attr('data-target');
    //     } else {
    //         $('.nav-geral').slideDown();
    //         navAberta = 'geral';
    //     }

    //     if(navAberta != 'geral'){
    //         $('.btn-home').css({'display':'block'});
    //     } else {
    //         $('.btn-home').css({'display':'none'});
    //     }
    // });

    /* HASH */
    var aberto = '';
    var offset = 0;

    function hashFilter(){
      var str =  window.location.hash;
      var sbt = str.substring(1, str.length);
      if(sbt != '' && sbt != null && sbt != aberto){
        $('html, body').delay(500).animate({
                scrollTop: $('*[data-target="'+ sbt +'"]').offset().top + offset
        }, 1000);

        aberto = sbt;
      }      
    }

    $(window).on('hashchange',function(event){ 
        event.preventDefault();
        hashFilter();
    });

    hashFilter();

    $('.btn-subnav-mobile').on('click', function(){
        if(!$(this).hasClass('aberto')){
            $('.subnav-mobile').slideDown();
            $(this).find('i').removeClass('fa-caret-down').addClass('fa-caret-up');
            $(this).addClass('aberto');
        } else {
            $('.subnav-mobile').slideUp();
            $(this).find('i').removeClass('fa-caret-up').addClass('fa-caret-down');
            $(this).removeClass('aberto');
        }
    });
});
