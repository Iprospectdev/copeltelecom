<?php get_header(); ?>

<?php if ($_GET["post_type"] == "faq"): ?>
	<?php get_template_part("templates/faq", "page"); ?>
<?php else: ?>
	<section class="blog" id="<?php echo (have_posts()) ? "blog-single" : "blog-404" ?>">
		<header class="blog-header  <?php echo (have_posts()) ? "" : "blog-header-l" ?>">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1 class="main-tt main-tt-barra">Blog Conecta</h1>
					</div>
					<div class="col-sm-3">
						<small>Aqui tem dicas, informações e muito mais conteúdo para você.</small>
					</div>
				</div>
			</div>
		</header>

		<?php if( have_posts() ): ?>
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
		<?php else: ?>

			<div id="blog-404-header">
				<h1><strong>Nenhuma página encontrada para <u><?php echo get_search_query(); ?></u>!</strong>Tente a busca abaixo</h1>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-xs-12 highlight-blog-form">
							<form action="<?php bloginfo("url"); ?>/" class="faq-form-search faq-form-search-orange-medium">
								<label class="autocomplete">
									<input type="text" placeholder="Buscar assunto" name="s">
									<input type="hidden" name="post_type" value="post">
									<button type="submit"><i class="i-faq-search-orange"></i></button>
								</label>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<?php
				$posts_query = new WP_Query(array(
					"post_type" => "post",
					"posts_per_page" => 9
				));
			?>
			<div class="blog-list">
				<div class="container">
					<div class="owl-carousel">
						<?php for($i = 1; $i <= $posts_query->max_num_pages; $i++): ?>
							<?php
								$offset = (($i-1)*9);
								query_posts(array(
									"post_type" => "post",
									"posts_per_page" => 9,
									"offset" => $offset
								));
							?>
							<?php if (have_posts()): ?>
							<article>
								<div class="highlight-blog row">
									<?php while (have_posts()): the_post(); ?>
									<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-md-4 col-sm-6 col-xs-12 bgcolor" data-color="#ff9600">
										<?php if (has_post_thumbnail( $post->ID )): ?>
											<?php echo get_the_post_thumbnail( $post->ID , "thumb-blog" ); ?>
										<?php endif ?>
										<dl>
											<dt>
												<h3>
													<span><?php get_the_categorias($post->ID); ?></span>
													<?php the_title(); ?>
												</h3>
											</dt>
											<dd>
												<?php 
													if (get_post_meta($post->ID, "gravata", true)) {
														echo wpautop(get_post_meta($post->ID, "gravata", true));
													} else {
														the_excerpt();
													}
												?>
											</dd>
										</dl>
									</a>
									<?php endwhile; wp_reset_query(); ?>
								</div>
							</article>
							<?php endif; ?>
					<?php endfor ?>
					</div>
				</div>
			</div>

		<?php endif ?>

	</section>

<?php endif ?>

<?php get_footer(); ?>