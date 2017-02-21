<?php
	
	$url = get_bloginfo('url');
	wp_redirect( $url );
	exit;

	get_header(); 

	$services = new Services;
	$profile = $services->profile();
	$planos_pc = json_decode($services->planos("F","VENTANIA"));
	$planos = json_decode($services->planos("F",$profile->cidade));

	if(!$planos->bel){
		$profile->cidade = "Curitiba";
	}

	$id = $planos_pc->bel[0]->id;

	$velocidade = $services->profile_velocidade($planos_pc->bel[0]->nomeProduto);

	$price = $services->profile_price($planos_pc->bel[0]->precoProduto);

	$cents = $services->profile_cents($planos_pc->bel[0]->precoProduto);
?>
	<section id="parana-conectado">
		<header class="wow fadeIn">
			<h1 class="main-tt main-tt-barra">Paraná Conectado</h1>
			<small>Uma das maiores iniciativas de inclusão digital no Brasil, levando internet de qualidade para os paranaenses.</small>
		</header>
		
			<article>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h2>Disponível em 25 municípios paranaenses</h2>
							<p>O programa Paraná Conectado leva internet 100% fibra óptica com preços populares à pequenos municípios paranaenses. Confira no mapa os municípios atendidos pelo programa:</p>
							<p>Reserva do Iguaçu, Ventania, Rio Branco do Ivaí, Pato Bragado, Mercedes, Nova Santa Rosa, Floresta, Doutor Camargo, Sapopema, Congoinhas, Quatro Pontes, Ouro Verde do Oeste, Itambé, Tupassi, Quinta do Sol, Fenix, Francisco Alves, Bom Sucesso, São Jorge D'Oeste, Verê, Cambira, Eneas Marques, Douradina, Figueira e Santa Isabel do Ivaí.</p>
							<p><strong>Importante!</strong><br>O modem do Paraná Conectado fornece internet somente via cabo de rede, ou seja, não tem wi-fi.</p>
						</div>
						<div class="col-sm-6 col-xs-12">
							<aside class="slide-plano slide-plano-orange-light">
								<div class="slide-plano-border">
									<h6>Internet 100% fibra óptica</h6>
									<div class="slide-plano-plano">
										<div class="slide-plano-mega">
											<?php echo $velocidade; ?> <small>MEGA</small>
										</div>
										<div class="slide-plano-preco">
											<small><i>A PARTIR DE</i><br>R$</small>
											<?php echo $price; ?>
											<span>,<?php echo $cents; ?></small>
										</div>
									</div>
									<div class="slide-plano-down-up">
										<small>
											Download: <span><?php echo $velocidade; ?></span> MEGA 
											|
											Upload: <span><?php echo $velocidade; ?></span> MEGA
										</small>
										<?php if ($services->profile_velocidade($planos->bel[0]->nomeProduto) == "01"): ?>
										<a href="<?php echo LINK_WVT; ?>?s=<?php echo $id; ?>&locate=<?php echo $profile->cidade; ?>&p=<?php echo $profile->tipo->name; ?>" class="bt bt-orange-medium">CONTRATAR</a>	
										<?php endif ?>
									</div>
								</div>
								<a href="<?php bloginfo('template_url'); ?>/_assets/pdf/caracteristicas-tecnicas-do-servico-internet-parana-conectado.pdf" target="_blank" class="slide-plano-link"><i class="i-pdf"></i>Confira as características técnicas</a>
							</aside>
						</div>
					</div>
				</div>
				<div id="mapa"></div>
			</article>
		<aside>
			<?php get_template_part('template','bts-contato'); ?>
			<?php get_template_part('template','highlight-blog'); ?>
		</aside>
	</section>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
		jQuery(document).ready(function($) {
			var geo = new google.maps.Geocoder;
			function initMap() {
				var map = new google.maps.Map(document.getElementById('mapa'), {
					center: {lat: -25.25209, lng: -52.02154},
					scrollwheel: false,
					zoom: 7
				});

				var cidades = <?php echo json_encode($services->paranaconectado()); ?>;
				for (var i = 0; i < cidades.length; i++) {
					console.log(parseFloat(cidades[i].lat));
					var marker = new google.maps.Marker({
						position: {lat: parseFloat(cidades[i].lat), lng: parseFloat(cidades[i].lng)},
						map: map,
						title: cidades[i].nome,
						zIndex: i
					});
				}
			}
			google.maps.event.addDomListener(window, "load", initMap);
		});
	</script>
<?php get_footer(); ?>