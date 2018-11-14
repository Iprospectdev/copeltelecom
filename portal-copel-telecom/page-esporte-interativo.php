<?php get_header(); ?>
	<section class="page-parcerias">
		<header class="parcerias-header" style="background-image: url(<?php bloginfo('template_url'); ?>/_assets/images/ei-header.jpg);">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="#"><i class="fas fa-home"></i>Home</a>
					<a href="#">Sobre nós</a>
				</div>
				<div class="parcerias-header--text">
					<h2>Cliente Copel Telecom, tem acesso gratuito ao conteúdo do Esporte Interativo</h2>
					<p>Com ele, você pode acompanhar as maiores competições esportivas do planeta! Não perca tempo!</p>
					<a href="#" class="btn">Saiba como assistir</a>
				</div>
			</div>

			<img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-phone.png" alt="">

			<svg width="1366px" height="171px" viewBox="0 0 1366 171" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		        <g id="01_esporte-interativo" transform="translate(0.000000, -674.000000)" fill="#FFFFFF">
		            <polygon id="Triangle" points="0 674.097137 1366 841.730772 0 844.730772"></polygon>
		        </g>
			</svg>
		</header>

		<article class="parcerias-content">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-campeonatos.png" alt="Campeonatos Esporte Interativo">
					</div>
					<div class="col-12 col-md-4 offset-md-1 parcerias-content--text">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-ei.png" alt="Logo Esporte Interativo">
						<h6>A paixão e a emoção pelo esporte, onde você estiver</h6>
						<p>Assista aos principais conteúdos oferecidos pelos Canais Esporte Interativo e fique por dentro de tudo o que acontece no mundo dos esportes. São programas imperdíveis, como a UEFA Champions League (maior competição de clubes do mundo) a E-League (maior competição de Counter Strike) e muito mais.</p>
						<p>Você também pode ficar ligado nas transmissões das lutas mais surpreendentes de MMA e em toda a emoção do Pro Wrestling. É hora de desfrutar por completo do mundo dos esportes através de toda a programação dos Canais do Esporte Interativo.</p>
					</div>
				</div>
			</div>
		</article>

		<article class="parcerias-sobre">
			<div class="parcerias-sobre--heading">
				Sobre o<br>
				Esporte Interativo
			</div>
			<div class="parcerias-sobre--bg" style="background-image: url(<?php bloginfo('template_url'); ?>/_assets/images/ei-sobre.jpg);">
				<div class="container">
					<div class="parcerias-sobre--text">
						<p>O Esporte Interativo é uma das maiores marcas do mundo dedicada à produção e distribuição de conteúdos esportivos em múltiplas plataformas. Reunindo todo o conteúdo do canal, o Esporte Interativo Plus tem o objetivo de estar próximo do público apaixonado por esportes, levando o melhor da temporada, onde ele estiver.</p>
						<p><strong>No aplicativo Esporte Interativo Plus você pode acompanhar todos os conteúdos dos Canais Esporte Interativo no celular, no computador, na smart TV LG, no tablet ou na Apple TV.</strong></p>
						<a href="#" class="btn-o">
							Saiba como assistir
						</a>
					</div>
				</div>
				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-mockups.png" class="parcerias-sobre--mockups" alt="">
			</div>
		</article>

		<article class="parcerias-steps">
			<div class="container">
				<h2>Cliente Copel Telecom</h2>
				<p>Confira abaixo como é fácil baixar o aplicativo do Esporte Interativo Plus no seu smartphone ou tablet.</p>
				<div class="row">
					<div class="col-md-4">
						<div class="parcerias-steps--item step-1">
							<small>1</small>
							<p>Baixe o aplicativo Esporte Interativo Plus na Play Store ou na Apple Store.</p>
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/_assets/images/btn-google-play.png" alt="Google Play">
							</a>
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/_assets/images/btn-apple-store.png" alt="Apple Store">
							</a>
							<p>Você também pode fazer o seu login pelo computador em www.eiplus.com.br/entrar/</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="parcerias-steps--item step-2">
							<small>2</small>
							<p>No app Esporte Interativo Plus, faça login com seu e-mail cadastrado na Copel Telecom. A senha é o seu CPF*.</p>
							<img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-hand.png" alt="">
						</div>
					</div>
					<div class="col-md-4">
						<div class="parcerias-steps--item step-3">
							<small>3</small>
							<p>Pronto, aproveite! Assinante Copel Telecom tem até dois acessos simultâneos.</p>
							<img src="<?php bloginfo('template_url'); ?>/_assets/images/ei-devices.png" alt="">
						</div>
					</div>
				</div>
				<small class="parcerias-steps--obs">*Após o seu primeiro acesso, recomendamos que você altere a sua senha.</small>
			</div>
		</article>

		<article class="parcerias-acesso">
			<div class="container">
				<h6>Não consegue acesso?</h6>
				<p>
					Você pode recuperar sua senha no site <a href="www.eiplus.com.br/entrar" target="_blank">www.eiplus.com.br/entrar</a> escolhendo a opção <strong>“Esqueci minha senha”</strong>.<br>
					Caso ainda não tenha conseguido acessar, entre em contato pelo e-mail <a href="mailto:relacionamento@esporteinterativoplus.com.br">relacionamento@esporteinterativoplus.com.br</a>.
				</p>
			</div>
		</article>

		<aside class="main-planos">
			<div class="container">
				<h6>Ainda não é cliente Copel Telecom?</h6>
				<a href="<?php $p=get_page_by_title( 'planos' ); echo get_permalink( $p->ID ) ?>" class="btn">Conheça nossos planos</a>
			</div>
		</aside>
	</section>
<?php get_footer(); ?>