 <!-- =========================
         WELCOME SECTION
         ========================= -->
         <style type="text/css">
         	#welcome{
				background: <?php echo get_theme_mod('color_seting'); ?>;
				padding: 80px 0px;
			}
			#welcome h2{
				color: <?php echo get_theme_mod('heading_seting'); ?>;
			}
			.welcome_header h2:before{
				border: 2px solid <?php echo get_theme_mod('heading_seting'); ?>;
			}
			#welcome p{
				color: <?php echo get_theme_mod('content_seting'); ?>;
			}
         </style>
         <?php if ( get_theme_mod('title_setting') ): ?>
      <section id="welcome">
      	
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-12">
                  <div class="welcome_header wow bounce"  data-wow-duration="2s">
                     <h2 class="wow bounce"  data-wow-duration="2s"><?php echo get_theme_mod('title_setting'); ?></h2>
                     <p class="wow bounce"  data-wow-duration="2s"><?php echo get_theme_mod('content_setting'); ?></p>
                     <a href="#" class="btn btn-default btn-wel wow bounceInUp"  data-wow-duration="2s"><?php _e('Download resume','hydroo'); ?></a>
                  </div>
                  <!-- /.welcome_header -->
               </div>
               <!-- /.col-md-8 -->
               <div class="col-md-4 col-sm-7">
                  <div class="welcome_img wow bounce"  data-wow-duration="2s">
                     <img src="<?php echo get_theme_mod('welcome_image'); ?>" alt="">
                  </div>
                  <!-- /.welcome_img -->
               </div>
               <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
         </div>
        
         <!-- /.container -->
      </section>
       <?php endif ?>
      <!-- /.welcome -->