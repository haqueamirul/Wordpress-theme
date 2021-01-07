<!-- =========================
         Testimonial SECTION
         ========================= -->
      <section id="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12 wow bounce"  data-wow-duration="2s">
                  <div class="testimonial_header">
                     <h2>What they say About us</h2>
                  </div>
                  <!-- /.testimonial_header -->
               </div>
               <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         <div class="testimonial_slider owl-carousel owl-theme">

            <?php 
               $tesatimonial = new WP_Query(array(
                  'post_type' => 'testimonial',
                  'posts_per_page' => -1
               ));

               while ( $tesatimonial->have_posts() ) : $tesatimonial->the_post();

               $person_name = get_post_meta( get_the_ID(), '_hydroo_person_name', true);
               $position_name = get_post_meta( get_the_ID(), '_hydroo_position_name', true);

            ?>

            <div class="slider_part">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="slider_content wow bounce"  data-wow-duration="2s">
                           <?php the_post_thumbnail(); ?>
                           <p><?php the_content(); ?></p>
                           <h5><?php echo $person_name; ?></h5>
                           <span><?php echo $position_name; ?></span>
                        </div>
                        <!-- /.slider_content -->
                     </div>
                     <!-- /.col-md-12 -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container -->
            </div>

         <?php endwhile; ?>
           
            <!-- /.slider_part -->
         </div>
         <!-- /.testimonial_slider -->
      </section>
      <!-- /#testimonial -->