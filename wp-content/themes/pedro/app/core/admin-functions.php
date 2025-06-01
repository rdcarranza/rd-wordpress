<?php
/**
 * Admin functions - Functions that add some functionality to WordPress admin panel
 *
 * @package pedro
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register menus
 */
if ( ! function_exists( 'pedro_register_menus' ) ) {

	/**
	 * Register menus
	 *
	 * @since 1.1
	 */
	function pedro_register_menus() {

		/**
		 * Primary Menus
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'pedro' ),
			)
		);

	}
}

add_action( 'init', 'pedro_register_menus' );
