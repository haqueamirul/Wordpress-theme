 <!-- =========================
         Concept SECTION
         ========================= -->
      <section id="service">
         <div class="container">

         	<?php
         		$skill = new WP_Query(array(
         			'post_type' => 'skillconcept',
   					'posts_per_page' => 1
         		));

         		while ( $skill->have_posts() ) : $skill->the_post(); 

         		$title = get_the_title();
         		$image_thumb = get_the_post_thumbnail();

         		$group_meta_data = get_post_meta( get_the_ID(), '_hydroo_about_group_meta', true);

         		?>

         	<?php endwhile; ?>

            <div class="row wow bounce"  data-wow-duration="2s">
               <div class="col-md-7">
                  <div class="concept_header wow bounce"  data-wow-duration="2s">
                     <h2><?php echo $title; ?></h2>
                     <p><?php echo cExcerpt('20'); ?></p>
                  </div>
                  <!-- /.concept_header -->
                  <div class="row">

                  	<?php  if( is_array($group_meta_data)) { ?>

            			<?php foreach($group_meta_data as $single) { ?>

                     <div class="col-md-6 col-sm-6">
                        <div class="con_detsils wow bounce"  data-wow-duration="2s">
                           <i class="fa fa-<?php echo $single['_hydroo_icon_name']; ?>" aria-hidden="true"></i>
                           <h3><?php echo $single['_hydroo_group_title']; ?></h3>
                           <p><?php echo $single['_hydroo_group_description']; ?></p>
                        </div>
                        <!-- /.con_detsils -->
                     </div>

                 <?php } } wp_reset_postdata(); ?>

                     <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.col-md-7 -->
               <div class="col-md-5 col-sm-5">
                  <div class="concept_img wow bounce"  data-wow-duration="2s">
                     <?php echo $image_thumb; ?>
                  </div>
                  <!-- /.concept_img -->
               </div>
               <!-- /.col-md-5 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#concept -->