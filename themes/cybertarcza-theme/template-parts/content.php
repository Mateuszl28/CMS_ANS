<?php
/**
 * Karta wpisu na listach (strona główna, archiwa).
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article <?php post_class( 'card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="card-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
	<?php endif; ?>
	<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="card-date"><?php echo esc_html( get_the_date() ); ?></p>
	<?php the_excerpt(); ?>
</article>
