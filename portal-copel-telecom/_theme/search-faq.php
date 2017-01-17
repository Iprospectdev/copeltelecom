<?php

include '../../../../wp-load.php';

$response = array();

$args = array(
	"post_type" => "faq",
	"s"	=> $_GET["q"],
	"posts_per_page" => 20
);
query_posts($args);
if (have_posts()) {
	while (have_posts()) {
		the_post();
		$response[] = array (
			"title" => $post->post_title,
			"url" => get_permalink($post->ID)
		);
	}
}

echo json_encode($response);