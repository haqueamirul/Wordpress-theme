<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hydroo
 */

?>

	<!-- ========================= 
            Footer SECTION
        ========================= -->
          <footer>
             <div class="container">
                <div class="row">
                   <div class="col-md-12 text-center wow bounce"  data-wow-duration="2s">
                      <div class="footer-content">
                         <h5><?php echo get_theme_mod('logo_title'); ?></h5>
                         <span>Designed by <a href="<?php echo get_theme_mod('copyrith_link'); ?>"><?php echo get_theme_mod('copyrith_title'); ?></a></span>
                         <ul>
                          <?php
                          if ( get_theme_mod('footer_facebook') ) { ?>
                           <li><a href="<?php echo get_theme_mod('footer_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                         <?php }
                          ?>
                           
                           <?php
                            if ( get_theme_mod('footer_twitter') ) { ?>
                             <li><a href="<?php echo get_theme_mod('footer_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <?php }
                            ?> 
                            
                            <?php
                            if ( get_theme_mod('footer_pinterest') ) { ?>
                             <li><a href="<?php echo get_theme_mod('footer_pinterest'); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                           <?php }
                            ?>
                            
                            <?php
                            if ( get_theme_mod('footer_instagram') ) { ?>
                             <li><a href="<?php echo get_theme_mod('footer_instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <?php }
                            ?>
                            
                         </ul>
                      </div>
                      <!-- /.footer_content -->
                   </div>
                   <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
             </div>
             <!-- /.container -->
          </footer>
          <!-- /#footer -->
        <!-- =========================
                SCRIPTS 
        ============================== --> 
      <?php wp_footer(); ?>
   </body>
</html>

