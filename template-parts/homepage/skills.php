<!-- =========================
         SKILL SECTION
         ========================= -->
      <section id="skill">
         <div class="container">

         	<?php
         		$amaskill = new WP_Query(array(
         			'post_type' => 'amazingskills',
   					'posts_per_page' => 1
         		));

         		while ( $amaskill->have_posts() ) : $amaskill->the_post(); 

         		$skilltitle = get_the_title();
         		$skillimage_thumb = get_the_post_thumbnail();

         		$skills_meta_data = get_post_meta( get_the_ID(), '_hydroo_skills_group_meta', true);

         		?>

         	<?php endwhile; ?>
         	<?php
         		if ( $skilltitle ) {  ?>

            <div class="row">
               <div class="col-md-12 text-center wow bounce"  data-wow-duration="2s">
                  <div class="skill_header">
                     <h2><?php echo $skilltitle; ?></h2>
                  </div>
                  <!-- /.skill_header -->
               </div>
               <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-md-5 col-sm-8">
                  <div class="skill_img wow bounce"  data-wow-duration="2s">
                     <?php echo $skillimage_thumb; ?>
                  </div>
               </div>
               <!-- /.col-md-5 -->
               <div class="col-md-7 col-sm-12">

               	<?php  if( is_array($skills_meta_data)) { ?>

            			<?php foreach($skills_meta_data as $single) { ?>

                  <div class="col-md-12">
                     <div class="bar_content wow bounce"  data-wow-duration="2s">
                        <h3 class="progress-title"><?php echo $single['_hydroo_course_title']; ?></h3>
                        <div class="progress pink">
                           <div class="progress-bar" style="width:<?php echo $single['_hydroo_course_per']; ?>; background:<?php echo $single['_hydroo_course_color']; ?>;">
                              <div class="progress-value"><?php echo $single['_hydroo_course_per']; ?></div>
                           </div>
                        </div>
                        <!-- /.progress -->
                     </div>
                     <!-- /.bar_content -->
                  </div>
                  <!-- /.col-md-12 -->
                 
                  <?php } } ?>

                  <!-- /.col-md-12 -->
               </div>
               <!-- /.col-md-7 -->
            </div>

            
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>

      <?php } ?>
      <!-- /#skill -->