<?php get_header();?>
	<section id="atendimento-e-suporte">

		<header>
			<h1 class="main-tt">Atendimento e Suporte</h1>
		</header>

		<div class="container">
			<div id="as-faq" class="col-md-6 col-sm-12 col-xs-12">
				<article>
					<h2>Perguntas Frequentes</h2>
					<p>Dúvidas sobre a internet <strong>100% em fibra óptica?</strong><br>A Copel Telecom responde.</p>
					<form action="<?php bloginfo("url"); ?>" class="faq-form-search faq-form-search-gray">
						<input type="hidden" name="post_type" value="faq">
						<label class="autocomplete">
							<input type="text" id="faq-autocomplete" name="s" placeholder="Digite aqui sua dúvida">
							<button><i class="i-faq-search-gray"></i></button>
						</label>
					</form>
					<?php
						$categorias = get_terms("faq-categoria");
						if ($categorias):
							?>
							<ul class="row">
								<?php foreach ($categorias as $category): ?>
								<li class="col-sm-6 col-xs-12">
									<a href="<?php echo get_term_link( $category->slug, "faq-categoria" ); ?>">
										<i class="i-faq-conta-orange"></i><?php echo $category->name; ?>
									</a>
								</li>
								<?php endforeach; ?>
							</ul>
						<?php
						endif;
					?>
				</article>
			</div>
			<div id="as-area-do-cliente" class="col-md-6 col-sm-12 col-xs-12">
				<article>
					<h2>Área do Cliente</h2>
					<p>Aqui você pode acessar itens relativos à sua conta, alterar dados e obter mais informações. <strong>É só clicar.</strong></p>
					<div class="row">
						<ul class="col-sm-6 col-xs-12">
							<li>
								<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">
									<i class="i-as-2via"></i> 2ª via da conta
								</a>
							</li>
							<li>
								<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">
									<i class="i-as-data"></i> Alterar data de vencimento
								</a>
							</li>
							<li>
								<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">
									<i class="i-as-conta"></i> Conta detalhada
								</a>
							</li>
							<li>
								<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">
									<i class="i-as-cadastro"></i> Alterar dados cadastrais
								</a>
							</li>
							<li>
								<a href="http://www.copeltelecom.com/autoatendimento" target="_blank">
									<i class="i-as-autoatendimento"></i> Autoatendimento
								</a>
							</li>
						</ul>
						<aside class="col-sm-6 col-xs-12">
							<a href="<?php $p = get_page_by_title("Solicitação de Gravação"); echo get_permalink($p->ID); ?>"><i class="i-as-mic"></i>Solicitação de gravação</a>
							<a href="<?php $p = get_page_by_title("Ouvidoria"); echo get_permalink($p->ID); ?>"><i class="i-as-box"></i>Ouvidoria</a>
						</aside>
					</div>
				</article>
			</div>
		</div>

		<?php $documentos = get_posts("post_type=documentos&nopaging=true&orderby=menu_order&order=asc"); ?>
		<?php if ($documentos): ?>
		<section id="as-documentos">
			<div class="container">
				<h1>Documentos</h1>
				<nav class="col-sm-10 col-sm-offset-1 col-xs-12">
					<?php foreach ($documentos as $doc): ?>
						<a href="#<?php echo $doc->post_name; ?>" class="bt-o bt-o-white bt-o-hover-white bt-o-active-white"><?php echo $doc->post_title; ?></a>	
					<?php endforeach ?>
				</nav>
				<div class="clearfix"></div>
				<?php foreach ($documentos as $doc): ?>
				<ul class="<?php echo $doc->post_name; ?>">
					<?php if (rwmb_meta( "files", "type=file", $doc->ID )): ?>
						<?php foreach (rwmb_meta( "files", "type=file", $doc->ID ) as $file): ?>
						<li><a target="_blank" href="<?php echo $file["url"]; ?>"><i class="i-pdf"></i> <?php echo $file["title"]; ?></a></li>
						<?php endforeach ?>
					<?php endif ?>
				</ul>
				<?php endforeach; ?>
			</div>
		</section>
		<?php endif ?>

		<aside>
			<?php get_template_part('template','nao-encontrou'); ?>
		</aside>

	</section>

	<script>
		jQuery(document).ready(function($) {
			if(window.location.hash){
				var href=window.location.hash;
				href = href.replace('#','');
				$('#as-documentos nav a[href="'+window.location.hash+'"]').addClass('active');
				$('#as-documentos ul.'+href).slideDown();
			}
		});
	</script>

<?php get_footer(); ?>