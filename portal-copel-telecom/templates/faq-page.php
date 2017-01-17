<?php

	if(is_single()){
		$term = get_the_terms($post->ID,'faq-categoria');	
		$postID = $post->ID;
		$term = $term[0];
	}else{
		$term = get_term_by('slug', get_query_var('term'), 'faq-categoria' );
	}
	
?>

	<section class="faq">
		<header class="faq-header">
			<div class="container">
				<div class="faq-header-title">
					<h1>
						<?php 
							if(is_single()){ the_title(); }
						?>

						<?php
							if(is_tax()){
						?>
							
							<div class="faq-header-title">
								<h1>
									Perguntas Frequentes
								</h1>
								<h2><?php echo $term->name; ?></h2>
							</div>
						<?php
							}
						?>
						<?php
							if(is_search()){
						?>
							<div class="faq-header-title">
								<h1>
									Perguntas Frequentes
								</h1>
								<h2>
									<span>Dúvidas sobre a internet 100% em fibra óptica?</span>
									A Copel Telecom responde.
								</h2>
							</div>
						<?php
							}
						?>
					</h1>
				</div>
				<?php get_template_part("templates/faq", "form"); ?>
			</div>
		</header>
		<div class="faq-wrapper faq-single">
			<div class="container">
				<div class="row">
					<article class="col-md-8 col-sm-12 col-xs-12" data-mh="faq-single-group">
						<header class="faq-tt">
							<a href="<?php echo get_post_type_archive_link('faq'); ?>"><small class="pull-left">Perguntas Frequentes <i class="fa fa-angle-left"></i></small></a>
							<br>
							<?php
								if (is_search()) {
									echo "Busca por: " . get_search_query();
								}
							?>
						</header>
						<?php if(is_single()): ?>
							<div class="faq-content">
								<?php the_content(); ?>
							</div>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> 6,
										'orderby' => 'rand',
										'post__not_in' => array( $postID )
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php elseif (is_search()) : ?>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> -1,
										's' => $_GET["s"]
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php else: ?>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'post_per_page'=> -1,
										'tax_query' => array(
											array(
												'taxonomy' => 'faq-categoria',
												'field'    => 'slug',
												'terms'    => get_query_var('term')
											),
										),
									);
									query_posts($args);
									if(have_posts()):
										while(have_posts()):
											the_post();
											echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						<?php endif; ?>
					</article>
					<aside class="col-md-4 col-sm-12 col-xs-12" data-mh="faq-single-group">
						<?php if (is_single()): ?>
						<h6 class="faq-tt">Perguntas relacionadas</h6>
						<ul>
							<?php 
								$args = array(
									'post_type'=> 'faq',
									'post_per_page'=> 6,
									'tax_query' => array(
										array(
											'taxonomy' => 'faq-categoria',
											'field'    => 'slug',
											'terms'    => $term->slug,
										),
									),
									'post__not_in' => array( $postID )
								);
								query_posts($args);
								if(have_posts()):
									while(have_posts()):
										the_post();
										echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
									endwhile;
								endif;
								wp_reset_query();
							?>
						</ul>
						<a href="<?php echo get_term_link($term->term_id, "faq-categoria"); ?>" id="faq-bt-all">VEJA TODAS</a>
						<?php endif; ?>
						
						<?php $categorias = get_terms("faq-categoria"); ?>
						<?php if ($categorias): ?>
						<div id="faq-outros">
							<?php foreach ($categorias as $cat): ?>
								<a href="<?php echo get_term_link($cat->term_id); ?>" class="faq-tt"><i class="<?php iconeFaq($cat->slug); ?>"></i><?php echo $cat->name; ?></a>
							<?php endforeach ?>
						</div>
						<?php endif ?>
					</aside>
				</div>
			</div>
		</div>
		<footer><?php get_template_part('template', 'highlight-blog' ); ?></footer>
	</section>