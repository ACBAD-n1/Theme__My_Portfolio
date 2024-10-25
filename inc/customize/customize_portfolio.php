<?php

// Add Section
$wp_customize->add_section('portfolio_section', [
    'title'    => __('Portfolio Section', 'adam'),
    'priority' => 8,
    'capability' => 'edit_theme_options',
    'panel'    => 'ad_panel'
]);


// Portfolio Title
$wp_customize->add_setting('portfolio_title', [
    'default'           => 'Select Work',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('portfolio_title', [
    'label'    => __('Portfolio Title', 'adam'),
    'section'  => 'portfolio_section',
    'settings' => 'portfolio_title',
    'type'     => 'text',
]);

// Portfolio Subtitle
$wp_customize->add_setting('portfolio_subtitle', [
    'default'           => 'Check my portfolio',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('portfolio_subtitle', [
    'label'    => __('Portfolio Subtitle', 'adam'),
    'section'  => 'portfolio_section',
    'settings' => 'portfolio_subtitle',
    'type'     => 'text',
]);

