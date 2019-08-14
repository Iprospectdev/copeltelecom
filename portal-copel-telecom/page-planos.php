<?php
	get_header();
	$services = new Services;
	$profile = $services->profile();
	$planos = json_decode($services->planos("F",$profile->cidade));

	if(!$planos->bel){
		$planos = json_decode($services->planos("F","CURITIBA"));
		$profile->cidade = "Curitiba";
	}

	$sizes = array();

	if ($planos) {
		for ($i=1; $i <= count($planos->bel); $i++) { 
			$percent = ($i*(100/count($planos->bel)));
			$sizes[] = intval((250*$percent)/100);
		}
	}

	$sercontel = array(
		"APUCARANA",
		"ARAUCARIA",
		"CAMPO LARGO",
		"CAMPO MOURAO",
		"PATO BRANCO",
		"PINHAIS",
		"QUATRO BARRAS",
		"TOLEDO",
		"CASTRO",
		"CORNELIO PROCOPIO",
		"CURITIBA",
		"DOUTOR CAMARGO",
		"FLORESTA",
		"FOZ DO IGUACU",
		"IRATI",
		"ITAMBE",
		"LAPA",
		"MARECHAL CANDIDO RONDON",
		"MARINGA",
		"ORTIGUEIRA",
		"PARANAGUA",
		"PIRAQUARA",
		"PONTA GROSSA",
		"TELEMACO BORBA",
		"UNIAO DA VITORIA"
	);
	
