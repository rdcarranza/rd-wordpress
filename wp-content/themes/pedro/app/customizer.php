<?php
/*----------------------------------------------------
                Theme Settings
-----------------------------------------------------*/
if (! class_exists('Kirki')) {
	return;
}

function pedro_theme_kirki_config()
{
	// Check if Kirki is active
	if (! class_exists('Kirki')) {
		return;
	}

	Kirki::add_config('pedro_config', array(
		'capability'  => 'edit_theme_options',
		'option_type' => 'theme_mod',
	));

	// Add the panel
	new \Kirki\Panel(
		'pedro_panel',
		[
			'priority'    => 10,
			'title'       => esc_html__('Pedro Options', 'pedro'),
		]
	);


	require_once PEDRO_THEME_DIR . 'app/option/header.php';
	require_once PEDRO_THEME_DIR . 'app/option/footer.php';
}
add_action('init', 'pedro_theme_kirki_config');
