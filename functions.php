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

	function wpt_excerpt_length( $length ) {
		return 16;
	}
	add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

	function register_theme_menus() {
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'chadtattoo' )
			)
		);
	}
	add_action( 'init', 'register_theme_menus' );

	function wpt_create_widget( $name, $id, $description ) {
		register_sidebar(array(
			'name' => __( $name ),
			'id' => $id,
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="module-heading">',
			'after_title' => '</h2>'
		));
	}

	wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );

	function wpt_theme_styles() {
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	function wpt_theme_js() {
    wp_enqueue_script( 'jquery_js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', '', true);

    wp_enqueue_script( 'tether_js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', true);

    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', true );

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );

	}
	add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );





?>
