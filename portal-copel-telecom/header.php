<?php

	session_start();

	$white_list = array(
		"Blog",
		"Atendimento e Suporte"
	);

	$casa = array(
		"Copel Telecom",
		"Planos"
	);

	$empresas = array(
		"Para Empresas",
		"rav",
		"Internet",
			"Banda extra larga empresarial",
			"Internet Corporativa",
			"IP Direto",
		"Redes",
			"Rede de alta velocidade para empresas",
			"Conexão ethernet para empresas",
			"Rede de alta velocidade para operadoras",
			"Conexão ethernet para operadoras",
			"Conexão ethernet em pontos para operadoras",
		"Canal Dedicado",
			"Canal Dedicado para empresas",
			"Canal Dedicado para operadoras",
		"Data Center",
			"Colocation Copel Telecom",
		"Serviços Públicos",
		"Operadoras e Provedores",
			"Ofertas Públicas"
	);

	if ($_SESSION["copeltelecom"]) {
		$session = json_decode($_SESSION["copeltelecom"]);
		$services = new Services;
		$profile = $services->profile();
		$planos = json_decode($services->planos($profile->tipo->name,$profile->cidade));
		if(!$planos->bel){
			$planos = json_decode($services->planos("F","CURITIBA"));
			$session->cidade = "Curitiba";
		}
	} else {

		$services = new Services;

		$session =  (object) array(
			"cidade" => "CURITIBA",
			"planos" => (object) json_decode($services->planos("F","CURITIBA")),
			"tipo" => (object) array(
				"name" => "F",
				"text" => "NA SUA CASA",
				"icon" => "icon-font-bussola-02"
			)
		);
	}
	
?>
<!DOCTYPE html>
<html lang="pt-BR" ng-app="copeltelecom">
<head>

	<title><?php
		if (is_home())  {
			bloginfo("name");
		}  else {
			bloginfo("name");
			wp_title(" | ");
		}
	?></title>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-180x180.png" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-194x194.png" sizes="194x194" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/android-chrome-192x192.png" sizes="192x192" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="manifest" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/manifest.json" />
	<link rel="mask-icon" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="msapplication-TileImage" content="<?php bloginfo("template_url"); ?>/_assets/images/favicons/mstile-144x144.png" />
	<meta name="theme-color" content="#ffffff" />

	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900,italic' rel='stylesheet' type='text/css'>
	<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>

	<?php wp_head(); ?>

</head>

<body ng-controller="copel" class="font-large">

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

<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=278015082323433";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<?php if (!$_SESSION["copeltelecom"]): ?>
<?php $_SESSION["copeltelecom"] = json_encode($session); ?>
<section class="modal-cidade">
	<input type="hidden" name="session-tmp" id="session-tmp" value='<?php echo json_encode($session); ?>' />
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-9">
				<aside>
					<span>Você está em:</span>
					<em><?php echo $session->cidade; ?><i class="fa fa-map-marker"></i></em>
					<nav>
						<a href="" ng-click="go_curitiba()">Confirmar</a>
						<a href="" ng-click="go_cidade()">Trocar Cidade</a>
					</nav>
				</aside>
			</div>
		</div>
	</div>
</section>
<?php endif ?>

<?php get_template_part('menu','mobile'); ?>

<div class="nav-contatos sb-slide <?php echo (is_page("Ouvidoria") || is_page("Acessibilidade")) ? "hide" : ""; ?>">

	<div class="nav-contatos-open">
		<i class="i-nc-whats"></i>
		<small>PRECISA DE AJUDA?</small>FALE COM A GENTE
		<span class="nav-contatos-close">x</span>
	</div>
	
	<ul>
		
		<?php if(!is_page('RAV') && !is_page('IP Direto')): ?>
		<li>
			<a class="btn_ligar" id="smchat-agent-button" href="https://chat.softmarketing.com.br/copel/chat?locale=pt-br" target="_blank" onclick="SMChat.Objects.ChatPopups['55c37642ea2f0ff3'].open();return false;">
				<i class="i-nc-chat"></i>
				<span>
					<small>Contate via</small>chat
				</span>
			</a>
	    <script type="text/javascript" src="https://chat.softmarketing.com.br/copel/js/compiled/chat_popup.js"></script>
	    <script type="text/javascript">SMChat.ChatPopup.init({"id":"55c37642ea2f0ff3","url":"https:\/\/chat.softmarketing.com.br\/copel\/chat?locale=pt-br",
	            "preferIFrame":true,"modSecurity":false,"width":640,"height":480,"resizable":true,
	            "styleLoader":"https:\/\/chat.softmarketing.com.br\/copel\/chat\/style\/popup"});</script>
	    <div id="smchat-invitation"></div><script type="text/javascript" src="https://chat.softmarketing.com.br/copel/js/compiled/widget.js"></script>
	    <script type="text/javascript">SMChat.Widget.init({"inviteStyle":"https:\/\/chat.softmarketing.com.br\/copel\/styles\/invitations\/default\/invite.css",
	            "requestTimeout":10000,"requestURL":"https:\/\/chat.softmarketing.com.br\/copel\/widget","locale":"pt-br","visitorCookieName":"SMCHAT_VisitorID"})</script>
			</li><!-- / smchat button --> 
		<?php endif; ?>

		<li>
			<a class="btn_ligar" href="<?php $p = get_page_by_title("Ligar para meu número"); echo get_permalink($p->ID); ?>">
				<i class="i-nc-ligamos"></i>
				<span>
					<small>Ligamos para você</small>DEIXE SEU NÚMERO
				</span>
			</a>
		</li>
		<li>
			<a class="btn_ligar" href="<?php $p = get_page_by_title("Contato"); echo get_permalink($p->ID); ?>">
				<i class="i-nc-ligue"></i>
				<span>
					<small>ENTRE EM CONTATO</small>0800 41 41 81
				</span>
			</a>
		</li>
		<li>
			<a href="https://api.whatsapp.com/send?phone=5541929024181" target="_blank">
				<i class="i-nc-whats"></i>
				<span>
					<small>ATENDIMENTO WHATSAPP</small>55 41 9 29024181
				</span>
			</a>
		</li>
	</ul>

