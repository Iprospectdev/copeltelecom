<?php get_header('old'); ?>
	<section class="faq">
		<?php $categorias = get_terms("faq-categoria"); ?>
		<?php if ($categorias): ?>
		<header class="faq-header">
			<div class="container">
				<div class="faq-header-title">
					<h1>
						Perguntas Frequentes
					</h1>
					<h2>
						<span>Dúvidas sobre a internet 100% em fibra óptica?</span>
						A Copel Telecom responde.
					</h2>
				</div>
				<?php get_template_part("templates/faq", "form"); ?>
			</div>
		</header>

		<div class="faq-wrapper faq-list">
			<div class="container">
				<div class="row">
					<?php foreach ($categorias as $cat): ?>
					<div class="col-md-6 col-sm-12">
						<?php $term = get_term_by("slug", $cat->slug, "faq-categoria" ); ?>
						<article data-mh="faq-group">
							<header class="faq-tt">
								<i class="i-faq-planos"></i><?php echo $cat->name; ?>
								<a href="<?php echo get_term_link($cat->term_id); ?>"><small>Veja Mais <i class="fa fa-angle-right"></i></small></a>
							</header>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'posts_per_page'=> 6,
										'tax_query' => array(
											array(
												'taxonomy' => 'faq-categoria',
												'field'    => 'slug',
												'terms'    => $cat->slug
											),
										),
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo  '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						</article>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<footer><?php get_template_part('template', 'highlight-blog' ); ?></footer>

	</section>

<?php get_footer('old'); ?>