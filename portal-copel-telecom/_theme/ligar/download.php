<?php

	require_once('../../../../../wp-load.php');

	global $wpdb;

	$filename = 'ligacoes_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM contatos_telefone");

	$contents = "NOME\t";
	$contents .= "TELEFONE \t";
	$contents .= "EMAIL \t";
	$contents .= "DOCUMENTO \t";
	$contents .= "TIPO DE DOCUMENTO \t";
	$contents .= "CONTRATO \t";
	$contents .= "MOTIVO \t";
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
		$contents .= utf8_decode($contato->nome) . "\t";
		$contents .= $contato->telefone . "\t";
		$contents .= $contato->email . "\t";
		$contents .= $contato->documento . "\t";
		$contents .= $contato->tipo_documento . "\t";
		$contents .= $contato->contrato . "\t";
		$contents .= utf8_decode($contato->motivo) . "\t";
		$contents .= utf8_decode($contato->mensagem) . "\t";
		$contents .= $contato->created . "\t \n";
	endforeach; endif;

	echo utf8_decode(strip_tags($contents));

	exit();

?>