<?php

	require_once('../../../../wp-load.php'); 

	$from = 'Copel Telecom <'.get_bloginfo("admin_email").'>';

	$destinatario = get_bloginfo("admin_email");

	$title = "Título";

	$assunto = "[". get_bloginfo("name") ."] ".$title;


	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\n";
	$headers .= "From: ".$from ."\n";
	$headers .= "Return-Path: ".$from."\n";
	$headers .= "Reply-To: ".$destinatario."\n";

	$body = '#MENSAGEM#';

	$message = file_get_contents('email.html');

	$message = str_replace('../_assets', get_template_directory_uri()."/_assets", $message);

	$message = str_replace('###CONTENT###', $body, $message);
	$message = str_replace('###TITULO###', $title, $message);

	if ( wp_mail( $destinatario, $assunto, $message, $headers ) ) {
			$msg = "<p>Mensagem enviada com sucesso!</p>";
			$status = 'alert-success';
	} else {
			$msg = "<p>Houve um erro, tente novamente mais tarde!</p>";
			$status = 'alert-error';
	}

	echo json_encode(array('classe' => $status, 'msg' => $msg));

?>