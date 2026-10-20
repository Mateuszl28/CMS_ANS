<?php
/**
 * Strona główna. Główne zapytanie dotyczy samej strony, a ostatnie wpisy
 * pobieramy własnym WP_Query.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<section class="hero">
	<h1><?php bloginfo( 'name' ); ?></h1>
	<p><?php bloginfo( 'description' ); ?></p>
</section>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<div class="entry-content"><?php the_content(); ?></div>
	<?php
endwhile;
?>

<section class="latest">
	<h2><?php esc_html_e( 'Z bloga', 'cybertarcza' ); ?></h2>
	<div class="cards">
		<?php
		$cybertarcza_latest = new WP_Query(
			array(
				'post_type'           => 'post',
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true, // Nie liczymy stron — szybsze zapytanie.
			)
		);
		while ( $cybertarcza_latest->have_posts() ) :
			$cybertarcza_latest->the_post();
			get_template_part( 'template-parts/content' );
		endwhile;
		wp_reset_postdata(); // Przywraca globalny $post — zawsze po własnym WP_Query.
		?>
	</div>
</section>
<?php
get_footer();
