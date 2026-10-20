<?php
/**
 * Błąd 404 — strona nie istnieje.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<section class="error-404">
	<p class="error-code">404</p>
	<h1><?php esc_html_e( 'Nie znaleziono strony', 'cybertarcza' ); ?></h1>
	<p><?php esc_html_e( 'Ten adres nie istnieje albo został przeniesiony. Spróbuj wyszukać to, czego szukasz:', 'cybertarcza' ); ?></p>
	<?php get_search_form(); ?>
	<p><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Wróć na stronę główną', 'cybertarcza' ); ?></a></p>
</section>
<?php
get_footer();
