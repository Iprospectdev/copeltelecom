<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');

add_theme_support( 'post-thumbnails' );


function cc_mime_types($mimes) {
       $mimes['svg'] = 'image/svg+xml';
       return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

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
		define("WEBSERVICE", "http://webprd");
		define("LINK_WVT", "http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
	case 'http://hml.copeltelecom.com/site':
		define("WEBSERVICE", "http://webhml");
		define("LINK_WVT", "http://hml.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
	default:
		define("WEBSERVICE", "http://hml.copeltelecom.com");
		define("LINK_WVT", "http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf");
		break;
}

# Frameworks
include dirname(__FILE__) . "/_theme/metabox/meta-box.php";

# Post Types
include dirname(__FILE__) .  "/_theme/posttypes.php";
include dirname(__FILE__) .  "/_theme/metabox.php";
include dirname(__FILE__) .  "/_theme/taxonomies.php";

# Pages
include dirname(__FILE__) . "/_theme/pages.php";
include dirname(__FILE__) . "/_theme/pages-empresas.php";

# Forms
include dirname(__FILE__) . "/_theme/contato/contato-admin.php";
include dirname(__FILE__) . "/_theme/empresas/empresas-admin.php";
include dirname(__FILE__) . "/_theme/ligamos/ligamos-admin.php";
// include dirname(__FILE__) . "/_theme/ligar/ligar-admin.php";
include dirname(__FILE__) . "/_theme/gravacao/gravacao-admin.php";
// include dirname(__FILE__) . "/_theme/rav/rav-admin.php";
// include dirname(__FILE__) . "/_theme/ipdireto/ipdireto-admin.php";

# Classes
include dirname(__FILE__) .  "/_theme/Services.php";
include dirname(__FILE__) .  "/_theme/custom_search.php";

# Scripts

function vars(){ 
	session_start();
?>
	<script type="text/javascript">
		var copel = <?php echo json_encode(array(
			'ajax_url'      => admin_url( 'admin-ajax.php' ),
			'template' 		=> get_bloginfo('template_url'), 
			'url' 			=> get_bloginfo('url')."/",
			'query_vars' 	=> json_encode( $wp_query->query ),
			'session'		=> $_SESSION['copeltelecom'] ? json_decode($_SESSION['copeltelecom']) : ''
		)); ?>;
	</script>
<?php 
}
add_action ( 'wp_head', 'vars' );


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
	wp_enqueue_style ( 'custom-admin', get_template_directory_uri() . '/_assets/old/css/admin.min.css' );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/_assets/old/js/admin.min.js');
}
add_action('admin_enqueue_scripts', 'custom_admin');
add_action('login_enqueue_scripts', 'custom_admin');

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
 
function change_blog_links($post_link, $id=0){
 
	$post = get_post($id);
 
	if( is_object($post) && $post->post_type == 'post'){
		return home_url('/blog/'. $post->post_name.'/');
	}
 
	return $post_link;
}
add_filter('post_link', 'change_blog_links', 1, 3);


if ( ! function_exists( 'count_post_views' ) ) {
    function count_post_views () { 
        if ( is_single() ) {
            global $post;
            if ( empty( $_SESSION[ 'post_counter_' . $post->ID ] ) ) {
                $_SESSION[ 'post_counter_' . $post->ID ] = true;
                $key = 'post_counter';
                $key_value = get_post_meta( $post->ID, $key, true );
                if ( empty( $key_value ) ) {
                    $key_value = 1;
                    update_post_meta( $post->ID, $key, $key_value );
                } else {
                    $key_value += 1;
                    update_post_meta( $post->ID, $key, $key_value );
                }
            }
        }
        return;
    }
    add_action( 'get_header', 'count_post_views' );
}

if( function_exists('acf_add_options_page') ) {
	
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Configurações Gerais',
		'menu_title' 	=> 'Configurações Gerais',
		'menu_slug' 	=> 'configuracoes-gerais',
		'capability' 	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-lightbulb',
		'redirect' 		=> false
	));
}