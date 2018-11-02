<?php get_header('old'); ?>

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
					<div class="col-sm-6">
						<form action="<?php bloginfo("url"); ?>/" class="blog-search">
							<input type="hidden" name="post_type" value="post">
							<label for="" class="autocomplete">
								<input type="text" name="s" placeholder="Buscar assunto">
								<button type="submit"><i class="i-faq-search"></i></button>
							</label>
						</form>
					</div>
				</div>
			</div>
		</header>
		<div class="blog-list blog-margin-top">
			<div class="container">
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
							$class = 'col-xs-12 large';
							$style = 'height: 500px;';
						}elseif($i==4 && get_query_var( 'paged' )<=1){
							$class = 'col-md-8 col-sm-12 col-xs-12 pull-right';
							$style = 'height: 540px';
						}elseif($i==9 && get_query_var( 'paged' )>1){
							$class = 'col-xs-12';
							$style = 'height: 500px;';
						}else{
							$class = 'col-md-4 col-sm-6 col-xs-12';
							$style = '';
						}
					?>
					<article>
						<a href="<?php the_permalink(); ?>" class="highlight-blog-item bgcolor <?php echo $class; ?>" data-color="<?php echo ($i % 2 == 0) ? "#737c8f" : "#ff9600"; ?>" style="<?php echo $style; ?>">
							<?php
								if (has_post_thumbnail( $post->ID )){
									if($i==0){
										echo get_the_post_thumbnail( $post->ID , "full" );
									}else{
										echo get_the_post_thumbnail( $post->ID , "thumb-blog" );
									}
								}
							?>
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
					</article>
					<?php if($i==2 && get_query_var( 'paged' )<=1): ?>
						<aside class="col-md-4 col-sm-6 col-xs-12 highlight-blog-item-categories bg-white">
							<span>Navegar por categorias</span>
							<?php
								$categorias = get_terms("category");
								if ($categorias) {
									foreach ($categorias as $cat) {
										echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o">'.$cat->name.'</a>';
									}
								}
							?>
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
						<aside class="col-md-4 col-sm-6 col-xs-12 highlight-blog-item-maisvistos" style="height: 540px;">
							<span>Mais Vistos</span>
							<ul>
								<?php
						        	while ( $nova_consulta->have_posts() ):
							            $nova_consulta->the_post();
							            $post_counter = get_post_meta( $post->ID, 'post_counter', true );
										$categoria = get_terms("category");
										echo '<li>';
											if ($categoria) {
												$categoria = $categoria[0];
												echo '<a href="'. get_term_link($categoria->slug, 'category') .'"><small>'.$categoria->name.'</small></a>';
											}
								            echo '<a href="'.get_permalink($post->ID).'" title="'.get_the_title().'">'.get_the_title().'</a>';
							            echo '</li>';
							        endwhile;
							    ?>
						    </ul>
						</aside>
					<?php 
							endif;
						endif;
					?>
				<?php $i++; endwhile; ?>
				<div class="pagination">
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
		</div>


	</section>
<?php get_footer('old'); ?>