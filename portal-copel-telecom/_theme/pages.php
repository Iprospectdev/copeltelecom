<?php 

#...................#
#					#
# Páginas			#
#					#
#...................#







$page_bussola = get_page_by_title("Bussola", "", "page" );
if (!$page_bussola) {
	$page_bussola_args = array(
		'post_content'   => "",
		'post_title'     => "Bussola",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_bussola_args );
}

$page_rav = get_page_by_title("RAV", "", "page" );
if (!$page_rav) {
	$page_rav_args = array(
		'post_content'   => "",
		'post_title'     => "RAV",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_rav_args );
}

$page_ligar = get_page_by_title("Ligar para meu número", "", "page" );
if (!$page_ligar) {
	$page_ligar_args = array(
		'post_content'   => "",
		'post_title'     => "Ligar para meu número",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_ligar_args );
}

$page_contato = get_page_by_title("Contato", "", "page" );
if (!$page_contato) {
	$page_contato_args = array(
		'post_content'   => "",
		'post_title'     => "Contato",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_contato_args );
}

$page_blog = get_page_by_title("Blog", "", "page" );
if (!$page_blog) {
	$page_blog_args = array(
		'post_content'   => "",
		'post_title'     => "Blog",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_blog_args );
}

$page_comparativo = get_page_by_title("Comparativo", "", "page" );
if (!$page_comparativo) {
	$page_comparativo_args = array(
		'post_content'   => "",
		'post_title'     => "Comparativo",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_comparativo_args );
}

$page_planos = get_page_by_title("Planos", "", "page" );
if (!$page_planos) {
	$page_planos_args = array(
		'post_content'   => "",
		'post_title'     => "Planos",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_planos_args );
}

$page_vantagens = get_page_by_title("Vantagens", "", "page" );
if (!$page_vantagens) {
	$page_vantagens_args = array(
		'post_content'   => "",
		'post_title'     => "Vantagens",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_vantagens_args );
}

$page_areadocliente = get_page_by_title("Área do Cliente Login", "", "page" );
if (!$page_areadocliente) {
	$page_areadocliente_args = array(
		'post_content'   => "",
		'post_title'     => "Área do Cliente Login",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_areadocliente_args );
}

$page_atendimentoesuporte = get_page_by_title("Atendimento e Suporte", "", "page" );
if (!$page_atendimentoesuporte) {
	$page_atendimentoesuporte_args = array(
		'post_content'   => "",
		'post_title'     => "Atendimento e Suporte",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_atendimentoesuporte_args );
}

$page_solicitargravacao = get_page_by_title("Solicitação de Gravação", "", "page" );
if (!$page_solicitargravacao) {
	$page_solicitargravacao_args = array(
		'post_content'   => "",
		'post_title'     => "Solicitação de Gravação",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_solicitargravacao_args );
}

$page_ouvidoria = get_page_by_title("Ouvidoria", "", "page" );
if (!$page_ouvidoria) {
	$page_ouvidoria_args = array(
		'post_content'   => "",
		'post_title'     => "Ouvidoria",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_ouvidoria_args );
}

$page_speedtest = get_page_by_title("Speedtest", "", "page" );
if (!$page_speedtest) {
	$page_speedtest_args = array(
		'post_content'   => "",
		'post_title'     => "Speedtest",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_speedtest_args );
}

$page_speedtest = get_page_by_title("Speedtest novo", "", "page" );
if (!$page_speedtest) {
	$page_speedtest_args = array(
		'post_content'   => "",
		'post_title'     => "Speedtest novo",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_speedtest_args );
}

$page_acessibilidade = get_page_by_title("Acessibilidade", "", "page" );
if (!$page_acessibilidade) {
	$page_acessibilidade_args = array(
		'post_content'   => "",
		'post_title'     => "Acessibilidade",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_acessibilidade_args );
}

$page_prconectado = get_page_by_title("Paraná Conectado", "", "page" );
if (!$page_prconectado) {
	$page_prconectado_args = array(
		'post_content'   => "",
		'post_title'     => "Paraná Conectado",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_prconectado_args );
}

$page_disponibilidade = get_page_by_title("Wvt Verificar Disponibilidade", "", "page" );
if (!$page_disponibilidade) {
	$page_disponibilidade_args = array(
		'post_content'   => "",
		'post_title'     => "Wvt Verificar Disponibilidade",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_disponibilidade_args );
}

$page_cadastro = get_page_by_title("Wvt Cadastro Completo de Cliente", "", "page" );
if (!$page_cadastro) {
	$page_cadastro_args = array(
		'post_content'   => "",
		'post_title'     => "Wvt Cadastro Completo de Cliente",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_cadastro_args );
}

$page_casa = get_page_by_title("Para sua Casa", "", "page" );
if (!$page_casa) {
	$page_casa_args = array(
		'post_content'   => "",
		'post_title'     => "Para sua Casa",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_casa_args );
}

$page_erronetflix = get_page_by_title("404 Netflix", "", "page" );
if (!$page_erronetflix) {
	$page_erronetflix_args = array(
		'post_content'   => "",
		'post_title'     => "404 Netflix",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_erronetflix_args );
}

$page_netflix = get_page_by_title("Netflix", "", "page" );
if (!$page_netflix) {
	$page_netflix_args = array(
		'post_content'   => "",
		'post_title'     => "Netflix",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_netflix_args );
}

$page_esporteinterativo = get_page_by_title("Esporte Interativo", "", "page" );
if (!$page_esporteinterativo) {
	$page_esporteinterativo_args = array(
		'post_content'   => "",
		'post_title'     => "Esporte Interativo",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_esporteinterativo_args );
}


