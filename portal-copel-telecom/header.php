<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/apple-touch-icon-180x180.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-194x194.png" sizes="194x194" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/android-chrome-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="manifest" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/manifest.json" />
    <link rel="mask-icon" href="<?php bloginfo("template_url"); ?>/_assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="<?php bloginfo("template_url"); ?>/_assets/images/favicons/mstile-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQTWM4F');</script>
    <!-- End Google Tag Manager -->


    <title><?php echo wp_title(); ?></title>
    
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_url');?>/_assets/css/app.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQTWM4F"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div id="loader"></div>

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top--acessibilidade">
                    <button class="js-contraste">
                        <svg width="10px" height="10px" viewBox="0 0 10 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="_header-hover" transform="translate(-374.000000, -22.000000)" fill="#FFFFFF">
                                    <g id="Group-7" transform="translate(98.000000, 12.000000)">
                                        <g id="Group-4" transform="translate(276.000000, 3.000000)">
                                            <g id="Group">
                                                <path d="M9.32965749,9.49016122 C8.8825627,8.72423437 8.27614795,8.11792556 7.5099138,7.67073536 C6.7439793,7.22364504 5.90742461,7 5.00024972,7 C4.09307483,7 3.25652013,7.22364504 2.49058564,7.67073536 C1.7242516,8.11752602 1.11783684,8.72423437 0.670742061,9.49016122 C0.223547391,10.2564876 0,11.0930339 0,12.0001998 C0,12.9069661 0.223547391,13.7435124 0.670742061,14.5098388 C1.11783684,15.2757656 1.7242516,15.882474 2.49018609,16.3292646 C3.25652013,16.776355 4.09307483,17 5.00024972,17 C5.90742461,17 6.7439793,16.776355 7.5099138,16.3292646 C8.27584829,15.882474 8.8825627,15.2757656 9.32965749,14.5098388 C9.77645261,13.7435124 10,12.9069661 10,12.0001998 C10,11.0930339 9.77645261,10.2560881 9.32965749,9.49016122 Z M5,15 C4.27416307,15 3.60518374,14.843839 2.99272358,14.5303325 C2.37969935,14.2172209 1.89449192,13.7927631 1.53665003,13.2563669 C1.17892095,12.7203655 1,12.1351073 1,11.5 C1,10.8652875 1.17892095,10.2800293 1.53665003,9.74363313 C1.89449192,9.20763178 2.37969935,8.78277914 2.99272358,8.46966748 C3.60518374,8.15655583 4.27416307,8 5,8 L5,15 Z" id="adjust-contrast"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>

                    <button class="js-font-more">
                        A+
                    </button>
                    
                    <button class="js-font-default">
                        A-
                    </button>

                    <a href="<?php $p=get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>">
                        <svg width="17px" height="23px" viewBox="0 0 17 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <polygon id="path-1" points="0.0215292819 0.0350019048 13.8385332 0.0350019048 13.8385332 15.085696 0.0215292819 15.085696"></polygon>
                            </defs>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="_header-hover" transform="translate(-458.000000, -15.000000)">
                                    <g id="Group-7" transform="translate(98.000000, 12.000000)">
                                        <g id="Group-4" transform="translate(276.000000, 3.000000)">
                                            <g id="Group">
                                                <g id="Group-10" transform="translate(84.000000, 0.000000)">
                                                    <g id="Group-11">
                                                        <g id="Page-1">
                                                            <g id="Group-3" transform="translate(3.001093, 7.770514)">
                                                                <mask id="mask-2" fill="white">
                                                                    <use xlink:href="#path-1"></use>
                                                                </mask>
                                                                <g id="Clip-2"></g>
                                                                <path d="M12.8499189,2.59515429 L9.34469114,0.50575746 C9.19581724,0.417020952 9.06381833,0.339459048 8.94185587,0.274036825 L8.93900237,0.272462222 C8.90008655,0.251636825 8.8621547,0.23208127 8.82510842,0.213795556 C8.8227961,0.212627302 8.82043458,0.211459048 8.81807307,0.210341587 C8.78196155,0.192614603 8.74658801,0.17615746 8.71190324,0.161020952 C8.70900055,0.159751111 8.70609785,0.158532063 8.70324435,0.157313016 C8.66890397,0.14248127 8.63500638,0.128868571 8.60150237,0.116627302 C8.59879647,0.115611429 8.59599216,0.114697143 8.59323706,0.11368127 C8.55963466,0.101592381 8.52627824,0.090671746 8.49316782,0.0813257143 C8.4910523,0.0807161905 8.48888757,0.080208254 8.48677205,0.0796495238 C8.45297285,0.0702526984 8.41927205,0.0620749206 8.38557125,0.055624127 C8.38478407,0.055471746 8.3840953,0.0554209524 8.38335733,0.0552685714 C8.34931214,0.0488177778 8.31526695,0.0438907937 8.28092657,0.0405384127 C8.27979501,0.0404368254 8.27871265,0.0402336508 8.27763028,0.0401320635 C8.24447066,0.0369828571 8.21096665,0.0355098413 8.17706906,0.0353066667 C8.17475674,0.0353066667 8.17254282,0.0350019048 8.1702305,0.0350019048 C8.16890215,0.0350019048 8.1674262,0.0351542857 8.16609785,0.0351542857 C8.14179391,0.035255873 8.11719479,0.0361193651 8.09230047,0.0377447619 C8.09028335,0.0378971429 8.08826622,0.0381003175 8.08624909,0.0382526984 C7.85157343,0.0548622222 7.58846119,0.140601905 7.23757926,0.308678095 C6.98681578,0.428906667 6.77083546,0.559954286 6.02744989,0.937249524 C5.97490616,0.963966984 5.91783619,0.992868571 5.85742074,1.02339556 C5.83788903,1.03330032 5.81781614,1.04345905 5.79749727,1.05366857 C5.79341381,1.05575111 5.78942875,1.05778286 5.7853453,1.0598146 C5.76458364,1.0702781 5.74357598,1.08089397 5.72212555,1.09176381 C5.72128918,1.09217016 5.72045281,1.09257651 5.71961644,1.09303365 C4.78189778,1.56617651 3.15102496,2.37994159 2.09163903,2.90789079 C2.05503553,2.92612571 2.01912081,2.94400508 1.98394406,2.96152889 C1.8563238,3.02512254 1.73834639,3.08389079 1.63252095,3.1366146 C1.57668094,3.16439873 1.52389122,3.19070984 1.47523415,3.21493841 C1.42913539,3.23789714 1.38613612,3.25928127 1.3471219,3.27873524 C1.32247358,3.29097651 1.29900601,3.30270984 1.27730958,3.3134781 C1.27465288,3.31479873 1.27184858,3.31622095 1.26919187,3.31754159 C1.2459703,3.32907175 1.22481505,3.33958603 1.20538174,3.34928762 C1.19987154,3.35203048 1.19421374,3.35487492 1.18894953,3.3574654 C1.17773233,3.3630527 1.1672531,3.36823365 1.15756104,3.37305905 C1.15490434,3.37437968 1.15259202,3.37554794 1.15003371,3.37681778 C1.13153517,3.38601143 1.11613612,3.39368127 1.10403335,3.39972571 C1.09212737,3.40566857 1.08346848,3.40998603 1.07810587,3.4126273 C1.07397321,3.41465905 1.07121811,3.41608127 1.07121811,3.41608127 C1.05404792,3.4238019 1.03717292,3.43203048 1.02049472,3.4406146 C0.953831086,3.47510349 0.891447704,3.51644952 0.833885751,3.56338286 C0.819519862,3.57511619 0.805399964,3.58720508 0.791624453,3.59959873 C0.777848943,3.61204317 0.764417821,3.62479238 0.751281888,3.63779556 C0.738145955,3.65090032 0.72535441,3.66420825 0.712907252,3.67787175 C0.675467383,3.71886222 0.641127004,3.76244317 0.61003371,3.80815746 C0.595569424,3.82949079 0.582089103,3.85143365 0.569002369,3.87363048 C0.542090926,3.91949714 0.518377369,3.96704 0.49810769,4.01590349 C0.486152515,4.04470349 0.475181305,4.07385905 0.465686042,4.10347175 C0.46012664,4.12079238 0.455010022,4.1382654 0.45028699,4.15584 C0.440890124,4.19093841 0.433313593,4.22644317 0.427557398,4.2622019 C0.418898506,4.31584 0.414372267,4.36998603 0.414372267,4.42418286 C0.414372267,4.44378921 0.415061042,4.46339556 0.416192602,4.4830019 C0.418258929,4.51749079 0.422096392,4.55197968 0.427901786,4.5862146 C0.431591655,4.60790349 0.436363885,4.62954159 0.441578899,4.6510273 C0.453681669,4.70044952 0.469671101,4.74926222 0.490383564,4.79700825 C0.4978125,4.81412571 0.505782617,4.83114159 0.514343112,4.84800508 C0.522903608,4.86481778 0.532054483,4.88152889 0.541795736,4.89803683 C0.542632106,4.89940825 0.543468477,4.9006273 0.544304847,4.90199873 C0.553849308,4.91804952 0.563639759,4.93364317 0.573774599,4.94847492 C0.577513666,4.95401143 0.581498724,4.95904 0.585336188,4.96447492 C0.592666727,4.97473524 0.599948069,4.98514794 0.607524599,4.99484952 C0.612100036,5.00064 0.616872267,5.00592254 0.621496902,5.01150984 C0.628679847,5.02019556 0.635715197,5.02903365 0.643094934,5.03721143 C0.648063958,5.04274794 0.653278972,5.04777651 0.658346392,5.05310984 C0.665676931,5.06072889 0.672810678,5.06850032 0.680288812,5.07566222 C0.685553025,5.08074159 0.690964832,5.08526222 0.696327442,5.09013841 C0.703854774,5.09694476 0.71128371,5.10400508 0.719057034,5.11040508 C0.724567238,5.1150273 0.730274235,5.11914159 0.735882835,5.12350984 C0.743656159,5.12960508 0.751331086,5.1358019 0.759252004,5.14149079 C0.765057398,5.14565587 0.771059585,5.1494146 0.777012573,5.15337651 C0.784933491,5.15865905 0.792756013,5.16409397 0.800775328,5.16902095 C0.806925109,5.17277968 0.813173287,5.17608127 0.819372267,5.17963683 C0.827391582,5.18420825 0.835460095,5.18893206 0.843627004,5.19319873 C0.849973579,5.19650032 0.856467748,5.19939556 0.862912719,5.20249397 C0.871128827,5.20640508 0.879295736,5.21046857 0.887610241,5.21407492 C0.894202806,5.21691937 0.900893768,5.21945905 0.90758473,5.22204952 C0.915948433,5.2254019 0.924262937,5.22880508 0.932675838,5.2318019 C0.939514395,5.23424 0.946500547,5.23637333 0.953339103,5.23855746 C0.961801203,5.24130032 0.970214103,5.24409397 0.978725401,5.24653206 C0.985809949,5.24856381 0.992943695,5.25024 1.00007744,5.25206857 C1.00853954,5.2542019 1.01705084,5.25643683 1.02561133,5.25836698 C1.03299107,5.25994159 1.04042001,5.26126222 1.04775055,5.26268444 C1.05626184,5.26430984 1.06477314,5.26598603 1.07333364,5.26735746 C1.08091017,5.26857651 1.08858509,5.26954159 1.09626002,5.27055746 C1.10477132,5.27167492 1.11313502,5.27284317 1.12169552,5.27375746 C1.12951804,5.27457016 1.13738976,5.27512889 1.14526148,5.27573841 C1.15377278,5.27644952 1.16228407,5.27716063 1.17074617,5.27761778 C1.17866709,5.27802413 1.1867356,5.2782273 1.19470572,5.27848127 C1.20326622,5.27873524 1.21177751,5.27904 1.22038721,5.27909079 C1.22250273,5.27909079 1.22466746,5.27924317 1.22683218,5.27924317 C1.2290461,5.27924317 1.23130922,5.27893841 1.23357234,5.27893841 C1.26264851,5.27873524 1.29187227,5.27756698 1.32129282,5.27523048 C1.3245891,5.27492571 1.32798378,5.27457016 1.33132926,5.2742654 C1.36099581,5.27167492 1.39076075,5.26817016 1.42057489,5.26354794 C1.42367438,5.26309079 1.42677387,5.26248127 1.42987336,5.26197333 C1.45993349,5.25719873 1.49009202,5.25156063 1.52010295,5.24495746 C1.52290725,5.24439873 1.52561316,5.24368762 1.52836826,5.2430781 C1.55872358,5.23627175 1.5889805,5.22875429 1.61908983,5.22047492 C1.62154974,5.21976381 1.62405886,5.2190019 1.62656797,5.21829079 C1.65697249,5.20975746 1.68718021,5.2006146 1.71719114,5.19076063 C1.71906068,5.19015111 1.72093021,5.18949079 1.72279974,5.18888127 C1.75325346,5.17877333 1.78346119,5.16815746 1.81327533,5.15698286 C1.81465288,5.15647492 1.81603043,5.15596698 1.81740798,5.15540825 C1.84766491,5.14403048 1.87762664,5.13214476 1.906998,5.11990349 C1.90758837,5.11970032 1.90812956,5.11944635 1.90867074,5.11919238 C1.93878007,5.10664635 1.96834821,5.09374476 1.99727679,5.08064 C2.23903699,4.97082413 2.53043823,4.83017651 2.8208555,4.68988444 C2.87074253,4.66580825 2.92058036,4.64173206 2.970123,4.61780825 C3.15796192,4.52719238 3.34176658,4.4390146 3.50746629,4.36190984 C3.57378553,4.3310273 3.63715288,4.30197333 3.69678116,4.27525587 C3.69712555,4.27510349 3.69737154,4.2750019 3.69766673,4.27484952 C3.72418458,4.2630146 3.74947249,4.25250032 3.77367802,4.24330667 C3.78199253,4.24015746 3.78937227,4.23802413 3.79744078,4.23517968 C3.81298743,4.22969397 3.82873087,4.22405587 3.84319515,4.21978921 C3.85185405,4.21724952 3.85962737,4.21577651 3.86794187,4.21369397 C3.88048743,4.21054476 3.89322977,4.20719238 3.90488976,4.20510984 C3.91310587,4.20363683 3.92033801,4.20333206 3.92801294,4.20241778 C3.93844297,4.20124952 3.94906979,4.1998273 3.95856505,4.19962413 C3.96751913,4.19947175 3.97548925,4.20048762 3.98365616,4.20130032 C3.98980594,4.20185905 3.99634931,4.20196063 4.00200711,4.20312889 C4.01002642,4.20470349 4.01686498,4.20770032 4.02390033,4.21039238 C4.02852496,4.21222095 4.03373998,4.21338921 4.03797103,4.21567492 C4.04500638,4.21948444 4.05076257,4.22486857 4.05666636,4.23015111 C4.05956906,4.23279238 4.06316053,4.23462095 4.06581724,4.23761778 C4.07363976,4.24650667 4.08023233,4.25691937 4.08534894,4.26910984 C4.08534894,4.26916063 4.08539814,4.26921143 4.08544734,4.26926222 C4.09164632,4.28429714 4.09361425,4.3038019 4.09184311,4.32676063 C4.09174472,4.32818286 4.09140033,4.32990984 4.09125273,4.33138286 C4.07629647,4.49356698 3.89106505,4.81874794 3.79950711,4.98245587 C3.71921556,5.12635429 3.6619488,5.22910984 3.54116709,5.44564317 C3.52778517,5.46966857 3.51351767,5.49516698 3.49846301,5.52218921 C3.48419552,5.54778921 3.46909165,5.57491302 3.45310222,5.60356063 C3.44837919,5.61199238 3.44375456,5.62037333 3.43883473,5.62910984 C3.43450528,5.63688127 3.43017584,5.64470349 3.4256988,5.6526781 C3.41561316,5.67076063 3.40518313,5.6894019 3.39445791,5.70870349 C3.38225674,5.73064635 3.36961279,5.75330032 3.35642766,5.77691937 C3.34437409,5.79855746 3.33192693,5.82090667 3.31898779,5.84406857 C3.30619625,5.8670781 3.29291272,5.89079873 3.2792356,5.91538286 C3.24135295,5.98334476 3.19987883,6.05765587 3.15461644,6.13892571 C3.13843021,6.1678781 3.1219488,6.19754159 3.10472941,6.22837333 C3.09336461,6.24869079 3.08175383,6.26951619 3.06994625,6.29069714 C3.05218568,6.32254476 3.03378553,6.35566222 3.0148934,6.38944 C2.998166,6.41945905 2.98094661,6.45024 2.96338284,6.48183365 C2.92436862,6.5518273 2.88314049,6.62578286 2.83955084,6.70390349 C2.8349754,6.71218286 2.83030157,6.72046222 2.82567693,6.72879238 C2.78179209,6.80742095 2.73559493,6.89036698 2.68688867,6.97773206 C2.64324982,7.05595429 2.59759384,7.13783365 2.54982234,7.22357333 C2.51243167,7.29057016 2.47376184,7.35995429 2.43371447,7.43177651 C2.43297649,7.43314794 2.43218932,7.43446857 2.43145135,7.43578921 C2.28400419,7.70017016 2.11840288,7.99721143 1.93135113,8.33270349 C1.47548014,9.15032889 0.893956815,10.1931733 0.146684585,11.5334654 C-0.110966655,11.9943162 0.0419415087,12.5836241 0.488268039,12.8496305 C0.934545372,13.1156368 1.50524508,12.9577194 1.76294552,12.4969194 L4.12623269,8.27088762 L4.15388211,8.22136381 L4.18069515,8.1734654 L4.18074435,8.1734146 C4.18718932,8.16183365 4.19442147,8.1510146 4.20204719,8.1406019 C4.20431031,8.13755429 4.20667183,8.13460825 4.20898415,8.13166222 C4.21488794,8.12414476 4.22103772,8.11693206 4.22753189,8.11012571 C4.2299918,8.10748444 4.23245171,8.10479238 4.23501002,8.1022019 C4.24386571,8.0934654 4.25306578,8.08508444 4.26275784,8.07756698 C4.26339741,8.07705905 4.26398779,8.07670349 4.26457817,8.07629714 C4.27382744,8.06923683 4.2834211,8.06283683 4.29326075,8.05694476 C4.29640944,8.0550654 4.29955813,8.05333841 4.30275601,8.05150984 C4.31067693,8.04714159 4.31879464,8.0430781 4.32705995,8.03942095 C4.33015944,8.03804952 4.33325893,8.03657651 4.33640762,8.03530667 C4.34757562,8.03078603 4.35889122,8.02677333 4.37045281,8.02362413 C4.37168276,8.02326857 4.37291272,8.02311619 4.37414267,8.02276063 C4.3846219,8.02001778 4.39519953,8.01793524 4.40587555,8.01636063 C4.40946702,8.0158019 4.41310769,8.01544635 4.41664996,8.01504 C4.42565324,8.01402413 4.43465652,8.0134146 4.4437582,8.01321143 C4.44710368,8.01316063 4.45044916,8.01295746 4.45389304,8.01300825 C4.50102496,8.01356698 4.54840288,8.02560508 4.5927797,8.04927492 C4.5928289,8.04922413 4.5929273,8.04912254 4.59297649,8.04912254 C4.59720754,8.05135746 4.60153699,8.05333841 4.60571884,8.0558273 C4.74918094,8.14136381 4.80152788,8.32676063 4.72827168,8.47761778 C4.69570244,8.5358781 1.89460004,13.5467733 1.89460004,13.5467733 C1.6368996,14.0076241 1.78980776,14.5968813 2.23623269,14.8629384 C2.68226403,15.1287924 3.25261935,14.9711797 3.51036899,14.51104 L6.33602132,9.45818921 C6.42192147,9.30453841 6.6177305,9.25516698 6.77334457,9.34791619 C6.92895864,9.44071619 6.98533983,9.64038603 6.89939049,9.79403683 L6.89860332,9.79535746 C6.90003007,9.79759238 4.68586279,13.7522844 4.68586279,13.7522844 C4.44813684,14.1774273 4.58923743,14.7211225 5.00097759,14.9665067 C5.41242256,15.2117384 5.93840106,15.0664178 6.17642219,14.6419352 L8.39044187,10.6828241 C8.47639122,10.5291733 8.67982598,10.4843225 8.84478772,10.5826083 C9.00984785,10.6810463 9.07385477,10.8852876 8.98795463,11.0389384 L7.42669734,13.8308114 C7.22892037,14.1844876 7.3463566,14.6368559 7.68902241,14.8410971 C8.03168823,15.0453892 8.46970026,14.9239924 8.86436862,14.2182146 L12.8918358,7.01623365 C13.4433974,6.02992254 14.7355895,3.71916698 12.8499189,2.59515429" id="Fill-1" fill="#FFFFFF" mask="url(#mask-2)"></path>
                                                            </g>
                                                            <path d="M6.17961516,12.8484571 C6.13312281,12.8709079 6.08648287,12.8934095 6.04018732,12.9157587 C5.7480973,13.0568635 5.44616764,13.2027429 5.19648652,13.3161143 C4.84343987,13.476419 4.51755066,13.5576889 4.22792055,13.5576889 C3.75281305,13.5576889 3.3603094,13.3357206 3.12258345,12.9325714 C2.91211334,12.5754413 2.86616217,12.150146 2.99319206,11.7350603 C3.12912682,11.2909206 3.45506523,10.9141841 3.86606742,10.7253333 C4.05184001,10.6328889 7.5847664,8.87481905 8.81147558,8.25193651 C8.82726822,8.2439619 8.84247048,8.23619048 8.85786953,8.22836825 C8.85678717,7.34928254 8.85462245,5.61909841 8.84989942,1.8048 C8.84989942,1.27268571 8.43205867,0.841244444 7.916707,0.841244444 C7.40145372,0.841244444 6.98366217,1.27268571 6.98366217,1.8048 L6.98366217,6.79700317 C6.98366217,6.9744254 6.84433273,7.11827302 6.67253243,7.11827302 C6.50683273,7.11827302 6.37168513,6.9847873 6.36214067,6.81625397 C6.36214067,6.74900317 6.36115671,0.963555556 6.36115671,0.963555556 C6.36115671,0.431390476 5.94331596,5.68434189e-14 5.42796429,5.68434189e-14 C4.9129078,5.68434189e-14 4.49531305,0.430933333 4.49491946,0.962539683 L4.49491946,6.79700317 C4.49491946,6.9744254 4.34924344,7.11827302 4.16957143,7.11827302 C3.98980102,7.11827302 3.84432179,6.9744254 3.84432179,6.79700317 L3.84432179,6.79547937 C3.84200948,6.79431111 3.84432179,2.2263873 3.84432179,2.2263873 C3.84432179,1.73551746 3.4588043,1.33749841 2.98335241,1.33749841 C2.50834329,1.33749841 2.12321939,1.73495873 2.12257981,2.22537143 L2.12257981,6.79700317 C2.12257981,6.9744254 1.9680973,7.11827302 1.77765087,7.11827302 C1.58700765,7.11827302 1.43272194,6.9744254 1.43272194,6.79700317 L1.43272194,3.57328254 C1.43272194,3.16490159 1.11190015,2.83372698 0.716198615,2.83372698 C0.320497085,2.83372698 1.96793003e-05,3.16490159 1.96793003e-05,3.97993651 L1.96793003e-05,12.2960762 C1.96793003e-05,13.4349206 1.96793003e-05,16.1032127 2.17738666,16.1032127 L4.36479009,16.1032127 C5.60173251,13.8848508 5.98257617,13.201727 6.17961516,12.8484571" id="Fill-4" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Acessibilidade
                    </a>
                </div>
                
                <div class="float-right">
                    <a href="<?php $p=get_page_by_title('Sobre Nós'); echo get_permalink($p->ID); ?>"  class="header-top--btn">Sobre nós</a>
                    <a href="<?php bloginfo('url'); ?>/atendimento-e-suporte"  class="header-top--btn">Atendimento e suporte</a>
                    <a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>"  class="header-top--btn">Blog</a>

                    <!-- <a href="#" data-toggle="modal" data-target="#cidade-modal"class="header-top--btn btn-cidade"><i class="fas fa-map-marker-alt"></i><span class="js-cidade-estado">CIDADE/ESTADO</span></a> -->
                    <a href="https://www.copeltelecom.com/autoatendimento/pub/login.jsf" target="_blank" class="header-top--btn active">Minha Copel</a>
                </div>
            </div>        
        </div>

        <div class="header-nav">
            <div class="container">
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo.svg" alt="Logo Copel Telecom">
                </a>
                <nav>

                    <?php
                        $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        $pages = get_posts(array(
                            'post_type' => 'page',
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'posts_per_page' => -1
                        ));
                        global $post;
                    ?>
                    <?php $area = ''; ?>

                    <?php $p=get_page_by_title('Para Você'); ?>
                    <?php $q=get_page_by_title('Para Empresas'); ?>

                    <?php if($p->ID == $post->post_parent || $p->ID == $post->ID){
                         $children = get_page_children($p->ID, $pages); 
                         $pageId = $p->ID;
                         $area = 'voce';
                         ?>
                         <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>" class="btn active">Para você</a>
                         <a href="<?php $p=get_page_by_title('Para Empresas'); echo get_permalink($p->ID); ?>" class="btn">Para empresas</a>
                     <?php }else if($q->ID == $post->post_parent || $q->ID == $post->ID){
                        $children = get_page_children($q->ID, $pages); 
                        $pageId = $q->ID;
                        $area = 'empresa';
                        ?>
                        <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>" class="btn">Para você</a>
                        <a href="<?php $p=get_page_by_title('Para Empresas'); echo get_permalink($p->ID); ?>" class="btn active">Para empresas</a>
                     <?php } else { 
                        $area = '';
                        ?>
                        <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>" class="btn">Para você</a>
                        <a href="<?php $p=get_page_by_title('Para Empresas'); echo get_permalink($p->ID); ?>" class="btn">Para empresas</a>
                    <?php } ?>

                    <?php if(isset($pageId) && !empty($pageId)) {?>


                        <ul class="subnav" data-target="#header-navbar">
                            <?php foreach ($children as $child): ?>
                                <?php if ($child->post_parent == $pageId): ?>
                                    <li>

                                        <?php $granchildren = get_page_children($child->ID, $pages); ?>

                                        <?php if(count($granchildren) > 0){ ?>
                                            <a href="#">
                                                <div class="hld">
                                                    <strong><?php echo $child->post_title; ?> <i class="fas fa-caret-down"></i></strong>
                                                </div>
                                            </a>
                                            <div class="header-subnav">
                                                <?php foreach ($granchildren as $grandchild): ?>
                                                    
                                                    <div class="parcerias-item">
                                                        <a href="<?php echo get_permalink($grandchild->ID); ?>">
                                                            <strong><?php echo $grandchild->post_title; ?></strong>

                                                            <figure>
                                                                <img src="<?php echo get_the_post_thumbnail_url($grandchild->ID) ?>" alt="">
                                                            </figure>
                                                            <?php echo $grandchild->post_content; ?>
                                                            <span class="btn-more"></span>
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php }else{ ?>
                                            <a href="<?php echo get_permalink($child->ID); ?>">
                                                <div class="hld <?php if(get_permalink($child->ID) == $currentURL){ echo 'active'; } ?>">
                                                    <strong><?php echo $child->post_title; ?></strong>
                                                </div>
                                            </a>
                                        <?php } ?>

                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php if ($area == 'voce') { ?>
                                <li>
                                    <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>#Cobertura">
                                        <div class="hld">
                                            <strong>Cobertura</strong>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>#PorQueACopel">
                                        <div class="hld">
                                            <strong>Por que a Copel</strong>
                                        </div>
                                    </a>
                                </li>

                                <a href="<?php echo LINK_WVT; ?>" target="_blank" class="btn-assine" style="margin-left: 15px">
                                    Assine Já
                                </a>

                            <?php } ?>

                        </ul>
                    <?php } ?>

                </nav>
                
                
                
            </div>
        </div>

        <div class="header-mobile">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/_assets/images/logo-white.svg" alt="Logo Copel Telecom">
            </a>

            <!-- js-disponibilidade-modal -->
            <!--
            <a href="#" class="header-mobile--assine js-disponibilidade-modal">
                Assine Já
            </a>
            -->
        </div>

        <div class="header-mobile-nav">
            <div class="header-mobile-button"><div></div></div>
            <div class="btn-home <?php if ($area != '') { echo 'd-block'; } else { echo 'd-none'; } ?>"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/_assets/images/ico_home.svg"></a></div>
            <div class="overflow">
                
                <a href="<?php $p=get_page_by_title('Para você'); echo get_permalink($p->ID); ?>" class="header-mobile-nav--btn <?php if ($area == 'voce') { echo 'active'; } ?>">Para você</a>
                <a href="<?php $p=get_page_by_title('Para empresas'); echo get_permalink($p->ID); ?>" class="header-mobile-nav--btn <?php if ($area == 'empresa') { echo 'active'; } ?>">Para empresas</a>
                <nav class="nav-geral <?php if ($area == '') { echo 'd-block'; } else { echo 'd-none'; } ?>">
                    <ul>

                        <li>
                            <a href="<?php $p=get_page_by_title('Sobre Nós'); echo get_permalink($p->ID); ?>">
                                <strong>Sobre nós</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">Blog Conecta</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/atendimento-e-suporte/">Atendimento e suporte</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/atendimento-e-suporte/#as-documentos">Documentos</a>
                        </li>
                        <!-- <li>
                            <a href="#">Mapa do site</a>
                        </li> -->
                        <li class="header-mobile-nav--minhacopel">
                            <a href="https://www.copeltelecom.com/autoatendimento/pub/login.jsf" target="_blank">
                                <strong>Minha Copel</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="nav-empresas <?php if ($area == 'empresa') { echo 'd-block'; } else { echo 'd-none'; } ?>">
                    <ul>
                        <li>
                            <a href="<?php $p=get_page_by_title('Internet dedicada'); echo get_permalink($p->ID); ?>">
                                <strong>Internet dedicada</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Redes'); echo get_permalink($p->ID); ?>">
                                <strong>Redes</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Data center'); echo get_permalink($p->ID); ?>">
                                <strong>Data center</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Banda larga corporativa'); echo get_permalink($p->ID); ?>">
                                <strong>Banda larga corporativa</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">
                                <strong>Blog conecta</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/speedtest">
                                <strong>Speedtest</strong>
                            </a>
                        </li>
                        <li class="header-mobile-nav--minhacopel">
                            <a href="https://www.copeltelecom.com/autoatendimento/pub/login.jsf" target="_blank">
                                <strong>Minha Copel</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="nav-voce <?php if ($area == 'voce') { echo 'd-block'; } else { echo 'd-none'; } ?>">
                    <ul>
                        <li>
                            <a href="<?php $p=get_page_by_title('Planos'); echo get_permalink($p->ID); ?>">
                                <strong>Planos e preços</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Para Você'); echo get_permalink($p->ID); ?>#Cobertura">
                                <strong>Cobertura</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-subnav-mobile">
                                <strong>Parcerias</strong><i class="fas fa-caret-down"></i>
                            </a>
                            <ul class="subnav-mobile">
                                <li>
                                    <a href="<?php $p=get_page_by_title('Esporte Interativo'); echo get_permalink($p->ID); ?>">Esporte Interativo</a>
                                </li>
                                <li>
                                    <a href="<?php $p=get_page_by_title('Cartoon Network'); echo get_permalink($p->ID); ?>">CN Já!</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('App Copel'); echo get_permalink($p->ID); ?>">App Copel</a>
                        </li>
                        <li>
                            <a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">
                                <strong>Blog conecta</strong>
                            </a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/speedtest">
                                <strong>Speedtest</strong>
                            </a>
                        </li>

                        <li class="header-mobile-nav--minhacopel">
                            <a href="https://www.copeltelecom.com/autoatendimento/pub/login.jsf" target="_blank">
                                <strong>Minha Copel</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <div class="header-mobile-nav--acessibilidade">
                    
                    <!-- <a href="<?php $p=get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>"><i class="fas fa-map-marker-alt"></i><span class="js-cidade-estado">CIDADE/ESTADO</span></a> -->

                    <a href="<?php $p=get_page_by_title('Acessibilidade'); echo get_permalink($p->ID); ?>">
                        <svg width="17px" height="23px" viewBox="0 0 17 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <polygon id="path-1" points="0.0215292819 0.0350019048 13.8385332 0.0350019048 13.8385332 15.085696 0.0215292819 15.085696"></polygon>
                            </defs>
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="_header-hover" transform="translate(-458.000000, -15.000000)">
                                    <g id="Group-7" transform="translate(98.000000, 12.000000)">
                                        <g id="Group-4" transform="translate(276.000000, 3.000000)">
                                            <g id="Group">
                                                <g id="Group-10" transform="translate(84.000000, 0.000000)">
                                                    <g id="Group-11">
                                                        <g id="Page-1">
                                                            <g id="Group-3" transform="translate(3.001093, 7.770514)">
                                                                <mask id="mask-2" fill="white">
                                                                    <use xlink:href="#path-1"></use>
                                                                </mask>
                                                                <g id="Clip-2"></g>
                                                                <path d="M12.8499189,2.59515429 L9.34469114,0.50575746 C9.19581724,0.417020952 9.06381833,0.339459048 8.94185587,0.274036825 L8.93900237,0.272462222 C8.90008655,0.251636825 8.8621547,0.23208127 8.82510842,0.213795556 C8.8227961,0.212627302 8.82043458,0.211459048 8.81807307,0.210341587 C8.78196155,0.192614603 8.74658801,0.17615746 8.71190324,0.161020952 C8.70900055,0.159751111 8.70609785,0.158532063 8.70324435,0.157313016 C8.66890397,0.14248127 8.63500638,0.128868571 8.60150237,0.116627302 C8.59879647,0.115611429 8.59599216,0.114697143 8.59323706,0.11368127 C8.55963466,0.101592381 8.52627824,0.090671746 8.49316782,0.0813257143 C8.4910523,0.0807161905 8.48888757,0.080208254 8.48677205,0.0796495238 C8.45297285,0.0702526984 8.41927205,0.0620749206 8.38557125,0.055624127 C8.38478407,0.055471746 8.3840953,0.0554209524 8.38335733,0.0552685714 C8.34931214,0.0488177778 8.31526695,0.0438907937 8.28092657,0.0405384127 C8.27979501,0.0404368254 8.27871265,0.0402336508 8.27763028,0.0401320635 C8.24447066,0.0369828571 8.21096665,0.0355098413 8.17706906,0.0353066667 C8.17475674,0.0353066667 8.17254282,0.0350019048 8.1702305,0.0350019048 C8.16890215,0.0350019048 8.1674262,0.0351542857 8.16609785,0.0351542857 C8.14179391,0.035255873 8.11719479,0.0361193651 8.09230047,0.0377447619 C8.09028335,0.0378971429 8.08826622,0.0381003175 8.08624909,0.0382526984 C7.85157343,0.0548622222 7.58846119,0.140601905 7.23757926,0.308678095 C6.98681578,0.428906667 6.77083546,0.559954286 6.02744989,0.937249524 C5.97490616,0.963966984 5.91783619,0.992868571 5.85742074,1.02339556 C5.83788903,1.03330032 5.81781614,1.04345905 5.79749727,1.05366857 C5.79341381,1.05575111 5.78942875,1.05778286 5.7853453,1.0598146 C5.76458364,1.0702781 5.74357598,1.08089397 5.72212555,1.09176381 C5.72128918,1.09217016 5.72045281,1.09257651 5.71961644,1.09303365 C4.78189778,1.56617651 3.15102496,2.37994159 2.09163903,2.90789079 C2.05503553,2.92612571 2.01912081,2.94400508 1.98394406,2.96152889 C1.8563238,3.02512254 1.73834639,3.08389079 1.63252095,3.1366146 C1.57668094,3.16439873 1.52389122,3.19070984 1.47523415,3.21493841 C1.42913539,3.23789714 1.38613612,3.25928127 1.3471219,3.27873524 C1.32247358,3.29097651 1.29900601,3.30270984 1.27730958,3.3134781 C1.27465288,3.31479873 1.27184858,3.31622095 1.26919187,3.31754159 C1.2459703,3.32907175 1.22481505,3.33958603 1.20538174,3.34928762 C1.19987154,3.35203048 1.19421374,3.35487492 1.18894953,3.3574654 C1.17773233,3.3630527 1.1672531,3.36823365 1.15756104,3.37305905 C1.15490434,3.37437968 1.15259202,3.37554794 1.15003371,3.37681778 C1.13153517,3.38601143 1.11613612,3.39368127 1.10403335,3.39972571 C1.09212737,3.40566857 1.08346848,3.40998603 1.07810587,3.4126273 C1.07397321,3.41465905 1.07121811,3.41608127 1.07121811,3.41608127 C1.05404792,3.4238019 1.03717292,3.43203048 1.02049472,3.4406146 C0.953831086,3.47510349 0.891447704,3.51644952 0.833885751,3.56338286 C0.819519862,3.57511619 0.805399964,3.58720508 0.791624453,3.59959873 C0.777848943,3.61204317 0.764417821,3.62479238 0.751281888,3.63779556 C0.738145955,3.65090032 0.72535441,3.66420825 0.712907252,3.67787175 C0.675467383,3.71886222 0.641127004,3.76244317 0.61003371,3.80815746 C0.595569424,3.82949079 0.582089103,3.85143365 0.569002369,3.87363048 C0.542090926,3.91949714 0.518377369,3.96704 0.49810769,4.01590349 C0.486152515,4.04470349 0.475181305,4.07385905 0.465686042,4.10347175 C0.46012664,4.12079238 0.455010022,4.1382654 0.45028699,4.15584 C0.440890124,4.19093841 0.433313593,4.22644317 0.427557398,4.2622019 C0.418898506,4.31584 0.414372267,4.36998603 0.414372267,4.42418286 C0.414372267,4.44378921 0.415061042,4.46339556 0.416192602,4.4830019 C0.418258929,4.51749079 0.422096392,4.55197968 0.427901786,4.5862146 C0.431591655,4.60790349 0.436363885,4.62954159 0.441578899,4.6510273 C0.453681669,4.70044952 0.469671101,4.74926222 0.490383564,4.79700825 C0.4978125,4.81412571 0.505782617,4.83114159 0.514343112,4.84800508 C0.522903608,4.86481778 0.532054483,4.88152889 0.541795736,4.89803683 C0.542632106,4.89940825 0.543468477,4.9006273 0.544304847,4.90199873 C0.553849308,4.91804952 0.563639759,4.93364317 0.573774599,4.94847492 C0.577513666,4.95401143 0.581498724,4.95904 0.585336188,4.96447492 C0.592666727,4.97473524 0.599948069,4.98514794 0.607524599,4.99484952 C0.612100036,5.00064 0.616872267,5.00592254 0.621496902,5.01150984 C0.628679847,5.02019556 0.635715197,5.02903365 0.643094934,5.03721143 C0.648063958,5.04274794 0.653278972,5.04777651 0.658346392,5.05310984 C0.665676931,5.06072889 0.672810678,5.06850032 0.680288812,5.07566222 C0.685553025,5.08074159 0.690964832,5.08526222 0.696327442,5.09013841 C0.703854774,5.09694476 0.71128371,5.10400508 0.719057034,5.11040508 C0.724567238,5.1150273 0.730274235,5.11914159 0.735882835,5.12350984 C0.743656159,5.12960508 0.751331086,5.1358019 0.759252004,5.14149079 C0.765057398,5.14565587 0.771059585,5.1494146 0.777012573,5.15337651 C0.784933491,5.15865905 0.792756013,5.16409397 0.800775328,5.16902095 C0.806925109,5.17277968 0.813173287,5.17608127 0.819372267,5.17963683 C0.827391582,5.18420825 0.835460095,5.18893206 0.843627004,5.19319873 C0.849973579,5.19650032 0.856467748,5.19939556 0.862912719,5.20249397 C0.871128827,5.20640508 0.879295736,5.21046857 0.887610241,5.21407492 C0.894202806,5.21691937 0.900893768,5.21945905 0.90758473,5.22204952 C0.915948433,5.2254019 0.924262937,5.22880508 0.932675838,5.2318019 C0.939514395,5.23424 0.946500547,5.23637333 0.953339103,5.23855746 C0.961801203,5.24130032 0.970214103,5.24409397 0.978725401,5.24653206 C0.985809949,5.24856381 0.992943695,5.25024 1.00007744,5.25206857 C1.00853954,5.2542019 1.01705084,5.25643683 1.02561133,5.25836698 C1.03299107,5.25994159 1.04042001,5.26126222 1.04775055,5.26268444 C1.05626184,5.26430984 1.06477314,5.26598603 1.07333364,5.26735746 C1.08091017,5.26857651 1.08858509,5.26954159 1.09626002,5.27055746 C1.10477132,5.27167492 1.11313502,5.27284317 1.12169552,5.27375746 C1.12951804,5.27457016 1.13738976,5.27512889 1.14526148,5.27573841 C1.15377278,5.27644952 1.16228407,5.27716063 1.17074617,5.27761778 C1.17866709,5.27802413 1.1867356,5.2782273 1.19470572,5.27848127 C1.20326622,5.27873524 1.21177751,5.27904 1.22038721,5.27909079 C1.22250273,5.27909079 1.22466746,5.27924317 1.22683218,5.27924317 C1.2290461,5.27924317 1.23130922,5.27893841 1.23357234,5.27893841 C1.26264851,5.27873524 1.29187227,5.27756698 1.32129282,5.27523048 C1.3245891,5.27492571 1.32798378,5.27457016 1.33132926,5.2742654 C1.36099581,5.27167492 1.39076075,5.26817016 1.42057489,5.26354794 C1.42367438,5.26309079 1.42677387,5.26248127 1.42987336,5.26197333 C1.45993349,5.25719873 1.49009202,5.25156063 1.52010295,5.24495746 C1.52290725,5.24439873 1.52561316,5.24368762 1.52836826,5.2430781 C1.55872358,5.23627175 1.5889805,5.22875429 1.61908983,5.22047492 C1.62154974,5.21976381 1.62405886,5.2190019 1.62656797,5.21829079 C1.65697249,5.20975746 1.68718021,5.2006146 1.71719114,5.19076063 C1.71906068,5.19015111 1.72093021,5.18949079 1.72279974,5.18888127 C1.75325346,5.17877333 1.78346119,5.16815746 1.81327533,5.15698286 C1.81465288,5.15647492 1.81603043,5.15596698 1.81740798,5.15540825 C1.84766491,5.14403048 1.87762664,5.13214476 1.906998,5.11990349 C1.90758837,5.11970032 1.90812956,5.11944635 1.90867074,5.11919238 C1.93878007,5.10664635 1.96834821,5.09374476 1.99727679,5.08064 C2.23903699,4.97082413 2.53043823,4.83017651 2.8208555,4.68988444 C2.87074253,4.66580825 2.92058036,4.64173206 2.970123,4.61780825 C3.15796192,4.52719238 3.34176658,4.4390146 3.50746629,4.36190984 C3.57378553,4.3310273 3.63715288,4.30197333 3.69678116,4.27525587 C3.69712555,4.27510349 3.69737154,4.2750019 3.69766673,4.27484952 C3.72418458,4.2630146 3.74947249,4.25250032 3.77367802,4.24330667 C3.78199253,4.24015746 3.78937227,4.23802413 3.79744078,4.23517968 C3.81298743,4.22969397 3.82873087,4.22405587 3.84319515,4.21978921 C3.85185405,4.21724952 3.85962737,4.21577651 3.86794187,4.21369397 C3.88048743,4.21054476 3.89322977,4.20719238 3.90488976,4.20510984 C3.91310587,4.20363683 3.92033801,4.20333206 3.92801294,4.20241778 C3.93844297,4.20124952 3.94906979,4.1998273 3.95856505,4.19962413 C3.96751913,4.19947175 3.97548925,4.20048762 3.98365616,4.20130032 C3.98980594,4.20185905 3.99634931,4.20196063 4.00200711,4.20312889 C4.01002642,4.20470349 4.01686498,4.20770032 4.02390033,4.21039238 C4.02852496,4.21222095 4.03373998,4.21338921 4.03797103,4.21567492 C4.04500638,4.21948444 4.05076257,4.22486857 4.05666636,4.23015111 C4.05956906,4.23279238 4.06316053,4.23462095 4.06581724,4.23761778 C4.07363976,4.24650667 4.08023233,4.25691937 4.08534894,4.26910984 C4.08534894,4.26916063 4.08539814,4.26921143 4.08544734,4.26926222 C4.09164632,4.28429714 4.09361425,4.3038019 4.09184311,4.32676063 C4.09174472,4.32818286 4.09140033,4.32990984 4.09125273,4.33138286 C4.07629647,4.49356698 3.89106505,4.81874794 3.79950711,4.98245587 C3.71921556,5.12635429 3.6619488,5.22910984 3.54116709,5.44564317 C3.52778517,5.46966857 3.51351767,5.49516698 3.49846301,5.52218921 C3.48419552,5.54778921 3.46909165,5.57491302 3.45310222,5.60356063 C3.44837919,5.61199238 3.44375456,5.62037333 3.43883473,5.62910984 C3.43450528,5.63688127 3.43017584,5.64470349 3.4256988,5.6526781 C3.41561316,5.67076063 3.40518313,5.6894019 3.39445791,5.70870349 C3.38225674,5.73064635 3.36961279,5.75330032 3.35642766,5.77691937 C3.34437409,5.79855746 3.33192693,5.82090667 3.31898779,5.84406857 C3.30619625,5.8670781 3.29291272,5.89079873 3.2792356,5.91538286 C3.24135295,5.98334476 3.19987883,6.05765587 3.15461644,6.13892571 C3.13843021,6.1678781 3.1219488,6.19754159 3.10472941,6.22837333 C3.09336461,6.24869079 3.08175383,6.26951619 3.06994625,6.29069714 C3.05218568,6.32254476 3.03378553,6.35566222 3.0148934,6.38944 C2.998166,6.41945905 2.98094661,6.45024 2.96338284,6.48183365 C2.92436862,6.5518273 2.88314049,6.62578286 2.83955084,6.70390349 C2.8349754,6.71218286 2.83030157,6.72046222 2.82567693,6.72879238 C2.78179209,6.80742095 2.73559493,6.89036698 2.68688867,6.97773206 C2.64324982,7.05595429 2.59759384,7.13783365 2.54982234,7.22357333 C2.51243167,7.29057016 2.47376184,7.35995429 2.43371447,7.43177651 C2.43297649,7.43314794 2.43218932,7.43446857 2.43145135,7.43578921 C2.28400419,7.70017016 2.11840288,7.99721143 1.93135113,8.33270349 C1.47548014,9.15032889 0.893956815,10.1931733 0.146684585,11.5334654 C-0.110966655,11.9943162 0.0419415087,12.5836241 0.488268039,12.8496305 C0.934545372,13.1156368 1.50524508,12.9577194 1.76294552,12.4969194 L4.12623269,8.27088762 L4.15388211,8.22136381 L4.18069515,8.1734654 L4.18074435,8.1734146 C4.18718932,8.16183365 4.19442147,8.1510146 4.20204719,8.1406019 C4.20431031,8.13755429 4.20667183,8.13460825 4.20898415,8.13166222 C4.21488794,8.12414476 4.22103772,8.11693206 4.22753189,8.11012571 C4.2299918,8.10748444 4.23245171,8.10479238 4.23501002,8.1022019 C4.24386571,8.0934654 4.25306578,8.08508444 4.26275784,8.07756698 C4.26339741,8.07705905 4.26398779,8.07670349 4.26457817,8.07629714 C4.27382744,8.06923683 4.2834211,8.06283683 4.29326075,8.05694476 C4.29640944,8.0550654 4.29955813,8.05333841 4.30275601,8.05150984 C4.31067693,8.04714159 4.31879464,8.0430781 4.32705995,8.03942095 C4.33015944,8.03804952 4.33325893,8.03657651 4.33640762,8.03530667 C4.34757562,8.03078603 4.35889122,8.02677333 4.37045281,8.02362413 C4.37168276,8.02326857 4.37291272,8.02311619 4.37414267,8.02276063 C4.3846219,8.02001778 4.39519953,8.01793524 4.40587555,8.01636063 C4.40946702,8.0158019 4.41310769,8.01544635 4.41664996,8.01504 C4.42565324,8.01402413 4.43465652,8.0134146 4.4437582,8.01321143 C4.44710368,8.01316063 4.45044916,8.01295746 4.45389304,8.01300825 C4.50102496,8.01356698 4.54840288,8.02560508 4.5927797,8.04927492 C4.5928289,8.04922413 4.5929273,8.04912254 4.59297649,8.04912254 C4.59720754,8.05135746 4.60153699,8.05333841 4.60571884,8.0558273 C4.74918094,8.14136381 4.80152788,8.32676063 4.72827168,8.47761778 C4.69570244,8.5358781 1.89460004,13.5467733 1.89460004,13.5467733 C1.6368996,14.0076241 1.78980776,14.5968813 2.23623269,14.8629384 C2.68226403,15.1287924 3.25261935,14.9711797 3.51036899,14.51104 L6.33602132,9.45818921 C6.42192147,9.30453841 6.6177305,9.25516698 6.77334457,9.34791619 C6.92895864,9.44071619 6.98533983,9.64038603 6.89939049,9.79403683 L6.89860332,9.79535746 C6.90003007,9.79759238 4.68586279,13.7522844 4.68586279,13.7522844 C4.44813684,14.1774273 4.58923743,14.7211225 5.00097759,14.9665067 C5.41242256,15.2117384 5.93840106,15.0664178 6.17642219,14.6419352 L8.39044187,10.6828241 C8.47639122,10.5291733 8.67982598,10.4843225 8.84478772,10.5826083 C9.00984785,10.6810463 9.07385477,10.8852876 8.98795463,11.0389384 L7.42669734,13.8308114 C7.22892037,14.1844876 7.3463566,14.6368559 7.68902241,14.8410971 C8.03168823,15.0453892 8.46970026,14.9239924 8.86436862,14.2182146 L12.8918358,7.01623365 C13.4433974,6.02992254 14.7355895,3.71916698 12.8499189,2.59515429" id="Fill-1" fill="#FFFFFF" mask="url(#mask-2)"></path>
                                                            </g>
                                                            <path d="M6.17961516,12.8484571 C6.13312281,12.8709079 6.08648287,12.8934095 6.04018732,12.9157587 C5.7480973,13.0568635 5.44616764,13.2027429 5.19648652,13.3161143 C4.84343987,13.476419 4.51755066,13.5576889 4.22792055,13.5576889 C3.75281305,13.5576889 3.3603094,13.3357206 3.12258345,12.9325714 C2.91211334,12.5754413 2.86616217,12.150146 2.99319206,11.7350603 C3.12912682,11.2909206 3.45506523,10.9141841 3.86606742,10.7253333 C4.05184001,10.6328889 7.5847664,8.87481905 8.81147558,8.25193651 C8.82726822,8.2439619 8.84247048,8.23619048 8.85786953,8.22836825 C8.85678717,7.34928254 8.85462245,5.61909841 8.84989942,1.8048 C8.84989942,1.27268571 8.43205867,0.841244444 7.916707,0.841244444 C7.40145372,0.841244444 6.98366217,1.27268571 6.98366217,1.8048 L6.98366217,6.79700317 C6.98366217,6.9744254 6.84433273,7.11827302 6.67253243,7.11827302 C6.50683273,7.11827302 6.37168513,6.9847873 6.36214067,6.81625397 C6.36214067,6.74900317 6.36115671,0.963555556 6.36115671,0.963555556 C6.36115671,0.431390476 5.94331596,5.68434189e-14 5.42796429,5.68434189e-14 C4.9129078,5.68434189e-14 4.49531305,0.430933333 4.49491946,0.962539683 L4.49491946,6.79700317 C4.49491946,6.9744254 4.34924344,7.11827302 4.16957143,7.11827302 C3.98980102,7.11827302 3.84432179,6.9744254 3.84432179,6.79700317 L3.84432179,6.79547937 C3.84200948,6.79431111 3.84432179,2.2263873 3.84432179,2.2263873 C3.84432179,1.73551746 3.4588043,1.33749841 2.98335241,1.33749841 C2.50834329,1.33749841 2.12321939,1.73495873 2.12257981,2.22537143 L2.12257981,6.79700317 C2.12257981,6.9744254 1.9680973,7.11827302 1.77765087,7.11827302 C1.58700765,7.11827302 1.43272194,6.9744254 1.43272194,6.79700317 L1.43272194,3.57328254 C1.43272194,3.16490159 1.11190015,2.83372698 0.716198615,2.83372698 C0.320497085,2.83372698 1.96793003e-05,3.16490159 1.96793003e-05,3.97993651 L1.96793003e-05,12.2960762 C1.96793003e-05,13.4349206 1.96793003e-05,16.1032127 2.17738666,16.1032127 L4.36479009,16.1032127 C5.60173251,13.8848508 5.98257617,13.201727 6.17961516,12.8484571" id="Fill-4" fill="#FFFFFF"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Acessibilidade
                    </a>

                    <div class="acessibilidade-buttons">
                        <button>
                            <svg width="20px" height="20px" viewBox="0 0 10 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="_header-hover" transform="translate(-374.000000, -22.000000)" fill="#FFFFFF">
                                        <g id="Group-7" transform="translate(98.000000, 12.000000)">
                                            <g id="Group-4" transform="translate(276.000000, 3.000000)">
                                                <g id="Group">
                                                    <path d="M9.32965749,9.49016122 C8.8825627,8.72423437 8.27614795,8.11792556 7.5099138,7.67073536 C6.7439793,7.22364504 5.90742461,7 5.00024972,7 C4.09307483,7 3.25652013,7.22364504 2.49058564,7.67073536 C1.7242516,8.11752602 1.11783684,8.72423437 0.670742061,9.49016122 C0.223547391,10.2564876 0,11.0930339 0,12.0001998 C0,12.9069661 0.223547391,13.7435124 0.670742061,14.5098388 C1.11783684,15.2757656 1.7242516,15.882474 2.49018609,16.3292646 C3.25652013,16.776355 4.09307483,17 5.00024972,17 C5.90742461,17 6.7439793,16.776355 7.5099138,16.3292646 C8.27584829,15.882474 8.8825627,15.2757656 9.32965749,14.5098388 C9.77645261,13.7435124 10,12.9069661 10,12.0001998 C10,11.0930339 9.77645261,10.2560881 9.32965749,9.49016122 Z M5,15 C4.27416307,15 3.60518374,14.843839 2.99272358,14.5303325 C2.37969935,14.2172209 1.89449192,13.7927631 1.53665003,13.2563669 C1.17892095,12.7203655 1,12.1351073 1,11.5 C1,10.8652875 1.17892095,10.2800293 1.53665003,9.74363313 C1.89449192,9.20763178 2.37969935,8.78277914 2.99272358,8.46966748 C3.60518374,8.15655583 4.27416307,8 5,8 L5,15 Z" id="adjust-contrast"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>

                        <button>
                            A+
                        </button>
                        
                        <button>
                            A-
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade ligamos-modal" tabindex="-1" role="dialog" id="cidade-modal">
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
                        <h2>Planos Copel Fibra</h2>
                    </span>
                </div>
                <div class="col-12">
                    <p>Informe sua cidade para podermos mostrar os planos disponíveis na sua região.</p>
                </div>
               <div class="col-12 planos-geolocation--form">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control js-autocomplete-cidade" placeholder="Ex: Curitiba" aria-label="Ex: Curitiba">
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
    
    </header>