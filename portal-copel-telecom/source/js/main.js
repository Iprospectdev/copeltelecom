jQuery.validator.addMethod("cnpj", function(cnpj, element) {

	var numeros, digitos, soma, resultado, pos, tamanho,
		digitos_iguais = true;

	if (cnpj.length < 14 && cnpj.length > 15)
		return false;

	for (var i = 0; i < cnpj.length - 1; i++)
		if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
			digitos_iguais = false;
			break;
		}

	if (!digitos_iguais) {
		tamanho = cnpj.length - 2
		numeros = cnpj.substring(0,tamanho);
		digitos = cnpj.substring(tamanho);
		soma = 0;
		pos = tamanho - 7;

		for (i = tamanho; i >= 1; i--) {
			soma += numeros.charAt(tamanho - i) * pos--;
			if (pos < 2)
				pos = 9;
		}

		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

		if (resultado != digitos.charAt(0))
			return false;

		tamanho = tamanho + 1;
		numeros = cnpj.substring(0,tamanho);
		soma = 0;
		pos = tamanho - 7;

		for (i = tamanho; i >= 1; i--) {
			soma += numeros.charAt(tamanho - i) * pos--;
			if (pos < 2)
				pos = 9;
		}

		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

		if (resultado != digitos.charAt(1))
			return false;

		return true;
	}

	return false;
}, "Informe um CNPJ v&aacute;lido.");

