<?php
/*----------------------------------------------------
                Header Settings
-----------------------------------------------------*/

new \Kirki\Section(
	'navbar_section',
	[
		'title'       => esc_html__( 'Navbar Section', 'pedro' ),
		'panel'       => 'pedro_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'site_logo_url',
		'label'       => esc_html__( 'Site Logo', 'pedro' ),
		'section'     => 'navbar_section',
		'default'     => '',
	]
);

