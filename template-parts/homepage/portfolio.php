<!-- =========================
         PORTFOLIO SECTION
         ========================= -->
      <section id="portfolio">
         <div class="container">
            <div class="row wow bounce"  data-wow-duration="2s">
               <div class="col-md-12 text-center wow bounce"  data-wow-duration="2s">
                  <div class="portfolio_header">
                     <h2><?php _e('some our recent work','hydroo'); ?></h2>
                  </div>
                  <!-- /.portfolio_header -->
               </div>
               <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         <div class="container wow bounce"  data-wow-duration="2s"" id="parent">
            <div class="row text-center">

            	<?php
         		$portfolioa = new WP_Query(array(
         			'post_type' => 'portfolio',
   					'posts_per_page' => 6
         		));

         		while ( $portfolioa->have_posts() ) : $portfolioa->the_post(); 

         		$large_image = get_post_meta( get_the_ID(), '_hydroo_large_image', true);
         		$port_quality = get_post_meta( get_the_ID(), '_hydroo_port_quality', true);

         		?>

               <div class="col-md-4 col-sm-6">
                  <div class="box">
                     <div class="gallery-img wow bounce"  data-wow-duration="2s">
                        <?php the_post_thumbnail(); ?>
                        <div class="gallery-box">
                           <div class="gallery-content">
                              <a class="gallery" href="<?php echo $large_image; ?>">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                              </a>
                           </div>
                           <!-- /.gallery-content -->
                        </div>
                        <!-- /.gallery-box -->
                     </div>
                     <!-- /.gallery-img -->
                     <h3><?php the_title(); ?></h3>
                     <span><?php echo $port_quality; ?></span>
                  </div>
                  <!-- /.box -->
               </div>
               
               <?php endwhile; ?>
               
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#portfolio -->