<?php
	require_once('../../../../../wp-load.php');

	if ( !is_user_logged_in() ) {
	   exit;
	}
	
	global $wpdb;

	$filename = 'ipdireto_' . date("d-m-y") . '_'.date("h-i").'.xls';
	$contatos = $wpdb->get_results("SELECT * FROM ipdireto");

	$contents = "CNPJ \t";
	$contents .= "Razao Social \t";
	$contents .= "Inscrição Municipal \t";
	$contents .= "Inscrição Estadual \t";
	$contents .= "Telefone Fixo \t";
	$contents .= "Telefone Celular \t";
	$contents .= "Correnpondência \t";
	$contents .= "Contato Financeiro \t";
	$contents .= "Contato Técnico \t";
	$contents .= "Vencimento da Fatura \t";
	$contents .= "ID do Registro.br ou Dominio.com \t";
	$contents .= "Plano \t";
	$contents .= "Endereço \t";
	$contents .= "Outro Endereço \t";
	$contents .= "Observações \t";
	$contents .= "Data \t \n";

	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);

	if ($contatos): foreach($contatos as $contato):

		$contents .= $contato->cnpj. "\t";
		$contents .= $contato->razao_social. "\t";
		$contents .= $contato->insc_municipal. "\t";
		$contents .= $contato->insc_estadual. "\t";
		$contents .= $contato->tel_fixo. "\t";
		$contents .= $contato->tel_cel. "\t";
		$contents .= $contato->correspondencia. "\t";
		$contents .= $contato->contato_financeiro. "\t";
		$contents .= $contato->contato_tecnico. "\t";
		$contents .= $contato->vencimento_fatura. "\t";
		$contents .= $contato->id_dominio. "\t";
		$contents .= $contato->velocidade. "\t";
		$contents .= $contato->endereco. "\t";
		$contents .= $contato->outro_endereco. "\t";
		$contents .= $contato->observacoes. "\t";
		$contents .= $contato->created . "\t \n";

	endforeach; endif;

	echo $contents;

	exit();

?>