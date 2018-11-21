<?php
	get_header();
	the_post();
	$i = 0;
?>
	<section class="blog-single">

		<header class="blog-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/blog">Blog Conecta</a>
					<a href="#">Categoria</a>
				</div>

				<div class="row">
					<div class="col-md-6 col-12">
						<h2>Blog Conecta</h2>
					</div>
					<div class="col-md-6 col-12">
						<form action="<?php bloginfo("url"); ?>/">
							<input type="hidden" name="post_type" value="post">
							<input type="text" name="s" placeholder="Buscar assunto do blog">
							<button type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="blog-single-content">
						<div class="blog-search-header">
							<h2>
								<small>Categoria </small> "<?php echo get_catname(get_query_var('cat')); ?>"
							</h2>
						</div>
						<?php while (have_posts()): the_post(); ?>
							<article class="blog-search-item">
								<a href="<?php the_permalink(); ?>">
			                        <h6>
			                            <small><?php get_the_categorias($post->ID); ?></small>
			                            <?php the_title(); ?>
			                        </h6>
		                        </a>
							</article>
						<?php $i++; endwhile; ?>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<div class="blog-pagination">
				<?php
					$args = array(
						'end_size'           => 3,
						'mid_size'           => 3,
						'prev_text'          => __('ANTERIOR'),
						'next_text'          => __('PRÓXIMA')
					);
					echo paginate_links($args);
				?>
			</div>
			
			<?php query_posts("post_type=post&posts_per_page=3&orderby=rand"); if (have_posts()): ?>
				<footer class="blog-single-footer pt-0">
					<h5>Veja também</h5>
					<div class="row mx-0">
						<?php while (have_posts()): the_post(); ?>
							<article class="blog-item col-md-4">
								<a href="<?php the_permalink(); ?>">
			                        <span style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID , "full" ); ?>);"></span>
			                        <h6>
			                            <small><?php get_the_categorias($post->ID); ?></small>
			                            <?php the_title(); ?>
			                        </h6>
			                    </a>
							</article>
						<?php endwhile; ?>
					</div>
				</footer>
			<?php endif; wp_reset_query(); ?>
		</div>
	</section>	
<?php get_footer(); ?>