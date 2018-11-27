<?php 
	get_header();
	the_post();
?>
	<section class="page-faq">
		<header class="faq-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/faq">Perguntas frequentes</a>
					<a href="#">Resultados da busca</a>
				</div>

				<div class="row">
					<div class="col-md-6 col-12">
						<h2><small>Busca por</small> "<?php echo get_query_var('s'); ?>"</h2>
					</div>
					<div class="col-md-6 col-12">
						<form action="<?php bloginfo("url"); ?>/">
							<input type="hidden" name="post_type" value="faq">
							<input type="text" name="s" placeholder="Digite aqui sua dúvida">
							<button type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="faq-content">
						<svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="01_faq" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.200000003">
						        <g id="02_busca" transform="translate(-128.000000, -346.000000)" stroke="#464D5C">
						            <g id="Group-7" transform="translate(129.000000, 347.000000)">
						                <path d="M30.3541667,30.3541667 L43.1599604,43.1599604" id="Line" stroke-linecap="round"></path>
						                <circle id="Oval" cx="17.3452381" cy="17.3452381" r="17.3452381"></circle>
						            </g>
						        </g>
						    </g>
						</svg>
						<div class="faq-list">
							<ul>
								<?php 
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo  '<li><a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a></li>';
										endwhile;
									else:
										echo "<li>Não foi encontrado nenhum resultado para a sua pesquisa</li>";
									endif;
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<?php get_sidebar('faq') ?>
				</div>
			</div>
		</div>
	</section>
<?php
	get_footer();
?>