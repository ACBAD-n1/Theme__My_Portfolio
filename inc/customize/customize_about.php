<?php

// About section fully custmo
$wp_customize->add_section('ad_home_about', [
    'title'         =>  'Home About',
    'description'   =>  __('Home About Section Customize'),
    'priority'      =>  2,
    'capability'    =>  'edit_theme_options',
    'panel'         =>  'ad_panel'
] );

// Add settings and controls for YouTube video URL
$wp_customize->add_setting('about_video_youtube', [
    'default'           => 'https://www.youtube.com/embed/gX1R-9_7k_o?si=MYIhFF5yjnrmWosy',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control('about_video_youtube', [
    'label'       => __('YouTube Video URL', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_video_youtube',
    'type'        => 'url',
]);


// Add settings and controls for about section text content
$wp_customize->add_setting('about_section_heading', [
    'default'           => 'About Me',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('about_section_heading', [
    'label'       => __('Heading', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_section_heading',
    'type'        => 'text',
]);

$wp_customize->add_setting('about_section_content_1', [
    'default'           => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?',
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('about_section_content_1', [
    'label'       => __('Content 1', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_section_content_1',
    'type'        => 'textarea',
]);

$wp_customize->add_setting('about_section_content_2', [
    'default'           => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?',
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('about_section_content_2', [
    'label'       => __('Content 2', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_section_content_2',
    'type'        => 'textarea',
]);

$wp_customize->add_setting('about_section_content_3', [
    'default'           => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?',
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('about_section_content_3', [
    'label'       => __('Content 3', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_section_content_3',
    'type'        => 'textarea',
]);


// Add settings and controls for icons
for ($i = 1; $i <= 3; $i++) {
    $wp_customize->add_setting("about_icon_{$i}", [
        'default'           => get_template_directory_uri() . "/assets/img/icon{$i}.svg",
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "about_icon_{$i}", [
        'label'       => __("Icon {$i}", 'adam'),
        'section'     => 'ad_home_about',
        'settings'    => "about_icon_{$i}",
    ]));
}


// Add setting and control for button text
$wp_customize->add_setting('about_button_text', [
    'default'           => 'Voir la video',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('about_button_text', [
    'label'       => __('Button Text', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_button_text',
    'type'        => 'text',
]);

// Add setting and control for button video URL
$wp_customize->add_setting('about_button_video_url', [
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control('about_button_video_url', [
    'label'       => __('Button Video URL', 'adam'),
    'section'     => 'ad_home_about',
    'settings'    => 'about_button_video_url',
    'type'        => 'url',
]);