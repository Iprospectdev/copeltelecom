<?php get_header('old'); ?>

	<section class="empresas home-empresas-intena">
		
		<header class="main-tt-highlight">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php $p=get_page_by_title('Canal Dedicado'); echo get_permalink($p->ID); ?>">Canal Dedicado</a></li>
						<li><span>Canais dedicados para operadoras e provedores em velocidades de até 10 gbps</span></li>
					</ul>
				</div>
				<h1>
					Canais dedicados para operadoras e provedores<br>em velocidades de até 10 gbps
				</h1>
				<p>Conexão ponto a ponto de dois locais no Paraná através de canal determinístico.</p>
			</div>
			<nav class="empresas-internet-nav">
				<a href="#vantagens" class="bt-o bt-o-white">Vantagens</a>
				<a href="#como-funciona" class="bt-o bt-o-white">Como funciona</a>
				<a href="#para-quem" class="bt-o bt-o-white">Para quem</a>
				<a href="#cobertura" class="bt-o bt-o-white">Cobertura</a>
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
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Sinal de alta disponibilidade e continuidade, sem interferências.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Redução de custos com infraestrutura de telecomunicações.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Conexão por canal exclusivo, que proporciona maior segurança.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Transparência e uso de qualquer protocolo de utilização</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Tecnologia 100% em fibra óptica.</p>
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
						<p>
							Os Canais Dedicados para Operadoras e Provedores em velocidades de até 10 GBPS permitem a interconexão de equipamentos e centrais com respectivas estações e pontos de presença dentro do Estado.<br>
						</p>
					</div>
					<div class="col-sm-8"><img src="<?php bloginfo('template_url'); ?>/_assets/old/images/empresas/canal-dedicado-empresas.png" alt=""></div>
				</div>
			</div>
		</article>
		<article id="para-quem" class="home-empresas-intena-para-quem">
			<div class="container">
				<div class="row">
					<div class="col-sm-3"><h6 class="main-tt-barra">Para quem</h6></div>
					<div class="col-sm-9">
						<ul>
							<li><i class="i-pq-pequenas"></i><span>Pequenas e médias<br>empresas</span></li>
							<li><i class="i-pq-grandes"></i><span>Grandes empresas</span></li>
							<li><i class="i-pq-publicos"></i><span>Seviços públicos</span></li>
							<li class="active"><i class="i-pq-operadoras"></i><span>operadoras<br>e provedores</span></li>
						</ul>
					</div>
				</div>
			</div>
		</article>

		<article class="home-empresas-intena-cobertura wow fadeIn" id="cobertura">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h6 class="main-tt-barra">Cobertura</h6>
						<p>
							Os Canais Dedicados para Operadoras e Provedores em velocidades de até 10 GBPS têm cobertura em todo o Paraná.
						</p>
						<p>
							Sua implantação depende da viabilidade técnica na localidade solicitada por você.
						</p>
						<p><a href="<?php $p = get_page_by_title("Contato"); echo get_permalink($p->ID); ?>">FALE COM A GENTE E SAIBA MAIS</a></p>
						
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/copel-telecom/mapa-pr.png" alt="">
					</div>
				</div>
			</div>
		</article>

		<div id="fale-com-a-gente">
		<?php get_template_part('template','empresas-contato'); ?>
		</div>

	</section>
	
<?php get_footer('old'); ?>