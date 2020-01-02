<?php get_header();?>
	<section class="interna-topo topo-grande">
        <div class="container">
            <div class="main-breadcrumb">
                <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                <a href="#">Atendimento e Suporte</a>
                <a href="#">Solicitação de gravação</a>
            </div>

            <div class="info">
            	<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_gravacoes.svg">
                <h2>Solicitação <br> de gravação</h2>
                <h3>Para solicitar a gravação <br> do atendimento realizado, <br> preencha o formulário abaixo:</h3>
            </div>
        </div>

        <div class="bg-slide-info"><img src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png"></div>
        <div class="img" style="background-image: url('<?php bloginfo('template_url'); ?>/_assets/images/bg_gravacoes_topo.jpg');"></div>
    </section>

    <section class="interna-pedido" id="formulario">
        <div class="interna-pedido--formulario">
            <div class="container form-container">
            	<div class="row justify-content-md-center">
                    <div class="col-md-10 holder">

		                <div class="row justify-content-md-center">
		                    <div class="col-md-10">
		                        <div class="row">
		                            <div class="col-12 interna-pedido--heading">
		                                <h6>
		                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_documento.svg">
		                                    Formulário
		                                </h6>
		                                <p>Para recuperarmos a gravação do seu atendimento são necessárias algumas informações. <br>
		                                Por favor, escolha uma das formas para localização:</p>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="row justify-content-md-center">
		                    <div class="col-md-10">
		                    	<div class="accordion">
		                    		<div class="accordion--holder" id="sem-protocolo">
		                    			<div class="hld-conteudo">
		                    				<div class="row justify-content-md-center">
		                    					<div class="col-md-10">
		                    						<div class="col-12">
		                    							<div class="bt"><a href="#" data-target="sem-protocolo">Localização sem protocolo<i class="fas fa-caret-down"></i></a></div>
		                    						</div>
				                    				<form class="form" id="form-solicitar-gravacao-sprotocolo" method="post">
														<input type="hidden" name="protocolo" value="nao">
														<div class="col-12">
						                                    <label for="nome" class="wvt-form-label">Dados da ligação</label>
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="nome_atendente" name="nome_atendente" placeholder="Nome do atendente">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="data_ligacao" name="data_ligacao" class="mask-data" placeholder="Data da ligação">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="hora_ligacao" name="hora_ligacao" class="mask-hora" placeholder="Hora da ligação">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="numero_ligacao" name="numero_ligacao" class="mask-tel" placeholder="Número de origem da ligação">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="numero_contrato" name="numero_contrato" placeholder="Número do contrato">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <label for="solicitante" class="wvt-form-label">Dados do solicitante</label>
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="nome_solicitante" name="nome_solicitante" placeholder="Nome do solicitante">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="telefone_solicitante" name="telefone_solicitante" class="mask-tel" placeholder="Telefone">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="email_solicitante" name="email_solicitante" placeholder="E-mail para enviar a gravação">
						                                    </div>
						                                </div>
						                                <div class="col-12">
															<div class="checkbox">
																<input id="che" type="checkbox" name="ciente">
																<label for="che"><span></span> "Estou ciente que os dados informados são de responsabilidade do cliente".</label>
															</div>
														</div>
														<div class="col-12 captcha">
															<div id="RecaptchaField1" class="g-recaptcha"></div>
														</div>
														<div class="col-12 text-center">
						                                    <button type="submit" class="btn-assine">Enviar</button>
						                                </div>
						                                <div class="alert hide text-center" id="response"></div>
													</form>
												</div>
											</div>
		                    			</div>
		                    		</div>
		                    		<div class="accordion--holder" id="com-protocolo">
		                    			<div class="hld-conteudo">
		                    				<div class="row justify-content-md-center">
		                    					<div class="col-md-10">
		                    						<div class="col-12">
		                    							<div class="bt"><a href="#" data-target="com-protocolo">Localização por protocolo<i class="fas fa-caret-down"></i></a></div>
		                    						</div>
				                    				<form class="form" id="form-solicitar-gravacao" method="post">
														<input type="hidden" name="protocolo" value="sim">
														<div class="col-12">
						                                    <label for="protocolo" class="wvt-form-label">Dados da ligação</label>
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="protocolo_num" name="protocolo_num" placeholder="Protocolo">
						                                    </div>
						                                </div>
			
						
						                                <div class="col-12">
						                                    <label for="solicitante" class="wvt-form-label">Dados do solicitante</label>
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="nome" name="nome_solicitante" placeholder="Nome do solicitante">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="telefone" name="telefone_solicitante" class="mask-tel" placeholder="Telefone">
						                                    </div>
						                                </div>
						                                <div class="col-12">
						                                    <div class="wvt-form-control">
						                                        <input type="text" id="email" name="email_solicitante" placeholder="E-mail para enviar a gravação">
						                                    </div>
						                                </div>
						                                <div class="col-12">
															<div class="checkbox">
																<input id="che-ciente" type="checkbox" name="ciente">
																<label for="che-ciente"><span></span> "Estou ciente que os dados informados são de responsabilidade do cliente".</label>
															</div>
														</div>
														<div class="col-12 captcha">
															<div id="RecaptchaField2" class="g-recaptcha"></div>
														</div>
														<div class="col-12 text-center">
						                                    <button type="submit" class="btn-assine">Enviar</button>
						                                </div>
						                                </div>
													</form>
												</div>
											</div>
		                    			</div>
		                    		</div>
		                    	</div>
		                    	
		                    </div>
		                </div>
		            </div>
		        </div>

            </div>

        </div>

        <div class="add-infos container">
        	<div class="row justify-content-md-center">
                <div class="col-md-10 holder">
	            	<div class="row">
	            		<div class="col-md-6">
	            			<div class="titulo">Perguntas <br> frequentes</div>
	            			<div class="ico"><img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_info_perguntas.svg"></div>
	            			<div class="txt">Dúvidas sobre a internet 100% em fibra óptica? A Copel Telecom responde.</div>
	            			<div class="bt"><a href="<?php bloginfo('url'); ?>/blog/faq">Acesse</a></div>
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