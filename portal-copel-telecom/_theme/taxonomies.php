<?php 

// FAQ
register_taxonomy(
	'faq-categoria',
	array('faq'),
	array(
		'label'				=> 'Categorias',
		'rewrite'			=> array( 'slug' => 'faq-categoria' ),
		'hierarchical' 		=> true,
		'show_admin_column'	=> true,
		'show_in_menu'		=> true,
		'show_admin_column'	=> true
	)
);

?>