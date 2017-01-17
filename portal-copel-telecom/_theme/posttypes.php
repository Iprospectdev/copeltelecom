<?php

add_image_size("thumb-blog", "380", "189", true );

/*
 *
 * FAQ
 *
 */
$labels = array(
	'name'                => "FAQ",
	'singular_name'       => "FAQ",
	'menu_name'           => "FAQ",
	'name_admin_bar'      => "FAQ",
);
$args = array(
	'labels'              => $labels,
	'supports'            => array('title','editor'),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon'           => 'dashicons-format-status',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => true,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'faq', $args );


/*
 *
 * Documentos
 *
 */
$labels = array(
	'name'                => "Documentos",
	'singular_name'       => "Documento",
	'menu_name'           => "Documentos",
	'name_admin_bar'      => "Documentos",
);
$args = array(
	'labels'              => $labels,
	'supports'            => array('title'),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon'           => 'dashicons-admin-page',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => false,
	'exclude_from_search' => true,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'documentos', $args );


/*
 *
 * Slider Home
 *
 */
$labels = array(
	'name'                => "Slider Home",
	'singular_name'       => "Slider Home",
	'menu_name'           => "Slider Home",
	'name_admin_bar'      => "Slider Home",
);
$args = array(
	'labels'              => $labels,
	'supports'            => array('title'),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon'           => 'dashicons-slides',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => false,
	'exclude_from_search' => true,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'slider-home', $args );

