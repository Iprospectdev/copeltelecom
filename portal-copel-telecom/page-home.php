<?php /* Template Name: Home Geral */ ?>
<?php get_header(); 

$slides = get_posts(array(
    "post_type" => "slider-home",
    "nopaging" => true,
    'meta_query' => array(
        array(
            'key' => 'slider_local',
            'value' => "H",
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
                            <a href="#qualidade" class="nav-link js-scrollto">
                                Qualidade
                            </a>
                        </li>
                        <li>
                            <a href="#bandalarga" class="nav-link js-scrollto">
                                Banda larga
                            </a>
                        </li>
                        <li>
                            <a href="#minhacopel" class="nav-link js-scrollto">
                                Minha Copel
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
    
        <section class="slider-topo">
            <div class="container">
                <div class="main-breadcrumb">
                    <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                </div>

                <div class="opcoes">
                    <div class="popup-menu">
                        <a href="#" data-toggle="modal" data-target="#ligamos-modal">Ligamos para você <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_menu_ligamos.svg"></a>
                        <a href="#">Envie-nos uma mensagem <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_menu_mensagem.svg"></a>
                        <a href="#">Chat online <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_menu_chat.svg"></a>
                        <a href="#">Whatsapp <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_menu_whatsapp.svg"></a>
                        <div class="tip"></div>
                    </div>
                    <div class="btn"><img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_menu_fale.svg"> Fale com um consultor</div>
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
                <div class="slide home-geral" style="background-image: url(<?php echo $desktop["full_url"]; ?>);">
                    <div class="container">
                        <div class="info">
                            <h2>
                                <?php echo nl2br(get_post_meta($slide->ID, "slider_principal", true)); ?>
                                <br><span><?php echo nl2br(get_post_meta($slide->ID, "slider_secundario", true)); ?></span>
                            </h2>
                        </div>
                    </div>
                    <div class="bg-slide-info"><img src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png"></div>
                </div>
                <?php endforeach ?>
                <?php endif; ?>

            </div>
        </section>

        <section class="home-qualidade" id="qualidade">
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="home-qualidade--bg" alt="">
            <div class="main-heading">
                <h6>
                    Entregamos qualidade <br> 
                    e confiança em soluções completas.
                </h6>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 pl-0">
                        <div class="destaque fibra">
                            <div class="destaque--text">
                                <h6 class="destaque--heading">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_para_voce.svg">
                                    <div class="txt">Para<br>você</div>
                                </h6>
                                <p>100% Fibra Óptica <br> <span>para você se divertir <br>e se conectar.</span></p>
                                <a href="<?php $p=get_page_by_title('Para você'); echo get_permalink($p->ID); ?>" class="btn-assine">Descubra o seu plano</a>
                            </div>
                        </div>
                    </div>
         
                    <div class="col-6 pr-0">
                        <div class="destaque negocios">
                            <div class="destaque--text">
                                <h6 class="destaque--heading">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_para_empresas.svg">
                                    <div class="txt">Para<br>empresas</div>
                                </h6>
                                <p><span>Velocidade, estabilidade e <br> confiança para seus negócios.</span></p>
                                <a href="<?php $p=get_page_by_title('Para empresas'); echo get_permalink($p->ID); ?>" class="btn-assine">Descubra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-bandalarga" id="bandalarga">
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="home-bandalarga--bg" alt="">
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-left-bg.svg" class="home-bandalarga--bg-left" alt="">

            <div class="home-bandalarga--bg-destaque"><img src="<?php bloginfo('template_url'); ?>/_assets/images/sobre-nos-banner.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="home-bandalarga--heading">
                            <svg width="112px" height="112px" viewBox="0 0 112 112" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home" transform="translate(-797.000000, -2587.000000)"><g id="Group-49" transform="translate(798.000000, 2589.000000)"><g id="Group-25"><g id="Group-41"><g id="Group-42" transform="translate(1.000000, 0.000000)"><g id="Group-56"><circle id="Oval-6" stroke="#FFA600" stroke-width="3" cx="54" cy="54" r="54"></circle><path d="M68.3989703,30.0819608 L39.4873452,52.6945422 C39.2585893,52.8751343 39.3123122,53.239825 39.5843931,53.343271 L49.7796272,57.2514236 C49.9997181,57.335583 50.0881011,57.6055944 49.9598591,57.805473 L38.0628198,76.4187291 C37.8357969,76.7729 38.2725127,77.1779172 38.6017826,76.9166723 L66.7474221,54.7020948 C66.970979,54.5250093 66.922455,54.1708385 66.6607721,54.0603793 L56.8398658,49.957608 C56.6249739,49.8681887 56.543523,49.6016839 56.6717649,49.4053119 L68.9362,30.5851639 C69.1649559,30.2309931 68.7299731,29.8224692 68.3989703,30.0819608 Z" id="Page-1" stroke="#464D5C" stroke-width="2"></path></g></g></g></g></g></g></g></svg> 
                            A melhor <br> banda <br> larga do <br> Brasil é <br> paranaense
                        </div>
                    </div>
                    <div class="col-md-7 p-0">
                        <div class="row">
                            <div class="col-4 item">
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_velocidade.svg">
                                <p>Na mesma velocidade que você cria, você compartilha.</p>
                            </div>
                            <div class="col-4 item">
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_distribuicao.svg">
                                <p>Com a mesma qualidade que você produz, você distribui.</p>
                            </div>
                            <div class="col-4 item">
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_cadeado.svg">
                                <p>Com a mesma estabilidade que você acessa, você continua navegando.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 mapa">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/mapa.png">
                    </div>
                    <div class="col-md-5 infos">
                        <p>
                            Ótima notícia para você que vive aqui e pode contar com todas as soluções da Copel, a empresa pública mais admirada no Estado, porque é sinônimo de tecnologia e inovação. Internet de alta performance, <strong>redes 100% fibra óptica</strong> e muitas outras soluções para sua casa e empresa. Aproveite e mude a sua velocidade de resolver a vida já, nos <strong>399 municípios do Paraná</strong>.
                        </p>
                        <a href="<?php $p=get_page_by_title('Sobre nós'); echo get_permalink($p->ID); ?>" class="btn-assine">Descubra a Copel Telecom</a>
                    </div>

                    <div class="col-md-3">
                        <div class="home-bandalarga--heading">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-phone.svg">
                            Minha <br> Copel
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-app.png" alt="" class="img-app">
                    </div>
                    <div class="col-md-3 destaque">
                        <h6>App Copel</h6>
                        <p>Toda a facilidade e <br> velocidade da <strong>Copel Fibra</strong> <br> agora em suas mãos.</p>
                        <a href="<?php $p=get_page_by_title('App Copel'); echo get_permalink($p->ID); ?>" class="btn-assine">Saiba mais</a>
                    </div>
                    <div class="col-md-3 destaque">
                        <h6>Área do cliente</h6>
                        <p>Aqui você pode acessar itens relativos à sua conta, alterar dados e obter mais informações. </p>
                        <a href="http://www.copeltelecom.com/autoatendimento" target="_blank" class="btn-assine">Acessar</a>
                    </div>
                    <div class="col-md-3 contatos">
                        <div class="fone">
                            <a href="tel:0800414181" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_phone.svg"> 
                            0800 41 41 81
                            </a>
                        </div>
                        <div class="contato">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_contato.svg"> 
                            Contato
                        </div>
                        <div class="perguntas">
                            <a href="<?php bloginfo('url'); ?>/faq">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_pergunta.svg">
                            Perguntas frequentes
                            </a>
                        </div>
                    </div>
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
                            <label for="nome" class="wvt-form-label">Nome:</label>
                            <div class="wvt-form-control">
                                <input type="text" id="nome" name="nome" placeholder="Digite o seu nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="wvt-form-label">E-mail:</label>
                            <div class="wvt-form-control">
                                <input type="email" id="email" name="email" placeholder="Digite o seu email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="telefone" class="wvt-form-label">Telefone:</label>
                            <div class="wvt-form-control">
                                <input type="text" id="telefone" name="telefone" placeholder="( )">
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