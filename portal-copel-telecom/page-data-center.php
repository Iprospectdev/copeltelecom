<?php get_header('old'); ?>

	<section id="home-empresas-datacenter" class="empresas">
		<div class="container">
			<header class="main-tt-highlight">
				<h1>Conheça o melhor lugar para<br>armazenar sua confiança.</h1>
				<h2>
					A Copel Telecom tem soluções de data center que aliam comodidade, segurança e<br>
					praticidade para o seu ambiente de TI. Confira.<br>
					<strong>A manutenção da sua tranquilidade passa por aqui.</strong>
				</h2>
			</header>
		</div>

		<article>
			<div class="nav-highlights empresas-produtos-highlight wow fadeIn">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-blue col-sm-12 col-xs-12">
							<div class="col-sm-6">
								<div class="nav-highlights-tt no-icon" data-mh="nav-highlight-group">
									<h3>Colocation</h3>
									<p>Serviço de hospedagem física de equipamentos, servidores e aplicações com infraestrutura completa e rede de dados redundante.</p>
									<a href="<?php $p=get_page_by_title('Colocation Copel Telecom'); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">SAIBA MAIS</a>
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
					<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/empresas/highlight-datacenter.png" alt="">
					<h4>Aproveite benefícios com o peso da marca Copel.</h4>
					<ul class="row">
						<li class="col-sm-15 col-sm-offset-1 col-xs-12" data-mh="ev-group">
							<i class="i-e-superupload"></i><br>
							<h5>Conectividade</h5>
							Acesso garantido a redes corporativas e à internet de alta velocidade e disponibilidade.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-economia"></i><br>
							<h5>Economia</h5>
							Logística mais ágil e redução de custos com infraestrutura.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-seguranca"></i><br>
							<h5>Segurança</h5>
							Muito mais proteção para as telecomunicações da sua empresa.
						</li>
						<li class="col-sm-15 col-xs-12" data-mh="ev-group">
							<i class="i-e-qualidade"></i><br>
							<h5>Controle</h5>
							Você tem acesso total e irrestrito aos seus dados, a qualquer momento.
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
	
<?php get_footer('old'); ?>