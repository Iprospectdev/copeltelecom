<?php
	query_posts(array(
		"post_type" => "post",
		"posts_per_page" => 3
	));
?>
<?php if (have_posts()): ?>
<div class="wow fadeIn">
	<div class="container">
		<div class="row highlight-blog">
			<?php $i = 0; while(have_posts()): the_post(); $i++; ?>
			<a href="<?php the_permalink(); ?>" class="highlight-blog-item col-sm-4 col-xs-12 bgcolor" data-color="<?php echo ($i % 2 == 0) ? "#ff9600" : "#737c8f"; ?>">
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
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif ?>