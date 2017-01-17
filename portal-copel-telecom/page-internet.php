<?php get_header(); ?>

	<section class="empresas" id="home-empresas-internet">
		
		<header class="main-tt-highlight">
			<div class="container">
				<h1>Soluções de Internet da Copel Telecom.<br>Fique 100% online com a qualidade.</h1>
				<h2>Internet de alta velocidade e disponibilidade com <br><strong>tecnologia 100% em fibra óptica.</strong></h2>
			</div>
		</header>
		
		<article>
			<div class="nav-highlights empresas-produtos-highlight wow fadeIn">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-blue col-sm-6 col-xs-12">
							<div class="nav-highlights-tt" data-mh="nav-highlight-group">
								<i class="i-b-predio-white"></i>
								<h3>Banda extra larga empresarial</h3>
								<p>A banda extra larga da Copel Telecom conecta<br>
								sua empresas com o mundo em alta velocidade.<br>
								Tudo para que seus negócios girem<br>
								ainda mais rápido.</p>
								<a href="<?php $p=get_page_by_title('Banda extra larga empresarial'); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">SAIBA MAIS</a>
							</div>
						</li>
						<li class="nav-highlights-blue col-sm-6 col-xs-12">
							<div class="nav-highlights-tt" data-mh="nav-highlight-group">
								<i class="i-b-cloud-white"></i>
								<h3>Internet Corporativa</h3>
								<p>Serviço de internet por fibra óptica com <br>
								endereço IP fixo. Só os seus negócios é que <br>
								não vão parar.</p>
								<div class="text-right">
									<a href="<?php $p=get_page_by_title('Internet Corporativa'); echo get_permalink($p->ID); ?>" class="bt-o bt-o-white">SAIBA MAIS</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</article>

		<article class="empresas-vantagens">
			<div class="container">
				<img src="<?php bloginfo('template_url'); ?>/_assets/images/empresas/highlight-2.png" alt="">
				<ul class="row">
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-qualidade"></i><br>
						<h5>Qualidade</h5>
						Sinal de alta disponibilidade e livre de interferências, graças à tecnologia de fibra óptica.
					</li>
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-economia"></i><br>
						<h5>Economia</h5>
						Logística mais ágil e redução de custos com infraestrutura.
					</li>
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-superupload"></i><br>
						<h5>SuperUpload</h5>
						A Copel Telecom oferece o maior upload do mercado.
					</li>
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-multimidia"></i><br>
						<h5>Multimídia</h5>
						Com a Copel Telecom você pode incrementar seus negócios com soluções de e-commerce, e-learning, ensino a distância, videoconferência, entre várias outras aplicações.
					</li>
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-produtividade"></i><br>
						<h5>Produtividade</h5>
						Comunicação e informação em alta velocidade aumentando a performance de seus colaboradores.
					</li>
					<li class="col-sm-4 col-xs-12" data-mh="ev-group">
						<i class="i-e-seguranca"></i><br>
						<h5>Segurança</h5>
						Com a Copel Telecom é possível monitorar sua empresas através de sistemas de vigilância e controle de acesso.
					</li>
				</ul>
			</div>
		</article>
		
		<?php get_template_part('template','empresas-contato'); ?>
		<?php get_template_part('template','blog-home'); ?>

	</section>
	
<?php get_footer(); ?>