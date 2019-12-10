<?php

	require_once('../../../../../wp-load.php');

	global $wpdb;

	$inicio = $_POST['ano'].'-'.$_POST['mes'].'-01 00:00:00';
	$fim = $_POST['ano'].'-'.$_POST['mes'].'-31 23:59:00';

	$filename = 'contato_empresas_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM contatos_produtos WHERE created BETWEEN '$inicio' AND '$fim'");

	$contents = "NOME\t";
	$contents .= "TELEFONE \t";
	$contents .= "EMAIL \t";
	$contents .= "EMPRESA \t";
	$contents .= "PRODUTO \t";
	$contents .= "MENSAGEM \t";
	$contents .= "DATA \t \n";

	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");
	header ("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"{$filename}\"" );
	header ("Content-Description: PHP Generated Data" );

	if ($contatos): foreach($contatos as $contato):
		$contents .= $contato->nome . "\t";
		$contents .= $contato->telefone . "\t";
		$contents .= $contato->email . "\t";
		$contents .= $contato->empresa . "\t";
		$contents .= $contato->produto . "\t";
		$contents .= $contato->mensagem . "\t";
		$contents .= $contato->created . "\t \n";
	endforeach; endif;

	echo utf8_decode(strip_tags($contents));

	exit();

?>