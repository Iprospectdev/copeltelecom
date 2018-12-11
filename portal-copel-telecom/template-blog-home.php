		<section class="blog-list blog-list-home">
			<div class="container wow fadeIn">
				<div class="owl-carousel">
					<article>
						<div class="highlight-blog row">
							<div class="highlight-blog-tt col-sm-4">
								<a href="<?php $p=get_page_by_title('Blog'); echo get_permalink($p->ID); ?>">
									<h4>Blog Conecta</h4>
									<small>Aqui tem dicas, informações e muito conteúdo para você.</small>
								</a>
							</div>
							
							<?php
								$args = get_posts(array(
									"post_type" => "post",
									"posts_per_page" => 9
								));
								$posts = get_posts($args);
							?>

							<?php for ($i = 0; $i <= 1; $i++): ?>
							<a href="<?php echo get_permalink($posts[$i]->ID); ?>" class="highlight-blog-item col-sm-4 bgcolor" data-color="#<?php echo ($i == 0) ? "737c8f" : "ff9600"; ?>">
								<?php if (has_post_thumbnail( $posts[$i]->ID )): ?>
									<?php echo get_the_post_thumbnail( $posts[$i]->ID , "thumb-blog" ); ?>
								<?php else: ?>
									<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/blog/redes.png" alt="">
								<?php endif ?>
								<dl>
									<dt>
										<span><?php get_the_categorias($posts[$i]); ?></span>
										<?php echo $posts[$i]->post_title; ?>
									</dt>
									<dd>
										<?php 
											if (@get_post_meta($posts[$i]->ID, "gravata", true)) {
												echo wpautop(get_post_meta($posts[$i]->ID, "gravata", true));
											} else {
												the_excerpt();
											}
										?>
									</dd>
								</dl>
							</a>
							<?php endfor; ?>

							<div class="highlight-blog-tags col-sm-8">
								<div>
									<?php
										$categorias = get_terms("category");
										if ($categorias) {
											foreach ($categorias as $cat) {
												echo '<a href="'. get_term_link($cat->slug, 'category') .'" class="bt-o btn_categorias_blog">'.$cat->name.'</a>';
											}
										}
									?>
								</div>
							</div>

							<?php for ($i = 2; $i <= 2; $i++): ?>
								<?php if ($posts[$i]): ?>
									<a href="<?php echo get_permalink($posts[$i]->ID); ?>" class="highlight-blog-item col-sm-4 h-tablet bgcolor" data-color="#737c8f">
										<?php if (has_post_thumbnail( $posts[$i]->ID )): ?>
											<?php echo get_the_post_thumbnail( $posts[$i]->ID , "thumb-blog" ); ?>
										<?php else: ?>
											<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/blog/redes.png" alt="">
										<?php endif ?>
										<dl>
											<dt>
												<span><?php get_the_categorias($posts[$i]); ?></span>
												<?php echo $posts[$i]->post_title; ?>
											</dt>
											<dd>
												<?php 
													if (get_post_meta($posts[$i]->ID, "gravata", true)) {
														echo wpautop(get_post_meta($posts[$i]->ID, "gravata", true));
													} else {
														the_excerpt();
													}
												?>
											</dd>
										</dl>
									</a>
								<?php endif; ?>
							<?php endfor; ?>

						</div>
					</article>
					<article>
						<div class="highlight-blog row">
							<?php for ($i = 3; $i <= 8; $i++): ?>
								<?php if ($posts[$i]): ?>
									<a href="<?php echo get_permalink($posts[$i]->ID); ?>" class="highlight-blog-item col-sm-4 bgcolor" data-color="<?php echo ($i % 2 == 0) ? "#ff9600" : "#737c8f"; ?>">
										<?php if (has_post_thumbnail( $posts[$i]->ID )): ?>
											<?php echo get_the_post_thumbnail( $posts[$i]->ID , "thumb-blog" ); ?>
										<?php else: ?>
											<img src="<?php bloginfo('template_url'); ?>/_assets/old/images/blog/redes.png" alt="">
										<?php endif ?>
										<dl>
											<dt>
												<span><?php get_the_categorias($posts[$i]); ?></span>
												<?php echo $posts[$i]->post_title; ?>
											</dt>
											<dd>
												<?php 
													if (get_post_meta($posts[$i]->ID, "gravata", true)) {
														echo wpautop(get_post_meta($posts[$i]->ID, "gravata", true));
													} else {
														the_excerpt();
													}
												?>
											</dd>
										</dl>
									</a>
								<?php endif; ?>
							<?php endfor; ?>
						</div>
					</article>

				</div>
			</div>
		</section>