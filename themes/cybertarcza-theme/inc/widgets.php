<?php
/**
 * Obszary widgetów.
 *
 * @package CyberTarcza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Akcja widgets_init — obszar widgetów w stopce.
 */
function cybertarcza_widgets(): void {
	register_sidebar(
		array(
			'name'          => __( 'Stopka', 'cybertarcza' ),
			'id'            => 'footer-1',
			'description'   => __( 'Widgety wyświetlane w stopce strony.', 'cybertarcza' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'cybertarcza_widgets' );
