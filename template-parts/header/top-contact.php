<!-- =========================
         Top_Area SECTION
         ========================= -->
      <section id="top-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <ul class="topbar-info">
                     <?php 
                        if ( get_theme_mod('info_section') ) { ?>
                          <li class="wow bounce"  data-wow-duration="2s">
                        <p><a href="#"><i class="fa fa-<?php echo get_theme_mod('info_icon'); ?>" aria-hidden="true"></i><?php echo get_theme_mod('info_section'); ?></a></p>
                     </li>
                      <?php  }
                     ?>
                     
                     <?php
                        if ( get_theme_mod('phone_section') ) { ?>
                         <li class="wow bounce"  data-wow-duration="2s"">
                        <p><i class="fa fa-<?php echo get_theme_mod('phone_icon'); ?>" aria-hidden="true"></i><?php echo get_theme_mod('phone_section'); ?></p>
                     </li>
                     <?php   }
                     ?>
                     
                  </ul>
               </div>
               <!-- /.col-md-6 -->
               <div class="col-lg-6 col-md-6">
                  <ul class="topbar-social wow bounce"  data-wow-duration="2s">
                     <?php 
                        if ( get_theme_mod('facebook') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     <?php 
                        if ( get_theme_mod('twitter') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     
                     
                     <?php 
                        if ( get_theme_mod('google_pluse') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('google_pluse'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     
                     <?php 
                        if ( get_theme_mod('pinterest') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('pinterest'); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     
                     <?php 
                        if ( get_theme_mod('instagram') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     
                     <?php 
                        if ( get_theme_mod('youtube') ) { ?>
                           <li>
                              <a href="<?php echo get_theme_mod('youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                           </li>
                      <?php  }
                     ?>
                     
                  </ul>
               </div>
               <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#top_area -->