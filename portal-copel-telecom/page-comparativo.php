<?php
	
	$url = get_bloginfo('url');
	wp_redirect( $url );
	exit;

	get_header();

	$services = new Services;
	$profile = $services->profile();
	$planos = json_decode($services->planos($profile->tipo->name,$profile->cidade));

	if(!$planos->bel){
		$planos = json_decode($services->planos($profile->tipo->name,"CURITIBA"));
		$profile->cidade = "Curitiba";
	}

	$velocidades = array();

?>
	<section id="comparativo">
		<header>
			<h1 class="main-tt">Uma nova experiência em internet espera por você</h1>
			<small>Compare a sua internet com a internet da Copel Telecom</small>
			<nav>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-12 nav-comparativo">
							<a href="#" data-type="filmes-down" class="bt-o btn_simule_seu_uso active">baixar filme</a>
							<a href="#" data-type="filmes-send" class="bt-o btn_simule_seu_uso">enviar vídeos</a>
							<a href="#" data-type="musica-down" class="bt-o btn_simule_seu_uso">baixar música</a>
							<a href="#" data-type="fotos-down" class="bt-o btn_simule_seu_uso">baixar fotos</a>
							<a href="#" data-type="fotos-send" class="bt-o btn_simule_seu_uso">enviar fotos</a>

							<div class="dropdown">
								<input type="text" name="comparativo" value="Baixar Filme" readonly >
								<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<ul class="dropdown-menu">
									<li><a href="#" class="btn_simule_seu_uso" data-type="filmes-down" data-value="baixar filme" >baixar filme</a></li>
									<li><a href="#" class="btn_simule_seu_uso" data-type="filmes-send" data-value="enviar vídeos" >enviar vídeos</a></li>
									<li><a href="#" class="btn_simule_seu_uso" data-type="musica-down" data-value="baixar música" >baixar música</a></li>
									<li><a href="#" class="btn_simule_seu_uso" data-type="fotos-down" data-value="baixar fotos" >baixar fotos</a></li>
									<li><a href="#" class="btn_simule_seu_uso" data-type="fotos-send" data-value="enviar fotos" >enviar fotos</a></li>
								</ul>
							</div>

						</div>
						<?php if ($planos): ?>
							<div class="col-md-2 col-sm-12">
								<div class="dropdown dropdown-plano">
									<input type="text" name="plano" value="Copel Fibra <?php echo $services->profile_velocidade($planos->bel[0]->nomeProduto); ?> Mega" readonly >
									<input type="hidden" name="plano-value" class="plano-value" value="<?php echo $services->profile_velocidade($planos->bel[0]->nomeProduto); ?>">
									<button type="button" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
									<ul class="dropdown-menu">
										<?php foreach ($planos->bel as $plan): ?>
											<?php
												$velocidades[] = array(
													"velocidade" => $services->profile_velocidade($plan->nomeProduto),
													"filmes_down" => str_replace(",", ".", (20000/($services->profile_velocidade($plan->nomeProduto)*100))), 
													"filmes_send" => str_replace(",", ".", (20000/($services->profile_velocidade($plan->nomeProduto)*100))), 
													"musica_down" => str_replace(",", ".", (10000/($services->profile_velocidade($plan->nomeProduto)*100))), 
													"fotos_down" => str_replace(",", ".", (15000/($services->profile_velocidade($plan->nomeProduto)*100))), 
													"fotos_send" => str_replace(",", ".", (15000/($services->profile_velocidade($plan->nomeProduto)*100)))
												);
											?>
											<li><a href="#" data-value="<?php echo $services->profile_velocidade($plan->nomeProduto); ?>" data-text="Copel Fibra <?php echo $services->profile_velocidade($plan->nomeProduto); ?> Mega">Copel Fibra <?php echo $services->profile_velocidade($plan->nomeProduto); ?> Mega</a></li>
										<?php endforeach ?>
									</ul>
								</div>
							</div>
						<?php endif ?>
					</div>
				</div>
			</nav>
		</header>
		<article>
			<?php
				$itens = array(
					array(
						"id"		=> "filmes-down",
						"title"		=> "download de um vídeo",
						"outros" 	=> 4000,
						"copel"		=> 2000,
						"img"		=> "img_download_filme",
						"canvas"	=> "download_videos"
					),
					array(
						"id"		=> "filmes-send",
						"title"		=> "enviar de um vídeo",
						"outros" 	=> 8000,
						"copel"		=> 2000,
						"img"		=> "img_upload_video",
						"canvas"	=> "upload_videos"
					),
					array(
						"id"		=> "musica-down",
						"title"		=> "download de música",
						"outros" 	=> 3000,
						"copel"		=> 1000,
						"img"		=> "img_download_musica",
						"canvas"	=> "download_musica"
					),
					array(
						"id"		=> "fotos-down",
						"title"		=> "download de fotos",
						"outros" 	=> 3000,
						"copel"		=> 1000,
						"img"		=> "img_download_foto",
						"canvas"	=> "download_fotos"
					),
					array(
						"id"		=> "fotos-send",
						"title"		=> "enviar fotos",
						"outros" 	=> 6000,
						"copel"		=> 2000,
						"img"		=> "img_upload_foto",
						"canvas"	=> "upload_fotos"
					)
				)
			?>

			<div class="container">
				
				<?php foreach ($itens as $item): ?>
					<div class="row comparativos <?php echo ($item["id"] == "filmes-down") ? "current" : ""; ?>" id="<?php echo $item["id"]; ?>">
						<div class="col-md-6 col-sm-12">
							<div class="comparativo-item compare-outros">
								<h6>Outros</h6>
								<small><?php echo $item["title"]; ?></small>
								<div class="progress-status" data-timeout="<?php echo $item["outros"]; ?>"><i style="transition-duration: <?php echo ($item["outros"]/1000); ?>s;"></i></div>
								<figure>
									<span class="loading">
										<canvas id="canvas_<?php echo $item["canvas"] ?>_concorrente" width="366" height="211"></canvas>
									</span>
									<span class="loaded">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/comparativo/<?php echo ($item["img"] == "nuvem") ? $item["img"]."_concorrente" : $item["img"]; ?>.jpg" alt="">
									</span>
								</figure>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="comparativo-item comparativo-item-copel compare-copel">
								<h6>Copel Fibra <span id="vel-title"><?php echo $services->profile_velocidade($planos->bel[0]->nomeProduto); ?></span> Mega</h6>
								<small><?php echo $item["title"]; ?></small>
								<div class="progress-status" data-timeout="<?php echo $item["copel"]; ?>"><i style="transition-duration: <?php echo ($item["copel"]/1000); ?>s;"></i></div>
								<figure>
									<span class="loading">
										<canvas id="canvas_<?php echo $item["canvas"] ?>_copel" width="366" height="211"></canvas>
									</span>
									<span class="loaded">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/comparativo/<?php echo ($item["img"] == "nuvem") ? $item["img"]."_copel" : $item["img"]; ?>.jpg" alt="">
									</span>
								</figure>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				
				<?php if ($planos): ?>
				<div class="planos-detalhes">
					
					<?php foreach ($planos->bel as $plan): ?>
					<div class="row plano-row plano-<?php echo $services->profile_velocidade($plan->nomeProduto); ?>">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<dl>
								<dt class="col-md-4 col-sm-4 col-xs-12 plano-tt" data-mh="c-dt-group">
									<small>Copel Fibra</small>
									<strong><?php echo $services->profile_velocidade($plan->nomeProduto); ?><span>MEGA</span></strong>
								</dt>
								<dd class="col-md-4 col-sm-4 col-xs-6" data-mh="ct-pc-group">
									<i class="i-down"></i>
									<strong><?php echo $services->profile_velocidade($plan->nomeProduto); ?><span>MEGA</span></strong>
									Velocidade<br>de <small>Download</small>
								</dd>
								<dd class="col-md-4 col-sm-4 col-xs-6" data-mh="ct-pc-group">
									<i class="i-up"></i>
									<strong><?php echo $services->profile_velocidade($plan->nomeProduto); ?><span>MEGA</span></strong>
									Velocidade<br>de <small>Upload</small>
								</dd>
							</dl>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<dl>
								<dt class="col-md-5 col-sm-6 col-xs-12 plano-preco" data-mh="c-dt-group">
									<small>R$</small><?php echo $services->profile_price($plan->precoProduto); ?><small>,<?php echo $services->profile_cents($plan->precoProduto); ?>*</small>
								</dt>
								<dd class="col-md-7 col-sm-6 col-xs-12 plano-bts" data-mh="ct-pc-group">
									<a href="<?php echo LINK_WVT; ?>?s=<?php echo $plan->id; ?>&locate=<?php echo $profile->cidade; ?>&p=<?php echo $profile->tipo->name; ?>" class="bt">VERIFICAR DISPONIBILIDADE</a>
									<br>
									<a href="<?php $p=get_page_by_title('Planos'); echo get_permalink($p->ID); ?>">VEJA TODOS OS PLANOS</a>
								</dd>
							</dl>
						</div>
					</div>
					<?php endforeach; ?>

				</div>
				<?php endif ?>

			</div>

		</article>

		<aside>
			<?php get_template_part('template','highlight-blog'); ?>
			<div class="nav-highlights hide">
				<div class="container">
					<ul class="row">
						<li class="nav-highlights-orange-light col-sm-6 col-xs-12">
							<div class="nav-highlights-tt">
								<a href="#">
									<i class="i-nh-whitepaper"></i>
									<h6>Baixe o whitepaper</h6>
									<p>Conteúdo em formato PDF com a explicação sobre o a diferença entre cabo e fibra óptica.</p>
								</a>
							</div>
						</li>
						<li class="nav-highlights-orange col-sm-6 col-xs-12">
							<div class="nav-highlights-tt">
								<a href="<?php bloginfo("template_url"); ?>/_assets/images/infografico.png" target="_blank">
									<i class="i-nh-infografico"></i>
									<h6>Veja o infográfico</h6>
									<p>Saiba o que você pode fazer com cada uma das velocidades da internet da Copel Telecom.</p>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</aside>

		<div class="modal fade" tabindex="-1" id="modalAviso" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" data-dismiss="modal" class="i-c-modal-close"></button>
					<div class="modal-body">
						<i class="i-c-foguete"></i>
						<p>
							Para sua informação, pela Resolução 574 da Anatel, as prestadoras devem oferecer uma taxa de transmissão instantânea de 40% da velocidade contratada. E 80% de taxa de transmissão média, tanto em download quanto em upload.<br>
							A Copel Telecom entrega 100%.<br>Isso mesmo. 100% da velocidade que sai da Copel Telecom é exatamente a mesma que chega dentro do seu modem.<br>
							Lembramos que a velocidade de wi-fi não pode ser garantida da mesma maneira que a velocidade da fibra que chega até o seu modem.
						</p>
						<div class="text-center row modal-bts">
							<div class="col-sm-10 col-sm-offset-1 col-xs-12">
								<div class="col-sm-6 col-xs-12">
									<a href="<?php $p=get_page_by_title('Planos'); echo get_permalink($p->ID); ?>" class="bt-o active">saiba mais</a>
								</div>
								<div class="col-sm-6 col-xs-12">
									<button type="button" class="bt-o active" data-dismiss="modal">continue navegando</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	
	<script src="<?php bloginfo("template_url"); ?>/_assets/js/compare.min.js"></script>
	<script>

		var $state = "",
			$timer= "";

		jQuery(document).ready(function($) {

			//$('#modalAviso').modal('show');

			jQuery(".nav-comparativo a").on('click', function(e) {
				var item = $(this).data("type");
				if (!jQuery(".comparativos#"+item).hasClass('current')) {
					anime(item);
					$(".nav-comparativo a").removeClass('active');
					$(this).addClass('active');
				}

				if ($(this).hasClass('bt-o')){
					return false;
				}
				
			});

			get_velocidades(<?php echo $services->profile_velocidade($planos->bel[0]->nomeProduto); ?>);
			anime("filmes-down");

			jQuery(".dropdown-plano a").click(function(event) {
				get_velocidades($(this).data("value"));
				anime($state);
			});

		});

		function anime(item){
			
			$state = item;

			clearTimeout($timer);

			jQuery(".comparativos").slideUp().removeClass('current');
			jQuery('.comparativos .comparativo-item figure').removeClass('load');
			jQuery('.comparativos#'+item+' .progress-status i').width(0);

			jQuery(".comparativos#"+item).slideDown(function() {
				$(this).addClass('current');
				$('.comparativos#'+item+' .progress-status').each(function() {
					var bar = $(this).find('i'),
						figure = $(this).parent().find('figure');
					bar.css("width", "100%");
					$timer = setTimeout(
						function() {
							figure.addClass("load");
						},
						$(this).data("timeout")
					);
				});
			});

		}

		function get_velocidades(vel){
			var velocidade = <?php echo json_encode($velocidades); ?>;
			jQuery("#vel-title").text(vel);
			for (var i = velocidade.length - 1; i >= 0; i--) {
				if (velocidade[i].velocidade == vel) {

					jQuery("#filmes-down .compare-copel .progress-status").data("timeout", (velocidade[i].filmes_down*1000)).find('i').css("transition-duration", velocidade[i].filmes_down+"s");
					jQuery("#filmes-down .compare-outros .progress-status").data("timeout", ((velocidade[i].filmes_down*1000)*2)).find('i').css("transition-duration", (velocidade[i].filmes_down*2)+"s");

					jQuery("#filmes-send .compare-copel .progress-status").data("timeout", (velocidade[i].filmes_send*1000)).find('i').css("transition-duration", velocidade[i].filmes_send+"s");
					jQuery("#filmes-send .compare-outros .progress-status").data("timeout", ((velocidade[i].filmes_send*1000)*2)).find('i').css("transition-duration", (velocidade[i].filmes_send*2)+"s");

					jQuery("#musica-down .compare-copel .progress-status").data("timeout", (velocidade[i].musica_down*1000)).find('i').css("transition-duration", velocidade[i].musica_down+"s");
					jQuery("#musica-down .compare-outros .progress-status").data("timeout", ((velocidade[i].musica_down*1000)*2)).find('i').css("transition-duration", (velocidade[i].musica_down*2)+"s");

					jQuery("#fotos-down .compare-copel .progress-status").data("timeout", (velocidade[i].fotos_down*1000)).find('i').css("transition-duration", velocidade[i].fotos_down+"s");
					jQuery("#fotos-down .compare-outros .progress-status").data("timeout", ((velocidade[i].fotos_down*1000)*2)).find('i').css("transition-duration", (velocidade[i].fotos_down*2)+"s");

					jQuery("#fotos-send .compare-copel .progress-status").data("timeout", (velocidade[i].fotos_send*1000)).find('i').css("transition-duration", velocidade[i].fotos_send+"s");
					jQuery("#fotos-send .compare-outros .progress-status").data("timeout", ((velocidade[i].fotos_send*1000)*2)).find('i').css("transition-duration", (velocidade[i].fotos_send*2)+"s");

					$(".plano-row").slideUp();
					$(".plano-row.plano-"+velocidade[i].velocidade).slideDown();
				}
			}
		}

		<?php foreach ($itens as $item): ?>
				
			var canvas_<?php echo $item["canvas"] ?>_concorrente = document.getElementById("canvas_<?php echo $item["canvas"] ?>_concorrente");
			var exportRoot_<?php echo $item["canvas"] ?>_concorrente = new lib.<?php echo $item["canvas"] ?>_concorrente();
			var <?php echo $item["canvas"] ?>_concorrente = new createjs.Stage(canvas_<?php echo $item["canvas"] ?>_concorrente);

			<?php echo $item["canvas"] ?>_concorrente.addChild(exportRoot_<?php echo $item["canvas"] ?>_concorrente);
			<?php echo $item["canvas"] ?>_concorrente.update();

			createjs.Ticker.setFPS(lib.properties.fps);
			createjs.Ticker.addEventListener("tick", <?php echo $item["canvas"] ?>_concorrente);


			var canvas_<?php echo $item["canvas"] ?>_copel = document.getElementById("canvas_<?php echo $item["canvas"] ?>_copel");
			var exportRoot_<?php echo $item["canvas"] ?>_copel = new lib.<?php echo $item["canvas"] ?>_copel();

			var <?php echo $item["canvas"] ?>_copel = new createjs.Stage(canvas_<?php echo $item["canvas"] ?>_copel);
			<?php echo $item["canvas"] ?>_copel.addChild(exportRoot_<?php echo $item["canvas"] ?>_copel);
			<?php echo $item["canvas"] ?>_copel.update();

			createjs.Ticker.setFPS(lib.properties.fps);
			createjs.Ticker.addEventListener("tick", <?php echo $item["canvas"] ?>_copel);

		<?php endforeach ?>

	</script>


<?php get_footer(); ?>