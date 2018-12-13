jQuery.extend(jQuery.validator.messages, {
	required: "Este campo &eacute; obrigatório.",
	remote: "Por favor, corrija este campo.",
	email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
	url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
	date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
	dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
	dateDE: "Bitte geben Sie ein gültiges Datum ein.",
	number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lida.",
	numberDE: "Bitte geben Sie eine Nummer ein.",
	digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
	creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
	accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
	maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
	minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
	rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
	range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
	max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
	min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
});


jQuery(document).ready(function($) {

	$('.copiar-contato').click(function() {
		$(this).parents('fieldset').find('input.nome').val($('#nome').val());
		$(this).parents('fieldset').find('input.telefone').val($('#telefone').val());
		$(this).parents('fieldset').find('input.celular').val($('#celular').val());
		$(this).parents('fieldset').find('input.email').val($('#email').val());
		return false;
	});

	$('.copiar-endereco').click(function() {
		$(this).parents('fieldset').find('input.cep').val($('#cep').val());
		$(this).parents('fieldset').find('input.numero').val($('#numero').text());
		$(this).parents('fieldset').find('input.bairro').val($('#bairro').text());
		$(this).parents('fieldset').find('input.municipio').val($('#municipio').text());
		return false;
	});

	$('.select-tipo-imovel a').on('click', function() {
		$($(this).attr('data-open')).removeClass('hide');
		$($(this).attr('data-close')).addClass('hide');
		console.log($(this).attr('data-open'))
	});
	
	$('#form-infos-pessoais').validate();	

	$('#form-dados-de-cadastro').validate();

	$('#form-resumo-da-compra').validate();

	$("#verificar-disponibilidade").validate();

	if(getUrlParameter('step')){
		var step = getUrlParameter('step');
		$('.nav-tabs li.active').removeClass('active');
		$('.tab-pane.active').removeClass('active');

		$('.'+step).addClass('active');
		$('#'+step).addClass('active');

		if(getUrlParameter('step')=='finalizado'){
			$('.ccdc-wrapper nav').hide();
			$('.ccdc-wrapper article').removeClass('col-sm-9');
		}
	}

	jQuery(".radio-show label").on('click', function(e) {
	    if ($(this).find("input").attr("autocomplete") == "on") {
	    	$(this).parents("fieldset").find('.endereco').removeClass('hide');
	    } else {
	    	$(this).parents("fieldset").find('.endereco').addClass('hide');
	    }
	});
	
});