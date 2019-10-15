<?php get_header('old');?>
	<section class="area-do-cliente" id="ouvidoria">
		<header class="wow fadeIn">
			<div class="breadcrumb">
				<ul>
					<li><a href="<?php $p = get_page_by_title("Área do Cliente Login"); echo get_permalink($p->ID); ?>">Área de cliente</a></li>
					<li><span>Ouvidoria</span></li>
				</ul>
			</div>
			<h1 class="main-tt">Ouvidoria</h1>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12 wow slideInLeft">
					<aside>
						<ul>
							<li>
								A Ouvidoria da Copel Telecom é um canal direto, de segunda instância de comunicação, para clientes, cidadãos, empregados e fornecedores. Ela recebe e analisa pedidos de informação, sugestões, reclamações, denúncias e questionamentos. Seu objetivo é contribuir para a satisfação dos envolvidos e para o aperfeiçoamento dos produtos e serviços da Copel Telecom.
							</li>
							<li class="active">
								<h6 class="barra">E-mail</h6>
								<small>ouvidoriatelecom@copel.com</small>
							</li>
							<li class="active">
								<h6>Telefone</h6>
								<small>0800 649 39 49</small>
							</li>
						</ul>
					</aside>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight">
					<article>
						<div class="row">
							<div class="col-sm-8 col-xs-12">
								<h2>Quando usar?</h2>
								<p>
									Se você recorreu a um dos <strong><u>Canais de Atendimento</u></strong> e sua solicitação não foi atendida ou a solução oferecida é insatisfatória, você pode recorrer à Ouvidoria.
								</p>
							</div>
						</div>
						<hr>
						<h2>Como usar?</h2>
						<p>
							1) Prepare a sua manifestação incluindo essas informações:<br>
							<ul>
								<li>número do protocolo registrado pelos Canais de Atendimento</li>
								<li>nome completo</li>
								<li>telefone com DDD</li>
								<li>endereço de e-mail</li>
								<li>cidade</li>
								<li>produto</li>
								<li>número do contrato (se houver) ou CPF / CNPJ</li>
								<li>descrição detalhada da sua manifestação</li>
							</ul> 
						</p>
						<p>
							2) Apresente sua manifestação:<br>
							<ul>
								<li>por e-mail: ouvidoriatelecom@copel.com</li>
								<li>ou pelo telefone: 0800 649 39 49 (horário de atendimento: das 10h às 16h - de segunda a sexta, em dias úteis)</li>
							</ul>
						</p>
					</article>
				</div>
			</div>
		</div>
		<footer>
			<?php get_template_part('template','nao-encontrou'); ?>
		</footer>
	</section>
<?php get_footer('old'); ?>