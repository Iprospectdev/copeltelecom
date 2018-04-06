<?php 

	get_header();

	the_post();

	if(is_page('Entendendo sua fatura')){
		get_template_part('templates/faq', 'page' );	
	}else{
		get_template_part('single', 'faq-entendendo-sua-fatura' );
	}
	

	get_footer();

?>