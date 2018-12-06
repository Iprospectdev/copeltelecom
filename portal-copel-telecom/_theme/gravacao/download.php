<?php
	
	require_once('../../../../../wp-load.php');
	
	if ( !is_user_logged_in() ) {
	   exit;
	}

	global $wpdb;

	$filename = 'gravacoes_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM gravacoes");

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

	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);

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

	echo $contents;

	exit();

?>