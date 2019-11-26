<?php get_header('old'); ?>

	<section id="home-empresas-banda-extra-larga" class="empresas home-empresas-intena">
		
		<header class="main-tt-highlight">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php $p=get_page_by_title('Internet'); echo get_permalink($p->ID); ?>">Internet</a></li>
						<li><span>Banda extra larga empresarial</span></li>
					</ul>
				</div>
				<h1>Banda extra larga empresarial</h1>
				<h2>
					Serviço de internet banda larga com<br><strong>tecnologia 100% em fibra óptica.</strong><br>
					Transmissão de dados, voz, vídeos e imagens em alta velocidade.<br>
					Porque seus negócios não podem parar.
				</h2>
			</div>
			<nav class="empresas-internet-nav">
				<a href="#vantagens" class="bt-o bt-o-white">Vantagens</a>
				<a href="#como-funciona" class="bt-o bt-o-white">Como funciona</a>
				<a href="#para-quem" class="bt-o bt-o-white">Para quem</a>
				<a href="#planos" class="bt-o bt-o-white">Planos</a>
				<a href="#fale-com-a-gente" class="bt-o bt-o-white"> Fale com a gente</a>
			</nav>
		</header>

		<article id="vantagens" class="home-empresas-intena-vantagens">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h6 class="main-tt-barra">Vantagens</h6>
					</div>
					<div class="col-sm-9">
						<ul class="row">
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Sinal de alta disponibilidade, sem interferências, graças à tecnologia 100% em fibra óptica.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-updown"></i>
								<p>A maior velocidade de upload do mercado.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Cobrança fixa por banda, independente da distância e sem degrau tarifário.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<article id="como-funciona" class="home-empresas-intena-como-funciona">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h6 class="main-tt-barra">Como funciona</h6>
						<p>Por meio de sua rede 100% em fibra Óptica, a Copel Telecom deixa sua empresa conectada com a internet de alta velocidade e disponibilidade.</p>
					</div>
					<div class="col-sm-8"><img src="<?php bloginfo('template_url'); ?>/_assets/old/images/empresas/como-funciona.png" alt=""></div>
				</div>
			</div>
		</article>
		<article id="para-quem" class="home-empresas-intena-para-quem">
			<div class="container">
				<div class="row">
					<div class="col-sm-3"><h6 class="main-tt-barra">Para quem</h6></div>
					<div class="col-sm-9">
						<ul>
							<li class="active"><i class="i-pq-pequenas"></i><span>Pequenas e médias<br>empresas</span></li>
							<li class="active"><i class="i-pq-grandes"></i><span>Grandes empresas</span></li>
							<li class="active"><i class="i-pq-publicos"></i><span>Seviços públicos</span></li>
							<li><i class="i-pq-operadoras"></i><span>operadoras<br>e provedores</span></li>
						</ul>
					</div>
				</div>
			</div>
		</article>

		<?php get_template_part("templates/empresas", "planos"); ?>
		
		<div id="fale-com-a-gente">
		<?php get_template_part('template','empresas-contato'); ?>
		</div>

	</section>
	
<?php get_footer('old'); ?>