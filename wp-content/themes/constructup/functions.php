<?php
add_action( 'wp_enqueue_scripts', 'constructp_theme_css',999);
function constructp_theme_css() {
    wp_enqueue_style( 'constructp-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'constructp-child-style', get_stylesheet_uri(), array( 'constructp-parent-style' ) );
	wp_enqueue_style( 'constructp-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
	wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
}
?>