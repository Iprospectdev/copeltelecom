<?php 
$page_empresa = get_page_by_title("Para Empresas", "", "page" );
if (!$page_empresa) {
	$page_empresa_args = array(
		'post_content'   => "",
		'post_title'     => "Para Empresas",
		'post_status'    => 'publish',
		'post_type'      => 'page'
	);
	wp_insert_post( $page_empresa_args );
}

if($page_empresa){
	$page_empresasinternet = get_page_by_title("IP Direto", "", "page" );
	if (!$page_empresasinternet) {
		$page_empresasinternet_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "IP Direto",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasinternet_args );
	}
	$page_empresasinternet = get_page_by_title("Internet", "", "page" );
	if (!$page_empresasinternet) {
		$page_empresasinternet_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Internet",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasinternet_args );
	}
	if ($page_empresasinternet) {
		$page_empresasbandaextralarga = get_page_by_title("Banda extra larga empresarial", "", "page" );
		if(!$page_empresasbandaextralarga){
			$page_empresasbandaextralarga_args = array(
				'post_parent'	 => $page_empresasinternet->ID,
				'post_content'   => "",
				'post_title'     => "Banda extra larga empresarial",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_empresasbandaextralarga_args );
		}
	}
	if ($page_empresasinternet) {
		$page_empresasinternetcorporativa = get_page_by_title("Internet Corporativa", "", "page" );
		if(!$page_empresasinternetcorporativa){
			$page_empresasinternetcorporativa_args = array(
				'post_parent'	 => $page_empresasinternet->ID,
				'post_content'   => "",
				'post_title'     => "Internet Corporativa",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_empresasinternetcorporativa_args );
		}
	}
	$page_empresasredes = get_page_by_title("Redes", "", "page" );
	if (!$page_empresasredes) {
		$page_empresasredes_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Redes",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasredes_args );
	}
	if ($page_empresasredes) {
		$page_rav_para_empresas = get_page_by_title("Rede de alta velocidade para empresas", "", "page" );
		if(!$page_rav_para_empresas){
			$page_rav_para_empresas_args = array(
				'post_parent'	 => $page_empresasredes->ID,
				'post_content'   => "",
				'post_title'     => "Rede de alta velocidade para empresas",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_rav_para_empresas_args );
		}

		$page_ethernet_para_empresas = get_page_by_title("Conexão ethernet para empresas", "", "page" );
		if(!$page_ethernet_para_empresas){
			$page_ethernet_para_empresas_args = array(
				'post_parent'	 => $page_empresasredes->ID,
				'post_content'   => "",
				'post_title'     => "Conexão ethernet para empresas",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_ethernet_para_empresas_args );
		}

		$page_rav_para_operadoras = get_page_by_title("Rede de alta velocidade para operadoras", "", "page" );
		if(!$page_rav_para_operadoras){
			$page_rav_para_operadoras_args = array(
				'post_parent'	 => $page_empresasredes->ID,
				'post_content'   => "",
				'post_title'     => "Rede de alta velocidade para operadoras",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_rav_para_operadoras_args );
		}

		$page_ethernet_para_operadoras = get_page_by_title("Conexão ethernet para operadoras", "", "page" );
		if(!$page_ethernet_para_operadoras){
			$page_ethernet_para_operadoras_args = array(
				'post_parent'	 => $page_empresasredes->ID,
				'post_content'   => "",
				'post_title'     => "Conexão ethernet para operadoras",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_ethernet_para_operadoras_args );
		}

		$page_ethernet_para_operadoras = get_page_by_title("Conexão ethernet em pontos para operadoras", "", "page" );
		if(!$page_ethernet_para_operadoras){
			$page_ethernet_para_operadoras_args = array(
				'post_parent'	 => $page_empresasredes->ID,
				'post_content'   => "",
				'post_title'     => "Conexão ethernet em pontos para operadoras",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_ethernet_para_operadoras_args );
		}
	}
	$page_empresascanaldedicado = get_page_by_title("Canal Dedicado", "", "page" );
	if (!$page_empresascanaldedicado) {
		$page_empresascanaldedicado_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Canal Dedicado",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresascanaldedicado_args );
	}
	if ($page_empresascanaldedicado) {
		$page_canaldedicado_para_empresas = get_page_by_title("Canal dedicado para empresas", "", "page" );
		if(!$page_canaldedicado_para_empresas){
			$page_canaldedicado_para_empresas_args = array(
				'post_parent'	 => $page_empresascanaldedicado->ID,
				'post_content'   => "",
				'post_title'     => "Canal dedicado para empresas",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_canaldedicado_para_empresas_args );
		}
		$page_canaldedicado_para_operadoras = get_page_by_title("Canal dedicado para operadoras", "", "page" );
		if(!$page_canaldedicado_para_operadoras){
			$page_canaldedicado_para_operadoras_args = array(
				'post_parent'	 => $page_empresascanaldedicado->ID,
				'post_content'   => "",
				'post_title'     => "Canal dedicado para operadoras",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_canaldedicado_para_operadoras_args );
		}
	}
	$page_empresasdatacenter = get_page_by_title("Data Center", "", "page" );
	if (!$page_empresasdatacenter) {
		$page_empresasdatacenter_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Data Center",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasdatacenter_args );
	}
	if ($page_empresasdatacenter) {
		$page_colocation = get_page_by_title("Colocation Copel Telecom", "", "page" );
		if(!$page_colocation){
			$page_colocation_args = array(
				'post_parent'	 => $page_empresasdatacenter->ID,
				'post_content'   => "",
				'post_title'     => "Colocation Copel Telecom",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_colocation_args );
		}
	}
	$page_empresasservicospublicos = get_page_by_title("Serviços Públicos", "", "page" );
	if (!$page_empresasservicospublicos) {
		$page_empresasservicospublicos_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Serviços Públicos",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasservicospublicos_args );
	}
	$page_empresasoperadoras = get_page_by_title("Operadoras e Provedores", "", "page" );
	if (!$page_empresasoperadoras) {
		$page_empresasoperadoras_args = array(
			'post_parent'	 => $page_empresa->ID,
			'post_content'   => "",
			'post_title'     => "Operadoras e Provedores",
			'post_status'    => 'publish',
			'post_type'      => 'page'
		);
		wp_insert_post( $page_empresasoperadoras_args );
	}
	if ($page_empresasoperadoras) {
		$page_ofertaspublicas = get_page_by_title("Ofertas Públicas", "", "page" );
		if(!$page_ofertaspublicas){
			$page_ofertaspublicas_args = array(
				'post_parent'	 => $page_empresasoperadoras->ID,
				'post_content'   => "",
				'post_title'     => "Ofertas Públicas",
				'post_status'    => 'publish',
				'post_type'      => 'page'
			);
			wp_insert_post( $page_ofertaspublicas_args );
		}
	}
}
 ?>