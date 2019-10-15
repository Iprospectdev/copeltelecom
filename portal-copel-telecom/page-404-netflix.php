<?php
	get_header('old'); 

?>
	<section id="netflix-404">
		<header class="wow fadeIn">
			<h1 class="main-tt">Prezado(a) cliente,</h1>
			<small>o seu voucher não pode mais ser utilizado por um dos motivos abaixo:</small>
		</header>
		
		<article>
			<div class="container">
				<div class="border">
					<ol>
						<li><i>1)</i> A promoção COMPRE COPEL FIBRA E EXPERIMENTE NETFLIX não está mais vigente (prazo de vigência: 24/10/2016 a 24/12/2016).</li>
						<li><i>2)</i> O seu voucher já foi utilizado para a degustação da promoção COMPRE COPEL FIBRA E EXPERIMENTE NETFLIX.</li>
						<li><i>3)</i> O tempo da página expirou, faça novamente o login na área do cliente e clique no botão Netflix. </li>
						<li><i>4)</i> Dúvidas sobre o serviço da NETFLIX podem sem obtidas em <a href="http://help.netflix.com" target="_blank">help.netflix.com</a>.</li>
						<li><i>5)</i> Verifique se a sua conta esta habilitada na Netflix entrando com o nome de usuário e senha cadastrado para este serviço. </li>
						<li><i>6)</i> Caso tenha esquecido seu e-mail e senha para acessar o Netflix entre na área do cliente e utilize a opção esqueci meu e-mail e senha.</li>
					</ol>

					<aside>
						<div class="nao-encontrou wow fadeIn">
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-12" data-mh="as-aside-group">
									<a href="<?php echo get_post_type_archive_link('faq'); ?>#as-documentos"><i class="i-netflix-regulamento"></i>Dúvidas sobre<strong>o regulamento</strong></a>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12 nopaddingLeft" data-mh="as-aside-group">
									<span><i class="i-as-fone"></i><strong>Ligue Grátis</strong><em>0800 41 41 81</em></span>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12 paddingLeft" data-mh="as-aside-group">
									<a href="<?php $p = get_page_by_title("Atendimento e Suporte"); echo get_permalink($p->ID); ?>"><i class="i-netflix-facebook"></i><strong>Fale conosco</strong><sub>Atendimento</sub></a>
								</div>
							</div>
						</div>
					</aside>

				</div>
			</div>
		</article>
	</section>
<?php get_footer('old'); ?>