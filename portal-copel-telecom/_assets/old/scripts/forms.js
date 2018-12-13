jQuery(document).ready(function($) {

	jQuery("input.tipo_documento").on('change', function(event) {
		var tipo = jQuery(this).val();
		jQuery("input.documento").removeClass().addClass('documento mask-'+tipo);
	});

	$("#form-ligar").validate({
		submitHandler: function (form) {
			var captcha = grecaptcha.getResponse();
			if (captcha.length == 0) {
				jQuery(".captcha label").addClass('error');
			} else {
				jQuery.ajax({
					url: copel.template+'/_theme/ligar/front-save.php',
					type: 'POST',
					data: jQuery(form).serialize()
				})
				.always(function(data) {
					dataLayer.push({'event': 'Envio_Formularios', 'form': 'ligamos-para-voce'});
					jQuery(form).slideUp();
					jQuery("#response").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();
				});
			}
			return false;
		}
	});

	$('#form-contato').validate({
		submitHandler: function (form) {
			var captcha = grecaptcha.getResponse();
			if (captcha.length == 0) {
				jQuery(".captcha label").addClass('error');
			} else {
				jQuery.ajax({
					url: copel.template+'/_theme/contato/front-save.php',
					type: 'POST',
					data: jQuery(form).serialize()
				})
				.always(function(data) {
					dataLayer.push({'event': 'Envio_Formularios', 'form': 'contato'});
					jQuery(form).slideUp();
					jQuery("#response").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();
				});
				
			}
			return false;
		}
	});

	$('#form-solicitar-gravacao').validate({
		submitHandler: function (form) {
			var captcha = grecaptcha.getResponse(com_protocolo);
			if (captcha.length == 0) {
				jQuery("#form-solicitar-gravacao .captcha label").addClass('error');
			} else {
				jQuery.ajax({
					url: copel.template+'/_theme/gravacao/front-save.php',
					type: 'POST',
					data: jQuery(form).serialize()
				})
				.always(function(data) {
					dataLayer.push({'event': 'Envio_Formularios', 'form': 'gravacao-com-protocolo'});
					jQuery(".forms-gravacao").slideUp();
					jQuery("#response-form-solicitar-gravacao").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();
				});
				
			}
			return false;
		}
	});

	$('#form-solicitar-gravacao-sprotocolo').validate({
		submitHandler: function (form) {
			var captcha = grecaptcha.getResponse(sem_protocolo);
			if (captcha.length == 0) {
				jQuery("#form-solicitar-gravacao .captcha label").addClass('error');
			} else {
				jQuery.ajax({
					url: copel.template+'/_theme/gravacao/front-save.php',
					type: 'POST',
					data: jQuery(form).serialize()
				})
				.always(function(data) {
					dataLayer.push({'event': 'Envio_Formularios', 'form': 'gravacao-sem-protocolo'});
					jQuery(".forms-gravacao").slideUp();
					jQuery("#response-form-solicitar-gravacao").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();
				});
				
			}
			return false;
		}
	});

});