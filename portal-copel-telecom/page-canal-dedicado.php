<?php
	get_header();
	$services = new Services;
	$profile = $services->profile();
	$planos = json_decode($services->planos("J",$profile->cidade));

	if(!$planos->bel){
		$planos = json_decode($services->planos($profile->tipo->name,"CURITIBA"));
		$profile->cidade = "Curitiba";
	}
	
	$id = $planos->bel[0]->id;
?>

	<section id="home-empresas-canaldedicado" class="empresas">
		<div class="container">
			<header class="main-tt-highlight">
				<h1>
					Serviços de canal dedicado da Copel Telecom.<br>
					Dedicação completa à qualidade.
				</h1>
				<h2>
					As soluções de canal dedicado da Copel Telecom interligam computadores, redes,
					servidores e estações em qualquer ponto do Paraná, <strong>garantindo segurança e
					disponibilidade para suas conexões.</strong>
				</h2>
			</header>
		</div>

		<article>
			<div class="nav-highlights empresas-produtos-highlight wow fadeIn">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-blue col-sm-6 col-xs-12">
							<div class="nav-highlights-tt no-icon" data-mh="nav-highlight-group">
								<h3>
									Canais Dedicados 
									para Empresas
								</h3>
								<p>Rede de conexão ponto a ponto entre dois locais no Paraná através de canal determinístico.</p>
								<a href="<?php $p=get_page_by_title('Canal dedicado para empresas'); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">SAIBA MAIS</a>
							</div>
						</li>
						<li class="nav-highlights-blue-light col-sm-6 col-xs-12">
							<div class="nav-highlights-tt no-icon" data-mh="nav-highlight-group">
								<h3>
									Canais Dedicados para Operadoras e provedores em velocidades de até 10GBPS
								</h3>
								<p>Conexão ponto a ponto de dois locais no Paraná através de canal determinístico.</p>
								<div class="text-right">
									<a href="<?php $p=get_page_by_title('Canal dedicado para operadoras'); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">SAIBA MAIS</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</article>


		<article>
			<div class="empresas-vantagens">
				<div class="container">
					<img src="<?php bloginfo('template_url'); ?>/_assets/images/empresas/highlight-canaldireto.png" alt="">
					<h4>Integre benefícios às telecomunicações da sua empresa.</h4>
					<ul class="row">
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-qualidade"></i><br>
							<h5>Qualidade</h5>
							Integre benefícios às telecomunicações da sua empresa.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-produtividade"></i><br>
							<h5>Velocidade</h5>
							Mais agilidade operacional acelerando o crescimento de seus negócios.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-economia"></i><br>
							<h5>Economia</h5>
							Logística mais ágil e redução de custos com infraestrutura.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-superupload"></i><br>
							<h5>Disponibilidade</h5>
							A alta tecnologia da Copel Telecom permite maior disponibilidade para suas conexões.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-seguranca"></i><br>
							<h5>Segurança</h5>
							Muito mais proteção para as telecomunicações da sua empresa.
						</li>
					</ul>
				</div>
			</div>
			<div class="empresas-vantagens empresas-vantagens-blue">
				<div class="container">
					<ul class="row">
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-flexibilidade"></i><br>
							<h5>FLEXIBILIDADE</h5>
							A Copel Telecom tem um leque variado de soluções, que podem ser combinadas para atender às necessidades específicas da sua empresa.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-cobertura"></i><br>
							<h5>COBERTURA</h5>
							Os 399 municípios do nosso estado já contam com o que há de mais avançado em tecnologia digital.
							<a href="<?php echo LINK_WVT; ?>?s=<?php echo $id; ?>&locate=<?php echo $profile->cidade; ?>&p=J">Verifique disponibilidade técnica</a> para a sua localidade.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-fibra"></i><br>
							<h5>FIBRA ÓPTICA</h5>
							Com a tecnologia de fibra óptica da Copel Telecom, a qualidade do sinal se mantém desde a origem até o destino. Ou seja, lucro de ponta a ponta para seus negócios.
						</li>
						<li class="col-sm-3 col-xs-12" data-mh="ev-group">
							<i class="i-e-tecnologia"></i><br>
							<h5>TECNOLOGIA</h5>
							Há mais de 40 anos, a Copel é sinônimo de tecnologia e inovação a serviço do desenvolvimento do Paraná, sendo a empresa pública mais admirada pelos paranaenses.
						</li>
					</ul>
				</div>
			</div>
		</article>

		<?php get_template_part('template','empresas-contato'); ?>

	</section>

<?php get_footer(); ?>