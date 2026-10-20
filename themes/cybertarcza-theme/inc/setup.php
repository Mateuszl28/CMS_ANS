<?php
/**
 * Konfiguracja motywu: wsparcie funkcji WordPressa i menu.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Akcja after_setup_theme — rejestrujemy możliwości motywu.
 */
function cybertarcza_setup(): void {
	load_theme_textdomain( 'cybertarcza', get_theme_file_path( 'languages' ) );

	add_theme_support( 'title-tag' );        // WP sam generuje <title>.
	add_theme_support( 'post-thumbnails' );  // Obrazki wyróżniające.
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'woocommerce' );

	register_nav_menus(
		array(
			'primary' => __( 'Menu główne', 'cybertarcza' ),
			'footer'  => __( 'Menu w stopce', 'cybertarcza' ),
		)
	);
}
add_action( 'after_setup_theme', 'cybertarcza_setup' );
