<?php
	get_header();
	the_post();
?>
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
							<article>
								<header>
									<div class="social-share"></div>
									<div class="clearifx"></div>
									<h1>
										<small><?php get_the_categorias($post->ID); ?></small>
										<?php the_title(); ?>
									</h1>
								</header>
								<div class="post-content">
									<?php the_content(); ?>
								</div>
								<?php query_posts("post_type=post&posts_per_page=2&orderby=rand"); ?>
									<?php if (have_posts()): $i = 0; ?>
								<footer>
									<h6>Veja também</h6>
									<div class="row highlight-blog">
										<?php while(have_posts()): the_post(); $i++; ?>
											<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-md-6 col-xs-12 bgcolor" data-color="#<?php echo ($i % 2 == 0)  ? "737c8f" : "ff9600"; ?>">
												<?php if (has_post_thumbnail( $post->ID )): ?>
													<?php echo get_the_post_thumbnail( $post->ID , "thumb-blog" ); ?>
												<?php endif ?>
												<dl>
													<dt>
														<span><?php get_the_categorias($post); ?></span>
														<?php echo $post->post_title; ?>
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
										<?php endwhile; ?>
									</div>
								</footer>
									<?php endif ?>
								<?php wp_reset_query(); ?>
							</article>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		jQuery(document).ready(function($) {
	        $(".social-share").jsSocials({
			    showLabel: false,
			    showCount: false,
			    text: "<?php the_title(); ?>",
			    shares: ["facebook", "twitter", "linkedin"]
	        });
		});
	</script>	
<?php get_footer(); ?>