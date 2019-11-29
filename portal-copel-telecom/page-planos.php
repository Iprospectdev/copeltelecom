<?php
	get_header();
	session_start();

	$services = new Services;
	// unset($_SESSION);

	$session = json_decode($_SESSION["copeltelecom"]);
	// echo $session->cidade;
	if($session) {
		$planos = json_decode($services->planos("F",$session->cidade));	
	}

	$sizes = array();
	if (isset($planos->bel)) {
		for ($i=1; $i <= count($planos->bel); $i++) { 
			$percent = ($i*(100/count($planos->bel)));
			$sizes[] = intval((250*$percent)/100);
		}
	}

	$sercontel = array(
		"APUCARANA",
		"ARAUCARIA",
		"CAMPO LARGO",
		"CAMPO MOURAO",
		"PATO BRANCO",
		"PINHAIS",
		"QUATRO BARRAS",
		"TOLEDO",
		"CASTRO",
		"CORNELIO PROCOPIO",
		"CURITIBA",
		"DOUTOR CAMARGO",
		"FLORESTA",
		"FOZ DO IGUACU",
		"IRATI",
		"ITAMBE",
		"LAPA",
		"MARECHAL CANDIDO RONDON",
		"MARINGA",
		"ORTIGUEIRA",
		"PARANAGUA",
		"PIRAQUARA",
		"PONTA GROSSA",
		"TELEMACO BORBA",
		"UNIAO DA VITORIA"
	);

	// echo $session->cidade;

