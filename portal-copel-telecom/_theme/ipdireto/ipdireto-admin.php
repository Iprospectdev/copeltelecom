<?php

// Create Table
global $wpdb, $table;
$table = "ipdireto";
if ($wpdb->get_var("SHOW TABLES LIKE '{$table}'") != $table):
	$wpdb->query("CREATE TABLE {$table} (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, cnpj VARCHAR(255), razao_social VARCHAR(255), insc_municipal VARCHAR(100), insc_estadual VARCHAR(100), tel_fixo VARCHAR(30), tel_cel VARCHAR(30), correspondencia TEXT, contato_financeiro MEDIUMTEXT, contato_tecnico MEDIUMTEXT, vencimento_fatura VARCHAR(20), id_dominio VARCHAR(255), observacoes TEXT, endereco MEDIUMTEXT, outro_endereco MEDIUMTEXT, velocidade TEXT, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )");
endif;


add_action('admin_menu', 'ipdireto_create_menu');
function ipdireto_create_menu() {
	add_menu_page('IP Direto', 'IP Direto', 0, basename(__FILE__), 'ipdireto_settings_page', 'dashicons-admin-plugins', 505);
	add_action( 'admin_init', 'register_ipdireto_fields' );
}

function register_ipdireto_fields() {
	register_setting( 'ipdireto-settings-group', 'ipdireto_final' );
}

function ipdireto_settings_page() {
	global $wpdb;

?>
	<div class="wrap">
		<div class="container">
			<h3>IP Direto</h3>
			<hr>
			<?php
				if ( $_GET['id'] ):
					$delete = $wpdb->query( "DELETE FROM ipdireto WHERE id = '". $_GET['id'] ."'" );
					echo '<div id="message" class="updated"><p><strong>Item apagado com sucesso.</strong></p></div>';
				endif;
				$ipdiretos = $wpdb->get_results("SELECT * FROM ipdireto");
			?>
			<table class="widefat" id="ipdireto">
				<thead>
					<tr>
						<th>CNPJ</th>
						<th>Razão Social</th>
						<th>Telefone</th>
						<th>Inscrição</th>
						<th>Data</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($ipdiretos): 
							foreach($ipdiretos as $ipdireto):
					?>
						<tr>
							<td><?php echo $ipdireto->cnpj; ?></td>
							<td><?php echo $ipdireto->razao_social; ?></td>
							<td><?php echo $ipdireto->tel_fixo; ?> - <?php echo $ipdireto->tel_cel; ?></td> 
							<td><?php echo $ipdireto->created; ?></td> 
							<td><?php
								if ($ipdireto->insc_municipal || $ipdireto->insc_estadual) {
									echo ($ipdireto->insc_municipal) ? "<p>Inscrição Municipal: ".$ipdireto->insc_municipal."</p>" : "";
									echo ($ipdireto->insc_estadual) ? "<p>Inscrição Estadual: ".$ipdireto->insc_estadual."</p>" : "";
								}
							?></td>
							<td>
								<a href="#" data-toggle="modal" data-target="#modal-<?php echo $ipdireto->id; ?>" class="btn btn-primary btn-sm"> VER</a>
								<a href="<?php echo get_bloginfo("url"). "/wp-admin/admin.php?page=" . basename(__FILE__); ?>&id=<?php echo $ipdireto->id; ?>" class="btn btn-danger btn-sm">EXCLUIR</a>
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
				<a href="<?php bloginfo("template_url"); ?>/_theme/ipdireto/download.php" target="_blank" class="btn btn-success">Download do Cadastros</a>
			</p>

		</div>
	</div>
	
	<?php
		if($ipdiretos): 
			foreach($ipdiretos as $ipdireto):
	?>
	<div class="modal fade" id="modal-<?php echo $ipdireto->id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><?php echo $ipdireto->razao_social; ?></h4>
				</div>
				<div class="modal-body">
				
					<p><strong>Data</strong>: <?php echo $ipdireto->created; ?></p>
					<p><strong>CNPJ</strong>: <?php echo $ipdireto->cnpj; ?></p>
					<p><strong>Razão Social</strong>: <?php echo $ipdireto->razao_social; ?></p>
					<p><strong>Inscrição municipal</strong>: <?php echo $ipdireto->insc_municipal; ?></p>
					<p><strong>Inscrição estadual</strong>: <?php echo $ipdireto->insc_estadual; ?></p>
					<p><strong>Telefone Fixo</strong>: <?php echo $ipdireto->tel_fixo; ?></p>
					<p><strong>Telefone Celular</strong>: <?php echo $ipdireto->tel_cel; ?></p>
					
					<p><strong>Correnpondência</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($ipdireto->correspondencia) {
								foreach (json_decode($ipdireto->correspondencia) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Contato Financeiro</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($ipdireto->contato_financeiro) {
								foreach (json_decode($ipdireto->contato_financeiro) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Contato Técnico</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($ipdireto->contato_tecnico) {
								foreach (json_decode($ipdireto->contato_tecnico) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Vencimento da Fatura</strong>: <?php echo $ipdireto->vencimento_fatura; ?></p>
					<p><strong>ID do Registro.BR ou Dominio.com</strong>: <?php echo $ipdireto->id_dominio; ?></p>

					<p><strong>Endereço de Instalação</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($ipdireto->endereco) {
								foreach (json_decode($ipdireto->endereco) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<?php if ($ipdireto->outro_endereco && $ipdireto->outro_endereco != "null"):?>
						<p><strong>Outros Endereços</strong>: </p>
						<?php
							if ($ipdireto->outro_endereco) {
								foreach (json_decode($ipdireto->outro_endereco) as $endereco) {
									echo '<div class="alert alert-success">';
									foreach ($endereco as $key => $value) {
										echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
									}
									echo '</div>';
								}
							}
						?>
					<?php endif ?>

					<?php if ($ipdireto->observacoes): ?>
						<p><strong>Observações</strong>:</p>
						<div class="alert alert-warning"><?php echo $ipdireto->observacoes; ?></div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>
	<?php 
			endforeach;
		endif;
	?>

	<script>
		jQuery('#ipdireto').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json"
			},
			"order": [[ 1, "desc" ]]
		});
	</script>
	<?php
}

?>