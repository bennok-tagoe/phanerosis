<?php 
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function add_spotter_assets(){

	// Stylesheets from spotter theme
	wp_enqueue_style('spotter-style',get_stylesheet_uri());

	wp_enqueue_style('spotter-fontawesome', get_template_directory_uri().'/fonts/font-awesome.css');

	wp_enqueue_style('spotter-montserrat','http://fonts.googleapis.com/css?family=Montserrat:400,700');

	wp_enqueue_style('spotter-bootstrap', get_template_directory_uri().'/bootstrap/css/bootstrap.css');
    
    wp_enqueue_style('spotter-bootstrapselect', get_template_directory_uri().'/css/bootstrap-select.min.css');


    wp_enqueue_style('spotter-owl', get_template_directory_uri().'/css/owl.carousel.css');

    wp_enqueue_style('spotter-custom', get_template_directory_uri().'/css/user.style.css');


    // Scripts from spotter theme
	wp_enqueue_script( 'spotter-before', get_template_directory_uri() . '/js/before.load.js');
	wp_enqueue_script( 'spotter-jqueryone', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js');
	wp_enqueue_script( 'spotter-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'spotter-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');
	wp_enqueue_script( 'spotter-bootstrapselectjs', get_template_directory_uri() . '/js/bootstrap-select.min.js');
	wp_enqueue_script( 'spotter-custom', get_template_directory_uri() . '/js/custom.js');
}
add_action('wp_enqueue_scripts', 'add_spotter_assets' );