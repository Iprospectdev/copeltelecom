<?php get_header();?>
	<section class="page-sucesso">
		<header class="sucesso-header" style="background-image: url(<?php bloginfo('template_url'); ?>/_assets/images/sucesso-header.jpg);">
			<div class="container">
				<div class="sucesso-header--text">
					<h2>
						<svg width="88px" height="88px" viewBox="0 0 88 88" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="01_carrinho" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
						        <g id="03_sucesso" transform="translate(-95.000000, -223.000000)" stroke="#FFFFFF" stroke-width="3">
						            <g id="Group-11" transform="translate(97.000000, 223.000000)">
						                <path d="M66.4113991,9.81876849 C59.5317547,4.89671811 51.1041598,2 42,2 C18.8040405,2 0,20.8040405 0,44 C0,67.1959595 18.8040405,86 42,86 C65.1959595,86 84,67.1959595 84,44 C84,39.5173822 83.297753,35.198783 81.9972715,31.148215" id="Oval-5" opacity="0.300000012"></path>
						                <polyline id="Rectangle-7" stroke-linejoin="round" transform="translate(52.000000, 28.000000) rotate(-45.000000) translate(-52.000000, -28.000000) " points="81 38 23 38 23 18"></polyline>
						            </g>
						        </g>
						    </g>
						</svg>
						<span>
							Muito bem! O seu cadastro está completo.
						</span>
					</h2>
					<p>Em breve um de nossos consultores entrarão em contato com você.</p>
				</div>
			</div>
		</header>
        <!-- <article class="sobre-nos-copel pt-0">
            <div class="container">
                <h4 class="text-left">Por que a Copel Telecom foi sua melhor decisão:</h4>
                <p class="text-left">Parabéns! Mais que uma estabilidade garantida por meio da Fibra Óptica – material imune a ondas eletromagnéticas, que podem gerar interferência externa – você adquiriu alguns conteúdos exclusivos. <br> Qual destes é mais a sua cara?</p>
            </div>
        </article> -->
        <div class="container">

            <div class="parcerias-item">
                <a href="<?php $p=get_page_by_title('Esporte Interativo'); echo get_permalink($p->ID); ?>">
                    <figure>
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/sucesso-sercomtel.jpg" alt="">
                    </figure>
                    <h5>Blog Conecta</h5>
                    
                    <h6 class="parcerias-item--heading">
                        Quer aproveitar e contratar também um plano de telefonia? A Sercomtel tem planos e opções perfeitas para você.
                    </h6>
                    <span class="btn-more">Saiba mais</span>
                </a>
            </div>			
		</div>
	</section>
<?php get_footer(); ?>