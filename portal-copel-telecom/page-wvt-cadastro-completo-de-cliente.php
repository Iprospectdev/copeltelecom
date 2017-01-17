<?php 
	$html = file_get_contents(get_template_directory().'/wvt/cadastro-completo-de-cliente.html');

	// respostas
	// $html = file_get_contents($url.'/wvt/wvt-resposta-endereco-sem-geo.html');
	// $html = file_get_contents($url.'/wvt/wvt-resposta-estudo-de-viavilidade.html');
	// $html = file_get_contents($url.'/wvt/wvt-resposta-estudo-de-viavilidade-2.html');
	$html = str_replace('../_assets', get_bloginfo('template_url')."/_assets", $html);
	echo $html;
?>