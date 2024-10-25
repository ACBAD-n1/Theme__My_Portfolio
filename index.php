<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adam
 */

get_header('pages');
?>


<div class="blog__hero">
    <img src="<?php echo esc_url( get_theme_mod( 'blog_hero_image', get_template_directory_uri() . '/img/blog-header.jpeg' ) ); ?>" alt="Blog hero Image">
    <div class="blog__header-title">
        <span><?php echo esc_html( get_theme_mod( 'blog_hero_span_text', '' ) ); ?></span>   
        <h1><?php echo esc_html( get_theme_mod( 'blog_hero_header_title', 'THOUGHTS & NOTES' ) ); ?></h1>
    </div>
</div>



    <div class="blog__content">


    <?php 

if(have_posts()){
    while(have_posts()) {
        the_post();
        ?>

        <!-- Card 1 -->
        <div class="blog__content-card">
            <div class="blog__content-card--image">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('blog-thumbnail'); ?>
                <?php else: ?>
                    <img src="/img/lion.jpg" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="blog__content-card--content">
                <div class="blog__content-card--content-head">
                    <div>
                        <span><?php the_author(); ?></span>
                        <span><?php the_author_meta('display_name'); ?></span>
                    </div>
                    <div>
                        <span><?php echo get_the_date('M j, Y'); ?> . <?php echo do_shortcode('[read_time]'); ?></span>
                    </div>
                </div>

                <div class="blog__content-card-content-text">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <p><?php the_excerpt(); ?></p>
                </div>

                <div class="blog__content-card--content-likes">
                    <div class="comment">
                        <?php echo get_post_views(get_the_ID()); ?> Views / <?php comments_number('0 comments', '1 comment', '% comments'); ?>
                    </div>
                    <div class="like">
                        <?php echo get_post_meta(get_the_ID(), 'post_likes', true); ?> likes
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}

?>


    <!-- Pagination -->
    <div class="pagination">
        <div class="pagination-prev">
            <?php previous_posts_link('« Previous Page'); ?>
        </div>
        <div class="pagination-next">
            <?php next_posts_link('Next Page »'); ?>
        </div>
    </div>

      
    </div>
    
    
  
    <section id="contact" class="contact" >
        
        <div class="contact__form">
             <?php echo do_shortcode('[forminator_form id="569"]') ?>
        </div>
    
        <div class="contact__title">
            <h3><?php echo esc_html( get_theme_mod( 'contact_section_title', 'Let\'s discuss' ) ); ?></h3>
            <h2><?php echo esc_html( get_theme_mod( 'contact_section_subtitle', 'Your project' ) ); ?></h2>
        </div>
    
   </section>


<?php get_footer(); ?>