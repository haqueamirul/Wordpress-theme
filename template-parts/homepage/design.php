<!-- =========================
         Design SECTION
         ========================= -->
         <style type="text/css">
         	#design h2{
         		color: <?php echo get_theme_mod('design_heading_color_seting'); ?>;
         	}
         	#design p{
         		color: <?php echo get_theme_mod('design_content_color_seting'); ?>;
         	}
         </style>

         <?php if ( get_theme_mod('Design_bg_image') ): ?>
         	
	      <section id="design" class="bg" style="background-image: url(<?php echo get_theme_mod('Design_bg_image'); ?>)">
	         <div class="container">
	            <div class="row">
	               <div class="col-md-12 text-center wow bounce"  data-wow-duration="2s">
	                  <div class="design_header">
	                     <h2><?php echo get_theme_mod('design_title_setting'); ?></h2>
	                     <p><?php echo get_theme_mod('design_content_setting'); ?></p>
	                     <a href="#" class="btn btn-default btn-design wow bounceInUp"  data-wow-duration="2s"><?php _e('send us an email','hydroo'); ?></a>
	                  </div>
	                  <!-- /.design_header -->
	               </div>
	               <!-- /.col-md-12 -->
	            </div>
	            <!-- /.row -->
	         </div>
	         <!-- /.container -->
	      </section>

      <?php endif ?>

      <!-- /#design -->