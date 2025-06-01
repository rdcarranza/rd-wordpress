<?php
/**
 * Sidebar Config.
 *
 * @package pedro
 * @author hmrisad
 */

if ( ! defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	die();
}

if ( ! function_exists( 'pedro_widgets_init' ) ) :

	/**
	 * Registering widget / sidebar for the theme
	 *
	 * @return void
	 */
	function pedro_widgets_init() {

		// register Main sidebar widgets.
		register_sidebar(
			array(
				'name'          => __( 'Main Sidebar', 'pedro' ),
				'id'            => 'main-sidebar',
				'description'   => '',
				'before_widget' => '<aside class="single-widget">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h4 class="widget-title"',
				'after_title'   => '</h4>',
			)
		);

	}

endif;

add_action( 'widgets_init', 'pedro_widgets_init' );
