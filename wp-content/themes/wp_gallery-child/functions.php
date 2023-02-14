<?php


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

function gallery_scripts() {
	wp_enqueue_style( 'wp-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'wp-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'wp-slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'wp-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'wp-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'wp-css3', get_template_directory_uri() . '/assets/css/css3.css' );
	wp_enqueue_style( 'wp-style', get_template_directory_uri() . '/assets/css/style1.css' );

	

	wp_enqueue_script( 'jquery-1.12.4.min', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js' );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.min.js' );
	wp_enqueue_script( 'waypoints-min', get_template_directory_uri() . '/assets/js/waypoints.min.js' );
	wp_enqueue_script( 'jquery-counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js' );
	wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/assets/js/portfolio.js' );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gallery_scripts' );
