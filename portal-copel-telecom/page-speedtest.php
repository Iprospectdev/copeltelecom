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
				<small>Teste agora a qualidade da sua internet banda larga com o teste de velocidade da Copel Telecom.</small>
			</header>
			<div id="speedtest-valid">
				<article id="speedtest-teste">
					<div class="container">
						<div class="row">
							<aside data-mh="teste-group" class="col-sm-4 col-xs-12">
								<h2>Você sabia?</h2>
								<p>Que a Copel Fibra é a única internet no Brasil com tecnologia 100% em fibra óptica, a rede de transmissão de dados mais veloz que existe em todo o mundo?</p>
								<p>Copel Fibra é a internet da Copel Telecom para todos os paranaenses.</p>
								<a href="<?php $p = get_page_by_title("Copel Telecom"); echo get_permalink($p->ID); ?>" class="bt-o-b bt-o-b-white">SAIBA MAIS SOBRE A COPEL FIBRA </a>
							</aside>
							<div class="col-sm-8 col-xs-12" data-mh="teste-group">
								<iframe src="http://speedtest.copel.net/speedtest_geral_new.html" frameborder="0" height="100%" width="100%"></iframe>
							</div>
						</div>
					</div>
				</article>
			</div>
			<div class="modal fade" tabindex="-1" id="modalAviso" role="dialog">
				<div class="modal-dialog modal-dialog-g">
					<div class="modal-content">
						<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
						<div class="modal-body">
							<h6>Dicas importantes para realizar o teste</h6>
							<div class="little">
								<p>
									O teste de velocidade da Copel Telecom que mede a largura de banda é um dos mais utilizados do Brasil. O teste é um serviço online oferecido pela Copel Telecom com base no velocímetro Ookla. O objetivo é detectar com precisão a velocidade de transferência de dados, informando se a banda atual está de acordo com a velocidade contratada.<br><br>
									<strong>Antes de medir a velocidade da sua banda, siga estas dicas para que o resultado seja o mais preciso possível:</strong>
								</p>
							</div>
							<ul class="row list-dicas">
								<li class="col-md-15 col-sm-6 col-xs-12">
									<i class="i-st-cabo"></i><br>
									Faça o teste em um computador concectado a internet por meio de um cabo de rede <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="Evite redes sem fio. Testes realizados por meio de redes sem fio sofrem a influência de fatores como a criptografia dos dados trafegados, limites (throughput) do access point, interferências eletromagnéticas, entre outros. Se o seu computador possui entrada para cabo de rede, utilize-o para um resultado mais preciso."></span>
								</li>
								<li class="col-md-15 col-sm-6 col-xs-12">
									<i class="i-st-fibra"></i><br>
									Conecte diretamente na<br>entrada do provedor <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title=""></span>
								</li>
								<li class="col-md-15 col-sm-6 col-xs-12">
									<i class="i-st-feche"></i><br>
									Feche todos<br>os programas <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title=""></span>
								</li>
								<li class="col-md-15 col-sm-6 col-xs-12">
									<i class="i-st-pare"></i><br>
									Interrompa as<br>atualizações <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title=""></span>
								</li>
								<li class="col-md-15 col-sm-12 col-xs-12">
									<i class="i-st-repita"></i><br>
									Repita o teste <span class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title=""></span>
								</li>
							</ul>
							<div class="text-center row modal-bts">
								<div class="col-sm-10 col-sm-offset-1 col-xs-12">
									<div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
										<a href="<?php $p = get_page_by_title("Copel Telecom"); echo get_permalink($p->ID); ?>" class="bt-o">saiba mais sobre copel fibra</a>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<button type="button" class="bt-o" data-dismiss="modal">continue navegando</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<script>
				jQuery(document).ready(function($) {
					$('#modalAviso').modal('show');
				});
			</script>
		<?php endif; ?>
		<aside>
			<?php get_template_part('template','bts-contato'); ?>
			<?php get_template_part('template','highlight-blog'); ?>
		</aside>
	</section>
<?php get_footer(); ?>