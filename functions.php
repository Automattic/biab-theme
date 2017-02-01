<?php
/**
 * Functions
 */


/**
 * Nav Menu
 */
 
function register_custom_menu() {
	register_nav_menu('primary', __('Primary Navigation'));
}
add_action('init', 'register_custom_menu');


/**
 * Theme Aspects
 */

function biab_setup() {

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'post-thumbnails' );
	add_image_size( 'biab-featured-image', 720, 540, true );

	// Works when Jetpack is installed
	add_theme_support( 'infinite-scroll', array(
	    'container' => 'content',
	    'footer' => false,
	) );

}
add_action( 'after_setup_theme', 'biab_setup' );


/**
 * Widgets
 */

function biab_widgets_init() {

	register_sidebar( array(
		'name'          => 'Widgets',
		'id'            => 'widgets',
		'before_widget' => '<div class="widgets">',
		'after_widget'  => '</div>',
		/*'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>', */
	) );

}
add_action( 'widgets_init', 'biab_widgets_init' );