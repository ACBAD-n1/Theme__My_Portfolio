<?php

    // Contact Section
    $wp_customize->add_section( 'contact_section', array(
        'title'    => __( 'Contact Section', 'adam' ),
        'priority'      =>  7,
        'capability'    =>  'edit_theme_options',
        'panel'         =>  'ad_panel'
    ) );

    //Title
    $wp_customize->add_setting('contact_section_title', [
        'default'           =>  __('Let\'s discuss'),
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('contact_section_title', [
        'label'   => __( 'Contact Title', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ]);

    //Subtitle
    $wp_customize->add_setting('contact_section_subtitle', [
        'default'           =>  __('Your project'),
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('contact_section_subtitle', [
        'label'   => __( 'Contact SubTitle', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ]);


    // Contact Form Labels and Placeholders
    $wp_customize->add_setting( 'contact_name_label', array(
        'default'           => 'Your name',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_name_label', array(
        'label'   => __( 'Name Label', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'contact_email_label', array(
        'default'           => 'Email',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_email_label', array(
        'label'   => __( 'Email Label', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'contact_phone_label', array(
        'default'           => 'Phone',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_phone_label', array(
        'label'   => __( 'Phone Label', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'contact_message_label', array(
        'default'           => 'Your message',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_message_label', array(
        'label'   => __( 'Message Label', 'adam' ),
        'section' => 'contact_section',
        'type'    => 'text',
    ) );

    // Optional: You can add settings for placeholders if needed
        
