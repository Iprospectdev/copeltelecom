function isCnpj(cnpj) {
	var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
	if (cnpj.length == 0) {
		return false;
	}
	
	cnpj = cnpj.replace(/\D+/g, '');
	digitos_iguais = 1;

	for (i = 0; i < cnpj.length - 1; i++)
		if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
			digitos_iguais = 0;
			break;
		}
	if (digitos_iguais)
		return false;
	
	tamanho = cnpj.length - 2;
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
	if (resultado != digitos.charAt(0)){
		return false;
	}
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
	
	return (resultado == digitos.charAt(1));
}

function isCnpjFormatted(cnpj) {
	var validCNPJ = /\d{2,3}.\d{3}.\d{3}\/\d{4}-\d{2}/;
	return cnpj.match(validCNPJ);
}


function isCpf(cpf){
    exp = /\.|-/g;
    cpf = cpf.toString().replace(exp, "");
    var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
    var soma1=0, soma2=0;
    var vlr =11;
    for(i=0;i<9;i++){
        soma1+=eval(cpf.charAt(i)*(vlr-1));
        soma2+=eval(cpf.charAt(i)*vlr);
        vlr--;
    }   
    soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
    soma2 = (((soma2+(2*soma1))*10)%11);
   
    if(cpf == "11111111111" || cpf == "22222222222" || cpf ==
			"33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf ==
			"66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf ==
			"99999999999" || cpf == "00000000000" ){
		var digitoGerado = null;
    }else{
        var digitoGerado = (soma1*10) + soma2;
    }

    if(digitoGerado != digitoDigitado){
       return false;
    }
    return true;
}
function isCpfFormatted(cpf) {
	var validCPF = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$/;
	return cpf.match(validCPF);
}

(function($) {
	$.validator.addMethod("cpf", function(value, element, type) {
		if (value == "")
			return true;
		
		if ((type == 'format' || type == 'both') && !isCpfFormatted(value))
			return false;
		else
			return ((type == 'valid' || type == 'both')) ? isCpf(value) : true;
		
	}, function(type,element) {
		return (type == 'format' || (type == 'both' && !isCpfFormatted($(element).val()))) ?
				'Formato do CPF não é válido' : 'Por favor digite um CPF válido';
	});
	$.validator.addMethod("cnpj", function(value, element, type) {
		if (value == "")
			return true;
		
		if ((type == 'format' || type == 'both') && !isCnpjFormatted(value))
			return false;
		else
			return ((type == 'valid' || type == 'both')) ? isCnpj(value) : true;
		
	}, function(type,element) {
		return (type == 'format' || (type == 'both' && !isCnpjFormatted($(element).val()))) ?
				'Formato do CNPJ não é válido' : 'Por favor digite um CNPJ válido';
	});
})(jQuery);