?>

	<section id="planos">

		<header>
			<h1 class="main-tt main-tt-barra">Planos de Internet Copel Fibra</h1>
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<ul class="row">
							<li class="col-xs-4">
								<i class="i-vd-fibra2"></i>
								Fibra óptica<strong>de ponta a ponta</strong>
								<small>
									Com a fibra óptica a qualidade da conexão e da velocidade da sua internet<br>
									Copel Fibra é mantida desde o servidor até o modem da sua casa.
								</small>
							</li>
							<li class="col-xs-4">
								<i class="i-vd-velocidade2"></i>
								<?php if ($planos): ?>
									<?php
										$ini = $planos->bel[0]->download;

										$end = end($planos->bel)->download;

									?>
									Velocidades de<strong><?php echo $ini; ?> a <?php echo $end; ?></strong>
								<?php else: ?>
									Velocidades de<strong>1 mega a 1 giga</strong>
								<?php endif; ?>
								<small>
									Além de fornecer internet com a estabilidade de sinal e a alta velocidade através<br>
									da fibra óptica, a Copel Telecom entrega 100% da velocidade contratada, oferece<br>
									o maior upload do mercado e não possui filtros nem franquias.
								</small>
							</li>
							<!-- <li class="col-xs-4">
								<i class="i-vd-upload2"></i>
								<strong>O maior upload</strong>do mercado
								<small>
									A Copel Telecom oferece o maior upload do mercado porque trabalha com<br>
									banda simétrica, ou seja, tanto download quanto upload são feitos na mesma<br>
									velocidade.
								</small>
							</li> -->
						</ul>
					</div>
					<div class="col-sm-7">
						<span class="space-45"></span>
						<!-- <p>A Copel Telecom garante a entrega da velocidade contratada, sem diferenças, tanto download como para upload. E isso, só quem tem a rede de transmissão de dados mais veloz do mundo pode oferecer.</p> -->
					</div>
				</div>
			</div>
		</header>
		<article>
			<div class="container">
				<div class="planos-detalhes">
					<?php if ($planos): ?>
					<ul>
						<?php foreach ($planos->bel as $plan): ?>
							<li class="wow fadeIn">
								<dl>
									<dt class="col-sm-15 col-xs-12 plano-tt" data-mh="c-dt-group">
										<?php 
											if($services->profile_velocidade($plan->nomeProduto) == '01'){
												echo '<small>Paraná Conectado</small>';
											}else{
												echo '<small>Copel Fibra</small>';
											}
											$velocidade = $services->profile_velocidade($plan->nomeProduto);
											$velocidade = str_replace('a', '', $velocidade);
											$velocidade = str_replace('A', '', $velocidade);
										 ?>
										<strong><?php echo $plan->download; ?></strong>
									</dt>
									<dd class="col-sm-15 col-xs-6" data-mh="ct-pc-group">
										<i class="i-down-gray"></i>
										<strong><?php echo $plan->download; ?></strong>
										Velocidade<br>de <small>download</small>
									</dd>
									<dd class="col-sm-15 col-xs-6" data-mh="ct-pc-group">
										<i class="i-up-gray"></i>
										<strong><?php echo $plan->upload; ?></strong>
										Velocidade<br>de <small>upload</small>
									</dd>
									<dd class="col-sm-15 col-xs-12 plano-preco" data-mh="c-dt-group">
										<small>R$</small><?php echo $services->profile_price($plan->precoProduto); ?><small>,<?php echo $services->profile_cents($plan->precoProduto); ?>*</small>
									</dd>
									<dd class="col-sm-15 col-xs-12 plano-bts" data-mh="ct-pc-group">
										<a href="<?php echo LINK_WVT; ?>?s=<?php echo $plan->id; ?>&locate=<?php echo $profile->cidade; ?>&p=<?php echo $profile->tipo->name; ?>" class="bt">VERIFICAR DISPONIBILIDADE</a>
										<a href="#" class="detalhe btn-planos btn_disponibilidade_<?php echo $velocidade; ?>mb">Plano de Serviço</a>
									</dd>
								</dl>
							</li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
				</div>
			</div>
			
			<?php if (in_array($profile->cidade, $sercontel)): ?>
			<div class="container">
				<div class="highlight-sercontel" style="padding-top: 30px;">
					<dl>
						<dt>Quer contratar um plano de telefonia também?</dt>
						<dd>
							Para ter Copel Telecom na sua casa você não precisa adquirir um combo de serviços, apenas o plano de internet. Mas, caso deseje contratar um serviço de telefonia, entre em contato com a <a href="https://www.sercomtel.com.br/copel" target="_blank">Sercomtel</a>. 
							<br><br>
							A Copel Telecom mantém uma parceria para disponibilizar telefonia fixa da Sercomtel por meio da mesma infraestrutura de fibra óptica usada para internet. Confira os planos telefônicos da Sercomtel ou tire dúvidas sobre esse serviço por meio do telefone 103 43.
						</dd>
					</dl>
				</div>
			</div>
			<?php endif ?>

			<aside>
				
				<div class="legal-links">
					<p>
						Valor de instalação de internet com plano de fidelidade de 12 meses: R$ 99,00. <br>
						Valor de instalação de internet sem fidelidade: R$ 999,00. <br>
						Planos sujeitos a disponibilidade. Válidos para <strong><?php echo $profile->cidade; ?></strong> (<a href="" ng-click="go_cidade()">alterar</a>)
					</p>

					<p><a href="<?php bloginfo("url"); ?>/wp-content/uploads/2018/04/Caracteristicas-tecnicas-Copel-Fibra-1.pdf" target="_blank">Consulte aqui</a> as características técnicas dos planos de serviço.</p>
					<p><a href="<?php bloginfo("url"); ?>/wp-content/uploads/2018/04/Contrato-COPEL-FIBRA-1.pdf" target="_blank">Contrato</a> e <a href="<?php bloginfo("url"); ?>/wp-content/uploads/2018/04/termo-de-oferta-de-beneficio-e-fidelizacao-copel-fibra-1.pdf" target="_blank">termo de fidelidade</a> aplicável ao plano de serviço.</p>
				</div>

				<?php get_template_part('template','bts-contato'); ?>
			</aside>
		</article>
		<aside>
			<?php get_template_part('template','highlight-blog'); ?>
			<?php get_template_part('template','nav-highlight'); ?>
			<div class="nav-highlights hide">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-orange-light col-sm-6 col-xs-12">
							<div class="nav-highlights-tt">
								<a href="#">
									<i class="i-nh-whitepaper"></i>
									<h6>Baixe o whitepaper</h6>
									<p>Conteúdo em formato PDF com explicação sobre a diferença entre cabo e fibra óptica.</p>
								</a>
							</div>
						</li>
						<li class="nav-highlights-orange col-sm-6 col-xs-12">
							<div class="nav-highlights-tt">
								<a href="<?php bloginfo("template_url"); ?>/_assets/images/infografico.png" target="_blank">
									<i class="i-nh-infografico"></i>
									<h6>Veja o infográfico</h6>
									<p>Saiba o que você pode fazer com cada uma das velocidades da internet da Copel Telecom.</p>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</aside>
	</section>

<?php get_footer(); ?>