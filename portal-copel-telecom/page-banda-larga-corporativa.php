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
                <a href="<?php bloginfo('template_url'); ?>/wvt/carrinho.html" class="btn-contrate">Contrate agora</a>

                <div class="bg-raio"><img src="<?php bloginfo('template_url'); ?>/_assets/images/raio.svg"></div>
            </div>
        </div>
        <div class="bg-slide-info"><img src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png"></div>
        <div class="img" style="background-image: url('<?php bloginfo('template_url'); ?>/_assets/images/banner_01.png');"></div>
        <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="interna-topo--detalhe" alt="">
    </section>

    <section class="interna-bandalarga-diferencas">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <h6>Qual é a <br> diferença <br> entre a Copel <br> Fibra e uma <br> banda larga <br> comum?</h6>
                </div>
                <div class="col-md-3">
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
	                <div class="col-6 col-max">
	                    <div class="destaque">
	                        <div class="destaque--text">
	                            <h6 class="destaque--heading">
	                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_degrade_fibraotica.svg">
	                                <div class="txt">Fibra ótica <br> e fio de cobre: <br> Qual a diferença</div>
	                            </h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-3 item">
	                	<h6>Velocidade e estabilidade:</h6>
	                	<p>
	                		os cabos de vidro usados na fibra óptica transmitem as informações por meio de sinais de luz. Essa combinação permite que os dados naveguem por distâncias muito maiores sem perda de força, diferente do que ocorre nos cabos de cobre.
	                	</p>
	                </div>
	                <div class="col-3 item">
	                	<h6>Segurança e disponibilidade: </h6>
	                	<p>
	                		outra diferença é que, por conta da composição do material do cabo e da forma como as informações viajam, os sinais da fibra óptica são mais resistentes. Ou seja: não sofrem interferências externas como acontece com o sinal do fio de cobre.
	                	</p>
	                </div>
	                <div class="bt-fale">
                    	<a href="#formulario" class="nav-link js-scrollto btn-assine">Fale com um consultor</a>
                    </div>
	            </div>

	        </div>
		</div>
    </section>

    <section class="interna-como-funciona">
    	<div class="container">
    		<div class="col-12"><h6>Como funciona a conexão de fibra óptica da Copel Telecom</h6></div>
    		<div class="row">
    			<div class="col-3 item">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_copel.svg">
    				<p>O cabo de fibra óptica sai das instalações da Copel Telecom.</p>
    			</div>
    			<div class="col-3 item">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_poste.svg">
    				<p>E segue até postes específicos espalhados pela cidade. </p>
    			</div>
    			<div class="col-3 item last">
    				<img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_laranja_wifi.svg">
    				<p>Quando você solicita a internet da Copel Telecom, o time técnico faz uma conexão de fibra óptica do poste <strong>até seu modem</strong>.</p>
    			</div>
    			<div class="col-3">
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
		            	<div class="col-md-5">
		            		<h6 class="destaque--heading">
		                        Qual o <br> serviço <br> da Copel <br> Telecom <br> recomendado <br> para mim?
		                    </h6>
		            	</div>
		                <div class="col-md-7">
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
	                	<a href="#formulario" class="nav-link js-scrollto btn-assine">Fale com um consultor</a>
	                </div>
            	</div>

            </div>
        </div>
    </section>

    <section class="interna-contratacao" id="formulario">
        <div class="interna-contratacao--formulario">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-12 interna-contratacao--heading">
                                <h6>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_documento.svg">
                                    Como contratar a Copel Fibra?
                                </h6>
                                <p class="txt-left">Para contratar, basta:</p>
                            </div>
                            <div class="col-md-6 item">
                                <div class="num"><div class="hld">1</div></div>
                                <div class="txt">Preencher o <strong>formulário abaixo</strong> com seus dados para que nossa equipe entre em contato com você.</div>
                            </div>
                            <div class="col-md-6 item">
                                <div class="num"><div class="hld">2</div></div>
                                <div class="txt"><strong>Agendar uma visita com o especialista</strong>, que vai avaliar as necessidades da sua empresa e recomendar a estrutura ideal de link dedicado para o negócio.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-10 interna-contratacao--form">
                        <form id="form-empresas-contato" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nome" class="wvt-form-label">Nome completo</label>
                                    <div class="wvt-form-control">
                                        <input type="text" id="nome" name="nome" placeholder="Nome completo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="wvt-form-label">E-mail</label>
                                    <div class="wvt-form-control">
                                        <input type="email" id="email" name="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="empresa" class="wvt-form-label">Empresa</label>
                                    <div class="wvt-form-control">
                                        <input type="text" id="empresa" name="empresa" placeholder="Empresa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="wvt-form-label">Telefone</label>
                                    <div class="wvt-form-control">
                                        <input type="text" id="telefone" name="telefone" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <label for="mensagem" class="wvt-form-label">Mensagem</label>
                                    <div class="wvt-form-control">
                                        <textarea rows="4" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <input type="hidden" id="produto" name="produto" value="<?php echo $post->post_title; ?>">
                                    <button type="submit" class="btn-assine btn_form_enviar">Enviar</button>
                                </div>
                                <div class="alert hide text-center" id="response"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-md-center infos">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>Pronto! Em alguns dias, você contará com a banda larga da Copel Telecom em sua empresa.*</strong></p>
                                <p>Ou entre em contato conosco agora mesmo por telefone ou e-mail e conheça melhor as soluções da Copel Telecom.</p>
                            </div>
                            <div class="col-md-4 contatos">
                                <div class="holder fone">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_phone.svg"> 
                                    0800 41 41 81
                                </div>
                                <div class="holder contato">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_contato.svg">  
                                    Contato
                                </div>
                                <div class="holder perguntas">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_pergunta.svg">  
                                    Perguntas frequentes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interna-entendamais unico">
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

    <section class="interna-depoimentos interna-depoimentos-alt-2">
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
    </section>
	
<?php get_footer(); ?>