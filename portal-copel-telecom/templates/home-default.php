<?php

	get_header();

	$services = new Services;
	$profile = $services->profile();
	$planos = json_decode($services->planos("F",$profile->cidade));

	if(!$planos->bel){
		$planos = json_decode($services->planos("F","CURITIBA"));
	}

	if ($services->profile_velocidade($planos->bel[0]->nomeProduto) == "01") {
		$id = $planos->bel[1]->id;
		$velocidade = $services->profile_velocidade($planos->bel[1]->nomeProduto);
		$price = $services->profile_price($planos->bel[1]->precoProduto);
		$cents = $services->profile_cents($planos->bel[1]->precoProduto);
	} else {
		$id = $planos->bel[0]->id;
		$velocidade = $services->profile_velocidade($planos->bel[0]->nomeProduto);
		$price = $services->profile_price($planos->bel[0]->precoProduto);
		$cents = $services->profile_cents($planos->bel[0]->precoProduto);
	}

	$velocidade = str_replace('a', '', $velocidade);
	$velocidade = str_replace('A', '', $velocidade);

	$slides = get_posts(array(
		"post_type" => "slider-home",
		"nopaging" => true,
		"orderby" => "menu_order",
		"order" => "asc",
		'meta_query' => array(
	        array(
	            'key' => 'slider_local',
	            'value' => "F",
	            'compare' => 'IN'
	        )
	    )
	));

