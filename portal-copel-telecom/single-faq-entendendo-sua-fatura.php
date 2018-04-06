<?php

	if(is_single()){
		$term = get_the_terms($post->ID,'faq-categoria');	
		$postID = $post->ID;
		$term = $term[0];
	}else{
		$term = get_term_by('slug', get_query_var('term'), 'faq-categoria' );
	}
	
?>

	<section class="faq">
		<header class="faq-header">
			<div class="container">
				<div class="faq-header-title">
					<h1>
						<?php 
							if(is_single()){ the_title(); }
						?>

						<?php
							if(is_tax()){
						?>
							
							<div class="faq-header-title">
								<h1>
									Perguntas Frequentes
								</h1>
								<h2><?php echo $term->name; ?></h2>
							</div>
						<?php
							}
						?>
						<?php
							if(is_search()){
						?>
							<div class="faq-header-title">
								<h1>
									Perguntas Frequentes
								</h1>
								<h2>
									<span>Dúvidas sobre a internet 100% em fibra óptica?</span>
									A Copel Telecom responde.
								</h2>
							</div>
						<?php
							}
						?>
					</h1>
				</div>
				<?php get_template_part("templates/faq", "form"); ?>
			</div>
		</header>
		<div class="faq-wrapper faq-single">
			<div class="container">
				<div class="row">
					<article class="col-md-8 col-sm-12 col-xs-12" data-mh="faq-single-group">
						<header class="faq-tt">
							<a href="<?php echo get_post_type_archive_link('faq'); ?>"><small class="pull-left">Perguntas Frequentes <i class="fa fa-angle-left"></i></small></a>
							<br>
							<?php
								if (is_search()) {
									echo "Busca por: " . get_search_query();
								}
							?>
						</header>
						<?php if(is_single()): ?>
							<div class="faq-content">
								
								<p><strong>Entenda a sua fatura Copel Telecom</strong><br>Atenção! A primeira fatura da Copel Telecom tem 4 folhas, pois nessa fatura está presente a nota fiscal de ativação. A partir da segunda fatura, todas terão apenas 3 páginas. E para quem não tem débito automático, é na primeira página que está o código de barras para fazer o pagamento.</p>
								
								<p class="faq-faturas-list">
									<a href="#primeira-fatura">Primeira Fatura</a><br>
									<a href="#demais-faturas">Demais Faturas</a><br>
									<a href="#glossario-de-documentos">Glossário de documentos</a>
								</p>	

								<span class="space-50"></span>

								<div id="primeira-fatura">
									<p><strong>Primeira Fatura</strong><br>Apenas na primeira fatura, você recebrá 4 folhas divididas pelas seguintes áreas:</p>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura1-1.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>1.</span>
													Período de referência
													<small>É o período de faturamento verificado para o fechamento da fatura.</small>
												</li>
												<li>
													<span>2.</span>
													Número de identificação
													<small>É o numero da sua conta como cliente Copel Telecom.</small>
												</li>
												<li>
													<span>3.</span>
													Data de vencimento
												</li>
												<li>
													<span>4.</span>
													Valor a pagar
												</li>
												<li>
													<span>5.</span>
													Documento de cobrança
													<small>Documento que apresenta os elementos que compõem todos os produtos, serviços prestados, obrigações e direitos, lançados como débito ou crédito e que resultam no valor líquido a pagar.</small>
												</li>
												<li>
													<span>6.</span>
													Data da emissão
												</li>
												<li>
													<span>7.</span>
													Descritivo dos produtos/serviços
													<small>Resumo dos seus serviços contratados.</small>
												</li>
												<li>
													<span>8.</span>
													Código de barras e mês de referência 
													<small>Disponível apenas em faturas que ainda não foram pagas ou que não estão em débito automático.</small>
												</li>
												<li>
													<span>9A.</span>
													Nota fiscal da mensalidade
													<small>Disponível apenas em faturas que ainda não foram pagas ou que não estão em débito automático.</small>
												</li>
											</ol>
										</div>
									</div>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura1-2.png" alt="">
										</div>
										<div class="col-md-6">
											<span class="space-20"></span>
											<ol class="faq-faturas-ol">
												<li>
													<span>9A.</span>
													Nota fiscal da mensalidade
													<small>Disponível apenas em faturas que ainda não foram pagas ou que não estão em débito automático.</small>
												</li>
											</ol>
										</div>
									</div>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura1-3.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>9B.</span>Nota fiscal da taxa de ativação
													<small>Nota fiscal referente à taxa de instalação e ou ativação. Esta página é emitida apenas quando há serviço de ativação.</small>
												</li>
											</ol>
										</div>
									</div>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura1-4.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>10.</span>Enlace
													<small>Número do contrato, também chamado de enlace. A conta de um cliente pode ter vários contratos em endereços diferentes. Neste campo é possível identificar a qual contrato pertence o valor faturado.</small>
												</li>
												<li>
													<span>11.</span>Velocidade
													<small>É o plano escolhido.</small>
												</li>
												<li>
													<span>12.</span>Produto/Serviço
													<small>Apresenta todos os produtos e serviços prestados e disponibilizados no seu período de faturamento.</small>
												</li>
												<li>
													<span>13.</span>Período
													<small>Período em que o serviço esteve habilitado para utilização do cliente. A cobrança da mensalidade é proporcional aos dias de serviço habilitado, de acordo com o valor do plano de velocidade escolhido.</small>
												</li>
												<li>
													<span>14.</span>Valor
													<small>Valor discriminado por contrato e pelos serviços do plano contratado. Na primeira fatura ocorre cobrança contratual do serviço de ativação, em uma única parcela. Na mensalidade ocorre a cobrança proporcional dos dias de disponibilidade desde o dia da habilitação.</small>
												</li>
												<li>
													<span>15.</span>Documentos
													<small>Classifica o tipo da cobrança.</small>
												</li>
											</ol>
										</div>
									</div>	
								</div>		

								<span class="space-50"></span>

								<div id="demais-faturas">
									<p><strong>Demais Faturas</strong><br>A partir da segunda fatura, você recebe uma fatura com 3 folhas. Sua fatura, que será apresentada mensalmente, é composta por documento de cobrança, notas fiscais e detalhamento dos serviços e produtos. </p>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura2-1.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>1.</span>
													Período de referência
													<small>Período em que o serviço esteve habilitado para utilização do cliente. Quando você altera a data de vencimento, pode ocorrer a cobrança de um valor maior ou menor na mensalidade, dependendo do novo dia de fechamento da fatura.</small>
												</li>
												<li>
													<span>2.</span>
													Número de identificação
													<small>É o numero da sua conta como cliente Copel Telecom.</small>
												</li>
												<li>
													<span>3.</span>
													Data de vencimento
												</li>
												<li>
													<span>4.</span>
													Valor a pagar
												</li>
												<li>
													<span>5.</span>
													Documento de cobrança
													<small>Documento que apresenta os elementos que compõem todos os produtos, serviços prestados, obrigações e direitos, lançados como débito ou crédito e que resultam no valor líquido a pagar.</small>
												</li>
												<li>
													<span>6.</span>
													Data da emissão
												</li>
												<li>
													<span>7.</span>
													Descritivo dos produtos/serviços
													<small>Informações de faturamento e encargos. Juros e multa por atraso no pagamento da fatura anterior aparecem neste campo. Multa contratual ocorre quando há rescisão da fidelidade por parte do cliente.</small>
												</li>
												<li>
													<span>8.</span>
													Fatura com baixa
													<small>Faturas quitadas em nossos sistemas não apresentam o código de barras e o mês de referência para pagamento. Caso você perceba que não realizou o pagamento, mas o código de barras não está disponível, deve entrar em contato com o Contact Center.</small>
												</li>
												<li>
													<span>9A.</span>
													Nota fiscal da mensalidade
													<small>Disponível apenas em faturas que ainda não foram pagas ou que não estão em débito automático.</small>
												</li>
											</ol>
										</div>
									</div>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura2-2.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>9.</span>
													Nota fiscal da mensalidade
													<small>Nota fiscal referente à mensalidade do plano contratado.</small>
												</li>
											</ol>
										</div>
									</div>
									<span class="space-50"></span>
									<span class="space-50"></span>
									<div class="row">
										<div class="col-md-6">
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/fatura2-3.png" alt="">
										</div>
										<div class="col-md-6">
											<ol class="faq-faturas-ol">
												<li>
													<span>10.</span>Enlace
													<small>Número do contrato, também chamado de enlace. A conta de um cliente pode ter vários contratos em endereços diferentes. Neste campo é possível identificar a qual contrato pertence o valor faturado.</small>
												</li>
												<li>
													<span>11.</span>Velocidade
													<small>É o plano escolhido.</small>
												</li>
												<li>
													<span>12.</span>Produto/Serviço
													<small>Apresenta todos os produtos e serviços prestados e disponibilizados no seu período de faturamento.</small>
												</li>
												<li>
													<span>13.</span>Período
													<small>Período em que o serviço esteve habilitado para utilização do cliente. Quando você altera a data de vencimento, pode ocorrer a cobrança de um valor maior ou menor na mensalidade, dependendo do novo dia de fechamento da fatura.</small>
												</li>
												<li>
													<span>14.</span>Valor
													<small>Valor discriminado de acordo com a característica e disponibilidade dos serviços contratados.</small>
												</li>
												<li>
													<span>15.</span>Documentos
													<small>Pró-rata: Cobrança parcial. Calculada de acordo com o número de dias de serviço habilitado até o fechamento da fatura.</small>
													<small>Pode ocorrer no início da contratação, na alteração de data de vencimento da fatura ou em casos em que o serviço foi interrompido, gerando apenas a cobrança proporcional aos dias de serviço habilitado.</small>
													<small>Ajuste da Fatura Anterior: Valores referentes à quebra de negociação financeira. Quando o cancelamento do serviço é pedido antes do tempo de fidelidade do acordo. É proporcional à quantidade de dias em que o cliente usufruiu do benefício em cada mês.</small>
												</li>
											</ol>
										</div>
									</div>	
								</div>

							</div>

							<div id="glossario-de-documentos">
								<img src="<?php bloginfo('template_url'); ?>/_assets/images/faq/glossario.png" style="width: 100%;" alt="">
							</div>

							<span class="space-60"></span>

							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> 6,
										'orderby' => 'rand',
										'post__not_in' => array( $postID )
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php elseif (is_search()) : ?>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> -1,
										's' => $_GET["s"]
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php else: ?>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> -1,
										'tax_query' => array(
											array(
												'taxonomy' => 'faq-categoria',
												'field'    => 'slug',
												'terms'    => get_query_var('term')
											),
										),
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php endif; ?>
					</article>
					<aside class="col-md-4 col-sm-12 col-xs-12" data-mh="faq-single-group">
						<?php if (is_single()): ?>
						<h6 class="faq-tt">Perguntas relacionadas</h6>
						<ul>
							<?php 
								$args = array(
									'post_type'=> 'faq',
									'post_per_page'=> 6,
									'tax_query' => array(
										array(
											'taxonomy' => 'faq-categoria',
											'field'    => 'slug',
											'terms'    => $term->slug,
										),
									),
									'post__not_in' => array( $postID )
								);
								query_posts($args);
								if(have_posts()):
									while(have_posts()):
										the_post();
										echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
									endwhile;
								endif;
								wp_reset_query();
							?>
						</ul>
						<a href="<?php echo get_term_link($term->term_id, "faq-categoria"); ?>" id="faq-bt-all">VEJA TODAS</a>
						<?php endif; ?>
						
						<?php $categorias = get_terms("faq-categoria"); ?>
						<?php if ($categorias): ?>
						<div id="faq-outros">
							<?php foreach ($categorias as $cat): ?>
								<a href="<?php echo get_term_link($cat->term_id); ?>" class="faq-tt"><i class="<?php iconeFaq($cat->slug); ?>"></i><?php echo $cat->name; ?></a>
							<?php endforeach ?>
						</div>
						<?php endif ?>
					</aside>
				</div>
			</div>
		</div>
		<footer><?php get_template_part('template', 'highlight-blog' ); ?></footer>
	</section>