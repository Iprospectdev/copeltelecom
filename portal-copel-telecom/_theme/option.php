<?php

add_action( 'tf_create_options', 'conteudo_config' );
function conteudo_config() {

	$titan = TitanFramework::getInstance( 'copeltelecom' );

	$copeltelecom = $titan->createAdminPanel( array(
		'name' => 'Copel Telecom',
		'icon' => 'dashicons-lightbulb'
	));

	$copeltelecom->createOption( array(
	    'name' => 'Geral',
	    'type' => 'heading',
	) );

	$copeltelecom->createOption( array(
		'name' => 'Solicitação de Gravação',
		'id' => 'solicitacao_de_gravacao',
		'type' => 'text',
		'desc' => 'Email que serão encaminhadas as SOLICITAÇÕES DE GRAVAÇÃO. Caso tenham outros emails, separa utilizando virgula(,).'
	));

	$copeltelecom->createOption( array(
		'name' => 'Contato do Site',
		'id' => 'contato_site',
		'type' => 'text',
		'desc' => 'Email que serão encaminhadas os CONTATO DO SITE. Caso tenham outros emails, separa utilizando virgula(,).'
	));

	$copeltelecom->createOption( array(
		'name' => 'Rede de Alta Velocidade',
		'id' => 'form_rav',
		'type' => 'text',
		'desc' => 'Email que serão encaminhadas os emails do Rede de Alta Velocidade. Caso tenham outros emails, separa utilizando virgula(,).'
	));

	$copeltelecom->createOption( array(
		'name' => 'IP Direto',
		'id' => 'form_ipdireto',
		'type' => 'text',
		'desc' => 'Email que serão encaminhadas os emails do IP Direto. Caso tenham outros emails, separa utilizando virgula(,).'
	));

	$copeltelecom->createOption( array(
		'type' => 'save',
		'save' => 'SALVAR AS CONFIGURAÇÕES',
		'use_reset' => false
	) );

}	