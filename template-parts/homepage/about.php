 <!-- =========================
         About Us SECTION
         ========================= -->
      <section id="about">
         <div class="container">
            <div class="row">

            	<?php 
            		$service = new WP_Query(array(
            			'post_type' => 'hydrooservice',
            			'posts_per_page' => 6
            		));

            		while ( $service->have_posts() ) : $service->the_post(); 

            		$servics_icon = get_post_meta( get_the_ID(), '_hydroo_service_icon', true);
            		$servics_animat = get_post_meta( get_the_ID(), '_hydroo_service_animated', true);
            	?>

               <div class="col-md-4 col-sm-5 about_us wow <?php echo $servics_animat; ?>"  data-wow-duration="2s">
                  <div class="col-md-2 col-sm-2">
                     <div class="abut_icon wow bounce"  data-wow-duration="2s">
                        <i class="fa fa-<?php echo $servics_icon; ?>" aria-hidden="true"></i>
                     </div>
                     <!-- /.about_icon -->
                  </div>
                  <!-- /.col-md-3 -->
                  <div class="col-md-10 col-sm-10">
                     <div class="about_content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo cExcerpt('25'); ?></p>
                     </div>
                     <!-- /.about-content -->
                  </div>
                  <!-- /.col-md-10 -->
               </div>
               <!-- /.col-md-4 -->

           <?php endwhile; ?>
               
               <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#why_us -->