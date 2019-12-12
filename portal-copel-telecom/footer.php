	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>" class="footer--btn">
						BLOG CONECTA
					</a>
					<a href="http://www.cidadao.pr.gov.br/" class="footer--btn" target="_blank">
						GOVERNO DO PARANÁ
					</a>
				</div>
				<div class="col-9 d-none d-md-block">
					<nav class="footer-nav justify-content-between d-flex flex-row">
						<ul>
							<li>
								<a href="<?php $p=get_page_by_title('Para você'); echo get_permalink($p->ID); ?>"><strong>Pra você</strong></a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Planos'); echo get_permalink($p->ID); ?>">Planos e preços</a>
							</li>
							<li>
								<a href="http://tvc.copel.net/index_ookla.html" target="_blank">Speedtest</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>#Cobertura">Cobertura</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Esporte Interativo'); echo get_permalink($p->ID); ?>">Esporte Interativo</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Cartoon Network'); echo get_permalink($p->ID); ?>">CN Já!</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('App Copel'); echo get_permalink($p->ID); ?>">App Copel</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="<?php $p=get_page_by_title('Para empresas'); echo get_permalink($p->ID); ?>"><strong>Para Empresas</strong></a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Internet dedicada'); echo get_permalink($p->ID); ?>">Internet dedicada</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Redes'); echo get_permalink($p->ID); ?>">Redes</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Data center'); echo get_permalink($p->ID); ?>">Data center</a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Banda larga corporativa'); echo get_permalink($p->ID); ?>">Banda larga corporativa</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="<?php bloginfo('url'); ?>/atendimento-e-suporte/"><strong>Atendimento</strong></a>
							</li>
							<li>
								<a href="https://www.copeltelecom.com/autoatendimento/pub/login.jsf" target="_blank">Área do cliente</a>
							</li>
							<li>
								<a href="<?php bloginfo('url'); ?>/blog/faq">Perguntas Frequentes</a>
							</li>
							<li>
								<a href="<?php bloginfo('url'); ?>/atendimento-e-suporte/#as-documentos">Documentos</a>
							</li>
							<!--li class="pt-3">
								<a href=""><strong>Mapa do site</strong></a>
							</li-->
						</ul>
						<ul>
							<li>
								<a href=""><strong>Institucional</strong></a>
							</li>
							<li>
								<a href="<?php $p=get_page_by_title('Sobre Nós'); echo get_permalink($p->ID); ?>">Sobre nós</a>
							</li>
							<li>
								<a href="http://www.copel.com/hpcopel/root/nivel2.jsp?endereco=%2Fhpcopel%2Fri%2Fpagcopel2.nsf%2Fdocs%2F8A85489DDD579DAD0325742400656466&_ga=2.98488729.789882387.1543346291-1485384620.1540335243" target="_blank">Balanço</a>
							</li>
							<li>
								<a href="http://www.copel.com/hpcopel/acopel/mapaGovernanca.jsp?_ga=2.27890362.789882387.1543346291-1485384620.1540335243" target="_blank">Governança</a>
							</li>
							<li class="pt-3">
								<a href="<?php $p=get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>"><strong>Acessibilidade</strong></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row row-bottom">
				<div class="col-md-3 footer-fone">
					<a href="tel:0800414181" target="_blank" style="color: #FF9602;">
						<svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <g id="_footer" transform="translate(-1025.000000, -164.000000)">
						            <g id="Group-6" transform="translate(98.000000, 34.000000)">
						                <image id="Bitmap" x="927" y="130" width="30" height="30" xlink:href="data:image/png;base64,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"></image>
						            </g>
						        </g>
						    </g>
						</svg> 
						0800 41 41 81
					</a>
				</div>
				<div class="col-md-8 text-center footer-share">
					<!-- <a href="https://www.facebook.com/copeltelecom/?fref=ts" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="https://twitter.com/copeltelecom" target="_blank">
						<i class="fab fa-twitter"></i>
					</a> -->
					<a href="https://www.instagram.com/copeltelecom/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://www.linkedin.com/company/copeltelecom" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a href="https://www.youtube.com/channel/UCWLv_uuedAttlRGCpDhI3fg" target="_blank">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<div class="col-md-1 footer-logos">
					<img src="<?php bloginfo('template_url');?>/_assets/images/logo-ipv6.svg" alt="Logo IPV6">
				</div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<small>Copyright <?php echo date("Y"); ?> © Copel Telecomunicações S.A. CNPJ: 04.368.865/0001-66</small>
				<address class="d-none d-md-block">Rua José Izidoro Biazetto, 158 - bloco A - Mossunguê - CEP: 81200-240 - Curitiba - PR</address>
			</div>
		</div>
	</footer>



    <div class="modal fade disponibilidade-modal" tabindex="-1" role="dialog" id="disponibilidade-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button class="disponibilidade-modal--close" type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <i class="fas fa-times"></i>
                </button>
                <svg width="159px" class="disponibilidade-modal--retangle" height="264px" viewBox="0 0 159 264">
                    <g id="01_carrinho" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="01_pagina-disponibilidade" transform="translate(-299.000000, -225.000000)" fill="#F2F5F6">
                            <g id="Group-3" transform="translate(299.000000, 225.000000)">
                                <g id="Group-5">
                                    <g id="Group-2">
                                        <g id="Group-7">
                                            <polygon id="Rectangle-5" transform="translate(78.701290, 132.771635) scale(1, -1) translate(-78.701290, -132.771635) " points="-0.997963177 0.17779894 158.400544 265.365471 -0.997963177 265.365471"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <div class="d-flex mb-4">
                    <svg width="81px" class="disponibilidade-modal--icon" height="108px" viewBox="0 0 81 108">
                        <g id="01_carrinho" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_pagina-disponibilidade" transform="translate(-397.000000, -263.000000)">
                                <g id="Group-3" transform="translate(299.000000, 225.000000)">
                                    <g id="Group-39" transform="translate(100.000000, 40.000000)">
                                        <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="39" cy="39" r="30"></circle>
                                        <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="38.5" cy="38.5" r="38.5"></circle>
                                        <ellipse id="Oval-3" fill="#464D5C" opacity="0.300000012" cx="39.5" cy="98" rx="22.5" ry="8"></ellipse>
                                        <g id="placeholder" transform="translate(21.000000, 20.000000)" fill="#464D5C">
                                            <path d="M30.8866,25.5814805 L18.2272,46.6357148 L5.2367,25.7834883 C3.7734,23.4295195 2.98,20.7137695 2.98,17.9296875 C2.98,9.69099609 9.729,2.96835937 18,2.96835937 C26.271,2.96835937 33.01,9.69099609 33.01,17.9296875 C33.01,20.6311934 32.2689,23.2775156 30.8866,25.5814805 Z M18,0 C8.0748,0 0,8.04325781 0,17.9296875 C0,21.2699883 0.9289,24.5298047 2.6869,27.3579141 L16.9754,50.2936699 C17.2491,50.7330469 17.7313,51 18.2499,51 C18.2539,51 18.2578,51 18.2618,51 C18.7849,50.995916 19.2681,50.7206953 19.5368,50.2736484 L33.4611,27.1156641 C35.1221,24.3473203 36,21.170877 36,17.9296875 C36,8.04325781 27.9252,0 18,0 Z" id="Fill-1"></path>
                                            <path d="M18,23.8795322 C14.6743,23.8795322 11.98,21.1920409 11.98,17.8947368 C11.98,14.6056842 14.6916,11.9099415 18,11.9099415 C21.3084,11.9099415 24.01,14.6056842 24.01,17.8947368 C24.01,21.143924 21.3784,23.8795322 18,23.8795322 Z M18,8.94736842 C13.0374,8.94736842 9,12.9611579 9,17.8947368 C9,22.7968012 12.9717,26.8421053 18,26.8421053 C23.0903,26.8421053 27,22.7429181 27,17.8947368 C27,12.9611579 22.9626,8.94736842 18,8.94736842 Z" id="Fill-2"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>
                        <h2>Onde você está?</h2>
                        <p>Preencha os campos abaixo para que a gente possa verificar disponibilidade da Copel Fibra no endereço onde pretende instalar.</p>
                    </span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="cep-cobranca" class="wvt-form-label">CEP</label>
                        <div class="wvt-form-control">
                            <input type="text" id="cep-cobranca" name="cep-cobranca">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="numero-cobranca" class="wvt-form-label">Número</label>
                        <div class="wvt-form-control">
                            <input type="number" id="numero-cobranca" name="numero-cobranca">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="wvt-form-control">
                            <textarea name="endereco-cobranca">Rua lorem ipsum dolores Bairro Exemplo Curitiba - Paraná</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="nome" class="wvt-form-label">Nome completo</label>
                        <div class="wvt-form-control error">
                            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="wvt-form-label">Email</label>
                        <div class="wvt-form-control">
                            <input type="email" id="email" name="email" placeholder="Digite o seu email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="tel" class="wvt-form-label">Telefone</label>
                        <div class="wvt-form-control">
                            <input type="text" id="tel" name="tel" placeholder="( )">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="cel" class="wvt-form-label">Celular <small>(opcional)</small></label>
                        <div class="wvt-form-control">
                            <input type="text" id="cel" name="cel" placeholder="( )">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="wvt-form-label d-flex justify-center">
                            <span class="wvt-checkbox">
                                <input type="checkbox" name="newletter" checked>
                                <span></span>
                            </span>
                            <small>Quero receber a fatura online</small>
                            <i class="fal fa-question-circle" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod"></i>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php bloginfo('template_url'); ?>/wvt/plano.html" class="btn-assine">
                            Consultar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php wp_footer(); ?>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBFAgYljSm9hYX2tTJ-1h7ZJTBPJDh3KsM"></script> 
	<script src="<?php bloginfo('template_url');?>/_assets/js/app.bundle.js"></script>
    <script>
		var $_PowerZAP = { defaultCountry: '+55', widget_id: '1681', company: "5526" };
		(function(i,s,o,g,r,a,m){
			i[r]={context:{id:'8659e62744a37a52c5c1d594238d2d32'}};
			a=o;
			o=s.createElement(o);
			o.async=1;
			o.src=g;
			m=s.getElementsByTagName(a)[0];
			m.parentNode.insertBefore(o,m);
		})(window,document,'script','https://widget-omni.powerzap.com.br/js/widget.js?v=6.1.0.6','pwz');
	</script>
</body>
</html>