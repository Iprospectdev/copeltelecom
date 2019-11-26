<?php

	require_once('../../../../../wp-load.php');

	global $wpdb;

	$filename = 'contato_empresas_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM contatos_produtos");

	$contents = "NOME\t";
	$contents .= "TELEFONE \t";
	$contents .= "EMAIL \t";
	$contents .= "EMPRESA \t";
	$contents .= "PRODUTO \t";
	$contents .= "MENSAGEM \t";
	$contents .= "DATA \t \n";

	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);

	if ($contatos): foreach($contatos as $contato):
		$contents .= $contato->nome . "\t";
		$contents .= $contato->telefone . "\t";
		$contents .= $contato->email . "\t";
		$contents .= $contato->empresa . "\t";
		$contents .= $contato->produto . "\t";
		$contents .= $contato->mensagem . "\t";
		$contents .= $contato->created . "\t \n";
	endforeach; endif;

	echo $contents;

	exit();

?>