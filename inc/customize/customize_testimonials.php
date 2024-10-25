<?php

// Add Testimonial Section
$wp_customize->add_section('testimonial_section', [
    'title'    => __('Testimonial Section', 'mytheme'),
    'priority'      =>  4,
    'capability'    =>  'edit_theme_options',
    'panel'         =>  'ad_panel'
]);

// Client Image
$wp_customize->add_setting('testimonial_client_image', [
    'default'           => get_template_directory_uri() . '/assets/img/Adam.png',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'testimonial_client_image', [
    'label'    => __('Client Image', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_client_image',
]));

// Client Name
$wp_customize->add_setting('testimonial_client_name', [
    'default'           => 'Adam Boureima',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('testimonial_client_name', [
    'label'    => __('Client Name', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_client_name',
    'type'     => 'text',
]);

// Client Title
$wp_customize->add_setting('testimonial_client_title', [
    'default'           => 'CEO Africa AI Company',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('testimonial_client_title', [
    'label'    => __('Client Title', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_client_title',
    'type'     => 'text',
]);

// Testimonial Content
$wp_customize->add_setting('testimonial_content', [
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, maxime, minus nihil voluptatem doloribus optio praesentium earum sit necessitatibus expedita blanditiis itaque provident, suscipit dignissimos non! Quo atque reprehenderit natus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, eum rerum et praesentium pariatur optio animi veniam iste aut, modi in magnam dolore itaque harum ullam porro ex voluptas dolores.',
    'sanitize_callback' => 'sanitize_textarea_field',
]);

$wp_customize->add_control('testimonial_content', [
    'label'    => __('Testimonial Content', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_content',
    'type'     => 'textarea',
]);

// Back Button Image
$wp_customize->add_setting('testimonial_back_button_image', [
    'default'           => get_template_directory_uri() . '/assets/img/back-buttons-multimedia-svgrepo-com (1).svg',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'testimonial_back_button_image', [
    'label'    => __('Back Button Image', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_back_button_image',
]));

// Next Button Image
$wp_customize->add_setting('testimonial_next_button_image', [
    'default'           => get_template_directory_uri() . '/assets/img/next-outline-svgrepo-com.svg',
    'sanitize_callback' => 'esc_url_raw',
]);

$wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'testimonial_next_button_image', [
    'label'    => __('Next Button Image', 'mytheme'),
    'section'  => 'testimonial_section',
    'settings' => 'testimonial_next_button_image',
]));