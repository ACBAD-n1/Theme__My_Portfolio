<?php

     // FAQ Section
     $wp_customize->add_section( 'fqs_section', array(
        'title'    => __( 'FAQ Section', 'adam' ),
        'priority'      =>  6,
        'capability'    =>  'edit_theme_options',
        'panel'         =>  'ad_panel'
    ) );

    //Title
    $wp_customize->add_setting('fqs_section_title', [
        'default'           =>  __('All the as'),
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('fqs_section_title', [
        'label'   => __( 'Fqs Title', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ]);

    //Subtitle
    $wp_customize->add_setting('fqs_section_subtitle', [
        'default'           =>  __('AFor your Q\'s'),
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('fqs_section_subtitle', [
        'label'   => __( 'Fqs SubTitle', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ]);

    // FAQ 1
    $wp_customize->add_setting( 'fqs_question_1', array(
        'default'           => 'How do I apply?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'fqs_question_1', array(
        'label'   => __( 'Question 1', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'fqs_answer_1', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'fqs_answer_1', array(
        'label'   => __( 'Answer 1', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'textarea',
    ) );

    // Repeat the above pattern for each FAQ item (2, 3, 4, 5)
    // FAQ 2
    $wp_customize->add_setting( 'fqs_question_2', array(
        'default'           => 'Why this way of doing?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'fqs_question_2', array(
        'label'   => __( 'Question 2', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'fqs_answer_2', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'fqs_answer_2', array(
        'label'   => __( 'Answer 2', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'textarea',
    ) );

    // FAQ 3
    $wp_customize->add_setting( 'fqs_question_3', array(
        'default'           => 'Why this way of doing?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'fqs_question_3', array(
        'label'   => __( 'Question 3', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'fqs_answer_3', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'fqs_answer_3', array(
        'label'   => __( 'Answer 3', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'textarea',
    ) );

    // FAQ 4
    $wp_customize->add_setting( 'fqs_question_4', array(
        'default'           => 'Why this way of doing?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'fqs_question_4', array(
        'label'   => __( 'Question 4', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'fqs_answer_4', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'fqs_answer_4', array(
        'label'   => __( 'Answer 4', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'textarea',
    ) );

    // FAQ 5
    $wp_customize->add_setting( 'fqs_question_5', array(
        'default'           => 'Why this way of doing?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'fqs_question_5', array(
        'label'   => __( 'Question 5', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'fqs_answer_5', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'fqs_answer_5', array(
        'label'   => __( 'Answer 5', 'adam' ),
        'section' => 'fqs_section',
        'type'    => 'textarea',
    ) );
  