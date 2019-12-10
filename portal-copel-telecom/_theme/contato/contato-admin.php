<?php

// Create Table
global $wpdb, $table;
$table = "contatos";
if ($wpdb->get_var("SHOW TABLES LIKE '{$table}'") != $table):
	$wpdb->query("CREATE TABLE {$table} (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255), telefone VARCHAR(255), email VARCHAR(255), documento VARCHAR(255), tipo_documento VARCHAR(255), contrato VARCHAR(255), cep VARCHAR(20), cidade VARCHAR(255), estado VARCHAR(30), motivo VARCHAR(255), assunto VARCHAR(255), mensagem TEXT, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  )");
endif;


add_action('admin_menu', 'contato_create_menu');
function contato_create_menu() {
	add_menu_page('Contatos', 'Contatos', 0, basename(__FILE__), 'contato_settings_page', 'dashicons-phone', 505);
	add_action( 'admin_init', 'register_contato_fields' );
}

function register_contato_fields() {
	register_setting( 'contato-settings-group', 'email_final' );
}

function contato_settings_page() {
	global $wpdb;

?>

<?php
		$contatos = $wpdb->get_var("SELECT COUNT(*) FROM contatos");
		if ( $_GET['id'] ):
			$delete = $wpdb->query( "DELETE FROM contatos WHERE id = '". $_GET['id'] ."'" );
			echo '<div id="message" class="updated"><p><strong>Contato apagado com sucesso.</strong></p></div>';
		endif;
	?>

	<div class="wrap">

	<h3>Contatos</h3>

	<div class="col-md-12">
		<p class="btn btn-primary">Total de Contatos: <?php print_r($contatos); ?></p><br /><br />
	</div>

	<br /><br /><br />

	<form method="post" action="<?php bloginfo("template_url"); ?>/_theme/contato/download.php">
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