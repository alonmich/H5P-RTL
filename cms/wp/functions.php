<?php 

if ( ! function_exists( 'h5p_custom_css' ) ) {
	function h5p_custom_css(&$styles, $libraries, $embed_type) {

		$styles[] = (object) array(
		// Path must be relative to wp-content/uploads/h5p or absolute.
		'path' => __DIR__ . '/dist/css/rtl.css',
		'version' => '?ver=1' // Cache buster
		);

	}
	add_action('h5p_alter_library_styles', 'h5p_custom_css', 10, 3);  
}

if ( ! function_exists( 'h5p_custom_js' ) ) {
	function h5p_custom_js(&$scripts, $libraries, $embed_type) {
		$scripts[] = (object) array(
			// Path can be relative to wp-content/uploads/h5p or absolute.
			'path' => __DIR__ . '/dist/js/load.js',
			'version' => '?ver=1' // Cache buster
		);
	}

	add_action('h5p_alter_library_scripts', 'h5p_custom_js', 10, 3);
}