<!DOCTYPE html>
<html class="bussola" lang="pt-BR" ng-app="copeltelecom">

	<head>
		
		<title><?php bloginfo("name"); ?></title>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="<?php bloginfo("template_url"); ?>/_assets/images/favicons/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900,italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

	</head>

	<body ng-controller="bussola">

		<!-- Google Tag Manager -->
		<noscript>
		<iframe src="//www.googletagmanager.com/ns.html?id=GTM-MP4H4D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w
		[l]||[];w[l].push({'gtm.start':
		new
		Date().getTime(),event:'gtm.js'});var
		f=d.getElementsByTagName(s)[0],
		j=d.createElement
		(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i
		+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MP4H4D');</script>
		<!-- End Google Tag Manager -->
		
		<?php get_template_part('menu','mobile'); ?>

		<div id="sb-site">
				
			<div class="desktop">

				<?php get_template_part('header','mobile'); ?>
				
				<section class="youtube-movie">
					<iframe src="https://www.youtube.com/embed/U2DZeTmJzu4" frameborder="0" allowfullscreen></iframe>
				</section>

				<section class="wrap state-1">
					
					<div class="step-1">
						<aside>
							<div class="vertical">
								<header>
									<h3>
										<strong>Onde você precisa</strong> <br>
										da internet banda larga <br>
										mais estável e confiável <br>
										do Brasil?
									</h3>
								</header>
								
								<div class="call">
									<dl class="action">
										<dt><a href="" ng-click="select_tipo('f');" id="icon_casa" class="btn_bussola"><i class="icon-font-bussola-02"></i></a></dt>
										<dd><strong>Sua Casa</strong></dd>
									</dl>
									<dl class="action">
										<dt><a href="" ng-click="select_tipo('j');" id="icon_empresa" class="btn_bussola"><i class="icon-font-bussola-03"></i></a></dt>
										<dd><strong>Sua Empresa</strong></dd>
									</dl>
								</div>
							</div>
						</aside>
					</div>

					<div class="step-2">
						<aside>
							<div class="vertical">
								<header>
									<h4>
										<strong>Em qual cidade do Paraná</strong> <br>
										você precisa de uma <br>
										internet banda larga <br>
										100% fibra óptica?
									</h4>
								</header>
								
								<div class="call">
									<dl class="action">
										<dt><span><i class="icon-font-bussola-04"></i></span></dt>
										<dd><input type="text" id="cidade" > <button type="button" ng-click="select_cidade()">></button></dd>
									</dl>
								</div>
							</div>
						</aside>
					</div>

					<div class="step-3">
						<aside>
							<div class="vertical">
								<header>
									<h3>
										<strong>Além do maior upload <br> do mercado,</strong> <br>
										o que mais você <br>
										vai usar com a Copel Fibra?
									</h3>
								</header>
								<div class="draggable">
									<ul class="<?php echo (wp_is_mobile()) ? "action-mobile" : ""; ?>">
										<li id="icon_chat" class="chat btn_bussola" data-size="1"><i class="icon-font-bussola-05"></i></li>
										<li id="icon_email" class="email btn_bussola" data-size="1"><i class="icon-font-bussola-06"></i></li>
										<li id="icon_social" class="social btn_bussola" data-size="1"><i class="icon-font-bussola-07"></i></li>
										<li id="icon_video" class="video btn_bussola" data-size="2"><i class="icon-font-bussola-09"></i></li>
										<li id="icon_games" class="games btn_bussola" data-size="3"><i class="icon-font-bussola-10"></i></li>
										<li id="icon_photos" class="photos btn_bussola" data-size="2"><i class="icon-font-bussola-11"></i></li>
										<li id="icon_music" class="music btn_bussola" data-size="3"><i class="icon-font-bussola-12"></i></li>
									</ul>
									<div class="area-drag">
										<span>
											<?php if (wp_is_mobile()): ?>
												Escolha
											<?php else: ?>
												Arraste aqui
											<?php endif ?>
										</span>
									</div>
								</div>
								<footer>
									<a href="" ng-click="open_site()" class="btn-round btn_entrar_site">
										<i class="icon-font-bussola-01"></i>
										Entrar no site
									</a>
								</footer>
							</div>
						</aside>
					</div>

					<nav class="nav-options">
						<div class="item item-1">
							<dl class="action vertical">
								<dt>
									<a href="" ng-click="state_back(1)">
										<i ng-class="status.tipo.icon"></i>
										<em class="check icon-font-bussola-08"></em>
									</a>
								</dt>
								<dd>Internet banda larga estável e confiável <br> {{status.tipo.text}}</dd>
							</dl>
						</div>

						<div class="item item-2">
							<dl class="action vertical">
								<dt>
									<a href="" ng-click="state_back(2)">
										<i class="icon-font-bussola-04"></i>
										<em class="check icon-font-bussola-08"></em>
									</a>
								</dt>
								<dd>Internet banda larga 100% fibra óptica em {{status.cidade}}</dd>
							</dl>
						</div>
					</nav>

					<footer class="enter-site">
						<a href="" ng-click="open_site()" class="btn-round btn_entrar_site">
							<i class="icon-font-bussola-01"></i>
							Entrar sem responder
						</a>
					</footer>


				</section>

				<section class="navigation">
					
					<h1 class="logo">
						<img src="<?php bloginfo("template_url"); ?>/_assets/images/logo-copel-white.svg" alt="<?php bloginfo("name"); ?>" alt="Copel Telecom" class="white">
						<img src="<?php bloginfo("template_url"); ?>/_assets/images/logo-copel.svg" alt="<?php bloginfo("name"); ?>" alt="Copel Telecom" class="orange">
					</h1>

					<div class="subtitle">
						<h2>
						Copel Fibra. <br>
						Internet 100%.
						</h2>
						<h3>Conecte-se.|</h3>
					</div>

					<div class="call-action">
						<a href="#" class="btn-round">
							<i class="icon-font-bussola-01"></i>
							Continuar no site
						</a>

						<a href="#" class="play-video btn_vídeo_home">
							<i class="icon-play2"></i>
						</a>
					</div>

					<nav>
						<ol class="nav-links">
							<li><a href="<?php $p = get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">Blog Conecta</a></li>
							<li><a href="<?php $p = get_page_by_title("Atendimento e Suporte"); echo get_permalink($p->ID); ?>">Atendimento e Suporte</a></li>
							<li><a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="current">Área do Cliente</a></li>
						</ol>
						<ol class="nav-share">
							<li><a href="https://www.facebook.com/copeltelecom/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/copeltelecom" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company/copel-telecom" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCWLv_uuedAttlRGCpDhI3fg" target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ol>
					</nav>

				</section>
			</div>

		</div>
		
		<?php wp_footer(); ?>

	</body>
</html>