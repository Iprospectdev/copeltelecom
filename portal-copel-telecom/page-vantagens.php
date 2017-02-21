<?php
	
	$url = get_bloginfo('url');
	wp_redirect( $url );
	exit;

	get_header(); 
?>
	<section id="vantagens">
		<header class="wow fadeIn">
			<h1 class="main-tt">Veja por que a banda extra larga da Copel Telecom está preparada para o futuro</h1>
		</header>
		<article class="vantagens-carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<nav class="owl-nav">
							<ul>
								<li><a href="#" data-to="0" class="active"><i class="i-b-100percent"></i>Entrega<br><strong>da Velocidade Contratada</strong></a></li>
								<li><a href="#" data-to="1"><i class="i-b-fibra"></i>Fibra Óptica<br><strong>de ponta a ponta</strong></a></li>
								<li><a href="#" data-to="2"><i class="i-b-upload"></i><strong>Download<br>e Upload</strong> Simétricos</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="owl-carousel">
							<div>
								<div class="video-gallery">
									<a href="https://www.youtube.com/watch?v=42f8t17Oe1o" class="item-video"><i class="i-play-o"></i><img src="<?php bloginfo('template_url'); ?>/_assets/images/vantagens/slide-1.png" alt=""></a>
								</div>
							</div>
							<div><img src="<?php bloginfo('template_url'); ?>/_assets/images/vantagens/slide-1.png" alt=""></div>
							<div><img src="<?php bloginfo('template_url'); ?>/_assets/images/vantagens/slide-1.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article id="v-vantagens">
			<div class="container">
				<ul class="row">
					<li class="col-sm-4">
						<i class="i-v-velocidade"></i>Tem a maior velocidade de<br>upload do mercado
					</li>
					<li class="col-sm-4">
						<i class="i-v-casa"></i>A sua casa pronta para<br>a internet das coisas
					</li>
					<li class="col-sm-4">
						<i class="i-v-confianca"></i>É de confiança
					</li>
				</ul>
			</div>
		</article>
		<aside><?php get_template_part('template','nav-highlights'); ?></aside>
		<article id="v-liberdade">
			<div class="container">
				<h2>100% internet.<br>Mais liberdade de escolha</h2>
				<p>Sem combos ou pacotes. A Copel Telecom é especialista em internet. Por isso, você não precisa contratar um pacote com telefonia fixa e outros serviços para ter a internet 100% fibra óptica.</p>
				<div class="video-gallery">
					<a href="https://www.youtube.com/watch?v=42f8t17Oe1o" class="item-video"><img src="<?php bloginfo('template_url'); ?>/_assets/images/vantagens/video.png" alt=""></a>
				</div>
			</div>
		</article>
		<aside><?php get_template_part('template','highlight-blog'); ?></aside>
		<article id="v-conexao">
			<h2>Conexão com garantia de velocidade<br>e estabilidade, a partir de R$139,90</h2>
			<p>Nada se compara à capacidade e à confiança da rede de fibra óptica<br>da Copel Telecom. É a tecnologia 100% fibra óptica com<br>garantia de entrega da velocidade. </p>
			<div class="text-center">
				<a href="<?php $p = get_page_by_title("Planos"); echo get_permalink($p->ID); ?>" class="bt-o-b">ESCOLHA SEU PLANO</a>
			</div>
		</article>
	</section>
<?php get_footer(); ?>