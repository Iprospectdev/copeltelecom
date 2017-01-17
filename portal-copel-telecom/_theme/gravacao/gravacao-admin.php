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
		<div class="container">
			<h3>Gravações</h3>
			<hr>
			<?php
				if ( $_GET['id'] ):
					$delete = $wpdb->query( "DELETE FROM gravacoes WHERE id = '". $_GET['id'] ."'" );
					echo '<div id="message" class="updated"><p><strong>Gravação apagada com sucesso.</strong></p></div>';
				endif;

				$gravacoes = $wpdb->get_results("SELECT * FROM gravacoes ORDER BY id DESC");
			?>
			<table class="widefat" id="gravacao">
				<thead>
					<tr>
						<th>Data da Solicitação</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Email</th>
						<th>Protocolo</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($gravacoes): 
							foreach($gravacoes as $gravacao):
					?>
						<tr>
							<td><?php echo $gravacao->created; ?></td>
							<td><?php echo $gravacao->nome_solicitante; ?></td>
							<td><?php echo $gravacao->telefone_solicitante; ?></td>
							<td><?php echo $gravacao->email_solicitante; ?></td>
							<td><?php echo ($gravacao->protocolo_num) ? $gravacao->protocolo_num : " - "; ?></td>
							<td>
								<a href="#" data-toggle="modal" data-target="#modal-<?php echo $gravacao->id; ?>" class="btn btn-primary btn-sm"> VER</a>
								<a href="<?php echo get_bloginfo("url"). "/wp-admin/admin.php?page=" . basename(__FILE__); ?>&id=<?php echo $gravacao->id; ?>" class="btn btn-danger btn-sm">EXCLUIR</a>
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
				<a href="<?php bloginfo("template_url"); ?>/_theme/gravacao/download.php" target="_blank" class="btn btn-success">Download dos Contatos</a>
			</p>

		</div>
	</div>
	
	<?php
		if($gravacoes): 
			foreach($gravacoes as $gravacao):
	?>
	<div class="modal fade" id="modal-<?php echo $gravacao->id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><?php echo $gravacao->nome; ?></h4>
				</div>
				<div class="modal-body">

					<div class="alert alert-warning text-center">
						<strong>Data da Solicitação</strong>: <?php echo $gravacao->created; ?>
					</div>
					
					<p><strong>Nome Solicitante</strong>: <?php echo $gravacao->nome_solicitante; ?></p>
					<p><strong>Telefone Solicitante</strong>: <?php echo $gravacao->telefone_solicitante; ?></p>
					<p><strong>Email Solicitante</strong>: <?php echo $gravacao->email_solicitante; ?></p>

					<div class="alert alert-success">
						<?php if ($gravacao->protocolo == "nao"): ?>
							<p><strong>Nome do atendente</strong>: <?php echo $gravacao->nome_atendente; ?></p>
							<p><strong>Data da Ligação</strong>: <?php echo $gravacao->data_ligacao; ?></p>
							<p><strong>Hora da Ligação</strong>: <?php echo $gravacao->hora_ligacao; ?></p>
							<p><strong>Número de origem da ligação</strong>: <?php echo $gravacao->numero_ligacao; ?></p>
							<p><strong>Número do Contrato</strong>: <?php echo $gravacao->numero_contrato; ?></p>
						<?php else: ?>
							<p><strong>NÚMERO DO PROTOCOLO</strong>: <?php echo $gravacao->protocolo_num; ?></p>
						<?php endif ?>
					</div>
					

				</div>
			</div>
		</div>
	</div>
	<?php 
			endforeach;
		endif;
	?>

	<script>
		jQuery('#gravacao').DataTable({
			"order": [],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json"
			}
		});
	</script>
	<?php
}

?>