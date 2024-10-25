<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adam
 */

get_header('single');
?>

<div class="single__head">
    <div class="single__head-category">
        <?php 
        // Display categories associated with the post
        $categories = get_the_category();
        if (!empty($categories)) {
            foreach ($categories as $category) {
                echo '<span><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></span>';
            }
        }
        ?>
    </div>

    <div class="single__head-profil">
        <?php the_author(); ?>
    </div>
</div>

<div class="single__content">
    <div class="single__content-head">
        <div>
            <span><?php the_author(); ?></span> /
            <span><?php echo get_the_date(); ?></span>
        </div>
        <div>
            <span>
                <?php
                // Social share buttons (example with links to social platforms)
                ?>
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a> |
                <a href="http://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">Twitter</a>
            </span>
        </div>
    </div>

    <div class="single__content-text">
        <h1><?php the_title(); ?></h1>
        <h2><?php // the_subtitle(); // If you use a plugin for subtitles ?></h2>
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('full-size');
        } ?>
        <p>
            <?php
            // The content of the post
            the_content();
            ?>
        </p>
    </div>
</div>

<?php 
if(!is_page('portfolio')){
?>
<div class="single__navigation">
    <div class="single__navigation-prev">
        <?php previous_post_link('%link', '« Previous Post'); ?>
    </div>
    <div class="single__navigation-next">
        <?php next_post_link('%link', 'Next Post »'); ?>
    </div>
</div>

<?php  } ?>


<?php 
// Comments template
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>


  
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
