jQuery(document).ready(function($) {
    var navAberta = 'geral';

    $('.bt-nav').on('click', function(){
        $('.nav-' + navAberta).slideUp();
        $('.bt-nav').removeClass('active');

        if($(this).attr('data-target') != navAberta){
            $(this).addClass('active');
            $('.nav-' + $(this).attr('data-target')).slideDown();
            navAberta = $(this).attr('data-target');
        } else {
            $('.nav-geral').slideDown();
            navAberta = 'geral';
        }

        if(navAberta != 'geral'){
            $('.btn-home').css({'display':'block'});
        } else {
            $('.btn-home').css({'display':'none'});
        }
    });

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
