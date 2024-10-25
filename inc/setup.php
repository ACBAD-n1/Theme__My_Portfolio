<?php 

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function adam_setup() {

	load_theme_textdomain( 'adam', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menu('primary', __('Primary Menu', 'adam'));
    register_nav_menu('sidebar', __('Sidebar Menu', 'adam'));

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'adam_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function adam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'adam_content_width', 640 );
}

// Create a function to the 'get_the_excerpt' filter
function ad_read_more_link($excerpt) {
    
    // Store the original excerpt in a variable
    $extend_excerpt = $excerpt;

    // Append the "Read more" link, including the permalink of the post
    $extend_excerpt .= '<a class="extend_excerpt_link" href="' . get_permalink() . '">';
    $extend_excerpt .=  'Read more &raquo;';  // Add the text for the "Read more" link
    $extend_excerpt .=  '</a>';  // Close the anchor tag

    // Return the modified excerpt with the "Read more" link
    return $extend_excerpt;
}

// Apply the function to the 'get_the_excerpt' filter
add_filter('get_the_excerpt', 'ad_read_more_link');