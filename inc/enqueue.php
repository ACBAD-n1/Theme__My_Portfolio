<?php 
/**
 * Enqueue scripts and styles.
 */
function adam_scripts() {
    // Register and enqueue styles
    wp_enqueue_style('adam_bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('adam_aos_style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('adam_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
    wp_enqueue_style('adam_font_poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
	wp_enqueue_style( 'adam-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('adam__style', get_template_directory_uri() . '/assets/css/style.css', [], time());


    // Preconnect links
    add_filter('wp_head', function () {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    });


    // Register and enqueue scripts
    wp_enqueue_script('jquery'); // WordPress includes jQuery by default
    wp_enqueue_script( 'adam-oas_script', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
	wp_enqueue_script( 'adam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'adam__script', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
