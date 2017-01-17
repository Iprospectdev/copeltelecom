<?php

	require_once('../../../../../wp-load.php');

	global $wpdb;

	$filename = 'contato_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM contatos");

	$contents = "NOME\t";
	$contents .= "TELEFONE \t";
	$contents .= "EMAIL \t";
	$contents .= "DOCUMENTO \t";
	$contents .= "TIPO DE DOCUMENTO \t";
	$contents .= "CONTRATO \t";
	$contents .= "CEP \t";
	$contents .= "CIDADE \t";
	$contents .= "ESTADO \t";
	$contents .= "MOTIVO \t";
	$contents .= "ASSUNTO \t";
	$contents .= "MENSAGEM \t";
	$contents .= "DATA \t \n";

	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);

	if ($contatos): foreach($contatos as $contato):
		$contents .= $contato->nome . "\t";
		$contents .= $contato->telefone . "\t";
		$contents .= $contato->email . "\t";
		$contents .= $contato->documento . "\t";
		$contents .= $contato->tipo_documento . "\t";
		$contents .= $contato->contrato . "\t";
		$contents .= $contato->cep . "\t";
		$contents .= $contato->cidade . "\t";
		$contents .= $contato->estado . "\t";
		$contents .= $contato->motivo . "\t";
		$contents .= $contato->assunto . "\t";
		$contents .= $contato->mensagem . "\t";
		$contents .= $contato->created . "\t \n";
	endforeach; endif;

	echo $contents;

	exit();

?>