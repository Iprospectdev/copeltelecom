<?php get_header(); ?>
	<section id="acessibilidade">
		<header>
			<h1 class="main-tt main-tt-barra">Acessibilidade</h1>
			<img src="<?php bloginfo('template_url'); ?>/_assets/images/acessibilidade/macbook.jpg" alt="">
			<div class="container">
				<div id="acessibilidade-intro">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 col-xs-12">
							<p>Em setembro/2008, o website da Copel foi adequado aos princípios de acessibilidade para portadores de deficiência visual, em consonância com as recomendações de acessibilidade para a construção ou adequação de sites e portais da administração pública na rede mundial de computadores (internet), de acordo com a legislação em vigor (Decreto nº 5296 de 02/12/2004).</p>
							<p>Nosso website possibilita que todas as informações e serviços aqui contidos sejam acessados também por pessoas com deficiências visuais.</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<article class="col-sm-6 col-xs-12">
					<h6><i class="i-a-visao"></i>Software para leitura de tela</h6>
					<p>
						O leitor de tela é um programa de computador que possibilita o acesso de pessoas com deficiência visual ao conteúdo de um site na Internet. A Copel recomenda o software livre NonVisual Desktop Access (NVDA) para Windows. 
					</p>
					<p>
						O NVDA torna o conteúdo acessível através de um sintetizador de voz e possui uma versão portátil, que pode ser executada sem necessidade de instalação. Para baixar o programa, acesse: <a href="http://www.nvda-project.org/wiki/Download" targer="_blank">http://www.nvda-project.org/wiki/Download</a>.
					</p>
				</article>
				<article class="col-sm-6 col-xs-12">
					<h6><i class="i-a-nav"></i>Navegação pelo Teclado</h6>
					<ol>
						<li>Para chegar à "Página Inicial" deve ser pressionada a tecla Alt em conjunto com a letra I (Alt + I).</li>
						<li>Para chegar ao conteúdo específico de uma página devem ser pressionadas as teclas Alt + C.</li>
						<li>Para chegar ao menu devem ser pressionadas as teclas Alt + M.</li>
						<li>As observações anteriores referem-se ao navegador Internet Explorer. No caso do Firefox, ao invés de Alt + letra, devem ser pressionadas simultaneamente as teclas Alt + Shift + letra.</li>
						<li>Ao pressionar as teclas alternativas, o Firefox encaminha direto para a página solicitada. Já o Internet Explorer apenas posiciona o foco no link, que deve ser acionado ao clicar com mouse ou pressionar ENTER com teclado.</li>
					</ol>
				</article>
			</div>
		</div>
		<aside><?php get_template_part('template','highlight-blog'); ?></aside>
	</section>

<?php get_footer(); ?>