<?php
/**
 * Filtry modyfikujące wartości zwracane przez WordPressa.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filtr excerpt_length — krótsze zajawki na kartach wpisów (55 → 20 słów).
 * Funkcja filtra MUSI zwrócić wartość.
 *
 * @param int $length Domyślna liczba słów.
 */
function cybertarcza_excerpt_length( int $length ): int {
	return 20;
}
add_filter( 'excerpt_length', 'cybertarcza_excerpt_length' );

/**
 * Filtr excerpt_more — zamiast „[…]” wielokropek.
 */
function cybertarcza_excerpt_more(): string {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'cybertarcza_excerpt_more' );
