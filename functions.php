<?php

	// Hide Admin Bar when logged in
  add_filter('show_admin_bar', '__return_false');

  // Allow plugin shortcode in sidebar widgets
  add_filter('widget_text', 'do_shortcode');

	// Clean up the <head>
	function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
  }
  add_action('init', 'removeHeadLinks');

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

  function chadtattooFeatures() {
    add_theme_support('title-tag');

    // featured images for blog posts
    add_theme_support('post-thumbnails');
    
    // add_image_size('pageBanner', 1500, 350, true);
  }
  
  add_action('after_setup_theme', 'chadtattooFeatures');
	

  // CSS
	function chadtattoo_theme_styles() {
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Pirata+One|Trade+Winds' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	}

	add_action( 'wp_enqueue_scripts', 'chadtattoo_theme_styles' );

  // Javascript
	function chadtattoo_theme_js() {
    wp_deregister_script('jquery');
    
    wp_enqueue_script( 'jquery_js', 'https://code.jquery.com/jquery-3.3.1.min.js', '', '', true);

    wp_enqueue_script( 'tether_js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '', true);

    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', '', true );

    wp_enqueue_script( 'instafetch', 'https://cdnjs.cloudflare.com/ajax/libs/instafetch.js/1.5.0/instafetch.min.js', '', '', true);

    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', '', '', true );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', '', '', true);
	}

	add_action( 'wp_enqueue_scripts', 'chadtattoo_theme_js' );

?>
