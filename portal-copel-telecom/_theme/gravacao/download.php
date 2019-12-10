<?php

	require_once('../../../../../wp-load.php');

	global $wpdb;

	$inicio = $_POST['ano'].'-'.$_POST['mes'].'-01 00:00:00';
	$fim = $_POST['ano'].'-'.$_POST['mes'].'-31 23:59:00';

	$filename = 'gravacoes_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM gravacoes WHERE created BETWEEN '$inicio' AND '$fim'");

	$contents = "Nome Solicitante\t";
	$contents .= "Telefone Solicitante \t";
	$contents .= "Email Solicitante \t";
	$contents .= "Nome do atendente \t";
	$contents .= "Data da Ligação \t";
	$contents .= "Hora da Ligação \t";
	$contents .= "Número de origem da ligação \t";
	$contents .= "Número do Contrato \t";
	$contents .= "Número do Protocolo \t";
	$contents .= "Data \t \n";

	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");
	header ("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"{$filename}\"" );
	header ("Content-Description: PHP Generated Data" );

	if ($contatos): foreach($contatos as $contato):
		$contents .= $contato->nome_solicitante . "\t";
		$contents .= $contato->telefone_solicitante . "\t";
		$contents .= $contato->email_solicitante . "\t";
		$contents .= $contato->nome_atendente . "\t";
		$contents .= $contato->data_ligacao . "\t";
		$contents .= $contato->hora_ligacao . "\t";
		$contents .= $contato->numero_ligacao . "\t";
		$contents .= $contato->numero_contrato . "\t";
		$contents .= $contato->protocolo_num . "\t";
		$contents .= $contato->created . "\t \n";
	endforeach; endif;

	echo utf8_decode(strip_tags($contents));

	exit();

?>