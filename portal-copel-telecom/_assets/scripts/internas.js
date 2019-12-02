jQuery(document).ready(function($) {
    var accAberto = '';

    $('.accordion .bt a').on('click', function(event){
        event.preventDefault();
        if(accAberto != ''){
            if(accAberto != $(this).attr('data-target')){
                $('#' + accAberto).find('form').slideUp();
                $('#' + accAberto).removeClass('active');
                
                accAberto = $(this).attr('data-target');
                $('#' + accAberto).addClass('active');
                $('#' + accAberto).find('form').slideDown();
            }
        }else{
            accAberto = $(this).attr('data-target');
            $('#' + accAberto).addClass('active');
            $('#' + accAberto).find('form').slideDown();
        }
    });

    var docAberto = '';

    $('#as-documentos ul').css({'display':'none'});
    
    if(window.location.hash){
        console.log(docAberto)
        var href=window.location.hash;
        href = href.replace('#','');
        if(docAberto != ''){
            $('#as-documentos ul.'+docAberto).slideUp();
            $('#as-documentos nav a[href="#'+docAberto+'"]').removeClass('active');
        }
        docAberto = href;
        $('#as-documentos nav a[href="'+window.location.hash+'"]').addClass('active');
        $('#as-documentos ul.'+href).slideDown();
    } 

     $(window).on('hashchange',function(){ 
        console.log(docAberto)
        var href=window.location.hash;
        href = href.replace('#','');
        if(docAberto != ''){
            $('#as-documentos ul.'+docAberto).slideUp();
            $('#as-documentos nav a[href="#'+docAberto+'"]').removeClass('active');
        }
        docAberto = href;
        $('#as-documentos nav a[href="'+window.location.hash+'"]').addClass('active');
        $('#as-documentos ul.'+href).slideDown();
     }); 
});
