<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H9TQJQL04T"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-H9TQJQL04T');
    </script>
</head>

<body <?php body_class('single-container') ?>>
  
<header class="header">

<nav class="navigation">

    <a href="<?php echo home_url(); ?>" class="navigation__brand">
        <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo esc_html( get_theme_mod( 'brand_name', 'Adam Boureima' ) );
        }
        ?>
    </a>

  <input type="checkbox" id="menu-toggle" class="menu-toggle">
  <label for="menu-toggle" class="navigation__menu-btn">
    <i class="fa-solid fa-bars fa-xl"></i>
  </label>

  <div class="sidebar navigation__menu">
    <label for="menu-toggle" class="sidebar__close">
      <i class="fa-solid fa-xmark fa-2xl"></i>
    </label>

    <?php if (has_nav_menu('primary')) {
      wp_nav_menu([
        'theme_location' => 'sidebar',
        'container' => false,
        'container_class' => 'navigation',
        'menu_class' => 'navigation__menu',
        'fallback_cb' => false,
        'depth' => 4,
      ]);
    } ?>
  </div>

  <div id="Offdesktop" class="navigation__menu">
    <?php if (has_nav_menu('primary')) {
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'container_class' => 'navigation',
        'menu_class' => 'navigation__menu',
        'fallback_cb' => false,
        'depth' => 4,
      ]);
    } ?>
  </div>
</nav>
</header>
