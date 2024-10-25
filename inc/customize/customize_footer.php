<?php

$wp_customize->add_setting( 'ad_footer', [
    'type'                  =>  'theme_mod',
    'default'               =>  '',
    'sanitize_callback'     =>  'ad_sanitize_site_info'
] );

$wp_customize->add_control( 'ad_footer', [
    'type'                  =>  'text',
    'label'                 => __( 'Site Info', 'adam' ),
    'section'               =>  'ad_footer_options'
] );

$wp_customize->add_section( 'ad_footer_options', [
    'title'                 =>  __( 'Footer Options', 'adam' ),
    'description'           =>  __( 'You can change the footer copy right here', 'adam' ),
    'priority'              =>  30,
    'capability'            =>  'edit_theme_options',
    'panel'                 =>  'ad_panel'
] );