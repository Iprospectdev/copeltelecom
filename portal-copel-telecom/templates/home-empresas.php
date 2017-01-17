<?php

	get_header();

	$services = new Services;
	$profile = $services->profile();
	$planos = json_decode($services->planos("J",$profile->cidade));

	if(!$planos->bel){
		$planos = json_decode($services->planos("J","CURITIBA"));
	}

	$id = $planos->bel[0]->id;

	$velocidade = $services->profile_velocidade($planos->bel[0]->nomeProduto);

	$price = $services->profile_price($planos->bel[0]->precoProduto);

	$cents = $services->profile_cents($planos->bel[0]->precoProduto);

	$slides = get_posts(array(
		"post_type" => "slider-home",
		"nopaging" => true,
		'meta_query' => array(
	        array(
	            'key' => 'slider_local',
	            'value' => "J",
	            'compare' => 'IN'
	        )
	    )
	));

?>

	<section class="empresas" id="home-empresas">
		<div class="home-slideshow">

			<?php if ($slides): ?>
			<div class="owl-carousel">
				<?php foreach ($slides as $slide): ?>
				<article class="bgjs">
					<?php

						$desktop = array_values(rwmb_meta( 'slider_image_desktop', 'type=image', $slide->ID));
						$desktop = $desktop[0];

						$mobile = array_values(rwmb_meta( 'slider_image_mobile', 'type=image', $slide->ID));
						$mobile = ($mobile) ? $mobile[0] : $desktop;

					?>
					<img src="<?php echo $desktop["full_url"]; ?>" alt="<?php echo $desktop["title"]; ?>">
					<figure><img src="<?php echo $mobile["full_url"]; ?>" alt="<?php echo $mobile["title"]; ?>"></figure>
					<div class="container">
						<div class="main-tt-highlight" style="
							<?php
								if(get_post_meta($slide->ID, "slider_posicao_left", true)){
									echo 'margin-left:'.get_post_meta($slide->ID, "slider_posicao_left", true).'px;';
								}
								if(get_post_meta($slide->ID, "slider_posicao_top", true)){
									echo 'margin-top:'.get_post_meta($slide->ID, "slider_posicao_top", true).'px;';
								}
								if(get_post_meta($slide->ID, "slider_width", true)){
									echo 'max-width:'.get_post_meta($slide->ID, "slider_width", true).'px;';
								}
								if(get_post_meta($slide->ID, "slider_posicao_left", true) || get_post_meta($slide->ID, "slider_posicao_top", true) || get_post_meta($slide->ID, "slider_width", true)){
									echo 'padding: 0px;';
								}
							?>">
							<h2 style="
								<?php  if(get_post_meta($slide->ID, "slider_sn")){
									echo 'font-weight: 700;font-size: 32px;line-height: 30px;';
								}?>
							"><?php echo nl2br(get_post_meta($slide->ID, "slider_principal", true)); ?></h2>
							<p style="
								<?php  if(get_post_meta($slide->ID, "slider_sn")){
									echo 'font-weight: 300;font-size: 20px;line-height: 24px;';
								}?>
							"><?php echo nl2br(get_post_meta($slide->ID, "slider_secundario", true)); ?></p>
						</div>
					</div>
				</article>
				<?php endforeach ?>
			</div>	
			<?php else: ?>
			<div class="owl-carousel">
				<article class="bgjs">
					<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/home03.jpg" alt="">
					<div class="container">
						<div class="main-tt-highlight right">
							<h2>
								Na sua empresa não é assim.<br>
								Por que sua internet tem que ser?
							</h2>
							<p>Ultravelocidade tanto no download como no upload.</p>
						</div>
					</div>
				</article>
			</div>
			<?php endif; ?>

			<div class="home-slide-plano">
				<div class="container">
					<aside class="slide-plano">
						<div class="slide-plano-border">
							<h6>Plano sugerido para <strong>seu perfil:</strong></h6>
							<div class="slide-plano-plano">
								<div class="slide-plano-mega">
									<?php echo $velocidade; ?> <small>MEGA</small>
								</div>
								<div class="slide-plano-preco">
									<small><i>A PARTIR DE</i><br>R$</small>
									<?php echo $price; ?>
									<span>,<?php echo $cents; ?>*</small>
								</div>
							</div>
							<div class="slide-plano-down-up">
								<small>
									Download: <span><?php echo $velocidade; ?></span> MEGA 
									|
									Upload: <span><?php echo $velocidade; ?></span> MEGA
								</small>
								<a href="<?php echo LINK_WVT; ?>?s=<?php echo $id; ?>&locate=<?php echo $profile->cidade; ?>&p=J" class="bt bt-orange btn_contratar">CONTRATAR</a>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<article>
			<div class="nav-highlights">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-blue col-sm-6 col-xs-12" data-mh="nav-highlight-group">
							<div class="nav-highlights-tt">
								<a href="<?php $p = get_page_by_title("Internet"); echo get_permalink($p->ID); ?>">
									<i class="i-b-fibra-white"></i>
									<h3>Soluções de Internet</h3>
									<p>Serviço de internet de alta velocidade e disponibilidade com tecnologia 100% em fibra óptica.<br><strong>Saiba mais.</strong></p>
								</a>
							</div>
						</li>
						<li class="nav-highlights-blue-light col-sm-6 col-xs-12" data-mh="nav-highlight-group">
							<div class="nav-highlights-tt">
								<a href="<?php $p = get_page_by_title("Redes"); echo get_permalink($p->ID); ?>">
									<i class="i-b-rede-white"></i>
									<h3>Soluções de Rede</h3>
									<p>A Copel Telecom tem soluções de conectividade em rede completas e adequadas aos mais diversos perfis.<br><strong>Saiba mais.</strong></p>
								</a>
							</div>
						</li>
						<li class=" col-sm-6 col-xs-12" data-mh="nav-highlight2-group">
							<div class="nav-highlights-tt">
								<a href="<?php $p = get_page_by_title("Canal Dedicado"); echo get_permalink($p->ID); ?>">
									<i class="i-b-updown"></i>
									<h3>Soluções de Canal Dedicado</h3>
									<p>Soluções de interconexão por canal dedicado ideais para que você se dedique somente ao seu lucro.<br><strong>Saiba mais.</strong></p>
								</a>
							</div>
						</li>
						<li class="col-sm-6 col-xs-12" data-mh="nav-highlight2-group">
							<div class="nav-highlights-tt">
								<a href="<?php $p = get_page_by_title("Data Center"); echo get_permalink($p->ID); ?>">
									<i class="i-b-cloud"></i>
									<h3>Soluções de Data Center</h3>
									<p>Conheça as soluções que só uma empresa com mais de 40 anos de experiência em infraestrutura pode oferecer.<br><strong>Saiba mais.</strong></p>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="empresas-highlight">
					<div class="nav-highlights">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/empresas/highlight-1.png" alt="">
						<ul class="row">
							<li class="col-sm-4 col-xs-12" data-mh="nav-highlight-group">
								<div class="nav-highlights-tt no-icon">
									<h4>Serviços Públicos</h4>
									<p>Conheça as soluções da Copel Telecom para integrar secretarias e departamentos de órgãos públicos. </p>
									<a href="<?php $p = get_page_by_title("Serviços Públicos"); echo get_permalink($p->ID); ?>" class="bt-o">Clique Aqui</a>
								</div>
							</li>
							<li class="col-sm-4 col-sm-offset-4 col-xs-12" data-mh="nav-highlight-group">
								<div class="nav-highlights-tt no-icon">
									<h4>Ofertas Públicas</h4>
									<p>Conheça as Ofertas de Referência de Produtos de Atacado da Copel Telecom para prestadoras de serviços de telecomunicações.</p>
									<a href="<?php $p = get_page_by_title("Ofertas Públicas"); echo get_permalink($p->ID); ?>" class="bt-o">Clique Aqui</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<article>
			<div class="empresas-vantagens">
				<div class="container">
					<ol class="row">
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-flexibilidade"></i><br>
							<h5>FLEXIBILIDADE</h5>
							A Copel Telecom tem um leque variado de soluções, que podem ser combinadas para atender às necessidades específicas da sua empresa.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-cobertura"></i><br>
							<h5>COBERTURA</h5>
							Os 399 municípios do nosso estado já contam com o que há de mais avançado em tecnologia digital.
							<a href="<?php echo LINK_WVT; ?>?s=<?php echo $id; ?>&locate=<?php echo $profile->cidade; ?>&p=J">Verifique disponibilidade técnica</a> para a sua localidade.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-fibra"></i><br>
							<h5>FIBRA ÓPTICA</h5>
							Com a tecnologia de fibra óptica da Copel Telecom, a qualidade do sinal se mantém desde a origem até o destino. Ou seja, lucro de ponta a ponta para seus negócios.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-tecnologia"></i><br>
							<h5>TECNOLOGIA</h5>
							Há mais de 40 anos, a Copel é sinônimo de tecnologia e inovação a serviço do desenvolvimento do Paraná, sendo a empresa pública mais admirada pelos paranaenses.
						</li>
					</ol>
				</div>
			</div>
		</article>
		
		<aside class="empresas-bts-contato">
			<h6 class="main-tt-barra">Fale com a gente</h6>
			<p>Entre em contato conosco agora mesmo e conheça melhor as soluções da Copel Telecom.<br>Se preferir, nós entramos em contato com você.</p>
			<?php get_template_part('template','bts-contato'); ?>
		</aside>

	</section>
	
<?php get_footer(); ?>