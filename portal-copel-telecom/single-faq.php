<?php get_header(); the_post(); ?>
	<section class="page-faq">
		<header class="faq-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/faq">Dúvidas Gerais</a>
				</div>

				<div class="row">
					<div class="col-md-6 col-12">
						<h2>Dúvidas Gerais</h2>
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

		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="faq-content">
						<div class="post-content">
							<div class="faq-heading">
								<h1><?php the_title(); ?></h1>
							</div>
							<?php the_content(); ?>
						</div>

						<div class="faq-list faq-list--related">
							<h6>Perguntas relacionadas</h6>
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'posts_per_page'=> -1
									);

									$query = new WP_Query($args);
									if($query->have_posts()):
										while($query->have_posts()):
											$query->the_post();
											echo  '<li><a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a></li>';
										endwhile;
									endif;
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<?php get_sidebar('faq') ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>