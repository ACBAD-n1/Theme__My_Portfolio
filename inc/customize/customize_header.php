<?php

// Section header customize
$wp_customize->add_section('ad_header_options', [
    'title'                 =>  __('Header Options', 'adam'),
    'description'           =>  __('You can personalyse the Hero section'),
    'priority'              =>  1,
    'capability'            =>  'edit_theme_options',
    'panel'                 =>  'ad_panel'
] );

// Customize the hero span
$wp_customize->add_setting('ad_hero_span', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('Hello I am'),
    'sanitize_callback'     =>  'sanitize_text_field'
]);
$wp_customize->add_control('ad_hero_span', [
    'type'                  =>  'text',
    'label'                 =>  __('Hero span text'),
    'section'               =>  'ad_header_options'
]);

// Customize the hero Title
$wp_customize->add_setting('ad_hero_title', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('Adam Boureima'),
    'sanitize_callback'     =>  'sanitize_text_field'
]);
$wp_customize->add_control('ad_hero_title', [
    'type'                  =>  'text',
    'label'                 =>  __('Hero title'),
    'section'               =>  'ad_header_options'
]);

// Customize the hero SubTitle
$wp_customize->add_setting('ad_hero_subtitle', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('Freelancer'),
    'sanitize_callback'     =>  'sanitize_text_field'
]);
$wp_customize->add_control('ad_hero_subtitle', [
    'type'                  =>  'text',
    'label'                 =>  __('Hero Subtitle'),
    'section'               =>  'ad_header_options'
]);

// Customize the hero Content
$wp_customize->add_setting('ad_hero_content', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium animi corporis aspernatur soluta exercitationem alias nisi eaque dolorem cumque,
     quaerat natus quibusdam voluptates consequatur magni dolores debitis, nihil dicta placeat'),
    'sanitize_callback'     =>  'sanitize_text_field'
]);
$wp_customize->add_control('ad_hero_content', [
    'type'                  =>  'textarea',
    'label'                 =>  __('Hero content'),
    'section'               =>  'ad_header_options'
]);

// Customize the hero button field
$wp_customize->add_setting('ad_hero_button_field', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('Hire Adam')
]);
$wp_customize->add_control('ad_hero_button_field', [
    'type'                  =>  'text',
    'label'                 =>  __('Hero button field'),
    'section'               =>  'ad_header_options'
]);

// Customize the hero button link
$wp_customize->add_setting('ad_hero_button_link', [
    'type'                  =>  'theme_mod',
    'default'               =>  __('#')
]);
$wp_customize->add_control('ad_hero_button_link', [
    'type'                  =>  'text',
    'label'                 =>  __('Hero button link'),
    'section'               =>  'ad_header_options'
]);

// Header Image Setting
$wp_customize->add_setting('header_image', [
    'type'                  => 'theme_mod',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw',
]);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ad_header_image', [
    'label'                 =>  __('Uploid Header Image', 'adam'),
    'mime_type'             =>  'image',
    'section'               =>  'ad_header_options',
    'settings'              =>  'header_image'
]));

//Customize hero icons

// Linkedin Url 
$wp_customize->add_setting('ad_linkedin', [
    'type'                  =>  'theme_mod',
    'default'               =>  '',
    'sanitize_callback'     => 'esc_url_raw',
]);

$wp_customize->add_control('ad_linkedin', [
    'type'                  =>  'url',
    'label'                 =>  __('Linkedin Url', 'adam'),
    'section'               =>  'ad_header_options',
    'settings'              =>  'ad_linkedin'
]);

// Twitter Url 
$wp_customize->add_setting('ad_twitter', [
    'type'                  =>  'theme_mod',
    'default'               =>  '',
    'sanitize_callback'     => 'esc_url_raw',
]);

$wp_customize->add_control('ad_twitter', [
    'type'                  =>  'url',
    'label'                 =>  __('Twitter Url', 'adam'),
    'section'               =>  'ad_header_options',
    'settings'              =>  'ad_twitter'
]);

// Facebook Url 
$wp_customize->add_setting('ad_facebook', [
    'type'                  =>  'theme_mod',
    'default'               =>  '',
    'sanitize_callback'     => 'esc_url_raw',
]);

$wp_customize->add_control('ad_facebook', [
    'type'                  =>  'url',
    'label'                 =>  __('Facebook Url', 'adam'),
    'section'               =>  'ad_header_options',
    'settings'              =>  'ad_facebook'
]);

// Github Url 
$wp_customize->add_setting('ad_github', [
    'type'                  =>  'theme_mod',
    'default'               =>  '',
    'sanitize_callback'     => 'esc_url_raw',
]);

$wp_customize->add_control('ad_github', [
    'type'                  =>  'url',
    'label'                 =>  __('Github Url', 'adam'),
    'section'               =>  'ad_header_options',
    'settings'              =>  'ad_github'
]);