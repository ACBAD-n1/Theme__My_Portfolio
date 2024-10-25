<?php

// Blog Hero Section
$wp_customize->add_section( 'blog_hero_section', array(
    'title'    => __( 'Blog Hero Section', 'adam' ),
    'priority' => 11,
) );

// Hero Image
$wp_customize->add_setting( 'blog_hero_image', array(
    'default'           => get_template_directory_uri() . '/img/blog-header.jpeg',
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'blog_hero_image',
        array(
            'label'    => __( 'Hero Image', 'adam' ),
            'section'  => 'blog_hero_section',
            'settings' => 'blog_hero_image',
        )
    )
);

// Span Text
$wp_customize->add_setting( 'blog_hero_span_text', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'blog_hero_span_text', array(
    'label'   => __( 'Span Text', 'adam' ),
    'section' => 'blog_hero_section',
    'type'    => 'text',
) );

// Header Title
$wp_customize->add_setting( 'blog_hero_header_title', array(
    'default'           => 'THOUGHTS & NOTES',
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'blog_hero_header_title', array(
    'label'   => __( 'Header Title', 'adam' ),
    'section' => 'blog_hero_section',
    'type'    => 'text',
) );