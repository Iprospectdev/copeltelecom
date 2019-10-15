<?php
	session_start();

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
		$_SESSION["copeltelecom"] = json_encode($session);	
	}
?>

<div class="sb-slidebar sb-left">
	<ul class="sb-menu">
		<li class="sb-close"><a href="<?php bloginfo("url"); ?>/" class="logo-copel"><img src="<?php bloginfo("template_url"); ?>/_assets/images/logo-copel-white.svg" alt="<?php bloginfo("name"); ?>"></a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title("Para sua casa"); echo get_permalink($p->ID); ?>" class="current">Para sua casa</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title("Para Empresas"); echo get_permalink($p->ID); ?>">Para empresas</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title("Atendimento e Suporte"); echo get_permalink($p->ID); ?>">Atendimento e Suporte</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title("Copel Telecom"); echo get_permalink($p->ID); ?>">Quem é a Copel Telecom</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title("Planos"); echo get_permalink($p->ID); ?>">Planos e preços</a></li>
		<li class="sb-close"><a href="<?php echo get_post_type_archive_link('faq'); ?>">Perguntas frequentes</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title('Comparativo'); echo get_permalink($p->ID); ?>">Compare</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title('Speedtest'); echo get_permalink($p->ID); ?>">Teste de Velocidade</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>">Acessibilidade</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">Blog Conecta</a></li>
		<li class="sb-close"><a href="http://www.copeltelecom.com/autoatendimento" target="_blank">Área do Cliente</a></li>
		<li class="sb-close"><a href="<?php $p = get_page_by_title('Contato'); echo get_permalink($p->ID); ?>">Fale Conosco</a></li>
	</ul>

	<ul class="sb-menu sb-cidade">
		<li class="sb-close"><a href="" ng-click="go_cidade()"><i class="fa fa-map-marker"></i> <?php echo $session->cidade; ?></a></li>
	</ul>
</div>