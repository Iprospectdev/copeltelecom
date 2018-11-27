<?php get_header(); ?>
	<section class="page-faq">
		<header class="faq-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/faq">Perguntas frequentes</a>
				</div>

				<div class="row">
					<div class="col-md-6 col-12">
						<h2>Perguntas frequentes</h2>
					</div>
					<div class="col-md-6 col-12">
						<form action="<?php bloginfo("url"); ?>/">
							<input type="hidden" name="post_type" value="faq">
							<input type="text" name="s" placeholder="Digite aqui sua dúvida">
							<button type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<nav class="faq-nav">
			<?php
				$categorias = get_terms("faq-categoria");
				foreach ($categorias as $cat):
					$term = get_term_by("slug", $cat->slug, "faq-categoria" );
					echo '<a href="'.get_term_link( $cat ).'">'.$cat->name.'</a>';
				endforeach;
			?>
		</nav>

		<div class="container faq-topics">
			<div class="row">
				<?php
					$categorias = get_terms("faq-categoria");
					foreach ($categorias as $cat):
						$term = get_term_by("slug", $cat->slug, "faq-categoria" );
				?>
					<div class="col-md-6">
						<div class="faq-topic">
							<h6>
								<?php 
									echo '<a href="'.get_term_link( $cat ).'">';
										$image = get_field('image', $cat);
										if($image) { echo '<img src="'.$image.'" alt="'.$cat->name.'">'; }
										echo $cat->name;
										echo '<i class="btn-more"></i>';
									echo '</a>';
								?>
							</h6>
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
									$query = new WP_Query($args);
									if($query->have_posts()):
										while($query->have_posts()):
											$query->the_post();
											echo  '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
										endwhile;
									endif;
									wp_reset_query();
								?>
							</ul>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>