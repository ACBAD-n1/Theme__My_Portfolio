<?php
/**
 * adam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package adam
 */


//Setups



//Includes
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-customizer.php';
require get_template_directory() . '/inc/posts-count.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Hooks
add_action( 'after_setup_theme', 'adam_setup' );
add_action( 'after_setup_theme', 'adam_content_width', 0 );
add_action( 'widgets_init', 'adam_widgets_init' );
add_action( 'wp_enqueue_scripts', 'adam_scripts' );
add_action( 'customize_register', 'ad_customize_register' );


add_action('wp_head', 'track_post_views');


// Remove prefetching to ensure accurate post views count
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



//Shortcode