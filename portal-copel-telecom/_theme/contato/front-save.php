x<?php

	include('../../../../../wp-load.php'); 

	global $wpdb;

	$data = array(
		"nome" => $_POST["nome"],
		"telefone" => $_POST["telefone"],
		"email" => $_POST["email"],
		"documento" => $_POST["documento"],
		"tipo_documento" => $_POST["tipo_documento"],
		"contrato" => $_POST["contrato"],
		"cep" => $_POST["cep"],
		"cidade" => $_POST["cidade"],
		"estado" => $_POST["estado-text"],
		"motivo" => $_POST["motivo"],
		"assunto" => $_POST["assunto"],
		"mensagem" => nl2br($_POST["mensagem"])
	);

	$wpdb->insert( 'contatos', $data );

	#
	# Envia Email
	#
	$data_email = array(
		"Nome" => $_POST["nome"],
		"Telefone" => $_POST["telefone"],
		"Email" => $_POST["email"],
		"Documento" => $_POST["documento"],
		"Contrato" => $_POST["contrato"],
		"CEP" => $_POST["cep"],
		"Cidade" => $_POST["cidade"],
		"Estado" => $_POST["estado-text"],
		"Motivo" => $_POST["motivo"],
		"Assunto" => $_POST["assunto"],
		"Mensagem" => nl2br($_POST["mensagem"])
	);

	$from = 'Copel Telecom <'.get_bloginfo("admin_email").'>';

	$destinatario = (get_field('contato_site', 'option')) ? get_field('contato_site', 'option') : get_bloginfo("admin_email");

	if ($_POST["motivo"] == "Erro no cadastro Web Vendas" || $_POST["motivo"] == "Aquisição de Serviços Corporativos") {
		$destinatario = "vendastelecom@copel.com";
	}

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

<?php if (wp_mail( $destinatario, $assunto, $message, $headers )): ?>
	<p>
		<strong><?php echo $_POST["nome"] ?></strong>, seu email foi enviado com sucesso. Em breve entraremos em contato pelos dados: <br>
		<strong><?php echo $_POST["email"] ?></strong> | <strong><?php echo $_POST["telefone"] ?></strong>
	</p>
<?php else: ?>
	<p><strong>Estamos passando por manutenção, tente novamente mais tarde.</strong></p>
<?php endif ?>