<aside class="blog-sidebar">
	<form action="<?php bloginfo("url"); ?>/" class="faq-form-search faq-form-search-gray">
		<input type="hidden" name="post_type" value="post">
		<label for="" class="autocomplete">
			<input type="text" name="s" placeholder="Buscar assunto">
			<button type="submit"><i class="i-faq-search-gray"></i></button>
		</label>
	</form>
	<article>
		<h2>EDIÇÕES ESPECIAIS</h2>
		<div class="row highlight-blog">
			<?php query_posts("post_type=post&posts_per_page=3&orderby=rand"); ?>
			<?php if (have_posts()): $i = 0;?>
				<?php while(have_posts()): the_post(); $i++; ?>
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
</aside>