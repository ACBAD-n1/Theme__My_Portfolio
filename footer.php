<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package adam
 */

wp_footer();

$site_info = get_theme_mod('ad_footer', '');
?>


<?php if($site_info) { ?>

    <footer class="footer">
    
        <p>
          <?php

          $allowed = array('a' => [
            'href'   => [],
            'title'  => []
          ]);

           echo wp_kses( $site_info, $allowed ) 
           ?> 
        </p>
    </footer>
<?php } ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<script type="text/javascript">

</script>
      
</body>
</html>
