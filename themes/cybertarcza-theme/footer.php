<?php
/**
 * Stopka strony.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>
<footer class="site-footer">
	<div class="container">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="footer-widgets"><?php dynamic_sidebar( 'footer-1' ); ?></div>
		<?php endif; ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container'      => false,
				'menu_class'     => 'footer-menu',
				'fallback_cb'    => false,
				'depth'          => 1,
			)
		);
		?>
		<p class="copyright">&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
<?php wp_footer(); // Obowiązkowe — bez tego nie zadziała pasek admina ani skrypty. ?>
</body>
</html>
