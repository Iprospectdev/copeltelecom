<?php

	include('../../../../../wp-load.php'); 

	global $wpdb;

	$data = array(
		"nome" => $_POST["inpt-nome"],
		"email" => $_POST["inpt-email"],
		"telefone" => $_POST["inpt-telefone"],
	);

	

	$insert = $wpdb->insert( 'contatos_ligamos', $data );

	if ($insert) {
		$res = array(
			"status" => "success"
		);
	} else {
		$res = array(
			"status" => "error"
		);
	}

	#
	# Envia Email
	#
	$data_email = array(
		"Nome" => $_POST["nome"],
		"Telefone" => $_POST["telefone"],
		"Email" => $_POST["email"],
	);

	$from = 'Copel Telecom <'.get_bloginfo("admin_email").'>';

	$destinatario = "vendastelecom@copel.com";

	$assunto = "[". get_bloginfo("name") ."] Contato Site";

	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\n";
	$headers .= "From: ".$from ."\n";
	$headers .= "Return-Path: ".$from."\n";
	$headers .= "Reply-To: ".$destinatario."\n";

	$body = '';

	foreach ($data_email as $key => $value) {
		if ($value) {
			$body .= '<tr><td bgcolor="#f4f5f6"><font face="Arial, Tahoma, Sans-serif" size="3" color="#737c8f">'.$key.'</font>';
			$body .= '</td><td bgcolor="#e9ebed"><font face="Arial, Tahoma, Sans-serif" size="3" color="#737c8f">'.$value.'</font></td></tr>';
		}
	}

	$message = file_get_contents('email.html');
	$message = str_replace('../../_assets', get_template_directory_uri()."/_assets", $message);
	$message = str_replace('###CONTENT###', $body, $message);

	if (wp_mail( $destinatario, $assunto, $message, $headers )){
			
		echo json_encode($res);

	}else{

		$res = array(
			"status" => "error"
		);

		echo json_encode($res);

	}

?>