jQuery(document).ready(function($) {

	var $rav_field = 0;
	
	$('#form-dados-da-empresa').validate({
		rules: {
	        'cnpj': { 
	            required: true,
	            cnpj: 'both'
	        }               
    	},
    submitHandler: function (form) {
			$('li.dados-de-contato a[href="#dados-de-contato"]').tab('show');
			return false;
		}
	});	
	
	$('#form-dados-de-contato').validate({
		rules: {
	        'cnpj': { 
	            required: true,
	            cnpj: 'both'
	        }               
    	},
    submitHandler: function (form) {
			$('li.sua-instalacao a[href="#sua-instalacao"]').tab('show');
			return false;
		}
	});

	$('.form-rav').validate({
		submitHandler: function (form) {
			var $data_rav = $('#form-dados-da-empresa, #form-dados-de-contato, #form-sua-instalacao').serialize();
			jQuery.ajax({
				url: copel.template+'/_theme/rav/front-save.php',
				type: 'POST',
				data: $data_rav
			})
			.always(function(data) {

				var requiredShow = false;

				$('.required-popup').each(function(index, el) {
					
					if( !$(this).val() ){
						requiredShow = true;
					}

				});

				if(requiredShow){

					$('#required-modal').modal('show');
					$('.required-popup').removeClass('required-popup');

				}else{

					dataLayer.push({'event': 'Envio_Formularios', 'form': 'rav'});
					jQuery(".ccdc-wrapper").slideUp();
					jQuery("#response").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();

				}


			});
			
			return false;
		}
	});

	$('.form-ipdireto').validate({
		submitHandler: function (form) {
			var $data_rav = $('#form-dados-da-empresa, #form-dados-de-contato, #form-sua-instalacao').serialize();
			jQuery.ajax({
				url: copel.template+'/_theme/ipdireto/front-save.php',
				type: 'POST',
				data: $data_rav
			})
			.always(function(data) {
				
				var requiredShow = false;
				
				$('.required-popup').each(function(index, el) {
					
					if( !$(this).val() ){
						requiredShow = true;
					}

				});

				if(requiredShow){

					$('#required-modal').modal('show');
					$('.required-popup').removeClass('required-popup');

				}else{

					dataLayer.push({'event': 'Envio_Formularios', 'form': 'ipdireto'});
					jQuery(".ccdc-wrapper").slideUp();
					jQuery("#response").removeClass('hide').hide().addClass('alert-success').html(data).slideDown();

				}

			});
			
			return false;
		}
	});

	jQuery("button.add-field-rav").on('click', function(e) {
	    
	    var fields = '<fieldset> \
			<legend class="ccdc-legend">Endereço de instalação* <button class="btn btn-danger btn-xs remove-field"><i class="fa fa-remove"></i></button></legend> \
			<div class="row"><label class="col-sm-5 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][uc]" placeholder="Número da unidade consumidora" ></label></div> \
			<div class="row"><label class="col-sm-8 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][rua]" placeholder="Rua" required></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][complemento]" placeholder="Complemento (nº casa, apartamento, bloco, etc...)" ></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][bairro]" placeholder="Bairro" required></label></div> \
			<div class="row"><label class="col-sm-3 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][cep]" class="mask-cep" placeholder="CEP" required></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][local]" placeholder="Local de instalação do equipamento" required></label></div> \
			<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][coordenadas]" placeholder="Coordenadas geográficas (latitude e longitude)"  ><small>Caso não possua o Número da Unidade Consumidora</small></label></div> \
			<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][ip]" placeholder="Endereço IP" ></label></div> \
			<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][mascara]"placeholder="Máscara de rede" ></label></div> \
			<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][gateway]" placeholder="Gateway" ></label></div> \
		</fieldset> \
		<fieldset> \
			<legend class="ccdc-legend">Velocidade</legend> \
				<div class="row"> \
					<label class="col-sm-10"> \
						<div class="dropdown dropdown-select"> \
							<input type="text" name="outro_endereco['+ $rav_field +'][plano-text]" value="1 Mbps" readonly> \
							<input type="hidden" name="outro_endereco['+ $rav_field +'][plano]" value="1 Mbps"> \
							<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button> \
							<ul class="dropdown-menu"> \
								<li><a href="#" data-value="1 Mbps" data-text="1 Mbps">1 Mbps</a></li> \
								<li><a href="#" data-value="2 Mbps" data-text="2 Mbps">2 Mbps</a></li> \
								<li><a href="#" data-value="3 Mbps" data-text="3 Mbps">3 Mbps</a></li> \
								<li><a href="#" data-value="4 Mbps" data-text="4 Mbps">4 Mbps</a></li> \
								<li><a href="#" data-value="5 Mbps" data-text="5 Mbps">5 Mbps</a></li> \
								<li><a href="#" data-value="6 Mbps" data-text="6 Mbps">6 Mbps</a></li> \
								<li><a href="#" data-value="7 Mbps" data-text="7 Mbps">7 Mbps</a></li> \
								<li><a href="#" data-value="8 Mbps" data-text="8 Mbps">8 Mbps</a></li> \
								<li><a href="#" data-value="9 Mbps" data-text="9 Mbps">9 Mbps</a></li> \
								<li><a href="#" data-value="10 Mbps" data-text="10 Mbps">10 Mbps</a></li> \
								<li><a href="#" data-value="15 Mbps" data-text="15 Mbps">15 Mbps</a></li> \
								<li><a href="#" data-value="20 Mbps" data-text="20 Mbps">20 Mbps</a></li> \
								<li><a href="#" data-value="25 Mbps" data-text="25 Mbps">25 Mbps</a></li> \
								<li><a href="#" data-value="30 Mbps" data-text="30 Mbps">30 Mbps</a></li> \
								<li><a href="#" data-value="35 Mbps" data-text="35 Mbps">35 Mbps</a></li> \
								<li><a href="#" data-value="40 Mbps" data-text="40 Mbps">40 Mbps</a></li> \
								<li><a href="#" data-value="45 Mbps" data-text="45 Mbps">45 Mbps</a></li> \
								<li><a href="#" data-value="50 Mbps" data-text="50 Mbps">50 Mbps</a></li> \
								<li><a href="#" data-value="55 Mbps" data-text="55 Mbps">55 Mbps</a></li> \
								<li><a href="#" data-value="60 Mbps" data-text="60 Mbps">60 Mbps</a></li> \
								<li><a href="#" data-value="70 Mbps" data-text="70 Mbps">70 Mbps</a></li> \
								<li><a href="#" data-value="80 Mbps" data-text="80 Mbps">80 Mbps</a></li> \
								<li><a href="#" data-value="90 Mbps" data-text="90 Mbps">90 Mbps</a></li> \
								<li><a href="#" data-value="100 Mbps" data-text="100 Mbps">100 Mbps</a></li> \
								<li><a href="#" data-value="Maior que 100 Mbps" data-text="Maior que 100 Mbps">Maior que 100 Mbps</a></li> \
							</ul> \
						</div> \
					</label> \
				</div> \
			</fieldset>';

		$rav_field++;

		jQuery("#outro-endereco").append(fields);

		jQuery("button.remove-field").on('click', function(e) {
		    $(this).parents("fieldset").remove();
		});

		jQuery("#outro-endereco").on('click', '.dropdown-menu a', function(e){
		    e.preventDefault();
		    jQuery(this).parents('.dropdown').find('input[type=hidden], input[type=text]').val(jQuery(this).attr('data-value'));
		    jQuery(this).parents('.dropdown').find('button').val(jQuery(this).attr('data-text'));
		    jQuery(this).parents('.dropdown').find('input').removeClass('error');
		    if(jQuery(this).attr('data-value')){
		    	 jQuery(this).parents('.dropdown').find('input').addClass('active');
		    }
		}); 

	});

	jQuery("button.add-field-id").on('click', function(e) {
	    
	    var fields = '<fieldset> \
			<legend class="ccdc-legend">Endereço de instalação* <button class="btn btn-danger btn-xs remove-field"><i class="fa fa-remove"></i></button></legend> \
			<div class="row"><label class="col-sm-5 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][uc]" placeholder="Número da unidade consumidora"></label></div> \
			<div class="row"><label class="col-sm-8 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][rua]" placeholder="Rua" required></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][complemento]" placeholder="Complemento (nº casa, apartamento, bloco, etc...)"></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][bairro]" placeholder="Bairro" required></label></div> \
			<div class="row"><label class="col-sm-3 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][cep]" class="mask-cep" placeholder="CEP" required></label></div> \
			<div class="row"><label><input type="text" name="outro_endereco['+ $rav_field +'][local]" placeholder="Local de instalação do equipamento" required></label></div> \
			<div class="row"><label class="col-sm-6 col-xs-12"><input type="text" name="outro_endereco['+ $rav_field +'][coordenadas]" placeholder="Coordenadas geográficas (latitude e longitude)" ><small>Caso não possua o Número da Unidade Consumidora</small></label></div> \
		</fieldset> \
		<fieldset> \
			<legend class="ccdc-legend">Velocidade</legend> \
			<div class="row"> \
				<label class="col-sm-10"> \
					<div class="dropdown dropdown-select"> \
						<input type="text" name="outro_endereco['+ $rav_field +'][plano-text]" value="5 Mbps" readonly> \
						<input type="hidden" name="outro_endereco['+ $rav_field +'][plano]" value="5 Mbps"> \
						<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button> \
						<ul class="dropdown-menu"> \
							<li><a href="#" data-value="5 Mbps" data-text="5 Mbps">5 Mbps</a></li> \
							<li><a href="#" data-value="8 Mbps" data-text="8 Mbps">8 Mbps</a></li> \
							<li><a href="#" data-value="10 Mbps" data-text="10 Mbps">10 Mbps</a></li> \
							<li><a href="#" data-value="12 Mbps" data-text="12 Mbps">12 Mbps</a></li> \
							<li><a href="#" data-value="15 Mbps" data-text="15 Mbps">15 Mbps</a></li> \
							<li><a href="#" data-value="20 Mbps" data-text="20 Mbps">20 Mbps</a></li> \
							<li><a href="#" data-value="25 Mbps" data-text="25 Mbps">25 Mbps</a></li> \
							<li><a href="#" data-value="30 Mbps" data-text="30 Mbps">30 Mbps</a></li> \
							<li><a href="#" data-value="35 Mbps" data-text="35 Mbps">35 Mbps</a></li> \
							<li><a href="#" data-value="40 Mbps" data-text="40 Mbps">40 Mbps</a></li> \
							<li><a href="#" data-value="45 Mbps" data-text="45 Mbps">45 Mbps</a></li> \
							<li><a href="#" data-value="50 Mbps" data-text="50 Mbps">50 Mbps</a></li> \
							<li><a href="#" data-value="60 Mbps" data-text="60 Mbps">60 Mbps</a></li> \
							<li><a href="#" data-value="70 Mbps" data-text="70 Mbps">70 Mbps</a></li> \
							<li><a href="#" data-value="80 Mbps" data-text="80 Mbps">80 Mbps</a></li> \
							<li><a href="#" data-value="90 Mbps" data-text="90 Mbps">90 Mbps</a></li> \
							<li><a href="#" data-value="100 Mbps" data-text="100 Mbps">100 Mbps</a></li> \
							<li><a href="#" data-value="Maior que 100 Mbps" data-text="Maior que 100 Mbps">Maior que 100 Mbps</a></li> \
						</ul> \
					</div> \
				</label> \
			</div> \
		</fieldset>';

		$rav_field++;

		jQuery("#outro-endereco").append(fields);

		jQuery("button.remove-field").on('click', function(e) {
		    $(this).parents("fieldset").remove();
		});

		jQuery("#outro-endereco").on('click', '.dropdown-menu a', function(e){
		    e.preventDefault();
		    jQuery(this).parents('.dropdown').find('input[type=hidden], input[type=text]').val(jQuery(this).attr('data-value'));
		    jQuery(this).parents('.dropdown').find('button').val(jQuery(this).attr('data-text'));
		    jQuery(this).parents('.dropdown').find('input').removeClass('error');
		    if(jQuery(this).attr('data-value')){
		    	 jQuery(this).parents('.dropdown').find('input').addClass('active');
		    }
		}); 

	});

});