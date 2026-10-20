<?php
/**
 * Funkcje pomocnicze używane w szablonach.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Metadane wpisu: data publikacji, autor, kategorie.
 */
function cybertarcza_post_meta(): void {
	$categories = get_the_category_list( ', ' );
	?>
	<p class="entry-meta">
		<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
		&middot;
		<?php
		printf(
			/* translators: %s: autor wpisu */
			esc_html__( 'Autor: %s', 'cybertarcza' ),
			'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
		);
		?>
		<?php if ( $categories ) : ?>
			&middot; <?php echo wp_kses_post( $categories ); ?>
		<?php endif; ?>
	</p>
	<?php
}
