<?php
   /*
   Plugin Name: H5P RTL
   Plugin URI: https://github.com/alonmich/H5P-RTL
   description: >-
  H5P is enabling educators create games for kids easily, using Moodle, Wordpress, Drupal, Joomla and other CMS's. H5P RTL brings RTL support to these games, to allow a better user experience in languages like Hebrew, Arabic, Aramaic, Azeri, Dhivehi/Maldivian, Kurdish (Sorani), Persian/Farsi, 
and Urdu.
   Version: 1.0
   Author: Shiran Michaeli, Alon Michaeli
   Author URI: http://education-fairy.com/
   License: MIT
   */

  function h5p_custom_css(&$styles, $libraries, $embed_type) {
	$styles[] = (object) array(
		// Path must be relative to wp-content/uploads/h5p or absolute.
		'path' => get_template_directory_uri() . '/h5p/custom.css',
		'version' => '?ver='.rand() // Cache buster
	  );

	  $styles[] = (object) array(
		// Path must be relative to wp-content/uploads/h5p or absolute.
		'path' => get_template_directory_uri() . '/h5p/rtl.css',
		'version' => '?ver='.rand() // Cache buster
	  );
  
	}

add_action('h5p_alter_library_styles', 'h5p_custom_css', 10, 3);  


function h5p_custom_js(&$scripts, $libraries, $embed_type) {
	$scripts[] = (object) array(
		// Path can be relative to wp-content/uploads/h5p or absolute.
		'path' => get_template_directory_uri() . '/h5p/custom.js',
		'version' => '?ver='.rand() // Cache buster
	  );
  }

  add_action('h5p_alter_library_scripts', 'h5p_custom_js', 10, 3);

?>