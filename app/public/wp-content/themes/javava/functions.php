<?php

function my_do_shortcode_tag( $output, $tag, $attr ) {
	if ( 'mwform_formkey' == $tag
	// && isset( $attr['key'] ) && '1234' == $attr['key'] 
	) {
		$output = str_replace(
			'<form method="post" action="" enctype="multipart/form-data">',
			'<form method="post" action="" enctype="multipart/form-data" id="contact_form">',
			$output
		);
	}
	return $output;
}
add_filter( 'do_shortcode_tag', 'my_do_shortcode_tag' ,10, 3 );

wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), 1.0, true);
wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), 4.0, true);

//アイキャッチ画像を利用
add_theme_support('post-thumbnails');

