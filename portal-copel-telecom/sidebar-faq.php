<div class="faq-sidebar">
	<?php
		$categorias = get_terms("faq-categoria");
		foreach ($categorias as $cat):
			$term = get_term_by("slug", $cat->slug, "faq-categoria" );
			echo '<a href="'.get_term_link( $cat ).'" class="blog-faq-item">';
			// $image = get_field('image');
			// if($image) {
			// 	echo '<img src="'.$image.'" alt="'.$cat->name.'">';	
			// }
			echo $cat->name;
			echo '</a>';
		endforeach;
	?>
</div>