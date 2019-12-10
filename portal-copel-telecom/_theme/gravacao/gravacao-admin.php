<?php

// Create Table
global $wpdb, $table;
$table = "gravacoes";
if ($wpdb->get_var("SHOW TABLES LIKE '{$table}'") != $table):
	$wpdb->query("CREATE TABLE {$table} (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, protocolo VARCHAR(10), protocolo_num VARCHAR(255), nome_solicitante VARCHAR(255), telefone_solicitante VARCHAR(30), email_solicitante VARCHAR(255), data_ligacao VARCHAR(30), nome_atendente VARCHAR(255), hora_ligacao VARCHAR(20), numero_ligacao VARCHAR(255), numero_contrato VARCHAR(255), created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  )");
endif;


add_action('admin_menu', 'gravacao_create_menu');
function gravacao_create_menu() {
	add_menu_page('Gravações', 'Gravações', 0, basename(__FILE__), 'gravacao_settings_page', 'dashicons-controls-volumeon', 510);
	add_action( 'admin_init', 'register_gravacao_fields' );
}

function register_gravacao_fields() {
	register_setting( 'gravacao-settings-group', 'gravacao_final' );
}

function gravacao_settings_page() {
	global $wpdb;

?>
	<div class="wrap">
	<h3>Gravações</h3>
	<?php
		if ( $_GET['id'] ):
			$delete = $wpdb->query( "DELETE FROM gravacoes WHERE id = '". $_GET['id'] ."'" );
			echo '<div id="message" class="updated"><p><strong>Gravação apagada com sucesso.</strong></p></div>';
		endif;

		$contatos = $wpdb->get_var("SELECT COUNT(*)  FROM gravacoes ORDER BY id DESC");
	?>

	<div class="col-md-12">
		<p class="btn btn-primary">Total de Contatos: <?php print_r($contatos); ?></p><br /><br />
	</div>

	<br /><br /><br />

	<form method="post" action="<?php bloginfo("template_url"); ?>/_theme/gravacao/download.php">
	    <div class="col-md-2">
	    	<label>Mês</label>
		    <select name="mes" class="form-control col-md-4">
		      <option value="01">Janeiro</option>
		      <option value="02">Fevereiro</option>
		      <option value="03">Março</option>
		      <option value="04">Abril</option>
		      <option value="05">Maio</option>
		      <option value="06">Junho</option>
		      <option value="07">Julho</option>
		      <option value="08">Agosto</option>
		      <option value="09">Setembro</option>
		      <option value="10">Outubro</option>
		      <option value="11">Novembro</option>
		      <option value="12">Dezembro</option>
		    </select>
		</div>
		<div class="col-md-2">
			<label>Ano</label>
			<select name="ano" class="form-control col-md-4">
			<?php $ano = date('Y'); $i = 1;

			for($i=1; $i<=10; $i++){ ?>	
		      <option value="<?php echo $ano; ?>"><?php echo $ano; ?></option>
		     <?php $ano--;} ?> 
		    </select>
		</div>
		<br /><br /><br />
		<div class="col-md-12">
		<input type="submit" name="enviar" value="Download dos Contatos" class="btn btn-success">
		</div>
		
	</form>

	</div>

	<?php
}

?>