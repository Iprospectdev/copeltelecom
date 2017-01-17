<?php get_header(); ?>

	<section class="empresas home-empresas-intena">
		
		<header class="main-tt-highlight">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php $p=get_page_by_title('Data Center'); echo get_permalink($p->ID); ?>">Data Center</a></li>
						<li><span>Colocation Copel Telecom</span></li>
					</ul>
				</div>
				<h1>
					Colocation Copel Telecom
				</h1>
				<p>O Colocation é uma solução de Data Center que oferece serviço de hospedagem física de equipamentos, servidores e aplicações. Dispõe de infraestrutura de energia, refrigeração, segurança patrimonial e controle de acesso, além de uma rede de dados totalmente redundante.</p>
			</div>
			<nav class="empresas-internet-nav">
				<a href="#vantagens" class="bt-o bt-o-white">Vantagens</a>
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
								<p>Da concepção à implantação, o Colocation da Copel Telecom garante hospedagem dentro do padrão mundial TIER III.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Possibilita conexão a redes privadas corporativas e internet de alta velocidade e disponibilidade.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Flexibilidade no fornecimento de energia e velocidade de conexão.</p>
							</li>
							<li class="col-sm-3" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Credibilidade, tradição e reconhecimento da marca Copel.</p>
							</li>
						</ul>
					</div>
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
							O Colocation está disponível somente em Curitiba.
						</p>
						<p><a href="<?php $p = get_page_by_title("Contato"); echo get_permalink($p->ID); ?>">FALE COM A GENTE E SAIBA MAIS</a></p>
						
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/copel-telecom/mapa-pr.png" alt="">
					</div>
				</div>
			</div>
		</article>

		<div id="fale-com-a-gente">
		<?php get_template_part('template','empresas-contato'); ?>
		</div>

	</section>
	
<?php get_footer(); ?>