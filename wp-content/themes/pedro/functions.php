<?php

if (! defined('ABSPATH')) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	die();
}

/**
 * Theme Defined Constant
 */
define('PEDRO_THEME_VERSION', '1.0.3');
define('PEDRO_THEME_DIR', untrailingslashit(get_template_directory()) . '/');
define('PEDRO_THEME_URI', untrailingslashit(get_template_directory_uri()) . '/');


/**
 * Loading Core File and Script Loader.
 */
require_once PEDRO_THEME_DIR . 'app/core/pedro-after-setup-theme.php';
require_once PEDRO_THEME_DIR . 'app/core/pedro-enqueue-scripts.php';
require_once PEDRO_THEME_DIR . 'app/core/admin-functions.php';
require_once PEDRO_THEME_DIR . 'app/core/pedro-register-widget.php';



/**
 * kirki initialize.
 */
if (class_exists('Kirki')) {
	require_once PEDRO_THEME_DIR . 'app/customizer.php';
}
// End of file functions.php.



// Check if TGM Plugin Activation class is loaded
if (class_exists('TGM_Plugin_Activation')) {
	error_log('TGM Plugin Activation class is loaded');
} else {
	error_log('TGM Plugin Activation class is NOT loaded');
}
