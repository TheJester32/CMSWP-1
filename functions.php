<?php 

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style('styles',  get_template_directory_uri() . '/assets/styles/styles.css');
    wp_enqueue_style('styles',  get_template_directory_uri() . '/assets/images');
});

add_action( 'wp_enqueue_scripts', function() {
	wp_deregister_script( 'jquery');
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery');
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?> 
