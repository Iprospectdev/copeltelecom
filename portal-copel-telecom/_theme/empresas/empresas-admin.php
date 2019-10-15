<?php

// Create Table
global $wpdb, $table;
$table = "contatos_produtos";
if ($wpdb->get_var("SHOW TABLES LIKE '{$table}'") != $table):
	$wpdb->query("CREATE TABLE {$table} (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255), telefone VARCHAR(255), email VARCHAR(255), empresa VARCHAR(255), produto VARCHAR(255), mensagem TEXT, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  )");
endif;


add_action('admin_menu', 'contato_empresas_create_menu');
function contato_empresas_create_menu() {
	add_menu_page('Para empresas', 'Para empresas', 0, basename(__FILE__), 'contato_empresas_settings_page', 'dashicons-phone', 505);
	add_action( 'admin_init', 'register_contato_empresas_fields' );
}

function register_contato_empresas_fields() {
	register_setting( 'contato-settings-group', 'email_final' );
}

function contato_empresas_settings_page() {
	global $wpdb;

?>
	<div class="wrap">
		<div class="container">
			<h3>Contato</h3>
			<hr>
			<?php
				$contatos = $wpdb->get_results("SELECT * FROM contatos_produtos");
				if ( $_GET['id'] ):
					$delete = $wpdb->query( "DELETE FROM contatos_produtos WHERE id = '". $_GET['id'] ."'" );
					echo '<div id="message" class="updated"><p><strong>Contato apagado com sucesso.</strong></p></div>';
				endif;
			?>
			<table class="widefat" id="contato">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Empresa</th>
						<th>Produto</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($contatos): 
							foreach($contatos as $contato):
					?>
						<tr>
							<td><?php echo $contato->nome; ?></td>
							<td><?php echo $contato->email; ?></td>
							<td><?php echo $contato->telefone; ?></td>
							<td><?php echo $contato->empresa; ?></td>
							<td><?php echo $contato->produto; ?></td>
							<td>
								<a href="#" data-toggle="modal" data-target="#modal-<?php echo $contato->id; ?>" class="btn btn-primary btn-sm"> VER</a>
								<a href="<?php echo get_bloginfo("url"). "/wp-admin/admin.php?page=" . basename(__FILE__); ?>&id=<?php echo $contato->id; ?>" class="btn btn-danger btn-sm">EXCLUIR</a>
							</td>
						</tr>
					<?php 
							endforeach;
						endif;
					?>
				</tbody>
			</table>

			<hr>

			<p>
				<a href="<?php bloginfo("template_url"); ?>/_theme/empresas/download.php" target="_blank" class="btn btn-success">Download dos Contatos</a>
			</p>

		</div>
	</div>
	
	<?php
		if($contatos): 
			foreach($contatos as $contato):
	?>
	<div class="modal fade" id="modal-<?php echo $contato->id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><?php echo $contato->nome; ?></h4>
				</div>
				<div class="modal-body">
					<p><strong>Data</strong>: <?php echo $contato->created; ?></p>
					<p><strong>Nome</strong>: <?php echo $contato->nome; ?></p>
					<p><strong>Telefone</strong>: <?php echo $contato->telefone; ?></p>
					<p><strong>Email</strong>: <?php echo $contato->email; ?></p>
					<p><strong>Empresa</strong>: <?php echo $contato->empresa; ?></p>
					<p><strong>Produto</strong>: <?php echo $contato->produto; ?></p>
					<p><strong>Mensagem</strong>:</p>
					<div class="alert alert-warning"><?php echo $contato->mensagem; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php 
			endforeach;
		endif;
	?>

	<script>
		jQuery('#contato').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json"
			}
		});
	</script>
	<?php
}

?>