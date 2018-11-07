<?php get_header(); ?>
    <section id="home">   
    
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
                            <a href="#usosideias" class="nav-link js-scrollto" data-show=".home-usos--devices, .home-usos--mockups-usos">
                                Usos Ideis
                            </a>
                        </li>
                        <li>
                            <a href="#ei" class="nav-link js-scrollto" data-show=".home-usos--devices, .home-usos--mockups-ei">
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
                <a href="#" class="btn-assine">
                    Assine Já
                </a>
            </div>
            <span class="header-nav--loader" style="width: 0%;"></span>
        </nav>
	
	
        <div class="home-carousel owl-carousel">
            <div class="home-carousel--item">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide.jpg" class="d-none d-md-block" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide-mobile.jpg" class="d-block d-md-none" alt="">
                <div class="container">
                    <h6>
                        <img src="<?php bloginfo('template_url') ?>/_assets/images/icon-game-over.png" alt="Icone Game Over">
                        Game over para Internet meia boca 
                    </h6>
                    <h5>
                        Recomece o jogo com Copel Fibra
                    </h5>
                    <p>
                        A banda larga que não deixa nenhum mega pelo caminho
                    </p>
                </div>
            </div>

            <div class="home-carousel--item">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide-2.jpg" class="d-none d-md-block" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide-2-mobile.jpg" class="d-block d-md-none" alt="">
                <div class="container">
                    <h6>
                        <img src="<?php bloginfo('template_url') ?>/_assets/images/icon-unlike.png" alt="Icone Unlike">
                        Desfaça amizade com Internet que só trava
                    </h6>
                    <h5>
                        Curta suas redes sociais com Copel Fibra
                    </h5>
                    <p>
                        A banda larga que não deixa nenhum mega pelo caminho
                    </p>
                </div>
            </div>

            <div class="home-carousel--item">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide-3.jpg" class="d-none d-md-block" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/placeholder/slide-3-mobile.jpg" class="d-block d-md-none" alt="">
                <div class="container">
                    <h6>
                        <img src="<?php bloginfo('template_url') ?>/_assets/images/icon-spoiler.png" alt="Icone Spoiler">
                        Spoiler Alert!
                    </h6>
                    <h5>
                        Fibra feliz com Copel Fibra
                    </h5>
                    <p>
                        A banda larga que não deixa nenhum mega pelo caminho
                    </p>
                </div>
            </div>
        </div>
        
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
                        <div>
                            <h6>
                                5 Mega <small>Download igual Upload</small>
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
                                R$ <strong>49,90</strong> /mês
                            </p>
                            <a href="#" class="btn-assine">Assine já</a>
                        </div>
                        <div>
                            <h6>
                                15 Mega <small>Download igual Upload</small>
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
                                R$ <strong>99,90</strong> /mês
                            </p>
                            <a href="#" class="btn-assine">Assine já</a>
                        </div>
                        <div>
                            <h6>
                                50 Mega <small>Download igual Upload</small>
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
                                R$ <strong>139,90</strong> /mês
                            </p>
                            <a href="#" class="btn-assine">Assine já</a>
                        </div>
                        <div>
                            <h6>
                                75 Mega <small>Download igual Upload</small>
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
                                R$ <strong>149,90</strong> /mês
                            </p>
                            <a href="#" class="btn-assine">Assine já</a>
                        </div>
                        <div>
                            <h6>
                                100 Mega <small>Download igual Upload</small>
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
                                R$ <strong>--</strong> /mês
                            </p>
                            <a href="#" class="btn-assine">Assine já</a>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <small class="home-planos-list--alert">
                        *Valor de instalação de internet com plano de fidelidade de 12 meses: R$ 99,00. Valor de instalação de internet sem fidelidade: R$ 999,00. Consulte aqui as características técnicas dos planos de serviço.<br>Contrato e termo de fidelidade aplicável ao plano de serviço. Planos sujeitos a disponibilidade. Válidos para CURITIBA (alterar).
                    </small>
                </div>
            </div>

            <div class="container">
                <div class="home-geolocation">
                    <h5>
                        <small>A melhor estabilidade do mercado com velocidade de</small>
                        Download = Upload
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
                        <div class="col-12 col-md-6 home-geolocation--legend">

                            <svg width="90px" height="115px" viewBox="0 0 90 115" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <linearGradient x1="0%" y1="93.8648897%" x2="100%" y2="5.78661152%" id="linearGradient-1">
                                        <stop stop-color="#FFA600" offset="0%"></stop>
                                        <stop stop-color="#FF6D00" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="01_home_banner1_informar-endereco" transform="translate(-154.000000, -743.000000)">
                                        <g id="Group-21" transform="translate(98.000000, 606.000000)">
                                            <g id="Group-9">
                                                <g id="Group-30" transform="translate(58.000000, 139.000000)">
                                                    <g id="Group-39">
                                                        <circle id="Oval-4" stroke="url(#linearGradient-1)" stroke-width="3" cx="43.5" cy="43.5" r="33.5"></circle>
                                                        <circle id="Oval-4" stroke="url(#linearGradient-1)" stroke-width="3" cx="43" cy="43" r="43"></circle>
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
                        <div class="col-12 col-md-4 offset-md-1 home-geolocation--form">
                            <label for="cidade">Onde você está?</label>
                            <div class="input-group mb-3">
                                <input type="text" id="cidade" class="form-control" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-planos--box-empresas">
                <h6>Copel Fibra para empresas</h6>
                <p>Se você tem uma empresa e quer ter a garantia da melhor entrega, com máxima estabilidade para todos os seus dispositivos, os nossos planos empresarias são ideais para você.</p>
                <a href="#" class="btn-more"></a>
            </div>

            <h6 class="home-planos--heading">
                Conheça as vantagens <br>para sua casa
            </h6>
            
        </section>

        <section class="home-fibra" id="fibraoptica" style="background-image: url(<?php bloginfo('template_url'); ?>/_assets/images/home-fibra-bg.jpg);">
            <div class="container">
                <div class="home-fibra--text">
                    <h6 class="home-fibra--heading">
                        <svg width="112px" height="112px" viewBox="0 0 112 112" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient x1="100%" y1="5.78661152%" x2="1.11022302e-14%" y2="93.8648897%" id="linearGradient-1"><stop stop-color="#FFA600" offset="0%"></stop><stop stop-color="#FF6D00" offset="100%"></stop></linearGradient></defs><g id="00_home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="01_home_banner1_informar-endereco" transform="translate(-98.000000, -1630.000000)"><g id="Group-40" transform="translate(0.000000, 1426.000000)"><g id="Group-12" transform="translate(98.000000, 206.000000)"><g id="Group-30" transform="translate(2.000000, 0.000000)"><g id="Group-8-Copy"><circle id="Oval-6" stroke="url(#linearGradient-1)" stroke-width="3" cx="54" cy="54" r="54"></circle><g id="Page-1" transform="translate(49.000000, 62.500000) rotate(-330.000000) translate(-49.000000, -62.500000) translate(32.000000, 29.000000)"><path d="M0,43 L34,43" id="Stroke-1" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5,43 L5,24" id="Stroke-3" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11,43 L11,34" id="Stroke-4" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17,43 L17,7" id="Stroke-5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23,43 L23,15" id="Stroke-6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M29,43 L29,24" id="Stroke-7" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><g id="Group-20"><path d="M11.0159583,27.5351652 C9.18283333,27.5351652 7.69533333,29.041513 7.69533333,30.899687 C7.69533333,32.7593391 9.18283333,34.265687 11.0159583,34.265687 C12.8490833,34.265687 14.335125,32.7593391 14.335125,30.899687 C14.335125,29.041513 12.8490833,27.5351652 11.0159583,27.5351652 M11.0159583,30.491687 C11.237625,30.491687 11.4184583,30.6749913 11.4184583,30.899687 C11.4184583,31.1258609 11.237625,31.3091652 11.0159583,31.3091652 C10.7928333,31.3091652 10.612,31.1258609 10.612,30.899687 C10.612,30.6749913 10.7928333,30.491687 11.0159583,30.491687" id="Fill-8" fill="#FFFFFF"></path><path d="M5.08433333,18.5783826 C3.25120833,18.5783826 1.76516667,20.0847304 1.76516667,21.9429043 C1.76516667,23.8025565 3.25120833,25.3089043 5.08433333,25.3089043 C6.91745833,25.3089043 8.4035,23.8025565 8.4035,21.9429043 C8.4035,20.0847304 6.91745833,18.5783826 5.08433333,18.5783826 M5.08433333,21.5349043 C5.306,21.5349043 5.48683333,21.7182087 5.48683333,21.9429043 C5.48683333,22.1690783 5.306,22.3523826 5.08433333,22.3523826 C4.86266667,22.3523826 4.68183333,22.1690783 4.68183333,21.9429043 C4.68183333,21.7182087 4.86266667,21.5349043 5.08433333,21.5349043" id="Fill-10" fill="#FFFFFF"></path><path d="M16.9468542,0.170043478 C15.1137292,0.170043478 13.6276875,1.6763913 13.6276875,3.53456522 C13.6276875,5.39421739 15.1137292,6.90056522 16.9468542,6.90056522 C18.7799792,6.90056522 20.2660208,5.39421739 20.2660208,3.53456522 C20.2660208,1.6763913 18.7799792,0.170043478 16.9468542,0.170043478 M16.9468542,3.12656522 C17.1699792,3.12656522 17.3493542,3.30986957 17.3493542,3.53456522 C17.3493542,3.76073913 17.1699792,3.94404348 16.9468542,3.94404348 C16.7251875,3.94404348 16.5443542,3.76073913 16.5443542,3.53456522 C16.5443542,3.30986957 16.7251875,3.12656522 16.9468542,3.12656522" id="Fill-12" fill="#FFFFFF"></path><path d="M22.8784792,9.50378261 C21.0453542,9.50378261 19.5593125,11.0116087 19.5593125,12.8697826 C19.5593125,14.7279565 21.0453542,16.2343043 22.8784792,16.2343043 C24.7116042,16.2343043 26.1976458,14.7279565 26.1976458,12.8697826 C26.1976458,11.0116087 24.7116042,9.50378261 22.8784792,9.50378261 M22.8784792,12.4603043 C23.1001458,12.4603043 23.2809792,12.6436087 23.2809792,12.8697826 C23.2809792,13.0944783 23.1001458,13.2777826 22.8784792,13.2777826 C22.6568125,13.2777826 22.4759792,13.0944783 22.4759792,12.8697826 C22.4759792,12.6436087 22.6568125,12.4603043 22.8784792,12.4603043" id="Fill-14" fill="#FFFFFF"></path><path d="M28.8101042,17.1001217 C26.9769792,17.1001217 25.4909375,18.6064696 25.4909375,20.4646435 C25.4909375,22.3242957 26.9769792,23.8306435 28.8101042,23.8306435 C30.6432292,23.8306435 32.1292708,22.3242957 32.1292708,20.4646435 C32.1292708,18.6064696 30.6432292,17.1001217 28.8101042,17.1001217 M28.8101042,20.0566435 C29.0317708,20.0566435 29.2126042,20.2399478 29.2126042,20.4646435 C29.2126042,20.6908174 29.0317708,20.8741217 28.8101042,20.8741217 C28.5884375,20.8741217 28.4076042,20.6908174 28.4076042,20.4646435 C28.4076042,20.2399478 28.5884375,20.0566435 28.8101042,20.0566435" id="Fill-16" fill="#FFFFFF"></path><polyline id="Stroke-18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="33.8942917 67 33.8942917 47.4293043 -0.000291666667 47.4293043 -0.000291666667 67"></polyline></g></g></g></g></g></g></g></g></svg>
                        Copel<br>Fibra
                    </h6>
                    <p>Copel Fibra é a internet fibra óptica de ponta a ponta. Isso quer dizer melhor qualidade de entrega, estabilidade de conexão, download e upload na mesma velocidade.</p>
                    <span class="home-fibra--highlight">Upload = Download</span>
                    <a href="#" class="btn-more">Saiba mais</a>
                </div>
            </div>
		</section>

        <div class="home-usos">
            <div class="sticky-top">
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
                <div style="height: 600px; background: #f4f4f4; display: block;"></div>
            </section>
    		<section class="home-ei" id="ei">
    			<div style="height: 600px; background: #f2f2f2; display: block;"></div>
    		</section>
    		<section class="home-cn-ja" id="cnja">
    			<div style="height: 600px; background: #f4f4f4; display: block;"></div>
    		</section>
        </div>

		<section class="home-testes" id="testes">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>
		<section class="home-app-copel" id="appcopel">
			<div style="height: 500px; background: #f4f4f4; display: block;"></div>
		</section>
		<section class="home-blog" id="blog">
			<div style="height: 500px; background: #f2f2f2; display: block;"></div>
		</section>

	</section>
<?php get_footer(); ?>