<?php
/**
 * Szablon awaryjny — obsługuje każdy widok bez bardziej szczegółowego szablonu.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<?php if ( have_posts() ) : ?>
	<div class="cards">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile;
		?>
	</div>
	<?php the_posts_pagination(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Brak treści.', 'cybertarcza' ); ?></p>
<?php endif; ?>
<?php
get_footer();
