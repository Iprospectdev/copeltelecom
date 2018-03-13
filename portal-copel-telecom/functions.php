<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

add_theme_support( 'post-thumbnails' );

/*

	#
	# WebServices
	#

	# Cidades
	http://webprd/wvtweb/rest/portal/cidades/pr/

	# Planos por Cidade
	http://webprd/wvtweb/rest/portal/produtos/J/curitiba
	http://webprd/wvtweb/rest/portal/produtos/F/maringa

	# Link WVT
	http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf?s=13&locate=CURITIBA&p=f

*/

switch (get_bloginfo("url")) {
	case 'http://www.copeltelecom.com/site':
		define(WEBSERVICE, "http://webprd");
		define(LINK_WVT, "http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
	case 'http://hml.copeltelecom.com/site':
		define(WEBSERVICE, "http://webhml");
		define(LINK_WVT, "http://hml.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
	default:
		define(WEBSERVICE, "http://hml.copel.com");
		define(LINK_WVT, "http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
}

# Frameworks
include dirname(__FILE__) . "/_theme/metabox/meta-box.php";
include dirname(__FILE__) . "/_theme/titan-framework/titan-framework-embedder.php";

# Post Types
include dirname(__FILE__) .  "/_theme/posttypes.php";
include dirname(__FILE__) .  "/_theme/metabox.php";
include dirname(__FILE__) .  "/_theme/taxonomies.php";

# Pages
include dirname(__FILE__) . "/_theme/pages.php";
include dirname(__FILE__) . "/_theme/pages-empresas.php";

# Forms
include dirname(__FILE__) . "/_theme/contato/contato-admin.php";
include dirname(__FILE__) . "/_theme/ligar/ligar-admin.php";
include dirname(__FILE__) . "/_theme/gravacao/gravacao-admin.php";
include dirname(__FILE__) . "/_theme/rav/rav-admin.php";
include dirname(__FILE__) . "/_theme/ipdireto/ipdireto-admin.php";
 
# Options titan framework
include dirname(__FILE__) .  "/_theme/option.php"; 

# Classes
include dirname(__FILE__) .  "/_theme/Services.php";
include dirname(__FILE__) .  "/_theme/custom_search.php";

# Scripts
function theme_scripts() {

	wp_enqueue_style ( 'css', get_template_directory_uri() . '/_assets/css/all.min.css' );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/_assets/js/all.min.js');

	wp_localize_script(
		'js',
		'copel',
		array(
			'ajax_url'      => admin_url( 'admin-ajax.php' ),
			'template' 		=> get_bloginfo('template_url'), 
			'url' 			=> get_bloginfo('url')."/",
			'query_vars' 	=> json_encode( $wp_query->query )
		)
	);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

# Custom Admin
function remove_admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('about');
	$wp_admin_bar->remove_menu('wporg');
	$wp_admin_bar->remove_menu('documentation');
	$wp_admin_bar->remove_menu('support-forums');
	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

add_filter('show_admin_bar', '__return_false');

# Custom Admin
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

function custom_admin() {
	wp_enqueue_style ( 'custom-admin', get_template_directory_uri() . '/_assets/css/admin.min.css' );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/_assets/js/admin.min.js');
}
add_action('admin_enqueue_scripts', 'custom_admin');
add_action('login_enqueue_scripts', 'custom_admin');

// Icones de Perguntas Frequentes
function iconeFaq($slugTax){
	switch ($slugTax) {
		case 'planos-e-servicos':
			echo  'i-faq-planos'; 
			break;
		case 'sua-conta':
			echo  'i-faq-conta'; 
			break;
		case 'wifi':
			echo  'i-faq-wifi'; 
			break;
		case 'suporte-tecnico':
			echo  'i-faq-suporte'; 
			break;
		
		default:
			echo  'i-faq-conta'; 
			break;
	}
}

// Get Categories without LINK
function get_the_categorias($id) {
	$categorias = get_the_terms( $id, "category" );
	if ($categorias) {
		foreach ($categorias as $cat) {
			$return[] = $cat->name;
		}
		echo implode(", ", $return);

	} else {
		echo "Nenhuma Categoria";
	}
}

// Prefix Blog nos Posts
// function add_rewrite_rules( $wp_rewrite ) {
// 	$new_rules = array(
// 		'blog/page/(.+?)/?$' => 'index.php?post_type=post&paged='. $wp_rewrite->preg_index(1),
// 		'blog/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
// 	);
 
// 	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
// }
// add_action('generate_rewrite_rules', 'add_rewrite_rules');
 
 
function change_blog_links($post_link, $id=0){
 
	$post = get_post($id);
 
	if( is_object($post) && $post->post_type == 'post'){
		return home_url('/blog/'. $post->post_name.'/');
	}
 
	return $post_link;
}
add_filter('post_link', 'change_blog_links', 1, 3);


// Verifica se não existe nenhuma função com o nome count_post_views
if ( ! function_exists( 'count_post_views' ) ) {
    // Conta os views do post
    function count_post_views () { 
        // Garante que vamos tratar apenas de posts
        if ( is_single() ) {
        
            // Precisamos da variável $post global para obter o ID do post
            global $post;
            
            // Se a sessão daquele posts não estiver vazia
            if ( empty( $_SESSION[ 'post_counter_' . $post->ID ] ) ) {
                
                // Cria a sessão do posts
                $_SESSION[ 'post_counter_' . $post->ID ] = true;
            
                // Cria ou obtém o valor da chave para contarmos
                $key = 'post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                
                // Se a chave estiver vazia, valor será 1
                if ( empty( $key_value ) ) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } // Verifica o valor
                
            } // Checa a sessão
            
        } // is_single
        
        return;
        
    }
    add_action( 'get_header', 'count_post_views' );
}
