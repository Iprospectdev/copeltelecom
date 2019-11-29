<?php

	include('../../../../../wp-load.php'); 

	global $wpdb;

	$data = array(
		"nome" => $_POST["nome"],
		"telefone" => $_POST["telefone"],
		"email" => $_POST["email"],
		"documento" => $_POST["documento"],
		"tipo_documento" => $_POST["tipo_documento"],
		"contrato" => $_POST["contrato"],
		"motivo" => $_POST["motivo"],
		"mensagem" => nl2br($_POST["mensagem"])
	);

	$wpdb->insert( 'contatos_telefone', $data );


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


?>

<p>
	<strong><?php echo $_POST["nome"] ?></strong>, seus dados foram enviados com sucesso. <br>
	Em breve entraremos em contato pelo telefone <strong><?php echo $_POST["telefone"] ?></strong>.
</p>