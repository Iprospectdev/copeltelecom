<?php get_header(); ?>

<?php
	$posts_query = new WP_Query(array(
		"post_type" => "post",
		"posts_per_page" => 9,
		"offset" => 7
	));
?>
	<section class="blog" id="blog-archive">
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
		<div class="blog-list blog-margin-top">
			<div class="container">
				<div class="owl-carousel">
					<article>
						<div class="highlight-blog row">
							<?php
								query_posts(array(
									"post_type" => "post",
									"posts_per_page" => 7,
								));
								$i = 0;
							?>
							<?php while (have_posts()): the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-md-4 col-sm-6 col-xs-12 bgcolor" data-color="<?php echo ($i % 2 == 0) ? "#ff9600" : "#737c8f"; ?>">
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
							<?php $i++; endwhile; ?>

							<aside class="col-md-8 col-sm-6 highlight-blog-form">
								<form action="<?php bloginfo("url"); ?>/" class="faq-form-search faq-form-search-gray">
									<h6>Ainda não<br>achou o que precisava?</h6>
									<label class="autocomplete">
										<input type="text" name="s" placeholder="Buscar assunto">
										<button type=submit><i class="i-faq-search-gray"></i></button>
									</label>
								</form>
							</aside>
						</div>
					</article>
					
					<?php for($a = 1; $a <= $posts_query->max_num_pages; $a++): ?>
						<?php
							$offset = ((($a-1)*9)+7);
							query_posts(array(
								"post_type" => "post",
								"posts_per_page" => 9,
								"offset" => $offset
							));
							$i = 0;
						?>
						<?php if (have_posts()): ?>
						<article>
							<div class="highlight-blog row">
								<?php while (have_posts()): the_post(); ?>
								<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-md-4 col-sm-6 col-xs-12 bgcolor" data-color="<?php echo ($i % 2 == 0) ? "#ff9600" : "#737c8f"; ?>">
									<?php if (has_post_thumbnail( $post->ID )): ?>
										<?php echo get_the_post_thumbnail( $post->ID , "thumb-blog" ); ?>
									<?php endif ?>
									<dl>
										<dt>
											<span><?php get_the_categorias($post->ID); ?></span>
											<?php the_title(); ?>
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
								<?php $i++;endwhile; wp_reset_query(); ?>
							</div>
						</article>
						<?php endif ?>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<aside class="blog-categorias">
			<div class="container">
				<span>Navegar por categorias</span>
				<?php
					$categorias = get_terms("category");
					if ($categorias) {
						foreach ($categorias as $cat) {
							echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o">'.$cat->name.'</a>';
						}
					}
				?>
			</div>
		</aside>

	</section>
<?php get_footer(); ?>