<?php /* Template Name: Home Para Você */ ?>
<?php get_header(); 

$slides = get_posts(array(
    "post_type" => "slider-home",
    "nopaging" => true,
    'meta_query' => array(
        array(
            'key' => 'slider_local',
            'value' => "F",
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
                            <a href="#fibraoptica" class="nav-link js-scrollto">
                                Fibra Óptica
                            </a>
                        </li>
                        <li>
                            <a href="#usosideias" class="nav-link js-scrollto" data-show=".home-usos--devices, .home-usos--mockups-usos, .fixed-top">
                                Usos Ideais
                            </a>
                        </li>
                        <li>
                            <a href="#ei" class="nav-link js-scrollto" data-show=".home-usos--devices, .home-usos--mockups-ei, .fixed-top">
                                Esporta Interativo
                            </a>
                        </li>
                        <li>
                            <a href="#cnja" class="nav-link js-scrollto" data-show=".home-usos--devices, .home-usos--mockups-cnja">
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
                <a href="<?php echo LINK_WVT; ?>" target="_blank" class="btn-assine js-disponibilidade-modall">
                    Assine Já
                </a>
            </div>
            <span class="header-nav--loader" style="width: 0%;"></span>
        </nav>
	
        <section class="slider-topo">
            <div class="container">
                <div class="main-breadcrumb">
                    <a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i>Início</a>
                    <a href="#">Para você</a>
                </div>
            </div>
            <div class="slider-topo--slides owl-carousel">

                <?php if ($slides): ?>
                <?php foreach ($slides as $slide): ?>
                <?php

                    $desktop = array_values(rwmb_meta( 'slider_image_desktop', 'type=image', $slide->ID));
                    $desktop = $desktop[0];

                    $icone = array_values(rwmb_meta( 'slider_image_icone', 'type=image', $slide->ID));
                    $icone = $icone[0];

                    $mobile = array_values(rwmb_meta( 'slider_image_mobile', 'type=image', $slide->ID));
                    $mobile = ($mobile) ? $mobile[0] : $desktop;

                ?>

                <div class="slide" style="background-image: url(<?php echo $desktop["full_url"]; ?>);">
                    <div class="container">
                        <div class="info">
                            <div class="img"><img src="<?php echo $icone["full_url"]; ?>"></div>
                            <div class="txt"><?php echo nl2br(get_post_meta($slide->ID, "text_icone", true)); ?></div>
                        </div>
                        <h2><?php echo nl2br(get_post_meta($slide->ID, "slider_principal", true)); ?></h2>
                        <p><?php echo nl2br(get_post_meta($slide->ID, "slider_secundario", true)); ?></p>
                    </div>
                </div>

                <?php endforeach ?>
                <?php endif; ?>


            </div>
        </section>
        
        <section class="home-planos">
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
                            <a href="<?php echo LINK_WVT; ?>" target="_blank" class="btn-assine js-disponibilidade-modall">Assine já</a>
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
            
            <div class="main-heading">
                <h6>
                    Conheça as vantagens <br>para sua casa
                </h6>
            </div>
        </section>

        <section class="home-fibra" id="fibraoptica">
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/home-fibra.jpg" alt="">
            <div class="container">
                <div class="home-fibra--text">
                    <h6 class="home-fibra--heading">
                        <svg width="112px" height="112px" viewBox="0 0 112 112" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="100%" y1="5.78661152%" x2="1.11022302e-14%" y2="93.8648897%" id="linearGradient-1"><stop stop-color="#FFA600" offset="0%"></stop><stop stop-color="#FF6D00" offset="100%"></stop></linearGradient></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_banner1_informar-endereco" transform="translate(-98.000000, -1630.000000)"><g id="Group-40" transform="translate(0.000000, 1426.000000)"><g id="Group-12" transform="translate(98.000000, 206.000000)"><g id="Group-30" transform="translate(2.000000, 0.000000)"><g id="Group-8-Copy"><circle id="Oval-6" stroke="url(#linearGradient-1)" stroke-width="3" cx="54" cy="54" r="54"></circle><g id="Page-1" transform="translate(49.000000, 62.500000) rotate(-330.000000) translate(-49.000000, -62.500000) translate(32.000000, 29.000000)"><path d="M0,43 L34,43" id="Stroke-1" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5,43 L5,24" id="Stroke-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11,43 L11,34" id="Stroke-4" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17,43 L17,7" id="Stroke-5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23,43 L23,15" id="Stroke-6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M29,43 L29,24" id="Stroke-7" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><g id="Group-20"><path d="M11.0159583,27.5351652 C9.18283333,27.5351652 7.69533333,29.041513 7.69533333,30.899687 C7.69533333,32.7593391 9.18283333,34.265687 11.0159583,34.265687 C12.8490833,34.265687 14.335125,32.7593391 14.335125,30.899687 C14.335125,29.041513 12.8490833,27.5351652 11.0159583,27.5351652 M11.0159583,30.491687 C11.237625,30.491687 11.4184583,30.6749913 11.4184583,30.899687 C11.4184583,31.1258609 11.237625,31.3091652 11.0159583,31.3091652 C10.7928333,31.3091652 10.612,31.1258609 10.612,30.899687 C10.612,30.6749913 10.7928333,30.491687 11.0159583,30.491687" id="Fill-8" fill="#FFFFFF"></path><path d="M5.08433333,18.5783826 C3.25120833,18.5783826 1.76516667,20.0847304 1.76516667,21.9429043 C1.76516667,23.8025565 3.25120833,25.3089043 5.08433333,25.3089043 C6.91745833,25.3089043 8.4035,23.8025565 8.4035,21.9429043 C8.4035,20.0847304 6.91745833,18.5783826 5.08433333,18.5783826 M5.08433333,21.5349043 C5.306,21.5349043 5.48683333,21.7182087 5.48683333,21.9429043 C5.48683333,22.1690783 5.306,22.3523826 5.08433333,22.3523826 C4.86266667,22.3523826 4.68183333,22.1690783 4.68183333,21.9429043 C4.68183333,21.7182087 4.86266667,21.5349043 5.08433333,21.5349043" id="Fill-10" fill="#FFFFFF"></path><path d="M16.9468542,0.170043478 C15.1137292,0.170043478 13.6276875,1.6763913 13.6276875,3.53456522 C13.6276875,5.39421739 15.1137292,6.90056522 16.9468542,6.90056522 C18.7799792,6.90056522 20.2660208,5.39421739 20.2660208,3.53456522 C20.2660208,1.6763913 18.7799792,0.170043478 16.9468542,0.170043478 M16.9468542,3.12656522 C17.1699792,3.12656522 17.3493542,3.30986957 17.3493542,3.53456522 C17.3493542,3.76073913 17.1699792,3.94404348 16.9468542,3.94404348 C16.7251875,3.94404348 16.5443542,3.76073913 16.5443542,3.53456522 C16.5443542,3.30986957 16.7251875,3.12656522 16.9468542,3.12656522" id="Fill-12" fill="#FFFFFF"></path><path d="M22.8784792,9.50378261 C21.0453542,9.50378261 19.5593125,11.0116087 19.5593125,12.8697826 C19.5593125,14.7279565 21.0453542,16.2343043 22.8784792,16.2343043 C24.7116042,16.2343043 26.1976458,14.7279565 26.1976458,12.8697826 C26.1976458,11.0116087 24.7116042,9.50378261 22.8784792,9.50378261 M22.8784792,12.4603043 C23.1001458,12.4603043 23.2809792,12.6436087 23.2809792,12.8697826 C23.2809792,13.0944783 23.1001458,13.2777826 22.8784792,13.2777826 C22.6568125,13.2777826 22.4759792,13.0944783 22.4759792,12.8697826 C22.4759792,12.6436087 22.6568125,12.4603043 22.8784792,12.4603043" id="Fill-14" fill="#FFFFFF"></path><path d="M28.8101042,17.1001217 C26.9769792,17.1001217 25.4909375,18.6064696 25.4909375,20.4646435 C25.4909375,22.3242957 26.9769792,23.8306435 28.8101042,23.8306435 C30.6432292,23.8306435 32.1292708,22.3242957 32.1292708,20.4646435 C32.1292708,18.6064696 30.6432292,17.1001217 28.8101042,17.1001217 M28.8101042,20.0566435 C29.0317708,20.0566435 29.2126042,20.2399478 29.2126042,20.4646435 C29.2126042,20.6908174 29.0317708,20.8741217 28.8101042,20.8741217 C28.5884375,20.8741217 28.4076042,20.6908174 28.4076042,20.4646435 C28.4076042,20.2399478 28.5884375,20.0566435 28.8101042,20.0566435" id="Fill-16" fill="#FFFFFF"></path><polyline id="Stroke-18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="33.8942917 67 33.8942917 47.4293043 -0.000291666667 47.4293043 -0.000291666667 67"></polyline></g></g></g></g></g></g></g></g></svg>
                        Copel<br>Fibra
                    </h6>
                    <p>Copel Fibra é a internet fibra óptica de ponta a ponta. Isso quer dizer a melhor qualidade de entrega e estabilidade de conexão.</p>
                    <a href="#usosideias" class="nav-link js-scrollto btn-more">Saiba mais</a>
                </div>
            </div>
		</section>

        <div class="home-usos">
            <img class="home-usos--bg" src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png" alt="">
            <div class="fixed-top">
                <img class="home-usos--bg" src="<?php bloginfo('template_url'); ?>/_assets/images/home-usos-bg.png" alt="">
                <div class="home-usos--devices">
                    <div class="tv">
                        <div class="tv--img">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-tv.jpg" class="home-usos--mockups-usos active" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-ei-tv.jpg" class="home-usos--mockups-ei" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-cnja-tv.jpg" class="home-usos--mockups-cnja" alt="">
                        </div>
                    </div>
                    <div class="notebook">
                        <div class="notebook--img">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-notebook.jpg" class="home-usos--mockups-usos active" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-ei-notebook.jpg" class="home-usos--mockups-ei" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-cnja-notebook.jpg" class="home-usos--mockups-cnja" alt="">
                        </div>
                    </div>
                    <div class="ipad">
                        <div class="ipad--img">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-ipad.jpg" class="home-usos--mockups-usos active" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-ei-ipad.jpg" class="home-usos--mockups-ei" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-cnja-ipad.jpg" class="home-usos--mockups-cnja" alt="">
                        </div>
                    </div>
                    <div class="phone">
                        <div class="phone--img">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-phone.jpg" class="home-usos--mockups-usos active" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-ei-phone.jpg" class="home-usos--mockups-ei" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockup-cnja-phone.jpg" class="home-usos--mockups-cnja" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <section class="home-usos-ideias" id="usosideias">
                <div class="container d-flex align-items-center">
                    <div class="home-usos--content">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockups.jpg" class="home-usos--mobile" alt="">
                        <h6>
                            <svg width="112px" height="112px" viewBox="0 0 112 112" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home" transform="translate(-797.000000, -2587.000000)"><g id="Group-49" transform="translate(798.000000, 2589.000000)"><g id="Group-25"><g id="Group-41"><g id="Group-42" transform="translate(1.000000, 0.000000)"><g id="Group-56"><circle id="Oval-6" stroke="#FFA600" stroke-width="3" cx="54" cy="54" r="54"></circle><path d="M68.3989703,30.0819608 L39.4873452,52.6945422 C39.2585893,52.8751343 39.3123122,53.239825 39.5843931,53.343271 L49.7796272,57.2514236 C49.9997181,57.335583 50.0881011,57.6055944 49.9598591,57.805473 L38.0628198,76.4187291 C37.8357969,76.7729 38.2725127,77.1779172 38.6017826,76.9166723 L66.7474221,54.7020948 C66.970979,54.5250093 66.922455,54.1708385 66.6607721,54.0603793 L56.8398658,49.957608 C56.6249739,49.8681887 56.543523,49.6016839 56.6717649,49.4053119 L68.9362,30.5851639 C69.1649559,30.2309931 68.7299731,29.8224692 68.3989703,30.0819608 Z" id="Page-1" stroke="#464D5C" stroke-width="2"></path></g></g></g></g></g></g></g></svg>
                            A internet que acompanha o seu uso!
                        </h6>
                        <p>A Copel Fibra entrega a internet que você precisa, na hora que você precisa, para tudo o que você precisa.</p>
                        <div class="owl-carousel home-usos-carousel">
                            <div class="home-usos-carousel--item">
                                <div>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-videos-online.svg" alt="">
                                    Vídeos Online
                                </div>
                            </div>
                            <div class="home-usos-carousel--item">
                                <div>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-jogos-online.svg" alt="">
                                    Jogos Online
                                </div>
                            </div>
                            <div class="home-usos-carousel--item">
                                <div>
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-redes-sociais.svg" alt="">
                                    Redes Sociais
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    		<section class="home-ei home-usos--height" id="ei">
                <div class="container d-flex align-items-center">
                    <div class="home-usos--content">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockups-ei.jpg" class="home-usos--mobile" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-ei.png" alt="">
                        <p>Cliente Copel Fibra tem acesso gratuito ao conteúdo do Esporte Interativo para assitir ao vivo o melhor da Liga dos Campeões, Europa League, E-League e muito mais.</p>
                        <a href="<?php bloginfo('url') ?>/para-voce/parcerias/esporte-interativo" class="btn-more">Saiba mais</a>
                    </div>
                </div>
    		</section>
    		<section class="home-cn-ja home-usos--height" id="cnja">
                <div class="container d-flex align-items-center">
                    <div class="home-usos--content">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/mockups-cnja.jpg" class="home-usos--mobile" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-cnja.png" alt="">
                        <p>Seu desenhos preferidos onde você estiver. Agora quem tem a banda larga Copel Fibra tem acesso ao aplicativo CN Já!, a plataforma de vídeos do Cartoon Network.</p>
                        <a href="<?php bloginfo('url') ?>/para-voce/parcerias/cartoon-network" class="btn-more">Saiba mais</a>
                    </div>
                </div>
    		</section>
        </div>

		<section class="home-testes" id="testes">
            <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-testes-bg.svg" class="home-testes--bg" alt="">
			<div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="home-testes--box">
                            <h6>
                                <svg width="90px" height="117px" viewBox="0 0 90 117" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><filter x="-6.0%" y="-16.7%" width="112.0%" height="133.3%" filterUnits="objectBoundingBox" id="filter-1"><feGaussianBlur stdDeviation="1" in="SourceGraphic"></feGaussianBlur></filter></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_banner1_informar-endereco" transform="translate(-152.000000, -3014.000000)"><g id="Group-51" transform="translate(98.000000, 2962.000000)"><g id="Group-39" transform="translate(56.000000, 54.000000)"><g id="Group-45"><circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43.5" cy="43.5" r="33.5"></circle><circle id="Oval-4" stroke="#FFA600" stroke-width="3" cx="43" cy="43" r="43"></circle><ellipse id="Oval-3" fill="#464D5C" opacity="0.5" filter="url(#filter-1)" cx="43" cy="104" rx="25" ry="9"></ellipse><g id="placeholder" transform="translate(23.000000, 24.000000)" fill="#464D5C"><path d="M34.3184444,28.5910664 L20.2524444,52.1222695 L5.81855556,28.8168398 C4.19266667,26.1859336 3.31111111,23.1506836 3.31111111,20.0390625 C3.31111111,10.8311133 10.81,3.31757812 20,3.31757812 C29.19,3.31757812 36.6777778,10.8311133 36.6777778,20.0390625 C36.6777778,23.0583926 35.8543333,26.0160469 34.3184444,28.5910664 Z M20,0 C8.972,0 0,8.98952344 0,20.0390625 C0,23.7723398 1.03211111,27.4156641 2.98544444,30.5764922 L18.8615556,56.2105723 C19.1656667,56.7016406 19.7014444,57 20.2776667,57 C20.2821111,57 20.2864444,57 20.2908889,57 C20.8721111,56.9954355 21.409,56.6878359 21.7075556,56.1881953 L37.179,30.3057422 C39.0245556,27.2117109 40,23.6615684 40,20.0390625 C40,8.98952344 31.028,0 20,0 Z" id="Fill-1"></path><path d="M20,26.6888889 C16.3047778,26.6888889 13.3111111,23.6852222 13.3111111,20 C13.3111111,16.324 16.324,13.3111111 20,13.3111111 C23.676,13.3111111 26.6777778,16.324 26.6777778,20 C26.6777778,23.6314444 23.7537778,26.6888889 20,26.6888889 Z M20,10 C14.486,10 10,14.486 10,20 C10,25.4787778 14.413,30 20,30 C25.6558889,30 30,25.4185556 30,20 C30,14.486 25.514,10 20,10 Z" id="Fill-2"></path></g></g></g></g></g></g></svg>
                                Onde estamos
                            </h6>
                            <p>Temos a maior cobertura em fibra óptica do Paraná. Quer saber se já chegamos na sua rua?</p>
                            <a href="<?php echo LINK_WVT; ?>" class="btn-assine">Consulte</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="home-testes--box">
                            <h6>
                                <svg width="84px" height="129px" viewBox="0 0 84 129" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <filter x="-5.0%" y="-16.7%" width="110.0%" height="133.3%" filterUnits="objectBoundingBox" id="filter-1">
                                            <feGaussianBlur stdDeviation="1" in="SourceGraphic"></feGaussianBlur>
                                        </filter>
                                        <polygon id="path-2" points="0 0 69.9827869 0 69.9827869 60.7221754 0 60.7221754"></polygon>
                                    </defs>
                                    <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="01_home_banner1_nao-disponivel" transform="translate(-750.000000, -3013.000000)">
                                            <g id="Group-50" transform="translate(698.000000, 2962.000000)">
                                                <g id="Group-21" transform="translate(54.000000, 53.000000)">
                                                    <path d="M34,9 L0,67" id="Line-3" stroke="#FFA600" stroke-width="3" stroke-linecap="round"></path>
                                                    <path d="M47,0 L16,53" id="Line-3" stroke="#FFA600" stroke-width="3" stroke-linecap="round"></path>
                                                    <g id="Group-38" transform="translate(12.000000, 30.000000)">
                                                        <ellipse id="Oval-3" fill="#464D5C" opacity="0.5" filter="url(#filter-1)" cx="35" cy="86" rx="30" ry="9"></ellipse>
                                                        <g id="download-speed">
                                                            <g id="Group-3">
                                                                <mask id="mask-3" fill="white">
                                                                    <use xlink:href="#path-2"></use>
                                                                </mask>
                                                                <g id="Clip-2"></g>
                                                                <path d="M70,35.5482559 C70,25.9128578 66.1448361,17.1687536 59.9085246,10.7961327 C59.8591803,10.7319526 59.8078279,10.6674834 59.7484426,10.6076398 C59.689918,10.5489526 59.6262295,10.4957583 59.5611066,10.4471896 C53.2384426,4.16274408 44.5613115,0.278113744 35,0.278113744 C25.4386885,0.278113744 16.7615574,4.16274408 10.4377459,10.4471896 C10.3737705,10.4969147 10.310082,10.5489526 10.2515574,10.6076398 C10.1921721,10.6674834 10.1408197,10.7307962 10.0914754,10.7961327 C3.85516393,17.1687536 0,25.9128578 0,35.5482559 C0,44.9676967 3.64,53.8233934 10.2484016,60.4851137 C10.2495492,60.4862701 10.2504098,60.4874265 10.2515574,60.4874265 C10.2515574,60.4885829 10.2527049,60.4885829 10.2527049,60.4897393 L10.2561475,60.4920521 C10.592377,60.8308768 11.0327459,61.0002891 11.4731148,61.0002891 C11.9134836,61.0002891 12.3538525,60.8308768 12.690082,60.4920521 C12.7193443,60.462564 12.7451639,60.4322085 12.7709836,60.401564 L18.074918,55.0555355 C18.747377,54.3778863 18.747377,53.2804645 18.074918,52.6028152 C17.4036066,51.9263223 16.3131557,51.9263223 15.6409836,52.6028152 L11.502377,56.7742322 C6.67467213,51.3617109 3.8752459,44.5496588 3.48967213,37.2828531 L9.34385246,37.2828531 C10.2943033,37.2828531 11.0651639,36.5057536 11.0651639,35.5482559 C11.0651639,34.5904692 10.2943033,33.8136588 9.34385246,33.8136588 L3.48967213,33.8136588 C3.8907377,26.3499763 6.85598361,19.5630758 11.5135656,14.3332654 L15.6409836,18.4934076 C15.9769262,18.8310758 16.417582,19.0004882 16.8579508,19.0004882 C17.2983197,19.0004882 17.7398361,18.8310758 18.074918,18.4934076 C18.747377,17.8160474 18.747377,16.7171801 18.074918,16.0395308 L13.9475,11.8790995 C19.1372541,7.18701422 25.872459,4.19772512 33.2786885,3.79472038 L33.2786885,9.69408531 C33.2786885,10.6527393 34.0498361,11.4286825 35,11.4286825 C35.9501639,11.4286825 36.7213115,10.6527393 36.7213115,9.69408531 L36.7213115,3.79472038 C44.127541,4.19772512 50.8627459,7.18701422 56.0525,11.8802559 L51.9239344,16.0395308 C51.252623,16.7171801 51.252623,17.8160474 51.9239344,18.4934076 C52.2601639,18.8310758 52.7005328,19.0004882 53.1409016,19.0004882 C53.5815574,19.0004882 54.0230738,18.8310758 54.3581557,18.4934076 L58.4864344,14.3332654 C63.1428689,19.5630758 66.1092623,26.3499763 66.5091803,33.8136588 L60.6561475,33.8136588 C59.7045492,33.8136588 58.9348361,34.5904692 58.9348361,35.5482559 C58.9348361,36.5057536 59.7045492,37.2828531 60.6561475,37.2828531 L66.5103279,37.2828531 C66.1247541,44.5496588 63.3241803,51.3617109 58.497623,56.7742322 L54.3581557,52.6028152 C53.6868443,51.9263223 52.5963934,51.9263223 51.9239344,52.6028152 C51.252623,53.2804645 51.252623,54.3790427 51.9239344,55.0555355 L57.3142213,60.4874265 C57.6504508,60.8262512 58.0908197,60.9956635 58.5311885,60.9956635 C58.7520902,60.9956635 58.9718443,60.9528768 59.1789754,60.869327 C59.3863934,60.7846209 59.5803279,60.6568389 59.7484426,60.4874265 C66.3591393,53.8257062 70,44.9688531 70,35.5482559 Z" id="Fill-1" fill="#464D5C" mask="url(#mask-3)"></path>
                                                            </g>
                                                            <path d="M41.9583001,16.1183419 C41.1076364,15.7808412 40.1425559,16.1899992 39.8026221,17.0307425 L35.0103842,28.8681556 C34.7868017,28.8446345 38.2491521,30.0753907 38.1258916,29.9963488 L42.880267,18.2508321 C43.2215826,17.4100889 42.8081347,16.4547486 41.9583001,16.1183419 Z" id="Fill-4" fill="#464D5C"></path>
                                                            <path d="M35.5,42 C31.9101491,42 29,39.0898509 29,35.5 C29,31.9101491 31.9101491,29 35.5,29 C39.0898509,29 42,31.9101491 42,35.5 C42,39.0898509 39.0898509,42 35.5,42 Z M35.5,39.4 C37.6539105,39.4 39.4,37.6539105 39.4,35.5 C39.4,33.3460895 37.6539105,31.6 35.5,31.6 C33.3460895,31.6 31.6,33.3460895 31.6,35.5 C31.6,37.6539105 33.3460895,39.4 35.5,39.4 Z" id="Combined-Shape" fill="#464D5C"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                Speedtest
                            </h6>
                            <p>Quer ver como está a velocidade da sua internet?</p>
                            <a href="<?php $p=get_page_by_title('Speedtest'); echo get_permalink($p->ID); ?>" class="btn-assine">Teste</a>
                        </div>
                    </div>
                </div>
            </div>
		</section>

		<section class="home-app" id="appcopel">
			<div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-7">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/images/home-app.png" alt="">
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="home-app--content">
                            <h6>
                                <img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-phone.svg" alt="">
                                App<br>Copel
                            </h6>
                            <p>Toda a facilidade e velocidade da <strong>Copel Fibra</strong> agora em suas mãos.</p>
                            <a href="<?php $p=get_page_by_title('App Copel'); echo get_permalink($p->ID); ?>" class="btn-assine">Saiba mais</a>
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

<?php get_footer(); ?>