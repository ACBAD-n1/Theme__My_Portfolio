<?php get_header(); ?>

        <div class="header__content">
            <div class="header__content-icons" data-aos="fade-right" data-aos-duration="3000">

                <?php if ( $linkedin_url = get_theme_mod( 'ad_linkedin', '' ) ) : ?>
                    <a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-linkedin"></i>
                    </a>
                <?php endif; ?>

                <?php if ( $twitter_url = get_theme_mod( 'ad_twitter', '' ) ) : ?>
                    <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                <?php endif; ?>

                <?php if ( $facebook_url = get_theme_mod( 'ad_facebook', '' ) ) : ?>
                    <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-facebook"></i>
                    </a>
                <?php endif; ?>

                <?php if ( $github_url = get_theme_mod( 'ad_github', '' ) ) : ?>
                    <a href="<?php echo esc_url( $github_url ); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-github"></i>
                    </a>
                <?php endif; ?>

            </div>

            <div class="header__content-text">
                <span><h4 data-aos="fade-right">
                    <?php echo esc_html( get_theme_mod( 'ad_hero_span', 'Hello I am' ) ); ?>
                </h4></span>
                <h1 data-aos="zoom-in" data-aos-duration="2000">
                    <?php echo esc_html( get_theme_mod( 'ad_hero_title', 'Adam Boureima' ) ); ?>
                </h1>
                <h2 data-aos="fade-up" data-aos-duration="2000">
                    <?php echo esc_html( get_theme_mod( 'ad_hero_subtitle', 'Expert Freelancer' ) ); ?>
                </h2>
                <p data-aos="fade-up" data-aos-duration="2500">
                    <?php echo esc_html( get_theme_mod( 'ad_hero_content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' ) ); ?>
                </p>
              
                    <?php if ( get_theme_mod( 'ad_hero_button_field', '' ) ) : ?>
                        <button class="btn" data-aos="flip-left" data-aos-duration="3000">
                            <a href="<?php echo esc_url( get_theme_mod( 'ad_hero_button_link', '' ) ); ?>">
                                <?php echo esc_html( get_theme_mod( 'ad_hero_button_field', 'Hire Adam' ) ); ?>
                            </a>
                        </button>
                    <?php endif; ?>
                
            </div>

          <div class="header__content-image">
          <?php 
                $hero_image = get_theme_mod('header_image', '');

                if ( $hero_image ) { ?>
                    <img src="<?php echo esc_url( $hero_image ); ?>" alt="Header Image">
                <?php } else { ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-image.png' ); ?>" alt="Header Image">
                <?php }
            ?>
          </div>
        </div>

      </header>  


      <section id="about" class="about">
    <span class="about__span-1">
        <svg fill="red" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier"> <title>googleassistant</title> <path d="M9.179 18.724c0 0 0 0 0 0 4.515 0 8.175-3.66 8.175-8.175s-3.66-8.175-8.175-8.175c-4.515 0-8.175 3.66-8.175 8.175 0 1.505 0.407 2.915 1.116 4.126l-0.021-0.039c1.44 2.461 4.070 4.088 7.080 4.088v0zM22.821 29.625c-0-1.094-0.888-1.981-1.982-1.981s-1.982 0.887-1.982 1.982 0.887 1.982 1.982 1.982c1.094 0 1.982-0.887 1.982-1.981v-0zM22.821 18.725c2.257-0 4.088-1.83 4.088-4.088s-1.83-4.088-4.088-4.088c-2.258 0-4.088 1.83-4.088 4.088 0 0.752 0.203 1.458 0.558 2.063l-0.010-0.019c0.72 1.23 2.035 2.044 3.54 2.044 0 0 0 0 0 0v0zM28.953 11.912c1.128-0 2.043-0.915 2.043-2.044s-0.915-2.044-2.044-2.044-2.044 0.915-2.044 2.044c0 0 0 0 0 0.001v-0c0.003 1.128 0.917 2.041 2.044 2.043h0z"></path> </g></svg>
    </span>

    <div class="about__video" id="aboutVideoContainer" data-aos="flip-left" data-aos-duration="1500">
        <iframe
            id="aboutVideo"
            src="<?php echo esc_url(get_theme_mod('about_video_youtube', 'https://www.youtube.com/embed/gX1R-9_7k_o?si=MYIhFF5yjnrmWosy')); ?>" 
            title="YouTube video player" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>
    
    <div class="about__content">
        <div class="about__content-text" data-aos="flip-up" data-aos-duration="3000">
            <h2><?php echo esc_html(get_theme_mod('about_section_heading', 'About Me')); ?></h2>
            <p><?php echo wp_kses_post(get_theme_mod('about_section_content_1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('about_section_content_2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?')); ?></p>
            <p><?php echo wp_kses_post(get_theme_mod('about_section_content_3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore culpa obcaecati iusto corporis itaque consequuntur, adipisci voluptas tempora non maiores similique consectetur nihil, porro, sint eveniet dolorum iure asperiores ut?')); ?></p>
        </div>
    
        <div class="about__content-icons" data-aos="flip-up">
            <img src="<?php echo esc_url(get_theme_mod('about_icon_1', get_template_directory_uri() . '/assets/img/app-dev-interface-software-code-svgrepo-com.svg')); ?>" alt="">
            <img src="<?php echo esc_url(get_theme_mod('about_icon_2', get_template_directory_uri() . '/assets/img/marketing-svgrepo-com (2).svg')); ?>" alt="">
            <img src="<?php echo esc_url(get_theme_mod('about_icon_3', get_template_directory_uri() . '/assets/img/seo-1-svgrepo-com (2).svg')); ?>" alt="">
        </div>
        <button id="playVideoButton" class="btn"><?php echo esc_html(get_theme_mod('about_button_text', 'Voir la video')); ?></button>
    </div>


      <span class="about__span-2">
          <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                  <title>googleassistant</title>
                  <path d="M9.179 18.724c0 0 0 0 0 0 4.515 0 8.175-3.66 8.175-8.175s-3.66-8.175-8.175-8.175c-4.515 0-8.175 3.66-8.175 8.175 0 1.505 0.407 2.915 1.116 4.126l-0.021-0.039c1.44 2.461 4.070 4.088 7.080 4.088v0zM22.821 29.625c-0-1.094-0.888-1.981-1.982-1.981s-1.982 0.887-1.982 1.982 0.887 1.982 1.982 1.982c1.094 0 1.982-0.887 1.982-1.981v-0zM22.821 18.725c2.257-0 4.088-1.83 4.088-4.088s-1.83-4.088-4.088-4.088c-2.258 0-4.088 1.83-4.088 4.088 0 0.752 0.203 1.458 0.558 2.063l-0.010-0.019c0.72 1.23 2.035 2.044 3.54 2.044 0 0 0 0 0 0v0zM28.953 11.912c1.128-0 2.043-0.915 2.043-2.044s-0.915-2.044-2.044-2.044-2.044 0.915-2.044 2.044c0 0 0 0 0 0.001v-0c0.003 1.128 0.917 2.041 2.044 2.043h0z"></path>
              </g>
          </svg>
      </span>
    </section>




    <section class="benefit">
    <div class="benefit__title" data-aos="fade-right">
        <h4><?php echo esc_html(get_theme_mod('benefit_section_title', 'Benefit')); ?></h4>
        <h2><?php echo esc_html(get_theme_mod('benefit_section_subtitle', 'Solution to problems')); ?></h2>
    </div>

    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <div class="benefit__card-<?php echo $i; ?>" data-aos="flip-up" data-aos-duration="3000">
            <span class="benefit__card-<?php echo $i; ?>-icon">
                <img src="<?php echo esc_url(get_theme_mod("benefit_card_{$i}_icon", get_template_directory_uri() . '/assets/img/discord-alt-5-svgrepo-com.svg')); ?>" alt="">
            </span>
            <h3 class="benefit__card-<?php echo $i; ?>-title"><?php echo esc_html(get_theme_mod("benefit_card_{$i}_title", "Benefit $i")); ?></h3>
            <p class="benefit__card-<?php echo $i; ?>-content">
                <?php echo wp_kses_post(get_theme_mod("benefit_card_{$i}_content", 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam soluta aperiam minus sunt magnam? Totam suscipit doloribus qui ea aut doloremque non, quae reprehenderit ad autem provident aperiam nesciunt ipsam.')); ?>
            </p>
        </div>
    <?php endfor; ?>

    <div class="benefit__button">
        <?php 
            if($benefit_btn = get_theme_mod('ad_benefit_button_field', '')){ ?>
                <div class="benefit__cta">
                    <button class="btn">
                        <a href="<?php echo esc_url( get_theme_mod( 'ad_benefit_button_link', '' ) ); ?>">
                            <?php echo esc_html( get_theme_mod( 'ad_benefit_button_field', 'Hire Adam' ) ); ?>
                        </a>
                    </button>
                </div>
            <?php }
        ?>
    </div>
  </section>




      

      <section class="portfolio">
        <div class="portfolio__title" data-aos="fade-right">
            <h4><?php echo esc_html(get_theme_mod('portfolio_title', 'Select Work')); ?></h4>
            <h3><?php echo esc_html(get_theme_mod('portfolio_subtitle', 'Check my portfolio')); ?></h3>
        </div>

      <?php 
        // Insert the Visual Portfolio shortcode
        echo do_shortcode('[visual_portfolio id="458"]');
      ?>
      </section>









    <section class="testimonial">
                 <?php sp_testimonial( 44 );?>
  </section>





<section id="service" class="features">
    <span class="start">
        <img src="<?php echo esc_url(get_theme_mod('feature_1_icon', get_template_directory_uri() . '/assets/img/my-sites-svgrepo-com.svg')); ?>" alt="">
    </span>

    <div class="features__content-p" data-aos="fade-right" data-aos-duration="2000">
        <h4><?php echo esc_html(get_theme_mod('feature_1_title', 'Feature 1')); ?></h4>
        <h3>For Your Company</h3>
        <p><?php echo esc_html(get_theme_mod('feature_1_content_paragraph1')); ?></p>
        <p><?php echo esc_html(get_theme_mod('feature_1_content_paragraph2')); ?></p>
    </div>

    <div class="features__content-1" data-aos="fade-left" data-aos-duration="3000">
        <div class="features__content-1-icon">
            <img src="<?php echo esc_url(get_theme_mod('feature_2_icon', get_template_directory_uri() . '/assets/img/default-icon.png')); ?>" alt="">
        </div>

        <div class="features__content-1-content">
            <h4><?php echo esc_html(get_theme_mod('feature_2_title', 'Feature 2')); ?></h4>
            <h3>For Your Company</h3>
            <p><?php echo esc_html(get_theme_mod('feature_2_content_paragraph1')); ?></p>
            <p><?php echo esc_html(get_theme_mod('feature_2_content_paragraph2')); ?></p>
        </div>
    </div>

    <div class="features__content-2" data-aos="fade-right" data-aos-duration="2000">
        <div class="features__content-2-icon">
            <img src="<?php echo esc_url(get_theme_mod('feature_3_icon', get_template_directory_uri() . '/assets/img/default-icon.png')); ?>" alt="">
        </div>

        <div class="features__content-2-content">
            <h4><?php echo esc_html(get_theme_mod('feature_3_title', 'Feature 3')); ?></h4>
            <h3>For Your Company</h3>
            <p><?php echo esc_html(get_theme_mod('feature_3_content_paragraph1')); ?></p>
            <p><?php echo esc_html(get_theme_mod('feature_3_content_paragraph2')); ?></p>
        </div>
    </div>

    <div class="features__content-3" data-aos="fade-left" data-aos-duration="3000">
        <div class="features__content-3-icon">
            <img src="<?php echo esc_url(get_theme_mod('feature_4_icon', get_template_directory_uri() . '/assets/img/default-icon.png')); ?>" alt="">
        </div>

        <div class="features__content-3-content">
            <h4><?php echo esc_html(get_theme_mod('feature_4_title', 'Feature 4')); ?></h4>
            <h3>For Your Company</h3>
            <p><?php echo esc_html(get_theme_mod('feature_4_content_paragraph1')); ?></p>
            <p><?php echo esc_html(get_theme_mod('feature_4_content_paragraph2')); ?></p>
        </div>
    </div>

    <div class="end-container">
        <span class="end">
            <!-- <img src="/img/seo-tag-svgrepo-com.svg" alt=""> -->
        </span>
    </div>
</section>








<section class="ablog">
    <div class="ablog__post">
        <div class="ablog__post-title">
            <h2>Latest posts</h2>
            <p>
               Insights and Strategies to Elevate Your Online Presence
            </p>
        </div>

        <?php
        // WP_Query arguments
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'order'          => 'DESC',
            'orderby'        => 'date',
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
            $post_count = 1;
            while ( $query->have_posts() ) {
                $query->the_post();
                $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                ?>

                <div class="ablog__post-<?php echo esc_attr( $post_count ); ?>" style="background-image: url('<?php echo esc_url( $post_image ); ?>');" data-aos="flip-up" data-aos-duration="2000">
                    <span class="ablog__post-<?php echo esc_attr( $post_count ); ?>date"><?php echo get_the_date( 'd/m/Y' ); ?></span><br>
                    <a href="<?php the_permalink(); ?>" class="ablog-link ablog__post-<?php echo esc_attr( $post_count ); ?>title"><?php the_title(); ?></a>
                </div>

                <?php
                $post_count++;
            }
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            // no posts found
            echo '<p>No posts found.</p>';
        }
        ?>

    </div>
</section>



  <section class="fqs">
    <div class="fqs__title" data-aos="fade-right" data-aos-duration="2000">
        <h3><?php echo get_theme_mod( 'fqs_section_title', 'All the as' ); ?></h3>
        <h2><?php echo get_theme_mod( 'fqs_section_subtitle', 'For your Q\'s' ); ?></h2>
    </div>

    <div class="fqs__content" >
        <?php
        // Loop through each FAQ item
        for ( $i = 1; $i <= 5; $i++ ) {
            $question = get_theme_mod( 'fqs_question_' . $i, 'Question ' . $i );
            $answer   = get_theme_mod( 'fqs_answer_' . $i, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nemo recusandae iste illo expedita inventore quo modi labore consectetur tempore in nesciunt eos, similique excepturi perspiciatis at quisquam laborum voluptates.' );
            ?>

            <div class="fqs__content-tab<?php echo esc_attr( $i ); ?>">
                <input type="radio" name="acc" id="acc<?php echo esc_attr( $i ); ?>" <?php if ( $i === 1 ) echo 'checked'; ?>>
                <label for="acc<?php echo esc_attr( $i ); ?>">
                    <h2>0<?php echo esc_html( $i ); ?></h2>
                    <h3><?php echo esc_html( $question ); ?></h3>
                </label>
                <div class="fqs__content-p">
                    <?php echo wp_kses_post( $answer ); ?>
                </div>
            </div>

        <?php } ?>
    </div>
  </section>
  
  
    <section id="contact" class="contact" >
        
        <div class="contact__form">
             <?php echo do_shortcode('[forminator_form id="569"]') ?>
        </div>
    
        <div class="contact__title" data-aos="fade-left" data-aos-duration="2000">
            <h3><?php echo esc_html( get_theme_mod( 'contact_section_title', 'Let\'s discuss' ) ); ?></h3>
            <h2><?php echo esc_html( get_theme_mod( 'contact_section_subtitle', 'Your project' ) ); ?></h2>
        </div>
    
   </section>
  


<?php get_footer(); ?>