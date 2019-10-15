<?php get_header();/* Template Name: Blog */ ?>

<?php
	$posts_query = new WP_Query(array(
		"post_type" => "post",
		"posts_per_page" => 9,
		"offset" => 7
	));
?>
	<section class="blog">

		<header class="blog-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/blog">Blog Conecta</a>
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
			<div class="row d-block mx-0">
				<?php
					query_posts(array(
						"post_type" => "post",
						'paged' => get_query_var( 'paged' )
					));
					$i = 0;
				?>
				<?php while (have_posts()): the_post(); ?>
					<?php
						if($i==0 && get_query_var( 'paged' )<=1){
							$class = 'col-md-12 col-sm-12 col-12 float-left';
						}elseif($i==4 && get_query_var( 'paged' )<=1){
							$class = 'col-md-8 col-sm-12 col-12 float-right';
						}elseif($i==9 && get_query_var( 'paged' )>1){
							$class = 'col-12 float-left';
						}else{
							$class = 'col-md-4 col-sm-6 col-12 float-left';
						}
					?>
					<article class="<?php echo $class; ?> blog-item">
						<a href="<?php the_permalink(); ?>">
	                        <span style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID , "full" ); ?>);"></span>
	                        <h6>
	                            <small><?php get_the_categorias($post->ID); ?></small>
	                            <?php the_title(); ?>
	                        </h6>
	                    </a>
					</article>
					<?php if($i==2 && get_query_var( 'paged' )<=1): ?>
						<aside class="col-md-4 col-sm-6 col-12 blog-item-nav">
							<h6>Navegar por categorias</h6>
							<nav>
							<?php
								$categorias = get_terms("category");
								if ($categorias) {
									foreach ($categorias as $cat) {
										echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o">'.$cat->name.'</a>';
									}
								}
							?>
							</nav>
						</aside>
					<?php endif; ?>

					<?php 
						if($i==5 && get_query_var( 'paged' )<=1): 
							$nova_consulta = new WP_Query( 
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
							if($nova_consulta->have_posts()):
					?>
						<aside class="col-md-4 col-sm-6 col-xs-12 float-left blog-most-viewed">
							<h6>Mais Vistos</h6>
							<?php
					        	while ( $nova_consulta->have_posts() ):
						            $nova_consulta->the_post();
						            $post_counter = get_post_meta( $post->ID, 'post_counter', true );
									$categoria = get_terms("category");
										if ($categoria) {
											$categoria = $categoria[0];
											$categoria = '<strong>'.$categoria->name.'</strong>';
										}
							            echo '<a href="'.get_permalink($post->ID).'" title="'.get_the_title().'"><strong>'.$categoria.'</strong>'.get_the_title().'</a>';
						        endwhile;
						    ?>
						</aside>
					<?php 
							endif;
						endif;
					?>
				<?php $i++; endwhile; ?>
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
			</div>
			<div class="clearfix"></div>
		</div>

	</section>
<?php get_footer(); ?>