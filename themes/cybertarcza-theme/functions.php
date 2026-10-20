<?php
/**
 * Funkcje motywu CyberTarcza.
 *
 * @package CyberTarcza
 */

defined( 'ABSPATH' ) || exit;

define( 'CYBERTARCZA_VERSION', '0.1.0' );

/**
 * Podstawowe wsparcie motywu.
 */
function cybertarcza_setup(): void {
	load_theme_textdomain( 'cybertarcza', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'woocommerce' );

	register_nav_menus(
		array(
			'primary' => __( 'Menu główne', 'cybertarcza' ),
			'footer'  => __( 'Menu w stopce', 'cybertarcza' ),
		)
	);
}
add_action( 'after_setup_theme', 'cybertarcza_setup' );

/**
 * Style i skrypty motywu.
 */
function cybertarcza_assets(): void {
	$uri = get_template_directory_uri();

	wp_enqueue_style( 'cybertarcza-main', $uri . '/assets/css/main.css', array(), CYBERTARCZA_VERSION );
	wp_enqueue_script( 'cybertarcza-main', $uri . '/assets/js/main.js', array(), CYBERTARCZA_VERSION, array( 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'cybertarcza_assets' );
