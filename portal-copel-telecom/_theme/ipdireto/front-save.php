<?php

	include('../../../../../wp-load.php'); 

	global $wpdb;

	$titan = TitanFramework::getInstance( 'copeltelecom' );

	$observacoes = "";

	if ($_POST["recebimento_fatura"]) {
		$observacoes = "Recebimento da Fatura: ".$_POST["recebimento_fatura"]."\n";
	}

	if ($_POST["observacoes"]) {
		$observacoes .= nl2br($_POST["observacoes"]);
	}


	$data = array(
		"cnpj" => $_POST["cnpj"],
		"razao_social" => $_POST["razao_social"],
		"insc_municipal" => $_POST["insc_municipal"],
		"insc_estadual" => $_POST["insc_estadual"],
		"tel_fixo" => $_POST["tel_fixo"],
		"tel_cel" => $_POST["tel_cel"],
		"correspondencia" => json_encode($_POST["correspondencia"]),
		"contato_financeiro" => json_encode($_POST["contato_financeiro"]),
		"contato_tecnico" => json_encode($_POST["contato_tecnico"]),
		"vencimento_fatura" => $_POST["vencimento_fatura"],
		"id_dominio" => $_POST["id_dominio"],
		"endereco" => json_encode($_POST["endereco"]),
		"outro_endereco" =>json_encode( $_POST["outro_endereco"]),
		"observacoes" => $observacoes,
		"velocidade" => $_POST["plano-text"]
	);

	$wpdb->insert( 'ipdireto', $data );

	$correspondencia = "";
	if ($_POST["correspondencia"]) {
		$correspondencia .= "<table>";
		foreach ($_POST["correspondencia"] as $key => $value) {
			$correspondencia .= "<tr>";
			$correspondencia .= '<td>'.$key.'</td><td>'.$value.'</td>';
			$correspondencia .= "</tr>";
		}
		$correspondencia .= "</table>";
	}

	$contato_tecnico = "";
	if ($_POST["contato_tecnico"]) {
		$contato_tecnico .= "<table>";
		foreach ($_POST["contato_tecnico"] as $key => $value) {
			$contato_tecnico .= "<tr>";
			$contato_tecnico .= '<td>'.$key.'</td><td>'.$value.'</td>';
			$contato_tecnico .= "</tr>";
		}
		$contato_tecnico .= "</table>";
	}

	$contato_financeiro = "";
	if ($_POST["contato_financeiro"]) {
		$contato_financeiro .= "<table>";
		foreach ($_POST["contato_financeiro"] as $key => $value) {
			$contato_financeiro .= "<tr>";
			$contato_financeiro .= '<td>'.$key.'</td><td>'.$value.'</td>';
			$contato_financeiro .= "</tr>";
		}
		$contato_financeiro .= "</table>";
	}

	$endereco = "";
	if ($_POST["endereco"]) {
		$endereco .= "<table>";
		foreach ($_POST["endereco"] as $key => $value) {
			$endereco .= "<tr>";
			$endereco .= '<td>'.$key.'</td><td>'.$value.'</td>';
			$endereco .= "</tr>";
		}
		$endereco .= "</table>";
	}

	if ($_POST["outro_endereco"]) {
		$i=0;
		$outro_endereco .= "<table>";
		foreach ($_POST["outro_endereco"] as $chave) {
			if($_POST["outro_endereco"][$i]){
				$outro_endereco .= '<tr><td colspan="2"><strong>Endereço de Instalação '.($i+1).'</strong></td></tr>';
				foreach ($_POST["outro_endereco"][$i] as $key => $value) {
					if($key != 'plano-text'){
						$outro_endereco .= "<tr>";
						$outro_endereco .= '<td>'.$key.'</td><td>'.$value.'</td>';
						$outro_endereco .= "</tr>";
					}
				}
			}
			$i++;
		}
		$outro_endereco .= "</table>";
	}


	#
	# Envia Email
	#
	$data_email = array(
		"CNPJ" => $_POST["cnpj"],
		"Razao Social" => $_POST["razao_social"],
		"Inscrição Municipal" => $_POST["insc_municipal"],
		"Inscrição Estadual" => $_POST["insc_estadual"],
		"Telefone Fixo" => $_POST["tel_fixo"],
		"Telefone Celular" => $_POST["tel_cel"],
		"Email" => $_POST["correspondencia"]["email"],
		"Correspondência" => $correspondencia,
		"Contato Financeiro" => $contato_financeiro,
		"Contato Técnico" => $contato_tecnico,
		"Vencimento da Fatura" => $_POST["vencimento_fatura"],
		"ID do Registro.br ou Dominio.com" => $_POST["id_dominio"],
		"Plano" => $_POST["plano-text"],
		"Endereço" => $endereco,
		"Outro Endereço" => $outro_endereco,
		"Observações" => $observacoes
	);

	$from = 'Copel Telecom <'.get_bloginfo("admin_email").'>';

	$destinatario = ($titan->getOption( 'form_ipdireto' )) ? $titan->getOption( 'form_ipdireto' ) : get_bloginfo("admin_email");

	$assunto = "[". get_bloginfo("name") ."] IP Direto";

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
		<strong><?php echo $_POST["razao_social"]; ?></strong>, sua solicitação foi enviada com sucesso. Em breve entraremos em contato.
	</p>
<?php else: ?>
	<p><strong>Estamos passando por manutenção, tente novamente mais tarde.</strong></p>
<?php endif ?>