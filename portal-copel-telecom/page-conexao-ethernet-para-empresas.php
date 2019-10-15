<?php get_header(); ?>

	<section class="empresas home-empresas-intena">
		
		<header class="main-tt-highlight">
			<div class="container">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php $p=get_page_by_title('Redes'); echo get_permalink($p->ID); ?>">Redes</a></li>
						<li><span>Conexão Ethernet ponto a ponto para Empresas e Setor Público</span></li>
					</ul>
				</div>
				<h1>
					Conexão Ethernet ponto a ponto<br>
					para Empresas e Setor Público
				</h1>
				<h2>Rede ponto a ponto que interliga dois locais dentro do Estado.</h2>
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
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-fibra"></i>
								<p>Sinal de alta disponibilidade, livre de interferências, graças à tecnologia 100% em fibra óptica.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-updown"></i>
								<p>Permite tráfego de voz, dados e imagens.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Redução de custos com infraestrutura de telecomunicações.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Interconexão de vários pontos no Paraná.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Cobrança fixa por banda, independente da distância e sem degrau tarifário.</p>
							</li>
							<li class="col-sm-4" data-mh="vantagens">
								<i class="i-ev-money"></i>
								<p>Simplicidade do serviço, pelo uso de um cabo de rede padrão RJ45.</p>
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
							A Conexão Ethernet ponto a ponto para Empresas e Setor Público é usada para conexão de redes locais (LAN) feita na infraestrutura de rede MetroEthernet e/ou MPLS.<br>
							<a href="<?php bloginfo('template_url'); ?>/_assets/pdf/rav.l2.v.20130520.pdf" target="_blank">Confira as características do serviço</a>
						</p>
					</div>
					<div class="col-sm-8"><img src="<?php bloginfo('template_url'); ?>/_assets/images/empresas/mpls-alta-velocidade-filial.png" alt=""></div>
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

		<article class="home-empresas-intena-cobertura wow fadeIn" id="cobertura">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h6 class="main-tt-barra">Cobertura</h6>
						<p>
							A Conexão Ethernet ponto a ponto para Empresas e Setor Público tem cobertura em todo o Paraná.
						</p>
						<p>
							Sua implantação depende da viabilidade técnica na localidade solicitada por você.
						</p>
						<p><a href="<?php $p = get_page_by_title("Contato"); echo get_permalink($p->ID); ?>">FALE COM A GENTE E SAIBA MAIS</a></p>
						
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="<?php bloginfo('template_url'); ?>/_assets/images/copel-telecom/mapa-pr.png" alt="">
					</div>
				</div>
			</div>
		</article>

		<article class="home-empresas-intena-produtos wow fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<h6 class="main-tt-barra">Produtos Acessórios</h6>
					</div>
					<div class="col-sm-9 col-xs-12">
						<ul class="row">
							<li class="col-xs-12 col-sm-4" data-mh="pa-group">
								<i class="i-ep-grafico"></i>
								<p><strong>GRÁFICO</strong><br>Fornecimento de gráfico, via internet, para verificar a utilização dos links contratados.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>

		<div id="fale-com-a-gente">
		<?php get_template_part('template','empresas-contato'); ?>
		</div>

	</section>
	
<?php get_footer(); ?>