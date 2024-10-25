<?php 

function ad_customize_register( $wp_customize ) {

    // The custom panel to customize the theme
    $wp_customize->add_panel('ad_panel', [
        'title'         =>  'Adam Panel',
        'priority'      =>  10,
        'capability'    =>  'edit_theme_options'
    ]);



    
    // FQS custom section
    include(get_theme_file_path( 'inc/customize/customize_blog.php' ));


    
    // Header fully custom section
    include(get_theme_file_path( 'inc/customize/customize_header.php' ));

    // About fully custom section
    include(get_theme_file_path( 'inc/customize/customize_about.php' ));

    // Benefit fully custom section
    include(get_theme_file_path( 'inc/customize/customize_benefit.php' ));


    // Testimonialfully custom section
    include(get_theme_file_path( 'inc/customize/customize_testimonials.php' ));


    // Testimonialfully custom section
    include(get_theme_file_path( 'inc/customize/customize_features.php' ));


    // FQS custom section
    include(get_theme_file_path( 'inc/customize/customize_fqs.php' ));

    
    // FQS custom section
    include(get_theme_file_path( 'inc/customize/customize_contact.php' ));


    //Footer bloginfo section copy right
    include(get_theme_file_path( '/inc/customize/customize_footer.php' ));

    //Portfolio Section
    include(get_theme_file_path( '/inc/customize/customize_portfolio.php' ));

}

    // Define custom sanitize callback
    function features_sanitize_callback($input) {
        $allowed_tags = array(
            'br'     => array(),
            'li'     => array(),
            'ul'     => array(),
            'ol'     => array(),
            'p'      => array(),
            'strong' => array(),
            'em'     => array(),
            'a'      => array(
                'href' => array(),
                'title' => array()
            ),
        );
        return wp_kses($input, $allowed_tags);
    }


function my_custom_sanitize_callback($input) {
    $allowed_tags = array(
        'br'     => array(),
        'li'     => array(),
        'ul'     => array(),
        'ol'     => array(),
        'p'      => array(),
        'strong' => array(),
        'em'     => array(),
        'a'      => array(
            'href' => array(),
            'title' => array()
        ),
    );
    return wp_kses($input, $allowed_tags);
}



function ad_sanitize_site_info($input) {
    $allowed = array('a' => [
        'href'   => [],
        'title'  => []
    ]);

    return wp_kses($input, $allowed);
}