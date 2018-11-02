<?php 

	get_header('old');

	the_post();

	get_template_part('templates/faq', 'page' );

	get_footer('old');

?>