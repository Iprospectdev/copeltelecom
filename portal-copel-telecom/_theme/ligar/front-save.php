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

?>

<p>
	<strong><?php echo $_POST["nome"] ?></strong>, seus dados foram enviados com sucesso. <br>
	Em breve entraremos em contato pelo telefone <strong><?php echo $_POST["telefone"] ?></strong>.
</p>