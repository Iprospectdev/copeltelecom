<?php

// Create Table
global $wpdb, $table;
$table = "rav";
if ($wpdb->get_var("SHOW TABLES LIKE '{$table}'") != $table):
	$wpdb->query("CREATE TABLE {$table} (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, cnpj VARCHAR(255), razao_social VARCHAR(255), insc_municipal VARCHAR(100), insc_estadual VARCHAR(100), tel_fixo VARCHAR(30), tel_cel VARCHAR(30), correspondencia TEXT, contato_financeiro MEDIUMTEXT, contato_tecnico MEDIUMTEXT, vencimento_fatura VARCHAR(20), id_dominio VARCHAR(255), observacoes TEXT, endereco MEDIUMTEXT, outro_endereco MEDIUMTEXT, velocidade TEXT, created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )");
endif;


add_action('admin_menu', 'rav_create_menu');
function rav_create_menu() {
	add_menu_page('RAV', 'RAV', 0, basename(__FILE__), 'rav_settings_page', 'dashicons-admin-plugins', 505);
	add_action( 'admin_init', 'register_rav_fields' );
}

function register_rav_fields() {
	register_setting( 'rav-settings-group', 'rav_final' );
}

function rav_settings_page() {
	global $wpdb;

?>
	<div class="wrap">
		<div class="container">
			<h3>Rede de Alta Velocidade</h3>
			<hr>
			<?php
				if ( $_GET['id'] ):
					$delete = $wpdb->query( "DELETE FROM rav WHERE id = '". $_GET['id'] ."'" );
					echo '<div id="message" class="updated"><p><strong>rav apagado com sucesso.</strong></p></div>';
				endif;
				$ravs = $wpdb->get_results("SELECT * FROM rav");
			?>
			<table class="widefat" id="rav">
				<thead>
					<tr>
						<th>CNPJ</th>
						<th>Razão Social</th>
						<th>Telefone</th>
						<th>Inscrição</th>
						<th>Opções</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($ravs): 
							foreach($ravs as $rav):
					?>
						<tr>
							<td><?php echo $rav->cnpj; ?></td>
							<td><?php echo $rav->razao_social; ?></td>
							<td><?php echo $rav->tel_fixo; ?> - <?php echo $rav->tel_cel; ?></td> 
							<td><?php
								if ($rav->insc_municipal || $rav->insc_estadual) {
									echo ($rav->insc_municipal) ? "<p>Inscrição Municipal: ".$rav->insc_municipal."</p>" : "";
									echo ($rav->insc_estadual) ? "<p>Inscrição Estadual: ".$rav->insc_estadual."</p>" : "";
								}
							?></td>
							<td>
								<a href="#" data-toggle="modal" data-target="#modal-<?php echo $rav->id; ?>" class="btn btn-primary btn-sm"> VER</a>
								<a href="<?php echo get_bloginfo("url"). "/wp-admin/admin.php?page=" . basename(__FILE__); ?>&id=<?php echo $rav->id; ?>" class="btn btn-danger btn-sm">EXCLUIR</a>
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
				<a href="<?php bloginfo("template_url"); ?>/_theme/rav/download.php" target="_blank" class="btn btn-success">Download do Cadastros</a>
			</p>

		</div>
	</div>
	
	<?php
		if($ravs): 
			foreach($ravs as $rav):
	?>
	<div class="modal fade" id="modal-<?php echo $rav->id; ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><?php echo $rav->razao_social; ?></h4>
				</div>
				<div class="modal-body">
					<p><strong>Data</strong>: <?php echo $rav->created; ?></p>
					<p><strong>CNPJ</strong>: <?php echo $rav->cnpj; ?></p>
					<p><strong>Razão Social</strong>: <?php echo $rav->razao_social; ?></p>
					<p><strong>Inscrição municipal</strong>: <?php echo $rav->insc_municipal; ?></p>
					<p><strong>Inscrição estadual</strong>: <?php echo $rav->insc_estadual; ?></p>
					<p><strong>Telefone Fixo</strong>: <?php echo $rav->tel_fixo; ?></p>
					<p><strong>Telefone Celular</strong>: <?php echo $rav->tel_cel; ?></p>
					
					<p><strong>Correnpondência</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($rav->correspondencia) {
								foreach (json_decode($rav->correspondencia) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Contato Financeiro</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($rav->contato_financeiro) {
								foreach (json_decode($rav->contato_financeiro) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Contato Técnico</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($rav->contato_tecnico) {
								foreach (json_decode($rav->contato_tecnico) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<p><strong>Vencimento da Fatura</strong>: <?php echo $rav->vencimento_fatura; ?></p>
					<p><strong>ID do Registro.BR ou Dominio.com</strong>: <?php echo $rav->id_dominio; ?></p>

					<p><strong>Endereço de Instalação</strong>:</p>
					<div class="alert alert-success">
						<?php
							if ($rav->endereco) {
								foreach (json_decode($rav->endereco) as $key => $value) {
									echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
								}
							}
						?>
					</div>

					<?php if ($rav->outro_endereco && $rav->outro_endereco!='null'): ?>
						<p><strong>Outros Endereços</strong>: </p>
						<?php
							if ($rav->outro_endereco) {
								foreach (json_decode($rav->outro_endereco) as $endereco) {
									echo '<div class="alert alert-success">';
									foreach ($endereco as $key => $value) {
										echo '<p><strong style="text-transform: uppercase;">'.$key.':</strong> '.$value.'</p>';
									}
									echo '</div>';
								}
							}
						?>
					<?php endif ?>
					<p><strong>Observações</strong>:</p>
					<div class="alert alert-warning"><?php echo $rav->observacoes; ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php 
			endforeach;
		endif;
	?>

	<script>
		jQuery('#rav').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json"
			}
		});
	</script>
	<?php
}

?>