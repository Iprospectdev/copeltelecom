<?php
	get_header();
?>
	<section class="speedtest">
		<?php if($_GET['flash']=='0'): ?>
			<header class="wow fadeIn">
				<h1 class="main-tt main-tt-barra">Speedtest Copel Telecom</h1>
			</header>
			<div id="speedtest-invalid">
				<article>
					<div class="container">
						<i class="i-explamacao"></i>
						<br>
						<p>O Speedtest Copel Telecom requer a versão 8 ou superior do Flash. <strong>Por favor atualize o seu aplicativo Flash.</strong></p>
					</div>
				</article>
			</div>
		<?php else: ?>

			<header class="wow fadeIn">
				<h1 class="main-tt main-tt-barra">Speedtest Copel Telecom</h1>
			</header>

			<span class="space-20"></span>

			<div id="speedtest-valid">

				<article id="speedtest-teste">
					<div class="container">
						<div class="row">
							
							<div class="col-md-8 col-sm-12 col-xs-12 wow fadeIn">
								
								<iframe src="http://tvc.copel.net/index_ookla.html" frameborder="0" height="620px" style="height: 620px;" width="100%"></iframe>
								
								<aside>

									<h2>Veja como a Copel Telecom garante o melhor resultado</h2>
									<p>A Copel Telecom garante a entrega da velocidade contratada. E isso, só quem tem a rede de transmissão de dados mais veloz do mundo pode oferecer.</p>

									<ul>
										
										<li>
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/speedtest/i-fibra.png" alt="">
											Fibra Óptica<br><strong>de ponta a ponta</strong>
										</li>

										<li>
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/speedtest/i-time.png" alt="">
											Velocidades de<br><strong>30 a 150 mega</strong>
										</li>

										<li>
											<img src="<?php bloginfo('template_url'); ?>/_assets/images/speedtest/i-upload.png" alt="">
											<strong>O maior upload</strong><br>do mercado
										</li>

									</ul>


								</aside>

							</div>

							<div class="col-md-4 col-sm-12 col-xs-12 speedtest-dicas wow fadeIn">
								
								<h6>Dicas importantes para realizar o teste</h6>
								
								<p>O teste de velocidade da Copel Telecom é um dos mais utilizados do Brasil. É um serviço online oferecido pela Copel Telecom com base no velocímetro Ookla. O objetivo é detectar com precisão a velocidade de transferência de dados, informando se a banda atual está de acordo com a velocidade contratada.</p>
								<p><strong>Antes de medir a velocidade da sua banda, siga estas dicas para que o resultado seja o mais preciso possível:</strong></p>

								<span class="space-20"></span>

								<ul>

									<li>
										
										<div class="inner-dica">
										
											<i class="i-st-cabo"></i> 
											Faça o teste em um computador conectado à internet por meio de um cabo de rede. <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Evite redes sem fio. Testes realizados por meio de redes sem fio sofrem a influência de fatores como a criptografia dos dados trafegados, limites (throughput) do access point, interferências eletromagnéticas, entre outros. Se o seu computador possui entrada para cabo de rede, utilize-o para um resultado mais preciso."></span>
										
										</div>
										
									</li>

									<li>

										<div class="inner-dica">
																					
											<i class="i-st-fibra"></i> 
											Conecte diretamente na entrada do provedor

										</div>
										
									</li>

									<li>
										
										<div class="inner-dica">

											<i class="i-st-feche"></i> 
											Feche todos os programas

										</div>
										
									</li>

									<li>
										
										<div class="inner-dica">
										
											<i class="i-st-pare"></i> 
											Interrompa as atualizações

										</div>
										
									</li>

									<li>
										
										<div class="inner-dica">
											
											<i class="i-st-repita"></i> 
											Repita o teste

										</div>
										
									</li>

								</ul>

							</div>
	
						</div>

						<footer>

							<div class="row text-center wow fadeIn">
								
								<div class="space-45"></div>

								<div class="col-xs-12">

									<a href="<?php $p = get_page_by_title("Planos"); echo get_permalink($p->ID); ?>" class="bt-o-b bt-o-b-white mrg5R mrg5B">VEJA OS PLANOS E PREÇOS</a>
									
									<a href="http://www.copel.com/wvtweb/site/verificar_disponibilidade.jsf?_ga=1.236576769.108334761.1491312522#" target="_blank" class="bt-o-b bt-o-b-white mrg5L mrg5B">CONTRATAR</a>
									
								</div>

								<div class="space-40"></div>

							</div>

						</footer>

					</div>

				</article>

			</div>

	
			<div class="modal fade" tabindex="-1" id="modalGostou" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
						<div class="modal-body">
							<i class="i-c-foguete"></i>
							<p>
								Para sua informação, pela Resolução 574 da Anatel, as prestadoras devem oferecer uma taxa de transmissão instantânea de 40% da velocidade contratada. E 80% de taxa de transmissão média, tanto em download quanto em upload.<br>
								<strong>A Copel Telecom entrega 100%. </strong><br>
								Isso mesmo. 100% da velocidade que sai da Copel Telecom é exatamente a mesma que chega dentro do seu modem.<br>
								Lembramos que a velocidade de wi-fi não pode ser garantida da mesma maneira que a velocidade da fibra que chega até o seu modem.
							</p>
							<div class="text-center row modal-bts">
								<div class="col-sm-10 col-sm-offset-1 col-xs-12">
									<div class="col-sm-6 col-xs-12">
										<a href="#" class="bt-o">saiba mais</a>
									</div>
									<div class="col-sm-6 col-xs-12">
										<button type="button" class="bt-o" data-dismiss="modal">continue navegando</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>
		<aside>
			<?php get_template_part('template','bts-contato'); ?>
			<?php get_template_part('template','highlight-blog'); ?>
		</aside>
	</section>
<?php get_footer(); ?>