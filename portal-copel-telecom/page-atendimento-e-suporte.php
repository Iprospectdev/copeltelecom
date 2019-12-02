<?php get_header();?>
	<section class="interna-topo topo-grande atendimento">
        <div class="container">
            <div class="main-breadcrumb">
                <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                <a href="#">Atendimento e Suporte</a>
            </div>

            <div class="info">
            	<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_atendimento.svg">
                <h2>Precisa <br> de ajuda?</h2>
                <h3>Aqui, você pode tirar algumas <br> dúvidas e falar com a gente :)</h3>
            </div>
        </div>

        <div class="bg-slide-info"><img src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png"></div>
        <div class="img" style="background-image: url('<?php bloginfo('template_url'); ?>/_assets/images/bg_atendimento_topo.jpg');"></div>

        <div class="boxes">
        	<div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box">
                        	<div class="hld-titulo">
	                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_info_perguntas.svg">
	                            <h6>
	                                Perguntas <br>
	                                frequentes
	                            </h6>
                        	</div>
                            <p class="txt">Dúvidas sobre a internet 100% em fibra óptica? A Copel Telecom responde.</p>
                            <p>
                            	<a href="<?php bloginfo('url'); ?>/blog/faq-categoria/suporte-tecnico/" class="bt-documento">Suporte técnico</a>
                            	<a href="<?php bloginfo('url'); ?>/blog/faq-categoria/sua-conta/" class="bt-documento">Sua conta</a>
                            	<a href="<?php bloginfo('url'); ?>/blog/faq-categoria/wi-fi-no-litoral/" class="bt-documento">Wi-fi litoral</a>
                            	<a href="<?php bloginfo('url'); ?>/blog/faq-categoria/wi-fi/" class="bt-documento">Wi-fi</a>
                            </p>
                            <p class="text-center">
                            	<a href="<?php bloginfo('url'); ?>/blog/faq" class="btn-assine">Acessar</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box">
                        	<div class="hld-titulo">
	                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_info_area.svg">
	                            <h6>
	                                Área do <br>
	                                cliente
	                            </h6>
                        	</div>
                            <p class="txt">Aqui você pode acessar itens relativos à sua conta, alterar dados e obter mais informações. É só clicar.</p>
                            <p>
                            	<a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="bt-documento">2ª via da conta</a>
                            	<a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="bt-documento">Alterar data de vencimento</a>
                            	<a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="bt-documento">Conta detalhada</a>
                            	<a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="bt-documento">Autoatendimento</a>
                            </p>
                            <p class="text-center">
                            	<a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="btn-assine">Acessar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interna-documentos">
    	<div class="add-infos container">
        	<div class="row justify-content-md-center">
                <div class="col-md-10">
	            	<div class="row">
	            		<div class="col-md-6">
	            			<div class="titulo">Solicitação <br> de gravação</div>
	            			<div class="ico"><img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_info_gravacao.svg"></div>
	            			<div class="txt">Precisa solicitar a gravação do atendimento realizado?</div>
	            			<div class="bt"><a href="<?php $p=get_page_by_title('Solicitação de gravação'); echo get_permalink($p->ID); ?>">Acesse</a></div>
	            		</div>
	            		<div class="col-md-6">
	            			<div class="titulo">Ouvidoria</div>
	            			<div class="ico"><img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_info_ouvidoria.svg"></div>
	            			<div class="txt">Se você recorreu a um dos Canais de Atendimento e sua solicitação não foi atendida ou a solução oferecida é insatisfatória, você pode recorrer à Ouvidoria.</div>
	            			<div class="bt"><a href="<?php $p=get_page_by_title('Ouvidoria'); echo get_permalink($p->ID); ?>">Acesse</a></div>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </div>


        <div class="interna-documentos--arquivos" id="atendimento-e-suporte">
            <div class="container form-container">
            	<div class="row justify-content-md-center">
                    <div class="col-md-10 holder">

		                <div class="row justify-content-md-center">
		                    <div class="col-md-10">
		                        <div class="row">
		                            <div class="col-12 interna-documentos--heading">
		                                <h6>
		                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_documento.svg">
		                                    Documentos
		                                </h6>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="row justify-content-md-center">
		                    <div class="col-md-10" id="as-documentos">

		                    	<?php $documentos = get_posts("post_type=documentos&nopaging=true&orderby=menu_order&order=asc"); ?>
								<?php if ($documentos): ?>
										<nav>
											<div class="menu-docs">
												<?php foreach ($documentos as $doc): ?>
													<a href="#<?php echo $doc->post_name; ?>" data-target="<?php echo $doc->post_name; ?>" class="bt-documento"><?php echo $doc->post_title; ?></a>	
												<?php endforeach ?>
											</div>
										</nav>
										<?php foreach ($documentos as $doc): ?>
										<ul class="<?php echo $doc->post_name; ?> lista-docs">
											<?php if (rwmb_meta( "files", "type=file", $doc->ID )): ?>
												<?php foreach (rwmb_meta( "files", "type=file", $doc->ID ) as $file): ?>
												<li><a target="_blank" href="<?php echo $file["url"]; ?>"><i class="i-pdf"></i> <?php echo $file["title"]; ?></a></li>
												<?php endforeach ?>
											<?php endif ?>
										</ul>
										<?php endforeach; ?>

								<?php endif ?>                    	
		                    </div>
		                </div>
		            </div>
		        </div>

            </div>

        </div>

        
        <script src="https://www.google.com/recaptcha/api.js?onload=multipleCaptcha&render=explicit&hl=pt-BR" async defer></script>
		<script>
			var com_protocolo = "",
				sem_protocolo = "";
			var multipleCaptcha = function() {
				com_protocolo = grecaptcha.render('RecaptchaField1', {'sitekey' : '6LewnxsTAAAAAEGDgjyFW5jHpjabze__DkiuFDzU'});
				sem_protocolo = grecaptcha.render('RecaptchaField2', {'sitekey' : '6LewnxsTAAAAAEGDgjyFW5jHpjabze__DkiuFDzU'});
			};
		</script>
    </section>

	<!--section class="interna-naoencontrou">
    	<img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="interna-naoencontrou--bg" alt="">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="infos">
                        <div class="infos--item">
                            <div class="titulo"><h6>Não encontrou o que precisava?</h6></div>
                            <div class="txt">
	                            <div class="bt-fale">
				                	<a href="#" class="btn-assine">Fale com a gente</a>
				                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
<?php get_footer(); ?>