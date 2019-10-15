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
					<a href="#">Resultado da busca</a>
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

		<?php if(have_posts()): ?>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="blog-single-content">
							<div class="blog-search-header">
								<h2>
									<small>Busca por</small> "<?php echo get_query_var('s'); ?>"
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
		<?php else: ?>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12 d-flex d-column align-items-center justify-content-start">
						<div class="blog-single-content">
							<div class="blog-search-header">
								<h2>
									<small>Não foi encontrado nenhum resultado para </small><br>
									"<?php echo get_query_var('s'); ?>"
								</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 blog-sidebar-hidden">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php
					$moreviewed = new WP_Query( 
					    array(
					        'posts_per_page'      => 5,
					        'no_found_rows'       => true,
					        'post_status'         => 'publish',
					        'ignore_sticky_posts' => true,
					        'orderby'             => 'meta_value_num',
					        'meta_key'            => 'post_counter',
					        'order'               => 'DESC'
					    )
					);
					$i = 0;
					if ($moreviewed->have_posts()):
				?>
					<div class="blog-single-footer">
						<div class="row mx-0">
							<?php while ($moreviewed->have_posts()): $moreviewed->the_post(); $i++; ?>
								<?php 
									if($i==1) {
										echo '<div class="blog-item-confira col-md-4"><p>O que você procura talvez esteja nos posts mais acessados. <strong>Confira!</strong></p></div>';
									}
								?>
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
					</div>
				<?php endif; wp_reset_query(); ?>
				<div class="blog-faq">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-2">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="blog-faq-heading">
										<h6>
											Ainda não encontrou o que procurava?<br>
											<strong>Veja as principais dúvidas por tema.</strong>
										</h6>
									</div>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-ei.svg" alt="Dúvidas gerais">Dúvidas gerais
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-suporte.svg" alt="Suporte técnico">Suporte técnico
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-conta.svg" alt="Sua conta">Sua conta
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-ei.svg" alt="Internet Copel Telecom">Internet Copel Telecom
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-wifi.svg" alt="Wi-fi">Wi-fi
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-wifi.svg" alt="Wi-fi litoral">Wi-fi litoral
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-cnja.svg" alt="CN Já!">CN Já!
									</a>
								</div>
								<div class="col-md-4 col-12">
									<a href="#" class="blog-faq-item">
										<img src="<?php bloginfo('template_url'); ?>/_assets/images/icon-faq-ei.svg" alt="EI Plus">EI Plus
									</a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</section>	
<?php get_footer(); ?>