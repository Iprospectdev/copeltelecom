<?php 
	get_header();
	the_post();
	$term = get_term_by('slug', get_query_var('term'), 'faq-categoria' );
?>
	<section class="page-faq">
		<header class="faq-header">
			<div class="container">
				<div class="main-breadcrumb">
					<a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i>Home</a>
					<a href="<?php echo bloginfo('url'); ?>/faq">Perguntas frequentes</a>
					<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
				</div>

				<div class="row">
					<div class="col-md-6 col-12">
						<h2><?php echo $term->name; ?></h2>
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
						<svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="01_faq" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.200000003">
						        <g id="02_topico" transform="translate(-123.000000, -342.000000)">
						            <g id="faq/box/ico4" transform="translate(124.000000, 339.000000)">
						                <g id="Group" fill-rule="evenodd">
						                    <rect id="Rectangle" x="0" y="0" width="54" height="54"></rect>
						                </g>
						                <circle id="Oval-3" stroke="#464D5C" cx="22.8461538" cy="27" r="22.8461538"></circle>
						                <g id="Group-2" fill-rule="evenodd" transform="translate(16.615385, 14.538462)" stroke="#464D5C">
						                    <circle id="Oval-4" cx="7.26923077" cy="23.8846154" r="1.03846154"></circle>
						                    <path d="M0,1.27107692 C2.00077923,0.423688071 4.14275781,0 6.426,0 C8.00308481,0 9.40360926,0.258920488 10.6276154,0.776769231 C11.8516215,1.29461797 12.7990351,2.02430298 13.4698846,2.96584615 C14.1407341,3.90738932 14.4761538,4.99014773 14.4761538,6.21415385 C14.4761538,7.41462139 14.1525032,8.5091489 13.5051923,9.49776923 C12.8578814,10.4863896 11.8398531,11.4514568 10.4510769,12.393 C9.4624566,13.0756188 8.73277158,13.6523053 8.262,14.1230769 C7.79122842,14.5938485 7.46757781,15.1058049 7.29103846,15.6589615 C7.11449912,16.2121182 7.02623077,16.9476877 7.02623077,17.8656923 L7.02623077,18.5012308" id="Path" stroke-linecap="round"></path>
						                </g>
						            </g>
						        </g>
						    </g>
						</svg>
						<div class="faq-list">
							<ul>
								<?php 
									$args = array(
										'post_type'=> 'faq',
										'posts_per_page'=> -1,
										'tax_query' => array(
											array(
												'taxonomy' => 'faq-categoria',
												'field'    => 'slug',
												'terms'    => $term->slug
											),
										),
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
<?php
	get_footer();
?>