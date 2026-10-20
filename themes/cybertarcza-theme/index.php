<?php
/**
 * Główny szablon (fallback hierarchii szablonów).
 *
 * @package CyberTarcza
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</article>
		<?php
	endwhile;
	the_posts_pagination();
else :
	?>
	<p><?php esc_html_e( 'Brak treści do wyświetlenia.', 'cybertarcza' ); ?></p>
	<?php
endif;

get_footer();
