<?php get_header(); global $post; ?>
	<section class="interna-topo">
        <div class="container">
            <div class="main-breadcrumb">
                <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                <a href="#">Para empresas</a>
                <a href="#">Redes</a>
            </div>

            <div class="info">
                <h2><span>Copel Fibra</span></h2>
                <h3>Conheça a banda <br> larga da Copel <br> Telecom</h3>
                <a href="#contrate-agora" class="nav-link js-scrollto btn-contrate">Contrate agora</a>

                <div class="bg-raio"><img src="<?php bloginfo('template_url'); ?>/_assets/images/raio.svg"></div>
            </div>
        </div>
        <div class="bg-slide-info"><img src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png"></div>
        <div class="img" style="background-image: url('<?php bloginfo('template_url'); ?>/_assets/images/bg_banda_larga_corporativa.jpg');"></div>
        <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="interna-topo--detalhe" alt="">
    </section>

    <section class="interna-bandalarga-diferencas">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 col-lg-4">
                    <h6>Qual é a <br> diferença <br> entre a Copel <br> Fibra e uma <br> banda larga <br> comum?</h6>
                </div>
                <div class="col-md-8 col-lg-3">
                    <p>A internet banda larga da Copel Telecom tem tecnologia <strong>100% em fibra óptica</strong>. Na prática, isso significa que a fibra vai da Copel Telecom até o modem – diferente das conexões de internet mais comuns, que são feitas por meio de fios de cobre.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="interna-fibra-diferencas">
        <div class="main-heading"></div>
        <div class="container-fluid">
        	<div class="container">
        	
	            <div class="row">
	                <div class="col-lg-6 col-max">
	                    <div class="destaque">
	                        <div class="destaque--text">
	                            <h6 class="destaque--heading">
	                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_degrade_fibraotica.svg">
	                                <div class="txt">Fibra ótica <br> e fio de cobre: <br> Qual a diferença</div>
	                            </h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-3 item">
	                	<h6>Velocidade e estabilidade:</h6>
	                	<p>
	                		os cabos de vidro usados na fibra óptica transmitem as informações por meio de sinais de luz. Essa combinação permite que os dados naveguem por distâncias muito maiores sem perda de força, diferente do que ocorre nos cabos de cobre.
	                	</p>
	                </div>
	                <div class="col-lg-3 item">
	                	<h6>Segurança e disponibilidade: </h6>
	                	<p>
	                		outra diferença é que, por conta da composição do material do cabo e da forma como as informações viajam, os sinais da fibra óptica são mais resistentes. Ou seja: não sofrem interferências externas como acontece com o sinal do fio de cobre.
	                	</p>
	                </div>
	                <div class="bt-fale">
                    	<a href="#" data-toggle="modal" data-target="#ligamos-modal" class="btn-assine">Fale com um consultor</a>
                    </div>
	            </div>

	        </div>
		</div>
    </section>

    <section class="interna-como-funciona">
    	<div class="container">
    		<div class="col-12"><h6>Como funciona a conexão de fibra óptica da Copel Telecom</h6></div>
    		<div class="row">
    			<div class="col-md-3 item">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_copel.svg">
    				<p>O cabo de fibra óptica sai das instalações da Copel Telecom.</p>
    			</div>
    			<div class="col-md-3 item">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_poste.svg">
    				<p>E segue até postes específicos espalhados pela cidade. </p>
    			</div>
    			<div class="col-md-3 item last">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_wifi.svg">
    				<p>Quando você solicita a internet da Copel Telecom, o time técnico faz uma conexão de fibra óptica do poste <strong>até seu modem</strong>.</p>
    			</div>
    			<div class="col-md-3">
    				<div class="bola">Ou seja: <br> fibra <br> óptica de <br> ponta a <br> ponta.</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="interna-servico-recomendado">
        <div class="container">
            <div class="row">
            	<div class="interna-servico-recomendado--hld">
            		<div class="interna-servico-recomendado--bg"></div>
            		<div class="row">
		            	<div class="col-lg-5">
		            		<h6 class="destaque--heading">
		                        Qual o <br> serviço <br> da Copel <br> Telecom <br> recomendado <br> para mim?
		                    </h6>
		            	</div>
		                <div class="col-lg-7">
		                    <div class="destaque">
		                        <div class="destaque--text">
		                            <p>A Copel Fibra supre plenamente as necessidades de pequenos empreendedores que trabalham sozinhos ou com um funcionário.</p>
									<p>Quando a empresa é um pouco maior, consequentemente tem mais demanda de transmissão de dados. E nesses casos, é recomendável utilizar outros serviços – como o <span>IP Direto ou a RAV</span>. Essas opções podem ser configuradas para micro, pequenas, médias e grandes empresas de acordo com a necessidade do negócio.</p>
									<p class="chamada"><strong>Aproveite e conheça:</strong></p>
									<p>
										<a href="<?php $p=get_page_by_title('Internet dedicada'); echo get_permalink($p->ID); ?>" class="bt-produto"><i class="fas fa-arrow-right"></i> IP Direto Copel Telecom</a>
										<a href="<?php $p=get_page_by_title('Redes'); echo get_permalink($p->ID); ?>" class="bt-produto"><i class="fas fa-arrow-right"></i> RAV - Rede de alta velocidade</a>
									</p>
		                        </div>
		                    </div>
		                </div>
            		</div>
	                <div class="bt-fale">
	                	<a href="#" data-toggle="modal" data-target="#ligamos-modal" class="btn-assine">Fale com um consultor</a>
	                </div>
            	</div>

            </div>
        </div>
    </section>


    <section class="home-planos" id="contrate-agora">
            <div class="container">
                <div class="col-12 home-planos--heading">
                    <h6>
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_documento.svg">
                        Contrate agora
                    </h6>
                </div>
            </div>
            <div class="home-planos-list d-none">
                <button class="home-planos-carousel-prev">
                    <svg width="36px" height="69px" viewBox="0 0 36 69" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_home_banner1_1920" transform="translate(0.000000, -817.000000)">
                                <g id="Group-7" transform="translate(18.000000, 851.500000) scale(-1, 1) translate(-18.000000, -851.500000) translate(0.000000, 817.000000)">
                                    <g id="Group-11">
                                        <path d="M0,68.9857855 L0,0.0142144709 C0.332179003,0.00475950154 0.665533681,0 1,0 C20.0538239,0 35.5,15.4461761 35.5,34.5 C35.5,53.5538239 20.0538239,69 1,69 C0.665533681,69 0.332179003,68.9952405 -1.05471187e-15,68.9857855 Z" class="arrow-bg" fill="#F2F5F6" transform="translate(17.750000, 34.500000) scale(-1, 1) translate(-17.750000, -34.500000) "></path>
                                        <path d="M28.5786048,33.4060414 L18.6255007,23.4490988 C18.0228638,22.8503004 17.0478972,22.8503004 16.4490988,23.4490988 C15.8503004,24.0517356 15.8503004,25.0267023 16.4490988,25.6255007 L25.3274366,34.5 L16.4490988,43.3783378 C15.8503004,43.9771362 15.8503004,44.9521028 16.4490988,45.5509012 C17.0478972,46.1496996 18.0228638,46.1496996 18.6255007,45.5509012 L28.5786048,35.5939586 C28.878004,35.2792056 29.0315421,34.891522 29.0315421,34.5 C29.0315421,34.0969626 28.878004,33.7054406 28.5786048,33.4060414 Z" class="arrow-icon" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>

                <button class="home-planos-carousel-next">
                    <svg width="36px" height="69px" viewBox="0 0 36 69" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_home_banner1_1920" transform="translate(-1884.000000, -817.000000)">
                                <g id="Group-10" transform="translate(1884.000000, 817.000000)">
                                    <g id="Group-13">
                                        <path d="M0,68.9857855 L0,0.0142144709 C0.332179003,0.00475950154 0.665533681,0 1,0 C20.0538239,0 35.5,15.4461761 35.5,34.5 C35.5,53.5538239 20.0538239,69 1,69 C0.665533681,69 0.332179003,68.9952405 -1.05471187e-15,68.9857855 Z" class="arrow-bg" fill="#FF6D00" transform="translate(17.750000, 34.500000) scale(-1, 1) translate(-17.750000, -34.500000) "></path>
                                        <path d="M28.5786048,33.4060414 L18.6255007,23.4490988 C18.0228638,22.8503004 17.0478972,22.8503004 16.4490988,23.4490988 C15.8503004,24.0517356 15.8503004,25.0267023 16.4490988,25.6255007 L25.3274366,34.5 L16.4490988,43.3783378 C15.8503004,43.9771362 15.8503004,44.9521028 16.4490988,45.5509012 C17.0478972,46.1496996 18.0228638,46.1496996 18.6255007,45.5509012 L28.5786048,35.5939586 C28.878004,35.2792056 29.0315421,34.891522 29.0315421,34.5 C29.0315421,34.0969626 28.878004,33.7054406 28.5786048,33.4060414 Z" class="arrow-icon" fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>

                <div class="container px-0 px-sm-3">
                    <div class="home-planos-carousel owl-carousel">
                        <div class="home-planos-carousel--item">
                            <h6>
                                <span class="js-velocidade">velocidade</span> <!--small>Download igual Upload</small-->
                                <svg width="86px" height="102px" viewBox="0 0 86 102" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.149999991"><g id="01_home_banner1_1920" transform="translate(-475.000000, -606.000000)" fill="#FFFFFF"><g id="Group-9" transform="translate(376.000000, 605.000000)"><g id="Group-5" transform="translate(35.000000, 1.000000)"><path d="M120.621622,51 L150,51 L121.621622,102 L65,102 L93.3783784,51 L64,51 L92.3783784,0 L149,0 L120.621622,51 Z" id="Combined-Shape-Copy-2"></path></g></g></g></g></svg>
                            </h6>
                            <p>Para você que quer sempre mais da sua internet.</p>
                            <ul>
                                <li>
                                    <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="0%" y1="93.8648897%" x2="100%" y2="5.78661152%" id="linearGradient-1"><stop stop-color="#FFA600" offset="0%"></stop>    <stop stop-color="#FF6D00" offset="100%"></stop></linearGradient></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_carrossel1" transform="translate(-279.000000, -825.000000)"><g id="Group-9" transform="translate(240.000000, 605.000000)"><g id="Group-5" transform="translate(35.000000, 1.000000)"><g id="Group-26-Copy" transform="translate(5.000000, 220.000000)"><g id="Group-3"><g id="Group-6"><g id="Group-4"><g id="Group-30"><circle id="Oval" stroke="url(#linearGradient-1)" stroke-width="2" cx="12" cy="12" r="12"></circle><path d="M5.16020001,12.9233617 C5.05250252,12.8156642 5,12.6520987 5,12.5444012 C5,12.4367037 5.05250252,12.2765037 5.16020001,12.1688062 L5.91475552,11.4142507 C6.1308236,11.1981826 6.45391605,11.1981826 6.66931102,11.4142507 L6.72248666,11.4694456 L9.68551373,14.6451752 C9.79321121,14.7535458 9.95341122,14.7535458 10.0617818,14.6451752 L17.2761671,7.1595269 L17.3313621,7.1595269 C17.5474302,6.94682437 17.8705226,6.94682437 18.0859176,7.1595269 L18.8384538,7.91408241 C19.0538487,8.13015049 19.0538487,8.45324294 18.8384538,8.66863792 L10.2246743,17.6088754 C10.1169768,17.7165729 10.0086062,17.7690754 9.84571374,17.7690754 C9.68551373,17.7690754 9.57781624,17.7165729 9.47011876,17.6088754 L5.2678975,13.0835617 L5.16020001,12.9233617 Z" id="Fill-1" fill="#FF9602"></path></g></g></g></g></g></g></g></g></g></svg>
                                    Modem com Wi-Fi
                                </li>
                                <li>
                                    <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="0%" y1="93.8648897%" x2="100%" y2="5.78661152%" id="linearGradient-1"><stop stop-color="#FFA600" offset="0%"></stop>    <stop stop-color="#FF6D00" offset="100%"></stop></linearGradient></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_carrossel1" transform="translate(-279.000000, -825.000000)"><g id="Group-9" transform="translate(240.000000, 605.000000)"><g id="Group-5" transform="translate(35.000000, 1.000000)"><g id="Group-26-Copy" transform="translate(5.000000, 220.000000)"><g id="Group-3"><g id="Group-6"><g id="Group-4"><g id="Group-30"><circle id="Oval" stroke="url(#linearGradient-1)" stroke-width="2" cx="12" cy="12" r="12"></circle><path d="M5.16020001,12.9233617 C5.05250252,12.8156642 5,12.6520987 5,12.5444012 C5,12.4367037 5.05250252,12.2765037 5.16020001,12.1688062 L5.91475552,11.4142507 C6.1308236,11.1981826 6.45391605,11.1981826 6.66931102,11.4142507 L6.72248666,11.4694456 L9.68551373,14.6451752 C9.79321121,14.7535458 9.95341122,14.7535458 10.0617818,14.6451752 L17.2761671,7.1595269 L17.3313621,7.1595269 C17.5474302,6.94682437 17.8705226,6.94682437 18.0859176,7.1595269 L18.8384538,7.91408241 C19.0538487,8.13015049 19.0538487,8.45324294 18.8384538,8.66863792 L10.2246743,17.6088754 C10.1169768,17.7165729 10.0086062,17.7690754 9.84571374,17.7690754 C9.68551373,17.7690754 9.57781624,17.7165729 9.47011876,17.6088754 L5.2678975,13.0835617 L5.16020001,12.9233617 Z" id="Fill-1" fill="#FF9602"></path></g></g></g></g></g></g></g></g></g></svg>
                                    Esporte Interativo
                                </li>
                                <li>
                                    <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="0%" y1="93.8648897%" x2="100%" y2="5.78661152%" id="linearGradient-1"><stop stop-color="#FFA600" offset="0%"></stop>    <stop stop-color="#FF6D00" offset="100%"></stop></linearGradient></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_carrossel1" transform="translate(-279.000000, -825.000000)"><g id="Group-9" transform="translate(240.000000, 605.000000)"><g id="Group-5" transform="translate(35.000000, 1.000000)"><g id="Group-26-Copy" transform="translate(5.000000, 220.000000)"><g id="Group-3"><g id="Group-6"><g id="Group-4"><g id="Group-30"><circle id="Oval" stroke="url(#linearGradient-1)" stroke-width="2" cx="12" cy="12" r="12"></circle><path d="M5.16020001,12.9233617 C5.05250252,12.8156642 5,12.6520987 5,12.5444012 C5,12.4367037 5.05250252,12.2765037 5.16020001,12.1688062 L5.91475552,11.4142507 C6.1308236,11.1981826 6.45391605,11.1981826 6.66931102,11.4142507 L6.72248666,11.4694456 L9.68551373,14.6451752 C9.79321121,14.7535458 9.95341122,14.7535458 10.0617818,14.6451752 L17.2761671,7.1595269 L17.3313621,7.1595269 C17.5474302,6.94682437 17.8705226,6.94682437 18.0859176,7.1595269 L18.8384538,7.91408241 C19.0538487,8.13015049 19.0538487,8.45324294 18.8384538,8.66863792 L10.2246743,17.6088754 C10.1169768,17.7165729 10.0086062,17.7690754 9.84571374,17.7690754 C9.68551373,17.7690754 9.57781624,17.7165729 9.47011876,17.6088754 L5.2678975,13.0835617 L5.16020001,12.9233617 Z" id="Fill-1" fill="#FF9602"></path></g></g></g></g></g></g></g></g></g></svg>
                                    CN Já!
                                </li>
                            </ul>
                            <p>
                                R$ <strong class="js-valor"></strong> /mês
                            </p>
                            <a href="http://www.copeltelecom.com/wvtweb/site/verificar_disponibilidade.jsf?p=j" target="_blank" class="btn-assine js-disponibilidade-modall">Assine já</a>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <small class="home-planos-list--alert">
                        *Valor de instalação de internet com plano de fidelidade de 12 meses: R$ 100,00. Valor de instalação de internet sem fidelidade: R$ 1.500,00. <a href="#">Consulte aqui</a> as características técnicas dos planos de serviço.<br><a href="#">Contrato</a> e <a href="#">termo de fidelidade</a> aplicável ao plano de serviço. Planos sujeitos a disponibilidade. Válidos para CURITIBA (<a href="#">alterar</a>).
                    </small>

                </div>
            </div>

            <div class="container">
                <div class="planos-geolocation planos-geolocation--true d-none">
                    <h5>
                        <svg width="97px" height="115px" viewBox="0 0 97 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.149999991">
                                <g id="01_home_banner1_informar-endereco" transform="translate(-635.000000, -606.000000)" fill="#FFFFFF">
                                    <g id="Group-21" transform="translate(98.000000, 606.000000)">
                                        <g id="Group-9">
                                            <g id="Group">
                                                <g id="Group-6">
                                                    <path d="M600.935102,57.1789474 L634,57.1789474 L601.956154,114.357895 L538.021053,114.357895 L570.064898,57.1789474 L537,57.1789474 L569.043846,0 L632.978947,0 L600.935102,57.1789474 Z" id="Combined-Shape-Copy-5"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </h5>
                    <div class="row">
                        <div class="col-12 col-md-6 planos-geolocation--legend">
                            <svg width="90px" height="115px" viewBox="0 0 90 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="01_home_banner1_informar-endereco" transform="translate(-154.000000, -743.000000)">
                                        <g id="Group-21" transform="translate(98.000000, 606.000000)">
                                            <g id="Group-9">
                                                <g id="Group-30" transform="translate(58.000000, 139.000000)">
                                                    <g id="Group-39">
                                                        <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43.5" cy="43.5" r="33.5"></circle>
                                                        <circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43" cy="43" r="43"></circle>
                                                        <ellipse id="Oval-3" fill="#464D5C" opacity="0.300000012" cx="43" cy="104" rx="25" ry="9"></ellipse>
                                                        <g id="placeholder" transform="translate(23.000000, 24.000000)" fill="#464D5C">
                                                            <path d="M34.3184444,28.5910664 L20.2524444,52.1222695 L5.81855556,28.8168398 C4.19266667,26.1859336 3.31111111,23.1506836 3.31111111,20.0390625 C3.31111111,10.8311133 10.81,3.31757812 20,3.31757812 C29.19,3.31757812 36.6777778,10.8311133 36.6777778,20.0390625 C36.6777778,23.0583926 35.8543333,26.0160469 34.3184444,28.5910664 Z M20,0 C8.972,0 0,8.98952344 0,20.0390625 C0,23.7723398 1.03211111,27.4156641 2.98544444,30.5764922 L18.8615556,56.2105723 C19.1656667,56.7016406 19.7014444,57 20.2776667,57 C20.2821111,57 20.2864444,57 20.2908889,57 C20.8721111,56.9954355 21.409,56.6878359 21.7075556,56.1881953 L37.179,30.3057422 C39.0245556,27.2117109 40,23.6615684 40,20.0390625 C40,8.98952344 31.028,0 20,0 Z" id="Fill-1"></path>
                                                            <path d="M20,26.6888889 C16.3047778,26.6888889 13.3111111,23.6852222 13.3111111,20 C13.3111111,16.324 16.324,13.3111111 20,13.3111111 C23.676,13.3111111 26.6777778,16.324 26.6777778,20 C26.6777778,23.6314444 23.7537778,26.6888889 20,26.6888889 Z M20,10 C14.486,10 10,14.486 10,20 C10,25.4787778 14.413,30 20,30 C25.6558889,30 30,25.4185556 30,20 C30,14.486 25.514,10 20,10 Z" id="Fill-2"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h6>Planos Copel Fibra</h6>
                            <p>Informe sua cidade para podermos mostrar os planos disponíveis na sua região.</p>
                        </div>
                        <div class="col-12 col-md-4 offset-md-1 planos-geolocation--form">
                            <form>
                                <label for="cidade">Onde você está?</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="cidade" class="form-control js-autocomplete-cidade" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="planos-geolocation planos-geolocation--false d-none">
                    <div class="row">
                        <div class="col-12 col-md-6 planos-geolocation--legend">
                            <svg width="90px" height="115px" viewBox="0 0 90 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="01_Planos-e-precos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="01_planos-e-precos_nao-disponivel" transform="translate(-154.000000, -556.000000)">
                                        <g id="Group-39" transform="translate(156.000000, 558.000000)">
                                            <path d="M43.5,77 C62.0015391,77 77,62.0015391 77,43.5 C77,24.9984609 62.0015391,10 43.5,10 C24.9984609,10 10,24.9984609 10,43.5 C10,62.0015391 24.9984609,77 43.5,77 Z" id="Oval-4" stroke="#C7C9CE" stroke-width="3" stroke-linecap="round" stroke-dasharray="1,6"></path>
                                            <path d="M43,86 C66.7482442,86 86,66.7482442 86,43 C86,19.2517558 66.7482442,0 43,0 C19.2517558,0 0,19.2517558 0,43 C0,66.7482442 19.2517558,86 43,86 Z" id="Oval-4" stroke="#C7C9CE" stroke-width="3" stroke-linecap="round" stroke-dasharray="1,6"></path>
                                            <ellipse id="Oval-3" fill="#464D5C" opacity="0.300000012" cx="43" cy="104" rx="25" ry="9"></ellipse>
                                            <g id="placeholder" transform="translate(23.000000, 24.000000)" fill="#464D5C">
                                                <path d="M34.3184444,28.5910664 L20.2524444,52.1222695 L5.81855556,28.8168398 C4.19266667,26.1859336 3.31111111,23.1506836 3.31111111,20.0390625 C3.31111111,10.8311133 10.81,3.31757812 20,3.31757812 C29.19,3.31757812 36.6777778,10.8311133 36.6777778,20.0390625 C36.6777778,23.0583926 35.8543333,26.0160469 34.3184444,28.5910664 Z M20,0 C8.972,0 0,8.98952344 0,20.0390625 C0,23.7723398 1.03211111,27.4156641 2.98544444,30.5764922 L18.8615556,56.2105723 C19.1656667,56.7016406 19.7014444,57 20.2776667,57 C20.2821111,57 20.2864444,57 20.2908889,57 C20.8721111,56.9954355 21.409,56.6878359 21.7075556,56.1881953 L37.179,30.3057422 C39.0245556,27.2117109 40,23.6615684 40,20.0390625 C40,8.98952344 31.028,0 20,0 Z" id="Fill-1"></path>
                                                <path d="M20,26.6888889 C16.3047778,26.6888889 13.3111111,23.6852222 13.3111111,20 C13.3111111,16.324 16.324,13.3111111 20,13.3111111 C23.676,13.3111111 26.6777778,16.324 26.6777778,20 C26.6777778,23.6314444 23.7537778,26.6888889 20,26.6888889 Z M20,10 C14.486,10 10,14.486 10,20 C10,25.4787778 14.413,30 20,30 C25.6558889,30 30,25.4185556 30,20 C30,14.486 25.514,10 20,10 Z" id="Fill-2"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p>
                                <strong>Obrigado pelo seu interesse, mas a Copel Fibra não está em <span class="js-cidade-estado"></span>.</strong>
                                Infelizmente a nossa rede de fibra óptica ainda não está na sua região.
                            </p>
                        </div>
                        <div class="col-12 col-md-4 offset-md-1 planos-geolocation--form">
                            <form>
                                <label for="cidade">Quer ver a cobertura em outra região?</label>
                                <div class="input-group">
                                    <input type="text" id="cidade" class="form-control js-autocomplete-cidade" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="interna-entendamais unico zera-top">
    	<img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="interna-entendamais--bg" alt="">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="slider-infos">
                        <div class="slider-infos-carousel owl-carousel">
                            <div class="slider-infos-carousel--item">
                                <div class="titulo"><h6>Por que eu <br> preciso de <br> Copel Fibra?</h6></div>
                                <div class="txt"><p>Porque se você é autônomo, microempreendedor Individual ou pessoa física que trabalha em home office, você tem um negócio para cuidar – e precisa de velocidade e alta disponibilidade de internet para um dia a dia produtivo!</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="interna-depoimentos interna-depoimentos-alt-2">
        <div class="container">
            <div class="interna-depoimentos--heading">
                Depoimentos
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="videoWrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_vrJZEdUv8s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3 depoimento">
                    <p>“Como nosso principal fornecedor de tecnologia que integra o negócio da compania, é muito importante essa parceira com a Copel Telecom.”</p>
                    <h6>Jorge Mota</h6>
                    <small>Beal Alimentos</small>
                </div>
            </div>
        </div>
    </section> -->
	
    <div class="modal fade ligamos-modal" tabindex="-1" role="dialog" id="ligamos-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button class="ligamos-modal--close" type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <i class="fas fa-times"></i>
                </button>
                <svg width="159px" class="ligamos-modal--retangle" height="264px" viewBox="0 0 159 264">
                    <g id="01_carrinho" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="01_pagina-ligamos" transform="translate(-299.000000, -225.000000)" fill="#F2F5F6">
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
                    <svg width="81px" class="ligamos-modal--icon" height="108px" viewBox="0 0 81 108">
                        <g id="01_carrinho" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_pagina-ligamos" transform="translate(-397.000000, -263.000000)">
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
                        <h2>Ligamos pra você</h2>
                    </span>
                </div>
                <div class="col-12">
                    <p>Para sua comodidade preencha os campos abaixo, o mais breve possível a Copel Telecom entrará em contato.</p>
                </div>
                <form action="#" id="form-ligamos-pravc" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inpt-nome" class="wvt-form-label">Nome:</label>
                            <div class="wvt-form-control">
                                <input type="text" id="inpt-nome" name="inpt-nome" placeholder="Digite o seu nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inpt-email" class="wvt-form-label">E-mail:</label>
                            <div class="wvt-form-control">
                                <input type="email" id="inpt-email" name="inpt-email" placeholder="Digite o seu email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inpt-telefone" class="wvt-form-label">Telefone:</label>
                            <div class="wvt-form-control">
                                <input type="text" id="inpt-telefone" class="mask-tel" name="inpt-telefone" placeholder="( )">
                            </div>
                        </div>
                        <div class="col-md-6 hld-btn">
                            <button type="submit" class="btn-assine btn_form_enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php get_footer(); ?>