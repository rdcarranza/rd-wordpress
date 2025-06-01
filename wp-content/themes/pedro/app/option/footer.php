<?php
/*----------------------------------------------------
                footer Settings
-----------------------------------------------------*/

new \Kirki\Section(
    'footer_section',
    [
        'title'       => esc_html__('Footer Section', 'pedro'),
        'panel'       => 'pedro_panel',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'footer_section_title',
        'label'    => esc_html__('footer Section Title', 'pedro'),
        'section'  => 'footer_section',
        'default'  => esc_html__('footer Me', 'pedro'),
        'priority' => 10,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'copywrite_text',
        'label'    => esc_html__('Copywrite Text', 'pedro'),
        'section'  => 'footer_section',
        'default'  => esc_html__('Pedro © 2018 , All Right Reserved', 'pedro'),
        'priority' => 10,
    ]
);


new \Kirki\Field\Repeater(
    [
        'settings'    => 'footer_social_repeater', // The setting name for the repeater
        'label'       => esc_html__('Social Media Links', 'pedro'),
        'section'     => 'footer_section', // Define the section
        'default'     => [],
        'priority'    => 10,
        'fields'      => [
            'footer_icon' => [
                'type'        => 'select',
                'label'       => esc_html__('Select Social Media Icon', 'pedro'),
                'description' => esc_html__('Select an icon for the social media link.', 'pedro'),
                'default'     => 'fa-facebook',
                'choices'     => [
                    'fa-facebook'     => esc_html__('Facebook', 'pedro'),
                    'fa-twitter'      => esc_html__('Twitter', 'pedro'),
                    'fa-instagram'    => esc_html__('Instagram', 'pedro'),
                    'fa-dribbble'     => esc_html__('Dribbble', 'pedro'),
                    'fa-linkedin'     => esc_html__('LinkedIn', 'pedro'),
                ],
            ],
            'social_link' => [
                'type'        => 'url',
                'label'       => esc_html__('Social Media Link', 'pedro'),
                'description' => esc_html__('Enter the URL for the social media profile.', 'pedro'),
                'default'     => '#',
            ],
        ],
    ]
);
