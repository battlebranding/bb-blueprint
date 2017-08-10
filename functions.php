<?php

add_theme_support( 'post-thumbnails' );

/**
 * Load all of the styles
 *
 * @since 0.1.0
 */
function blueprint_load_css() {
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'bb-blueprint', get_template_directory_uri() . '/assets/css/blueprint.css', false, null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'blueprint_load_css' );

/**
 * Load all of the javascript
 *
 * @since 0.1.0
 */
function bb_gailscorner_load_js() {
    wp_enqueue_script( 'bb-blueprint', get_template_directory_uri() . '/assets/js/blueprint.js', false, null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'bb_gailscorner_load_js', 20 );


function bp_image( $filename = '' ) {
	echo get_stylesheet_directory_uri() . '/assets/images/' . untrailingslashit( $filename );
}

function bp_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'bp_woocommerce_support' );

function bp_register_menus() {

	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'bb-blueprint' ),
	) );

}

add_action( 'init', 'bp_register_menus', 10 );

function bp_get_page_title() {

	if ( is_home() ) {
		return get_bloginfo();
	} else {
		return the_title() . ' | ' . get_bloginfo();
	}

}

include 'inc/inc-woocommerce.php';
