<?php

// Section for Features
$wp_customize->add_section('features_section', array(
    'title'    => __('Features Section', 'adam'),
    'priority' => 5,
    'capability' => 'edit_theme_options',
    'panel'    => 'ad_panel'
));

// Feature 1 Settings and Controls
$wp_customize->add_setting('feature_1_icon', array(
    'default'           => get_template_directory_uri() . '/assets/img/my-sites-svgrepo-com.svg',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_1_icon', array(
    'label'    => __('Feature 1 Icon', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_1_icon',
)));

$wp_customize->add_setting('feature_1_title', array(
    'default'           => 'Feature 1',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('feature_1_title', array(
    'label'    => __('Feature 1 Title', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_1_title',
    'type'     => 'text',
));

$wp_customize->add_setting('feature_1_content_paragraph1', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_1_content_paragraph1', array(
    'label'    => __('Feature 1 Content - Paragraph 1', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_1_content_paragraph1',
    'type'     => 'textarea',
));

$wp_customize->add_setting('feature_1_content_paragraph2', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_1_content_paragraph2', array(
    'label'    => __('Feature 1 Content - Paragraph 2', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_1_content_paragraph2',
    'type'     => 'textarea',
));

// Feature 2 Settings and Controls
$wp_customize->add_setting('feature_2_icon', array(
    'default'           => get_template_directory_uri() . '/assets/img/default-icon.png',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_2_icon', array(
    'label'    => __('Feature 2 Icon', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_2_icon',
)));

$wp_customize->add_setting('feature_2_title', array(
    'default'           => 'Feature 2',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('feature_2_title', array(
    'label'    => __('Feature 2 Title', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_2_title',
    'type'     => 'text',
));

$wp_customize->add_setting('feature_2_content_paragraph1', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_2_content_paragraph1', array(
    'label'    => __('Feature 2 Content - Paragraph 1', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_2_content_paragraph1',
    'type'     => 'textarea',
));

$wp_customize->add_setting('feature_2_content_paragraph2', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_2_content_paragraph2', array(
    'label'    => __('Feature 2 Content - Paragraph 2', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_2_content_paragraph2',
    'type'     => 'textarea',
));

// Feature 3 Settings and Controls
$wp_customize->add_setting('feature_3_icon', array(
    'default'           => get_template_directory_uri() . '/assets/img/default-icon.png',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_3_icon', array(
    'label'    => __('Feature 3 Icon', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_3_icon',
)));

$wp_customize->add_setting('feature_3_title', array(
    'default'           => 'Feature 3',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('feature_3_title', array(
    'label'    => __('Feature 3 Title', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_3_title',
    'type'     => 'text',
));

$wp_customize->add_setting('feature_3_content_paragraph1', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_3_content_paragraph1', array(
    'label'    => __('Feature 3 Content - Paragraph 1', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_3_content_paragraph1',
    'type'     => 'textarea',
));

$wp_customize->add_setting('feature_3_content_paragraph2', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_3_content_paragraph2', array(
    'label'    => __('Feature 3 Content - Paragraph 2', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_3_content_paragraph2',
    'type'     => 'textarea',
));

// Feature 4 Settings and Controls
$wp_customize->add_setting('feature_4_icon', array(
    'default'           => get_template_directory_uri() . '/assets/img/default-icon.png',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature_4_icon', array(
    'label'    => __('Feature 4 Icon', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_4_icon',
)));

$wp_customize->add_setting('feature_4_title', array(
    'default'           => 'Feature 4',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('feature_4_title', array(
    'label'    => __('Feature 4 Title', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_4_title',
    'type'     => 'text',
));

$wp_customize->add_setting('feature_4_content_paragraph1', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_4_content_paragraph1', array(
    'label'    => __('Feature 4 Content - Paragraph 1', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_4_content_paragraph1',
    'type'     => 'textarea',
));

$wp_customize->add_setting('feature_4_content_paragraph2', array(
    'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo ex veniam ducimus? Architecto reiciendis ab quis placeat nam. Aspernatur reprehenderit corporis voluptates voluptate labore asperiores expedita tempora excepturi soluta?',
    'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('feature_4_content_paragraph2', array(
    'label'    => __('Feature 4 Content - Paragraph 2', 'adam'),
    'section'  => 'features_section',
    'settings' => 'feature_4_content_paragraph2',
    'type'     => 'textarea',
));