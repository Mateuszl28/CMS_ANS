<?php
/**
 * Strona statyczna (page).
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
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>
		<div class="entry-content"><?php the_content(); ?></div>
	</article>
	<?php
endwhile;

get_footer();