</div>


<div id="sb-site">

	<header class="header-main <?php echo (is_home() || is_page(array('Para sua Casa', 'Para Empresas'))) ? 'is_home' : ''; ?>">

		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<nav class="nav-section menu_principal">
						<?php
							$residencial = get_page_by_title("Para sua Casa");
							$empresarial = get_page_by_title("Para Empresas");
						?>
						<ol>
							<?php if ($session->tipo->name == "J"): ?>
								<li>
									<?php if(is_page("Para sua Casa")){ ?>
										<h1 class="current">Para sua casa</h1>
									<?php }else{ ?>
										<a href="<?php echo get_permalink($residencial->ID); ?>" class="<?php echo (is_page($casa)) ? "current" : ""; ?>">Para sua casa</a>
									<?php } ?>
								</li>
								<li>
									<?php if(is_home() || is_page($empresas)){ ?>
										<h1 class="current">Para empresas</h1>
									<?php }else{ ?>
										<a href="<?php echo get_permalink($empresarial->ID); ?>">Para empresas</a>
									<?php } ?>
								</li>
							<?php else: ?>
								<li>
									<?php if(is_home() || is_page("Para sua Casa")){ ?>
										<h1 class="current">Para sua casa</h1>
									<?php }else{ ?>
										<a href="<?php echo get_permalink($residencial->ID); ?>" class="<?php echo (is_page($casa)) ? "current" : ""; ?>">Para sua casa</a>
									<?php } ?>
								</li>
								<li>
									<?php if(is_page($empresas)){?>
										<h1 class="current">Para empresas</h1>
									<?php }else{ ?>
										<a href="<?php echo get_permalink($empresarial->ID); ?>">Para empresas</a>
									<?php } ?>
									
								</li>
							<?php endif ?>
							<li><a href="<?php $p = get_page_by_title('Blog'); echo get_permalink($p->ID); ?>" class="<?php echo (is_page("Conecta")) ? "current" : ""; ?>">Blog Conecta</a></li>
						</ol>
						<span class="nav-city">
							<em><a href="" ng-click="go_cidade()"><?php echo $session->cidade; ?></a></em>
							<i class="fa fa-map-marker"></i>
						</span>
					</nav>
				</div>
				<div class="col-md-5 hidden-sm">
					<nav class="nav-out">
						<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">Área do Cliente</a>
						<a href="<?php $p = get_page_by_title("Atendimento e Suporte"); echo get_permalink($p->ID); ?>">Atendimento e Suporte</a>
						<div class="nav-acessibilidade">
							<a href="#" class="contraste"><i class="fa fa-adjust"></i></a>
							<a href="#" class="font-more"><i class="fa fa-font"></i>+</a>
							<a href="#" class="font-default"><i class="fa fa-font"></i>-</a>
						</div>
					</nav>
				</div>
			</div>

			<div class="nav-site menu_navegacao">

				<a href="<?php bloginfo("url"); ?>/" class="logo-copel">
					<img src="<?php bloginfo("template_url"); ?>/_assets/images/logo-copel-header.png" alt="<?php bloginfo("name"); ?>" />
				</a>
				
				<?php if (is_page($empresas) || $session->tipo->name == "J" && is_home() ): ?>
					<ol>
						<li><a href="<?php $p = get_page_by_title("Internet"); echo get_permalink($p->ID); ?>">Internet</a></li>
						<li><a href="<?php $p = get_page_by_title("Redes"); echo get_permalink($p->ID); ?>">Redes</a></li>
						<li><a href="<?php $p = get_page_by_title("Canal Dedicado"); echo get_permalink($p->ID); ?>">Canal Dedicado</a></li>
						<li><a href="<?php $p = get_page_by_title("Data Center"); echo get_permalink($p->ID); ?>">Data Center</a></li>
						<li><a href="<?php $p = get_page_by_title("Serviços Públicos"); echo get_permalink($p->ID); ?>">Serviços Públicos</a></li>
						<li><a href="<?php $p = get_page_by_title("Operadoras e Provedores"); echo get_permalink($p->ID); ?>">Operadoras e Provedores</a></li>
					</ol>
				<?php else: ?>
					<ol>
						<li><a href="<?php $p = get_page_by_title("Copel Telecom"); echo get_permalink($p->ID); ?>">Quem é a Copel Telecom</a></li>
						<li><a href="<?php $p = get_page_by_title("Planos"); echo get_permalink($p->ID); ?>">Planos e preços</a></li>
						<li><a href="<?php echo get_post_type_archive_link('faq'); ?>">Perguntas frequentes</a></li>
					</ol>	
				<?php endif ?>
				
			</div>
			
		</div>

		<?php get_template_part('header','mobile'); ?>

	</header>

<script type="text/javascript" src="https://chat.softmarketing.com.br/smchat/js/compiled/chat_popup.js"></script>
<script type="text/javascript">SMChat.ChatPopup.init({"id":"5629507674a80ec3","url":"https:\/\/chat.softmarketing.com.br\/smchat\/chat?locale=pt-br","preferIFrame":((window.innerWidth < 480)?false:true),"modSecurity":false,"width":640,"height":480,"resizable":true,"styleLoader":"https:\/\/chat.softmarketing.com.br\/smchat\/chat\/style\/popup"});</script>
