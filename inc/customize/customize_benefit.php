<?php

// Add Section
$wp_customize->add_section('benefit_section', [
    'title'    => __('Benefit Section', 'adam'),
    'priority' => 3,
    'capability' => 'edit_theme_options',
    'panel'    => 'ad_panel'
]);

// Benefit Section Title
$wp_customize->add_setting('benefit_section_title', [
    'default'           => 'Benefit',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('benefit_section_title', [
    'label'    => __('Section Title', 'adam'),
    'section'  => 'benefit_section',
    'settings' => 'benefit_section_title',
    'type'     => 'text',
]);

// Benefit Section Subtitle
$wp_customize->add_setting('benefit_section_subtitle', [
    'default'           => 'Solution to problems',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('benefit_section_subtitle', [
    'label'    => __('Section Subtitle', 'adam'),
    'section'  => 'benefit_section',
    'settings' => 'benefit_section_subtitle',
    'type'     => 'text',
]);

for ($i = 1; $i <= 3; $i++) {
    // Benefit Card Title
    $wp_customize->add_setting("benefit_card_{$i}_title", [
        'default'           => "Benefit $i",
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control("benefit_card_{$i}_title", [
        'label'    => __("Benefit Card $i Title", 'adam'),
        'section'  => 'benefit_section',
        'settings' => "benefit_card_{$i}_title",
        'type'     => 'text',
    ]);

    // Benefit Card Content
    $wp_customize->add_setting("benefit_card_{$i}_content", [
        'default'           => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam soluta aperiam minus sunt magnam? Totam suscipit doloribus qui ea aut doloremque non, quae reprehenderit ad autem provident aperiam nesciunt ipsam.',
        'sanitize_callback' => 'my_custom_sanitize_callback',
    ]);

    $wp_customize->add_control("benefit_card_{$i}_content", [
        'label'    => __("Benefit Card $i Content", 'adam'),
        'section'  => 'benefit_section',
        'settings' => "benefit_card_{$i}_content",
        'type'     => 'textarea',
    ]);

    // Benefit Card Icon
    $wp_customize->add_setting("benefit_card_{$i}_icon", [
        'default'           => get_template_directory_uri() . '/assets/img/discord-alt-5-svgrepo-com.svg',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "benefit_card_{$i}_icon", [
        'label'    => __("Benefit Card $i Icon", 'adam'),
        'section'  => 'benefit_section',
        'settings' => "benefit_card_{$i}_icon",
    ]));
}

// Customize the Benefice CTA button 
$wp_customize->add_setting('ad_benefit_button_field', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('#')
]);
$wp_customize->add_control('ad_benefit_button_field', [
    'type'                  =>  'text',
    'label'                 =>  __('benefit button field'),
    'section'               =>  'benefit_section'
]);

// Customize the Benefice CTA button link
$wp_customize->add_setting('ad_benefit_button_link', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('#')
]);
$wp_customize->add_control('ad_benefit_button_link', [
    'type'                  =>  'text',
    'label'                 =>  __('benefit button link'),
    'section'               =>  'benefit_section'
]);