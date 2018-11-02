<?php get_header('old'); ?>
	<section class="blog" id="blog-single">
		<header class="blog-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1 class="main-tt main-tt-barra">Blog Conecta</h1>
					</div>
					<div class="col-sm-3">
						<h2>Aqui tem dicas, informações e muito mais conteúdo para você.</h2>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="blog-margin-top">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div id="blog-post">
							<?php while( have_posts() ): the_post(); ?>
								<article>
									<header>
										<div class="social-share"></div>
										<div class="clearifx"></div>
										<h1>
											<small><?php get_the_categorias($post->ID); ?></small>
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h1>
									</header>
									<a href="<?php the_permalink(); ?>">
										<div class="post-content">
											<?php
												if (get_post_meta($post->ID, "gravata", true)) {
													echo wpautop(get_post_meta($post->ID, "gravata", true));
												} else {
													the_excerpt();
												}
											?>
										</div>
									</a>	
								</article>
								<hr>
							<?php endwhile; ?>
							<div class="pagination">
								<?php
									$args = array(
										'end_size'           => 5,
										'mid_size'           => 5
									);
									echo paginate_links($args);
								?>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>

	</section>
<?php get_footer('old'); ?>