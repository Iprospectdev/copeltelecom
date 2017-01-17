<?php 
	$html = file_get_contents(get_template_directory().'/wvt/verificar-disponibilidade.html');
	$html = str_replace('../_assets', get_bloginfo('template_url')."/_assets", $html);
	echo $html;
?>