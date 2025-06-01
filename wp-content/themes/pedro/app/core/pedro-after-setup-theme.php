<?php

/**
 * pedro functions and definitions.
 * Text Domain: pedro
 * When using a child theme (see https://codex.wordpress.org/Theme_Development
 * and https://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * For more information on hooks, actions, and filters,
 * see https://codex.wordpress.org/Plugin_API
 *
 * pedro is a very powerful theme and virtually anything can be customized
 * via a child theme.
 *
 * @package     pedro
 * @author      hmrisad
 * @since       pedro 1.1
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * pedro_After_Setup_Theme initial setup
 *
 * @since 1.1
 */
if (! class_exists('pedro_After_Setup_Theme')) {

	function pedro_theme_setup()
	{
		// Add support for featured images
		add_theme_support('post-thumbnails');

		// Add Multi Language Support
		load_theme_textdomain('pedro', get_template_directory_uri() . '/languages');

		// Add Title Tag
		add_theme_support('title-tag');

		// Feed Links
		add_theme_support('automatic-feed-links');


		// Enable support for block styles
		add_theme_support('wp-block-styles');

		// Enable responsive embeds
		add_theme_support('responsive-embeds');

		// Enable wide alignment options
		add_theme_support('align-wide');

		// Enable custom logo support
		add_theme_support('custom-logo', [
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		]);

		// Add support for HTML5
		add_theme_support('html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		));

		// add support custom header
		add_theme_support('custom-header', [
			'width'         => 1200,  // Set the width of the header
			'height'        => 400,   // Set the height of the header
			'flex-width'    => true,  // Allow flexible width
			'flex-height'   => true,  // Allow flexible height
			'header-text'   => false, // Disable header text over the image
		]);

		// add support custom background
		add_theme_support('custom-background', [
			'default-color' => 'ffffff', // Default background color (white)
			'default-image' => '',       // Default background image (none)
		]);

		// Add nav menu
		register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'pedro'),
		));
	}

	// Add editor styles to match frontend
	add_theme_support('editor-styles');
	add_editor_style('assets/css/editor-style.css');

	add_action('after_setup_theme', 'pedro_theme_setup');
}



// Optional: Register a block pattern (if needed)
function pedro_register_block_pattern()
{
	register_block_pattern(
		'pedro/custom-pattern',
		[
			'title'   => __('Custom Pattern', 'pedro'),
			'content' => '<!-- wp:paragraph --><p>Hello, World!</p><!-- /wp:paragraph -->',
		]
	);
}
add_action('init', 'pedro_register_block_pattern');

// Optional: Register a block style (if needed)
function pedro_register_block_style()
{
	register_block_style(
		'core/paragraph',
		[
			'name'  => 'custom-style',
			'label' => __('Custom Style', 'pedro'),
		]
	);
}
add_action('init', 'pedro_register_block_style');
