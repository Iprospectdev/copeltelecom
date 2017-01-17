<?php

	include('../../../../../wp-load.php'); 

	global $wpdb;

	$titan = TitanFramework::getInstance( 'copeltelecom' );

	#
	# Salva no Banco de Dados
	#
	$data = array(
		"protocolo" => $_POST["protocolo"],
		"protocolo_num" => $_POST["protocolo_num"],
		"nome_solicitante" => $_POST["nome_solicitante"],
		"telefone_solicitante" => $_POST["telefone_solicitante"],
		"email_solicitante" => $_POST["email_solicitante"],
		"data_ligacao" => $_POST["data_ligacao"],
		"nome_atendente" => $_POST["nome_atendente"],
		"hora_ligacao" => $_POST["hora_ligacao"],
		"numero_ligacao" => $_POST["numero_ligacao"],
		"numero_contrato" => $_POST["numero_contrato"]
	);

	$wpdb->insert( 'gravacoes', $data );

	#
	# Envia Email
	#

	$data_email = array(
		"Protocolo" => ($_POST["protocolo_num"]) ? $_POST["protocolo_num"] : "Sem Protocolo",
		"Nome" => $_POST["nome_solicitante"],
		"Telefone" => $_POST["telefone_solicitante"],
		"Email" => $_POST["email_solicitante"],
		"Atendente" => $_POST["nome_atendente"],
		"Data da Ligação" => $_POST["data_ligacao"],
		"Hora da Ligação" => $_POST["hora_ligacao"],
		"Número da Ligação" => $_POST["numero_ligacao"],
		"Número do Contrato" => $_POST["numero_contrato"]
	);

	$from = 'Copel Telecom <'.get_bloginfo("admin_email").'>';

	$destinatario = ($titan->getOption( 'solicitacao_de_gravacao' )) ? $titan->getOption( 'solicitacao_de_gravacao' ) : get_bloginfo("admin_email");

	$assunto = "[". get_bloginfo("name") ."] Solicitação de Gravação";

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

<?php if (wp_mail( $destinatario, $assunto, $message, $headers )): ?>
<p>
	<strong><?php echo $_POST["nome_solicitante"] ?></strong>, sua solicitaçao foi enviada com sucesso. Em breve você receberá a gravação em seu email: <br>
	<strong><?php echo $_POST["email_solicitante"] ?></strong>
</p>
<?php else: ?>
	<p><strong>Estamos passando por manutenção, tente novamente mais tarde.</strong></p>
<?php endif ?>