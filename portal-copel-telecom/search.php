<?php
	if($_GET['post_type']=='faq'){
		get_template_part( 'search','faq' );
	} else {
		get_template_part( 'search','blog' );
	}
?>