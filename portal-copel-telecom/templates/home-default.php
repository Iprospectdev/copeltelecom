<?php get_header(); ?>
       
    <div class="header-nav fixed fixed-top">
        <div class="container">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo.svg" alt="Logo Copel Telecom">
            </a>
            <nav class="js-scrollspy">
                <ul class="nav">
                    <li>
                        <a href="#fibraoptica" class="active nav-link js-scrollto">
                            Fibra Óptica
                        </a>
                    </li>
                    <li>
                        <a href="#usosideias" class="nav-link js-scrollto">
                            Usos Ideis
                        </a>
                    </li>
                    <li>
                        <a href="#ei" class="nav-link js-scrollto">
                            Esporta Interativo
                        </a>
                    </li>
                    <li>
                        <a href="#cnja" class="nav-link js-scrollto">
                            CN Já!
                        </a>
                    </li>
                    <li>
                        <a href="#testes" class="nav-link js-scrollto">
                            Testes
                        </a>
                    </li>
                    <li>
                        <a href="#appcopel" class="nav-link js-scrollto">
                            App Copel
                        </a>
                    </li>

                    <li>
                        <a href="#blog" class="nav-link js-scrollto">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="header-nav--btn">
                Assine Já
            </a>
        </div>
        <span class="header-nav--loader" style="width: 30%;"></span>
    </div>

	<div id="home">
		<section class="home-fibra-optica" id="fibraoptica">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>
		<section class="home-usos-ideias" id="usosideias">
			<div style="height: 500px; background: #f4f4f4; display: block;"></div>
		</section>
		<section class="home-ei" id="ei">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>
		<section class="home-cn-ja" id="cnja">
			<div style="height: 500px; background: #f4f4f4; display: block;"></div>
		</section>
		<section class="home-testes" id="testes">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>
		<section class="home-app-copel" id="appcopel">
			<div style="height: 500px; background: #f4f4f4; display: block;"></div>
		</section>
		<section class="home-blog" id="blog">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>
	</div>
<?php get_footer(); ?>