jQuery(document).ready(function($) {

	var wow = new WOW(
	  {
	    boxClass:     'wow',
	    animateClass: 'animated',
	    offset:       0,
	    mobile:       true,
	    live:         true,
	    scrollContainer: null
	  }
	);
	wow.init();

    $('.bgjs').each(function(index, el) {
        $(this).css('background-image','url('+$(this).find('img:eq(0)').attr('src')+')');
    });

	$('.owl-vantagens').owlCarousel({items:1});

    $.slidebars({
        disableOver: 768,
        hideControlClasses: true
    });

    $('.video-gallery').lightGallery({
        selector: '.item-video',
        youtubePlayerParams: {
            autoplay: 1,
            modestbranding: 1,
            showinfo: 1,
            rel: 0,
            controls: 1
        }
    });

    // Home
    
		// slide home
	    var owlHome = $('.home-slideshow .owl-carousel');
	    owlHome.owlCarousel({
	    	items: 1,
	    	autoHeight: true,
	    	autoplay: true
	    });
		
		var link = $('.home-slideshow .owl-carousel').find('.active article').attr('data-saibamais');
		$('.slide-plano a.btn_contratar').attr('href', link);
		
		owlHome.on('change.owl.carousel', function(event) {
			$('.slide-plano a.btn_contratar').fadeOut();
		});

		owlHome.on('changed.owl.carousel', function(event) {
			setTimeout(function() {
				link = $('.home-slideshow .owl-carousel .active article').attr('data-saibamais');
				$('.slide-plano a.btn_contratar').attr('href', link).fadeIn();
			}, 100);
		});
		
		
		// end slide

	$('.blog-list-home .owl-carousel').owlCarousel({items:1,nav:true,dots:false,autoHeight:true});
	
	// Verificar Disponibilidade
	$('[data-toggle="tooltip"]').tooltip();
	
	$('.next-step').click(function() {
		var dataStep = $(this).attr('data-step');
		$('.nav-tabs a').each(function() {
			if($(this).attr('href')==dataStep){
				$(this).trigger('click');
			}
		});
		return false;
	});

	$('input[name=tipo-identidade]').change(function(){
		$('input[name=cpf-cnpj]').attr('class','mask-'+$('input[name=tipo-identidade]:checked').attr('value'));
	});

	// Perguntas Frequentes
	$('.autocomplete input').keyup(function(event){
		if ( $(this).val() ) {
			$(this).parents('.autocomplete').find('ul').slideDown();
			$(this).parents('.autocomplete').find('.autocomplete-close').show()
		}else{
			$(this).parents('.autocomplete').find('ul').slideUp();
			$(this).parents('.autocomplete').find('.autocomplete-close').hide();
		}
		return false;
	});
	$('.autocomplete ul li a').click(function(event) {
		$(this).parents('.autocomplete').find('input').val($(this).text());
		$(this).parents('.autocomplete').find('ul').slideUp();
		$(this).parents('.autocomplete').find('.autocomplete-close').hide();
		return false;
	});
	$('.autocomplete-close').click(function(event) {
		$(this).parents('.autocomplete').find('ul').slideUp();
		$(this).hide();
		return false;
	});

	var $faq = $( "#faq-autocomplete" ).autocomplete({
		source: function( request, response ) {
			$.ajax({
				url: copel.template+"/_theme/search-faq.php",
				data: {
					q: request.term
				},
				success: function( data ) {
					console.log(jQuery.parseJSON(data));
					response(jQuery.parseJSON(data));
				}
			});
		},
		appendTo: '.faq-form-search label.autocomplete'
	});

	$("#faq-autocomplete").on('keydown',function(event){
	    if (event.which == '13') {
	      	event.preventDefault();
	    }
	 });
	
	if($faq.length != 0){
		$faq.data("uiAutocomplete")._renderItem = function( ul, item ) {
			return $( "<li>" )
				.append( "<a href='" + item.url + "'>" + item.title + "</a>" )
				.appendTo( ul );
		};
	}
     



	// Formulários
    $(".dropdown-menu a").on('click', function(e){
        e.preventDefault();
        $(this).parents('.dropdown').find('input[type=hidden], input[type=text]').val($(this).attr('data-value'));
        $(this).parents('.dropdown').find('button').val($(this).attr('data-text'));
        $(this).parents('.dropdown').find('input').removeClass('error');
        if($(this).attr('data-value')){
        	 $(this).parents('.dropdown').find('input').addClass('active');
        }
    }); 

	$('input,textarea').change(function(){
		if($(this).val()!=""){
			$(this).addClass('active');
		}else{
			$(this).removeClass('active');
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
    $('.mask-cpf').mask('999.999.999-99');
    $('.mask-cnpj').mask('99.999.999/9999-99');
    $('.mask-cep').mask('99999-999');
    $('.mask-data').mask('99/99/9999');
    $('.mask-hora').mask('99:99:99');


    // Atendimento e Suporte
    $('#as-documentos ul').hide();
	$('#as-documentos nav a').click(function() {
		var href = $(this).attr('href');
		href= href.replace('#','');
		$('#as-documentos nav a').removeClass('active');
		$('#as-documentos ul').slideUp();
		$(this).addClass('active');
		$('#as-documentos ul.'+href).slideDown();
	});

	// Scrollto
	$('a[href^="#"]').on('click', function(event) {
	    var target = $( $(this).attr('href') );
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top
	        }, 500);
	    }
	});

	// Blog
	$('.bgcolor').each(function() {
		$(this).css('background-color',$(this).attr('data-color'));
	});
	$('.blog .blog-list .owl-carousel').owlCarousel({
		items:1,
		nav:true,
		dots:true,
		autoHeight:true
	});

	// Vantagens
	var owl=$('.vantagens-carousel .owl-carousel');
	owl.owlCarousel({
		items:1,
		loop:false,
		onChanged: callbackVantagens
	});
	
	$('.vantagens-carousel .owl-nav a').click(function(event) {
		owl.trigger('to.owl.carousel', $(this).attr('data-to'));
		return false;
	});

	// Planos
	$(".bars-planos ol li").hover(function() {
		$(".bars-planos ol li").removeClass('active');
		$(this).addClass('active');
	});

	$(".btn-planos").on('click', function(event) {
		event.preventDefault();
		$('#modal-planos').modal('show');
	});

	// Atalho de Teclado
	$(document).bind('keyup', 'alt+i', function(){
		// location.href = copel.url;
		// console.log(location.href);
	});

	$(document).bind('keyup', 'alt+m', function(){
		// $('html, body').animate({
  //           scrollTop: 0
  //       }, 500);
	});

	// Acessibilidade
	$("a.contraste").on("click",function(e) {
	    $("body").toggleClass('contrast');
	    return false;
	});

	$("a.font-more").on("click", function(e) {
	    $("body").addClass('zoom-site');
	    return false;
	});

	$("a.font-default").on("click", function(e) {
	    $("body").removeClass('zoom-site');
	    return false;
	});

	$(".open-modal-cidades").on("click", function(e) {
		$('#modal-cidades').modal('show');
	});

	$('.nav-contatos-open').on('click', function(event) {
		$(this).parent().toggleClass('active');
		$(this).parent().removeClass('disabled');
		return false;
	});
	$('.nav-contatos-close').on('click', function(event) {
		if(!$(this).parent().parent().hasClass('active')){
			$(this).parent().parent().toggleClass('disabled');	
		}
		return false;
	});

});

var getUrlParameter = function getUrlParameter(sParam){
	var sPageUrl = decodeURIComponent(window.location.search.substring(1)),
		sURLVariables = sPageUrl.split('&'),
		sParameterName,
		i;
	for (i=0; i<sURLVariables.length; i++){
		sParameterName = sURLVariables[i].split('=');
		if(sParameterName[0]===sParam){
			return sParameterName[1] === undefined ? true : sParameterName[1];
		}
	}
};

// Small Plugin to "ENTER" input
jQuery.fn.enterKey = function (fnc) {
    return this.each(function () {
        $(this).keypress(function (ev) {
            var keycode = (ev.keyCode ? ev.keyCode : ev.which);
            if (keycode == '13') {
                fnc.call(this, ev);
            }
        })
    })
}

function callbackVantagens(event) {
	var item = event.item.index;
	if(item==null){
		item=0;
	}
	$('.vantagens-carousel .owl-nav a').removeClass('active');
	$('.vantagens-carousel .owl-nav a[data-to='+item+']').addClass('active');
}