?>
	<section class="page-planos">
		<header class="planos-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="#"><i class="fas fa-home"></i>Home</a>
					<a href="#">Planos e preços</a>
				</div>
				<h2>Planos de internet banda larga Copel Fibra</h2>
				<p>
				Escolha o plano que melhor se adapta ao que você precisa. Com a fibra óptica da Copel Telecom, a qualidade e a velocidade se mantêm do servidor até o modem da sua casa.</p>
			</div>
		</header>
		<?php if (!isset($session->cidade)): ?>
			<article class="planos-list">
				<div class="container">
	                <div class="planos-geolocation">
	                    <div class="row">
	                        <div class="col-12 col-md-6 planos-geolocation--legend">

								<svg width="90px" height="115px" viewBox="0 0 90 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="01_home_banner1_informar-endereco" transform="translate(-154.000000, -743.000000)">
								<g id="Group-21" transform="translate(98.000000, 606.000000)">
								<g id="Group-9">
								<g id="Group-30" transform="translate(58.000000, 139.000000)">
								<g id="Group-39">
								    <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43.5" cy="43.5" r="33.5"></circle>
								    <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43" cy="43" r="43"></circle>
								    <ellipse id="Oval-3" fill="#464D5C" opacity="0.300000012" cx="43" cy="104" rx="25" ry="9"></ellipse>
								    <g id="placeholder" transform="translate(23.000000, 24.000000)" fill="#464D5C">
								        <path d="M34.3184444,28.5910664 L20.2524444,52.1222695 L5.81855556,28.8168398 C4.19266667,26.1859336 3.31111111,23.1506836 3.31111111,20.0390625 C3.31111111,10.8311133 10.81,3.31757812 20,3.31757812 C29.19,3.31757812 36.6777778,10.8311133 36.6777778,20.0390625 C36.6777778,23.0583926 35.8543333,26.0160469 34.3184444,28.5910664 Z M20,0 C8.972,0 0,8.98952344 0,20.0390625 C0,23.7723398 1.03211111,27.4156641 2.98544444,30.5764922 L18.8615556,56.2105723 C19.1656667,56.7016406 19.7014444,57 20.2776667,57 C20.2821111,57 20.2864444,57 20.2908889,57 C20.8721111,56.9954355 21.409,56.6878359 21.7075556,56.1881953 L37.179,30.3057422 C39.0245556,27.2117109 40,23.6615684 40,20.0390625 C40,8.98952344 31.028,0 20,0 Z" id="Fill-1"></path>
								        <path d="M20,26.6888889 C16.3047778,26.6888889 13.3111111,23.6852222 13.3111111,20 C13.3111111,16.324 16.324,13.3111111 20,13.3111111 C23.676,13.3111111 26.6777778,16.324 26.6777778,20 C26.6777778,23.6314444 23.7537778,26.6888889 20,26.6888889 Z M20,10 C14.486,10 10,14.486 10,20 C10,25.4787778 14.413,30 20,30 C25.6558889,30 30,25.4185556 30,20 C30,14.486 25.514,10 20,10 Z" id="Fill-2"></path>
								    </g>
								</g>
								</g>
								</g>
								</g>
								</g>
								</g>
								</svg>
								<h6>Planos Copel Fibra</h6>
								<p>Informe sua cidade para podermos mostrar os planos disponíveis na sua região.</p>
	                        </div>
	                        <div class="col-12 col-md-4 offset-md-1 planos-geolocation--form">
	                        	<form action="">
		                            <div class="input-group">
		                                <input type="text" class="form-control js-autocomplete-cidade" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba">
		                                <div class="input-group-append">
		                                    <button class="btn btn-outline-secondary" type="submit">
		                                        <i class="fas fa-arrow-right"></i>
		                                    </button>
		                                </div>
		                            </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
		        </div>
	    	</article>
		<?php elseif (isset($planos->bel)): ?>
			<article class="planos-list">
				<svg class="planos-list--icon" width="245px" height="81px" viewBox="0 0 245 81" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <g id="01_Planos-e-precos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g id="01_planos-e-precos_nao-disponivel" transform="translate(-561.000000, -363.000000)">
				            <g id="Group-21" transform="translate(561.000000, 365.000000)">
				                <circle id="Oval-6" stroke="#F2F5F6" stroke-width="3" fill="#FFFFFF" cx="122.5" cy="38.5" r="38.5"></circle>
				                <g id="Group-18" transform="translate(105.000000, 22.000000)" stroke="#464D5C" stroke-width="2">
				                    <path d="M24.2824386,10.7709311 C23.394957,9.87883483 23.394957,8.43327468 24.2824386,7.53996463 C25.1699202,6.64908206 26.6080026,6.64908206 27.4954842,7.53996463 C28.3829658,8.43327468 28.3829658,9.87883483 27.4954842,10.7709311 C26.6080026,11.6630275 25.1699202,11.6630275 24.2824386,10.7709311 Z M19.1048588,15.9754332 C18.2185847,15.0833368 18.2185847,13.636563 19.1048588,12.7444667 C19.9923404,11.8523703 21.4316303,11.8523703 22.3191119,12.7444667 C23.2053861,13.636563 23.2053861,15.0833368 22.3191119,15.9754332 C21.4316303,16.8663157 19.9923404,16.8663157 19.1048588,15.9754332 Z M21.3579754,20.9881648 C23.1124118,19.8484663 24.9380883,18.3652803 26.6925247,16.6029349 C30.1772484,13.0988777 32.2625283,9.76838481 33.5327741,6.35657157 C34.3284889,4.21918163 35.5757929,1.17513054 34.7015934,0.297599068 C33.8370535,-0.572649987 30.7471685,0.666574957 28.6486066,1.44579378 C25.2447826,2.70929345 21.987061,4.8236224 18.4806031,8.34831313 C16.8046514,10.0329794 15.3822659,11.7856148 14.2701971,13.4763498 L6.78758011,14.7180022 L0.0716989095,21.4688045 C-0.0828557101,21.6241627 0.0294378807,21.8887573 0.246780315,21.8839023 L8.39349921,21.7176204 L8.75090677,22.0756727 L7.85859533,22.9738377 L11.9639524,27.1005417 L12.8574713,26.2035905 L13.2136714,26.5628565 L13.0482497,34.7519365 C13.0434198,34.970409 13.3066457,35.0832865 13.4612003,34.9279283 L20.1770815,28.177126 L21.3579754,20.9881648 Z" id="Stroke-1"></path>
				                    <path d="M7.205476,26.794524 C7.205476,26.794524 6.11792302,25.706971 5.410952,25 C1.87979187,28.5323918 2.00049424,31.9995058 2.00049424,31.9995058 C2.00049424,31.9995058 5.46760821,32.1202081 9,28.589048 L7.205476,26.794524 Z" id="Stroke-3"></path>
				                </g>
				                <g id="Group-19" transform="translate(169.000000, 23.000000)" fill="#FF9602">
				                    <circle id="Oval-4" opacity="0.300000012" cx="31" cy="11" r="5"></circle>
				                    <circle id="Oval-4" opacity="0.400000006" cx="8" cy="8" r="8"></circle>
				                    <circle id="Oval-4" opacity="0.200000003" cx="51" cy="11" r="5"></circle>
				                    <circle id="Oval-4" opacity="0.100000001" cx="71" cy="11" r="5"></circle>
				                </g>
				                <g id="Group-19" transform="translate(38.000000, 31.000000) scale(-1, 1) translate(-38.000000, -31.000000) translate(0.000000, 23.000000)" fill="#FF9602">
				                    <circle id="Oval-4" opacity="0.300000012" cx="31" cy="11" r="5"></circle>
				                    <circle id="Oval-4" opacity="0.400000006" cx="8" cy="8" r="8"></circle>
				                    <circle id="Oval-4" opacity="0.200000003" cx="51" cy="11" r="5"></circle>
				                    <circle id="Oval-4" opacity="0.100000001" cx="71" cy="11" r="5"></circle>
				                </g>
				            </g>
				        </g>
				    </g>
				</svg>
				<div class="container">
					<ul>
						<?php foreach ($planos->bel as $plan): ?>
							<?php
								$velocidade = $services->profile_velocidade($plan->nomeProduto);
								$velocidade = str_replace('a', '', $velocidade);
								$velocidade = str_replace('A', '', $velocidade);
								$upload = $plan->upload;
								$download = $plan->download;
							?>
							<li class="planos-item">
								<div class="planos-item--vel">
									<h6>
										<svg width="137px" height="139px" viewBox="0 0 137 139" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										    <defs>
										        <filter x="-3.9%" y="-4.3%" width="107.9%" height="108.9%" filterUnits="objectBoundingBox" id="filter-1">
										            <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
										            <feGaussianBlur stdDeviation="15" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
										            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.15 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
										            <feMerge>
										                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
										                <feMergeNode in="SourceGraphic"></feMergeNode>
										            </feMerge>
										        </filter>
										    </defs>
										    <g id="01_Planos-e-precos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <g id="01_planos-e-precos_nao-disponivel" transform="translate(-92.000000, -737.000000)">
										            <g id="Group-7-Copy" filter="url(#filter-1)" transform="translate(98.000000, 739.000000)">
										                <g id="Group-4-Copy-4">
										                    <g id="Group-8-Copy" transform="translate(24.000000, 27.000000)">
										                        <g id="Group-13">
										                            <circle id="Oval-6" stroke="#FFA600" stroke-width="3" cx="38.5" cy="38.5" r="38.5"></circle>
										                            <g id="Page-1" transform="translate(36.316987, 42.683013) rotate(-330.000000) translate(-36.316987, -42.683013) translate(23.816987, 18.683013)">
										                                <path d="M0,30 L24,30" id="Stroke-1" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <path d="M4,30 L4,17" id="Stroke-3" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <path d="M8,30 L8,24" id="Stroke-4" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <path d="M12,30 L12,5" id="Stroke-5" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <path d="M16,30 L16,10" id="Stroke-6" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <path d="M21,30 L21,17" id="Stroke-7" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										                                <g id="Group-20" transform="translate(0.000000, -0.000000)">
										                                    <path d="M8.14390549,19.5558761 C6.76797699,19.5558761 5.65147177,20.6599776 5.65147177,22.0219557 C5.65147177,23.3850174 6.76797699,24.4891189 8.14390549,24.4891189 C9.51983398,24.4891189 10.6352446,23.3850174 10.6352446,22.0219557 C10.6352446,20.6599776 9.51983398,19.5558761 8.14390549,19.5558761 M8.25210919,21.5501322 C8.46854732,21.5501322 8.64511527,21.7249099 8.64511527,21.9391536 C8.64511527,22.1548068 8.46854732,22.3295846 8.25210919,22.3295846 C8.03424712,22.3295846 7.85767917,22.1548068 7.85767917,21.9391536 C7.85767917,21.7249099 8.03424712,21.5501322 8.25210919,21.5501322" id="Fill-8" fill="#464D5C"></path>
										                                    <path d="M3.6109547,13.1946148 C2.23472393,13.1946148 1.11906829,14.2987164 1.11906829,15.6606945 C1.11906829,17.0237561 2.23472393,18.1278577 3.6109547,18.1278577 C4.98718546,18.1278577 6.10284111,17.0237561 6.10284111,15.6606945 C6.10284111,14.2987164 4.98718546,13.1946148 3.6109547,13.1946148 M3.71828177,15.1888709 C3.93471991,15.1888709 4.11128786,15.3636487 4.11128786,15.5778924 C4.11128786,15.7935456 3.93471991,15.9683233 3.71828177,15.9683233 C3.50184364,15.9683233 3.32527569,15.7935456 3.32527569,15.5778924 C3.32527569,15.3636487 3.50184364,15.1888709 3.71828177,15.1888709" id="Fill-10" fill="#464D5C"></path>
										                                    <path d="M12.3827566,0.0438197599 C11.0065258,0.0438197599 9.89087018,1.14792134 9.89087018,2.50989944 C9.89087018,3.87296106 11.0065258,4.97706264 12.3827566,4.97706264 C13.7589874,4.97706264 14.874643,3.87296106 14.874643,2.50989944 C14.874643,1.14792134 13.7589874,0.0438197599 12.3827566,0.0438197599 M12.4900837,2.0380759 C12.7079457,2.0380759 12.8830898,2.21285365 12.8830898,2.42709734 C12.8830898,2.64275053 12.7079457,2.81752828 12.4900837,2.81752828 C12.2736455,2.81752828 12.0970776,2.64275053 12.0970776,2.42709734 C12.0970776,2.21285365 12.2736455,2.0380759 12.4900837,2.0380759" id="Fill-12" fill="#464D5C"></path>
										                                    <path d="M16.2985781,6.7574555 C14.9223473,6.7574555 13.8066917,7.8626406 13.8066917,9.2246187 C13.8066917,10.5865968 14.9223473,11.6906984 16.2985781,11.6906984 C17.6748089,11.6906984 18.7904645,10.5865968 18.7904645,9.2246187 C18.7904645,7.8626406 17.6748089,6.7574555 16.2985781,6.7574555 M16.4059052,8.75171165 C16.6223433,8.75171165 16.7989113,8.92648939 16.7989113,9.14214258 C16.7989113,9.35638627 16.6223433,9.53116402 16.4059052,9.53116402 C16.189467,9.53116402 16.0128991,9.35638627 16.0128991,9.14214258 C16.0128991,8.92648939 16.189467,8.75171165 16.4059052,8.75171165" id="Fill-14" fill="#464D5C"></path>
										                                    <path d="M21.0915798,12.1560117 C19.715349,12.1560117 18.5996934,13.2601133 18.5996934,14.6220914 C18.5996934,15.985153 19.715349,17.0892546 21.0915798,17.0892546 C22.4678105,17.0892546 23.5834662,15.985153 23.5834662,14.6220914 C23.5834662,13.2601133 22.4678105,12.1560117 21.0915798,12.1560117 M21.1989069,14.1502679 C21.415345,14.1502679 21.5919129,14.3250456 21.5919129,14.5392893 C21.5919129,14.7549425 21.415345,14.9297203 21.1989069,14.9297203 C20.9824687,14.9297203 20.8059008,14.7549425 20.8059008,14.5392893 C20.8059008,14.3250456 20.9824687,14.1502679 21.1989069,14.1502679" id="Fill-16" fill="#464D5C"></path>
										                                    <polyline id="Stroke-18" stroke="#464D5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="24.3125547 47.3993316 24.3125547 33.3043519 0.105658128 33.3043519 0.105658128 47.3993316"></polyline>
										                                </g>
										                            </g>
										                        </g>
										                    </g>
										                </g>
										            </g>
										        </g>
										    </g>
										</svg>
										Copel Fibra
										<strong><?php echo $velocidade; ?> Mega</strong>
										<a href="<?php echo ($plan->linkInfTecnica)? $plan->linkInfTecnica : ''; ?>" target="_blank">Veja o plano de serviço</a>
									</h6>
								</div>

								<div class="planos-item--updown">
									<span>
										<small><?php echo $upload; ?> de</small> Upload
									</span>
									<span>
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/lines.svg" alt="">
									</span>
									<span>
										<small><?php echo $velocidade; ?> Mega de</small> Download
									</span>
								</div>
								
								<div class="planos-item--price">
									<span>
										<small>R$</small>
										<?php echo $services->profile_price($plan->precoProduto); ?>
										<small>/mês*</small>
									</span>
									<a href="http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf" target="_blank" class="btn-assine js-disponibilidade-modall">Assine Já</a>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>		
				</div>
				<div class="container">
					<small class="planos-list--obs">
						*Valor de instalação de internet com plano de fidelidade de 12 meses: R$ 100,00. Valor de instalação de internet sem fidelidade: R$ 1.500,00. <a href="">Consulte aqui</a> as características técnicas dos planos de serviço.<br>
						<a href="">Contrato</a> e <a href="">termo de fidelidade</a> aplicável ao plano de serviço. Planos sujeitos a disponibilidade. Válidos para CURITIBA (<a href="#">alterar</a>). 

					</p>
					</small>
				</div>
			</article>
		<?php else: ?>
			<article class="planos-list">
				<div class="container">
	                <div class="planos-geolocation">
	                    <div class="row">
	                        <div class="col-12 col-md-6 planos-geolocation--legend">
								<svg width="90px" height="115px" viewBox="0 0 90 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    <g id="01_Planos-e-precos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <g id="01_planos-e-precos_nao-disponivel" transform="translate(-154.000000, -556.000000)">
								            <g id="Group-39" transform="translate(156.000000, 558.000000)">
								                <path d="M43.5,77 C62.0015391,77 77,62.0015391 77,43.5 C77,24.9984609 62.0015391,10 43.5,10 C24.9984609,10 10,24.9984609 10,43.5 C10,62.0015391 24.9984609,77 43.5,77 Z" id="Oval-4" stroke="#C7C9CE" stroke-width="3" stroke-linecap="round" stroke-dasharray="1,6"></path>
								                <path d="M43,86 C66.7482442,86 86,66.7482442 86,43 C86,19.2517558 66.7482442,0 43,0 C19.2517558,0 0,19.2517558 0,43 C0,66.7482442 19.2517558,86 43,86 Z" id="Oval-4" stroke="#C7C9CE" stroke-width="3" stroke-linecap="round" stroke-dasharray="1,6"></path>
								                <ellipse id="Oval-3" fill="#464D5C" opacity="0.300000012" cx="43" cy="104" rx="25" ry="9"></ellipse>
								                <g id="placeholder" transform="translate(23.000000, 24.000000)" fill="#464D5C">
								                    <path d="M34.3184444,28.5910664 L20.2524444,52.1222695 L5.81855556,28.8168398 C4.19266667,26.1859336 3.31111111,23.1506836 3.31111111,20.0390625 C3.31111111,10.8311133 10.81,3.31757812 20,3.31757812 C29.19,3.31757812 36.6777778,10.8311133 36.6777778,20.0390625 C36.6777778,23.0583926 35.8543333,26.0160469 34.3184444,28.5910664 Z M20,0 C8.972,0 0,8.98952344 0,20.0390625 C0,23.7723398 1.03211111,27.4156641 2.98544444,30.5764922 L18.8615556,56.2105723 C19.1656667,56.7016406 19.7014444,57 20.2776667,57 C20.2821111,57 20.2864444,57 20.2908889,57 C20.8721111,56.9954355 21.409,56.6878359 21.7075556,56.1881953 L37.179,30.3057422 C39.0245556,27.2117109 40,23.6615684 40,20.0390625 C40,8.98952344 31.028,0 20,0 Z" id="Fill-1"></path>
								                    <path d="M20,26.6888889 C16.3047778,26.6888889 13.3111111,23.6852222 13.3111111,20 C13.3111111,16.324 16.324,13.3111111 20,13.3111111 C23.676,13.3111111 26.6777778,16.324 26.6777778,20 C26.6777778,23.6314444 23.7537778,26.6888889 20,26.6888889 Z M20,10 C14.486,10 10,14.486 10,20 C10,25.4787778 14.413,30 20,30 C25.6558889,30 30,25.4185556 30,20 C30,14.486 25.514,10 20,10 Z" id="Fill-2"></path>
								                </g>
								            </g>
								        </g>
								    </g>
								</svg>
	                         	<p>
	                         		<strong>Obrigado pelo seu interesse, mas a Copel Fibra não está em <?php echo $session->cidade; echo ($session->estado) ? '/'.$session->estado : ''; ?>.</strong>
	                         		Infelizmente a nossa rede de fibra óptica ainda não está na sua região.
	                         	</p>
	                        </div>
	                        <div class="col-12 col-md-4 offset-md-1 planos-geolocation--form">
	                        	<form>
		                            <div class="input-group">
		                                <input type="text" class="form-control js-autocomplete-cidade" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba">
		                                <div class="input-group-append">
		                                    <button class="btn btn-outline-secondary" type="submit">
		                                        <i class="fas fa-arrow-right"></i>
		                                    </button>
		                                </div>
		                            </div>
	                        	</form>
	                        </div>
	                    </div>
	                </div>
		        </div>
	    	</article>
		<?php endif; ?>

		<article class="planos-mockup">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-12">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/planos-mockups.jpg" alt="">
					</div>
					<div class="col-md-5 col-12">
						<h6>
							<svg width="112px" height="112px" viewBox="0 0 112 112" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <g id="01_Planos-e-precos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							        <g id="01_planos-e-precos_nao-disponivel" transform="translate(-796.000000, -2064.000000)">
							            <g id="Group-17" transform="translate(797.000000, 2066.000000)">
							                <g id="Group-14" transform="translate(1.000000, 0.000000)">
							                    <circle id="Oval-6" stroke="#FFA600" stroke-width="3" cx="54" cy="54" r="54"></circle>
							                    <path d="M68.3989703,30.0819608 L39.4873452,52.6945422 C39.2585893,52.8751343 39.3123122,53.239825 39.5843931,53.343271 L49.7796272,57.2514236 C49.9997181,57.335583 50.0881011,57.6055944 49.9598591,57.805473 L38.0628198,76.4187291 C37.8357969,76.7729 38.2725127,77.1779172 38.6017826,76.9166723 L66.7474221,54.7020948 C66.970979,54.5250093 66.922455,54.1708385 66.6607721,54.0603793 L56.8398658,49.957608 C56.6249739,49.8681887 56.543523,49.6016839 56.6717649,49.4053119 L68.9362,30.5851639 C69.1649559,30.2309931 68.7299731,29.8224692 68.3989703,30.0819608 Z" id="Page-1" stroke="#464D5C" stroke-width="2"></path>
							                </g>
							            </g>
							        </g>
							    </g>
							</svg>
							A internet que não deixa nenhum mega pelo caminho!
						</h6>
						<p>
							Copel Fibra é fibra óptica de ponta a ponta. A fibra que sai da Copel chega dentro da sua casa. Tudo isso para garantir uma conexão com toda a tecnologia que só a Copel Telecom oferece.
						</p>
						<p>
							Cliente Copel Fibra ainda tem acesso exclusivo ao Esporte Interativo e ao CN Já, sem nenhum custo adicional. Assinou Copel Fibra, ganhou.
						</p>
					</div>
				</div>
			</div>
		</article>

		<article class="planos-parcerias">
			<div class="container">
				<header class="planos-parcerias--header">
					<h4>Diversão e conexão para toda a família</h4>
					<p>Além da melhor estabilidade do mercado e uma conexão que você pode confiar, ao contratar o seu plano Copel Fibra, você e sua família têm a disposição serviços exclusivos e gratuitos, como Esporte Interativo e o CN Já, do Cartoon Network.</p>
				</header>
				<div class="row">
					<div class="col-md-6">
                        <div class="parcerias-item">
                            <a href="<?php $p=get_page_by_title('Esporte Interativo'); echo get_permalink($p->ID); ?>">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-menu.jpg" alt="">
                                </figure>
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-ei.png" class="parcerias-item--logo" alt="">
                                <h6 class="parcerias-item--heading">
                                    Assista online o melhor do esporte.
                                </h6>
                                <span class="btn-more">Saiba mais</span>
                            </a>
                        </div>	
					</div>
					<div class="col-md-6">
                        <div class="parcerias-item">
                            <a href="<?php $p=get_page_by_title('Cartoon Network'); echo get_permalink($p->ID); ?>">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/cnja-menu.jpg" alt="">
                                </figure>
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-cnja.png" class="parcerias-item--logo" alt="">
                                <h6 class="parcerias-item--heading">
                                    Seus desenhos preferidos onde você estiver.
                                </h6>
                                <span class="btn-more">Saiba mais</span>
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</article>
		
	</section>
<?php get_footer(); ?>