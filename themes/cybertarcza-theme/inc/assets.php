<?php
/**
 * Style i skrypty motywu.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Akcja wp_enqueue_scripts — kolejkujemy CSS i JS (zamiast <link> w nagłówku).
 * Wersja motywu w parametrze wymusza odświeżenie plików po zmianie.
 */
function cybertarcza_assets(): void {
	$ver = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'cybertarcza-main', get_theme_file_uri( 'assets/css/main.css' ), array(), $ver );
	wp_enqueue_script( 'cybertarcza-main', get_theme_file_uri( 'assets/js/main.js' ), array(), $ver, array( 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'cybertarcza_assets' );