?>
	<section>

		<div class="home-slideshow">

			<?php if ($slides): ?>
			<div class="owl-carousel">
				<?php foreach ($slides as $slide): ?>
					<div>
						<?php
							if(get_post_meta($slide->ID, "slider_link", true)){echo '<a href="'.get_post_meta($slide->ID, "slider_link", true).'">';}
							$desktop = array_values(rwmb_meta( 'slider_image_desktop', 'type=image', $slide->ID));
							$desktop = $desktop[0];
							$mobile = array_values(rwmb_meta( 'slider_image_mobile', 'type=image', $slide->ID));
							$mobile = ($mobile) ? $mobile[0] : $desktop;
						?>
						<article data-saibamais="<?php echo (get_post_meta($slide->ID, "slider_link_saibamais", true)) ? get_post_meta($slide->ID, "slider_link_saibamais", true) : '#'; ?>">
							<figure class="bgjs hidden-sm hidden-xs"><img src="<?php echo $desktop["full_url"]; ?>" alt="<?php echo $desktop["title"]; ?>"></figure>
							<figure class="bgjs hidden-md hidden-lg"><img src="<?php echo $mobile["full_url"]; ?>" alt="<?php echo $mobile["title"]; ?>"></figure>
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
										<?php
										if(get_post_meta($slide->ID, "slider_sn")){
											echo 'font-weight: 700;font-size: 32px;line-height: 30px;';
										}
										if(get_post_meta($slide->ID, "slider_principal_color")){
											echo 'color: '.get_post_meta($slide->ID, "slider_principal_color", true);
										}
										?>
									"><?php echo nl2br(get_post_meta($slide->ID, "slider_principal", true)); ?></h2>
									<p style="
										<?php  if(get_post_meta($slide->ID, "slider_sn")){
											echo 'font-weight: 300;font-size: 20px;line-height: 24px;';
										}?>
									"><?php echo nl2br(get_post_meta($slide->ID, "slider_secundario", true)); ?></p>
									<?php 
										if(get_post_meta($slide->ID, "slider_botao_text")){
											echo '<a href="'.get_post_meta($slide->ID, "slider_botao_link", true).'" class="bt-o" style="'.get_post_meta($slide->ID, "slider_botao_style", true).'">'.get_post_meta($slide->ID, "slider_botao_text", true).'</a>';
										}
									?>
								</div>
							</div>
						</article>
						<?php if(get_post_meta($slide->ID, "slider_link", true)){echo '</a>';} ?>
					</div>
				<?php endforeach;?>
			</div>	
			<?php else: ?>
			<div class="owl-carousel">
				<article class="bgjs">
					<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/home01.jpg" alt="">
					<figure><img src="<?php bloginfo('template_url'); ?>/_assets/images/home/home01-mobile.jpg" alt=""></figure>
					<div class="container">
						<div class="main-tt-highlight">
							<h2>
								Na sua vida não é assim.<br>
								Por que sua internet tem que ser?
							</h2>
							<p>COPEL FIBRA. A única banda extra larga que entrega a velocidade que promete.</p>
						</div>
					</div>
				</article>
				<article class="bgjs">
					<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/home02.jpg" alt="">
					<figure><img src="<?php bloginfo('template_url'); ?>/_assets/images/home/home02-mobile.jpg" alt=""></figure>
					<div class="container">
						<div class="main-tt-highlight right">
							<h2>
								Na sua vida não é assim.<br>
								Por que sua internet tem que ser?
							</h2>
							<p>COPEL FIBRA. A melhor estabilidade do mercado e uma conexão em que você pode confiar.</p>
						</div>
					</div>
				</article>
			</div>
			<?php endif ?>
			<div class="home-slide-plano">
				<div class="container">
					
				</div>
			</div>
		</div>

		<aside>
			<div id="home-beneficios" class="hide">
				<div class="container">
					<ol>
						<li><i class="i-b-fibra-white"></i>Fibra óptica <strong>de ponta a ponta</strong></li>

						<?php if ($planos): ?>
							<li><i class="i-b-velocidade-white"></i>Velocidades de<strong><?php echo $services->profile_velocidade($planos->bel[0]->nomeProduto); ?> a <?php echo $services->profile_velocidade(end($planos->bel)->nomeProduto); ?> Mega</strong></li>
						<?php else: ?>
							<li><i class="i-b-velocidade-white"></i>Velocidades de<strong>20 a 100 Mega</strong></li>
						<?php endif; ?>
						
						<li><i class="i-b-upload-white"></i><strong>O maior upload</strong>do mercado</li>
						<li><a href="<?php $p = get_page_by_title("Vantagens"); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">confira mais benefícios</a></li>
					</ol>
				</div>
			</div>
			<div class="nav-highlights nav-highlights-home">
				<div class="container">
					<ul class="row">
						<li class="col-sm-6 col-xs-12 nav-highlights-orange-light" data-mh="nh-group">
							<div class="nav-highlights-tt">
								<div class="space-10"></div>
								<a href="http://www.copeltelecom.com/site/blog/conheca-o-aplicativo-da-copel-telecom/">
									<i><img src="<?php bloginfo('template_url'); ?>/_assets/images/home/app-icone.png" alt=""></i>
									<h3>Novo App Copel Telecom</h3>
									<p>Toda a facilidade e velocidade da<br><strong>Copel Telecom - Copel Fibra</strong> agora em suas mãos</p>
								</a>
							</div>
							<div class="space-20"></div>
							<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/app.jpg" class="img-app" alt="">
							<span class="space-5"></span>
							<a href="http://www.copeltelecom.com/site/blog/conheca-o-aplicativo-da-copel-telecom/" class="bt bt-white mrg20T">CONHEÇA</a>
						</li>
						<li class="col-sm-6 col-xs-12" data-mh="nh-group">
							<div class="nav-highlights-tt mrg50L">
								<a href="<?php bloginfo('url'); ?>/esporte-interativo">
									<i><img src="<?php bloginfo('template_url'); ?>/_assets/images/home/ei-icone.png" alt=""></i>
									<h3>Esporte Interativo</h3>
									<p>Cliente Copel Telecom tem acesso gratuito ao conteúdo do Esporte Interativo para assistir ao vivo o melhor da Liga dos Campeões, Europa League, E-League e muito mais.</p>
								</a>
							</div>
							<div class="row">
								<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/ei.jpg" class="" alt="">
								<a href="<?php bloginfo('url'); ?>/esporte-interativo" class="bt mrg5T pad50L pad50R">APROVEITE JÁ</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</aside>

		<?php get_template_part('template','blog-home'); ?>


		<a href="http://www.copeltelecom.com/site/blog/conheca-o-aplicativo-da-copel-telecom/" class="app-banner hidden-xs">
			<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/app-banner.png" alt="">
		</a>
		<a href="http://www.copeltelecom.com/site/blog/conheca-o-aplicativo-da-copel-telecom/" class="app-banner visible-xs hidden-sm hidden-md hidden-lg">
			<span class="space-10"></span>
			<span class="space-40"></span>
			<img src="<?php bloginfo('template_url'); ?>/_assets/images/home/app-banner-mobile.png" alt="">
		</a>
		
	</section>
	
<?php get_footer(); ?>