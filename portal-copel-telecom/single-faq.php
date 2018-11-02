<?php 

	get_header('old');

	the_post();

	if(get_the_title()=='Entendendo a sua fatura'){
		get_template_part('single', 'faq-entendendo-sua-fatura' );
	}else{
		get_template_part('templates/faq', 'page' );	
	}
	

	get_footer('old');

?>