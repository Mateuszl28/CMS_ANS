<?php
/**
 * Pojedynczy wpis: pełna treść, data, autor, kategorie.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article <?php post_class( 'entry' ); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php cybertarcza_post_meta(); ?>
		</header>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>
		<div class="entry-content"><?php the_content(); ?></div>
		<?php the_tags( '<p class="entry-tags">' . esc_html__( 'Tagi: ', 'cybertarcza' ), ', ', '</p>' ); ?>
	</article>
	<?php
	the_post_navigation(
		array(
			'prev_text' => '&larr; %title',
			'next_text' => '%title &rarr;',
		)
	);
endwhile;

get_footer();
