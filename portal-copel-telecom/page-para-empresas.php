<?php /* Template Name: Home Para Empresas */ ?>
<?php get_header(); 

$slides = get_posts(array(
    "post_type" => "slider-home",
    "nopaging" => true,
    'meta_query' => array(
        array(
            'key' => 'slider_local',
            'value' => "J",
            'compare' => 'IN'
        )
    )
));


?>
    <section class="page-home">   
        <nav class="header-nav fixed fixed-top">
            <div class="container">
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo.svg" alt="Logo Copel Telecom">
                </a>
                <nav class="js-scrollspy">
                    <ul class="nav">
                        <li>
                            <a href="#beneficios" class="nav-link js-scrollto">
                                Benefícios
                            </a>
                        </li>
                         <li>
                            <a href="#blog" class="nav-link js-scrollto">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="#" class="btn-assine js-disponibilidade-modal">
                    Assine Já
                </a>
            </div>
            <span class="header-nav--loader" style="width: 0%;"></span>
        </nav>
	
        <section class="slider-topo slider-topo-empresas">
            <img class="home-usos--bg" src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png" alt="">
            <div class="container">
                <div class="main-breadcrumb">
                    <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                    <a href="#">Para empresas</a>
                </div>
            </div>
            <div class="slider-topo--slides owl-carousel">

                <?php if ($slides): ?>
                <?php foreach ($slides as $slide): ?>
                <?php

                    $desktop = array_values(rwmb_meta( 'slider_image_desktop', 'type=image', $slide->ID));
                    $desktop = $desktop[0];

                    $mobile = array_values(rwmb_meta( 'slider_image_mobile', 'type=image', $slide->ID));
                    $mobile = ($mobile) ? $mobile[0] : $desktop;

                ?>

                <div class="slide" style="background-image: url(<?php echo $desktop["full_url"]; ?>);">
                    <div class="container">
                        <h2><?php echo nl2br(get_post_meta($slide->ID, "slider_principal", true)); ?></h2>
                        <p><?php echo nl2br(get_post_meta($slide->ID, "slider_secundario", true)); ?></p>
                    </div>
                </div>

                <?php endforeach ?>
                <?php endif; ?>

            </div>
        </section>
        
        <section class="home-produtos">
            <div class="container">
                <div class="row">
                    <div class="home-produtos--box col-md-6 col-lg-3">
                        <h6>
                            Internet <br> dedicada
                        </h6>
                        <div class="info">
                            <p>
                                Sua empresa conectata ao mundo, com a velocidade e a estabilidade da tecnologia 100% em fibra óptica.
                            </p>
                            <div class="btn-descubra">
                                <a href="<?php $p=get_page_by_title('Internet dedicada'); echo get_permalink($p->ID); ?>">Descubra</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-produtos--box col-md-6 col-lg-3">
                        <h6>
                            Redes
                        </h6>
                        <div class="info">
                            <p>
                                Interliga, com alta confiabilidade, computadores locais, servidores e estações em qualquer ponto do Paraná.
                            </p>
                            <div class="btn-descubra">
                                <a href="<?php $p=get_page_by_title('Redes'); echo get_permalink($p->ID); ?>">Descubra</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-produtos--box col-md-6 col-lg-3">
                        <h6>
                            Data <br> center
                        </h6>
                        <div class="info">
                            <p>
                                O melhor lugar para armazenar sua confiança com comodidade, segurança e praticidade.
                            </p>
                            <div class="btn-descubra">
                                <a href="<?php $p=get_page_by_title('Data center'); echo get_permalink($p->ID); ?>">Descubra</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-produtos--box col-md-6 col-lg-3">
                        <h6>
                            Banda larga <br> corporativa
                        </h6>
                        <div class="info">
                            <p>
                                Transmissão de dados, voz, vídeos e imagens em alta velocidade. Porque seus negócios não podem parar.
                            </p>
                            <div class="btn-descubra">
                                <a href="<?php $p=get_page_by_title('Banda larga corporativa'); echo get_permalink($p->ID); ?>">Descubra</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>

        <section class="home-beneficios" id="beneficios">
            <div class="main-heading">
                <h6>
                    Aproveite os benefícios <br>
					da marca Copel para seus negócios
                </h6>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="home-beneficios--bg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 home-beneficios--item">
                        <h6 class="home-beneficios--heading">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-phone.svg">
                            Flexibilidade
                        </h6>
                        <p>A Copel Telecom tem um leque variado de soluções, que podem ser combinadas para atender às necessidades específicas da sua empresa. </p>
                    </div>
                    <div class="col-md-6 col-lg-3 home-beneficios--item">
                        <h6 class="home-beneficios--heading">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_cobertura.svg">
                            Cobertura
                        </h6>
                        <p>Os 399 municípios do nosso estado já contam com o que há de mais avançado em tecnologia digital. Verifique disponibilidade técnica para a sua localidade.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 home-beneficios--item">
                        <h6 class="home-beneficios--heading">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_fibraotica.svg">
                            Fibra ótica
                        </h6>
                        <p>Com a tecnologia de fibra óptica da Copel Telecom, a qualidade do sinal se mantém desde a origem até o destino. Ou seja, lucro de ponta a ponta para seus negócios.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 home-beneficios--item">
                        <h6 class="home-beneficios--heading">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_tecnologia.svg">
                            Tecnologia
                        </h6>
                        <p>Há mais de 40 anos, a Copel é sinônimo de tecnologia e inovação a serviço do desenvolvimento do Paraná, sendo a empresa pública mais admirada pelos paranaenses.</p>
                    </div>
                </div>
                <div class="hld-btn">
                    <a class="btn-assine" href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">Por que Copel?</a>
                </div>
            </div>
		</section>

		<section class="home-blog" id="blog">
            <div class="container">
                <div class="home-blog--heading">
                    <h6>Blog Conecta</h6>
                    <p>Aqui tem dicas, informações e muitos mais para você.</p>
                </div>
                <div class="row mx-0">
               
                    <?php
                        query_posts(array(
                            "post_type" => "post",
                            'posts_per_page' => 3
                        ));
                        $i = 0;
                    ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php
                            if($i==0){
                                $class = 'col-md-12 col-sm-12 col-12 float-left';
                            }else{
                                $class = 'col-md-4 col-sm-6 col-12 float-left';
                            }
                        ?>
                        <article class="<?php echo $class; ?> blog-item">
                            <a href="<?php the_permalink(); ?>">
                                <span style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID , "full" ); ?>);"></span>
                                <h6>
                                    <small><?php get_the_categorias($post->ID); ?></small>
                                    <?php the_title(); ?>
                                </h6>
                            </a>
                        </article>
                        <?php if($i==2 && get_query_var( 'paged' )<=1): ?>
                            <aside class="col-md-4 col-sm-6 col-12 blog-item-nav">
                                <h6>Navegar por categorias</h6>
                                <nav>
                                    <?php
                                        $categorias = get_terms("category");
                                        if ($categorias) {
                                            foreach ($categorias as $cat) {
                                                echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o">'.$cat->name.'</a>';
                                            }
                                        }
                                    ?>
                                </nav>
                                <a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>" class="btn-assine">Veja todas as publicações</a>
                            </aside>
                        <?php endif; ?>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
		</section>

	</section>

<?php get_footer(); ?>