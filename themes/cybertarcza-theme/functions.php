<?php
/**
 * Funkcje motywu CyberTarcza.
 *
 * Plik tylko dołącza moduły z katalogu inc/ — każdy odpowiada za jeden obszar.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Blokada bezpośredniego wywołania pliku.
}

require_once get_theme_file_path( 'inc/setup.php' );
require_once get_theme_file_path( 'inc/assets.php' );
require_once get_theme_file_path( 'inc/widgets.php' );
require_once get_theme_file_path( 'inc/template-tags.php' );
require_once get_theme_file_path( 'inc/filters.php' );
