<aside class="blog-sidebar">
	<article>
		<div class="blog-categorias">
			<div class="text-left">
				<h2>Navegar por categorias</h2>
				<?php
					$categorias = get_terms("category");
					if ($categorias) {
						foreach ($categorias as $cat) {
							echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o">'.$cat->name.'</a>';
						}
					}
				?>
			</div>
		</div>
	</article>
	<article>
		<h2>MAIS VISTOS</h2>
		<div class="row highlight-blog">
			<?php 
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
			?>
			<?php if ($nova_consulta->have_posts()): $i = 0;?>
				<?php while($nova_consulta->have_posts()): $nova_consulta->the_post(); $i++; ?>
					<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-xs-12 bgcolor" data-color="#<?php echo ($i % 2 == 0)  ? "737c8f" : "ff9600"; ?>">
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
				<?php endwhile ?>
			<?php endif; ?>
		</div>
	</article>
</aside>