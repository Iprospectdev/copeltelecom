<aside class="blog-sidebar">
	<article class="blog-item-nav">
		<h5>Navegar por categorias</h5>
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
	</article>
	<article>
		<h5>MAIS VISTOS</h5>
		<?php 
			$sidebar = new WP_Query( 
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
		<?php if ($sidebar->have_posts()): $i = 0;?>
			<?php while($sidebar->have_posts()): $sidebar->the_post(); $i++; ?>
				<article class="blog-item">
					<a href="<?php the_permalink(); ?>">
                        <span style="background-image: url(<?php echo get_the_post_thumbnail_url( $post->ID , "full" ); ?>);"></span>
                        <h6>
                            <small><?php get_the_categorias($post->ID); ?></small>
                            <?php the_title(); ?>
                        </h6>
                    </a>
				</article>
			<?php endwhile ?>
		<?php endif; ?>
	</article>
</aside>