<?php


if (! defined('ABSPATH')) {
	exit;
}

/**
 * Theme Enqueue Scripts
 */
if (! class_exists('pedro_enqueue_scripts')) {

	/**
	 * Theme Enqueue Scripts
	 */
	function pedro_enqueue_scripts()
	{
		// Enqueue styles
		wp_enqueue_style('pedro-bootstrap', PEDRO_THEME_URI . 'assets/css/bootstrap.min.css', array(), '5.3.3', 'all');
		wp_enqueue_style('pedro-fontawesome', PEDRO_THEME_URI . 'assets/css/all.min.css', array(), '6.6.0', 'all');
		wp_enqueue_style('pedro-core-css', PEDRO_THEME_URI . 'assets/css/pedro-core.css', array(), '1.0', 'all');
		wp_enqueue_style('dashicons');
		// Enqueue scripts

		wp_enqueue_script('pedro-bootstrap', PEDRO_THEME_URI . 'assets/js/bootstrap.min.js', array('jquery'), '5.3.3', true);
		wp_enqueue_script('pedro-core-js', PEDRO_THEME_URI . 'assets/js/pedro-core.js', array(), '1.0', true);
	}
	add_action('wp_enqueue_scripts', 'pedro_enqueue_scripts');
}


// comment reply
function theme_enqueue_comment_reply()
{
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'theme_enqueue_comment_reply');
