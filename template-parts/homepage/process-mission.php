<!-- =========================
         OUR SECTION
         ========================= -->
      
      <section id="our">


         <?php if ( get_theme_mod('process_title') ): ?>
            
         
         <style type="text/css">
         .our_section_one h2{
            color: <?php echo get_theme_mod('process_title_color'); ?>;
         }
         .process_dts h2:before{
            position: absolute;
            border: 2px solid <?php echo get_theme_mod('process_title_color'); ?>;
            bottom: -30px;
            left: 0%;
            content: "";
            width: 45px;
            margin-bottom: 10px;
         }
         .our_section_one p{
            color: <?php echo get_theme_mod('process_content_color'); ?>;
         }
         .our_section_one{
            padding-bottom: 40px;
         }
      </style>
         <div class="our_section_one">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-7">
                     <div class="process_img wow bounce"  data-wow-duration="2s">
                        <img src="<?php echo get_theme_mod('process_photo'); ?>" class="img-responsive" alt="">
                     </div>
                     <!-- /.process_img -->
                  </div>
                  <!-- /.col-md-4 -->
                  <div class="col-md-7 col-md-offset-1 col-sm-12">
                     <div class="process_dts wow bounce"  data-wow-duration="2s">
                        <h2><?php echo get_theme_mod('process_title'); ?></h2>
                        <p><?php echo get_theme_mod('process_content'); ?></p>
                     </div>
                     <!-- /.process_dts -->
                     <div class="callout-section">
                        <div class="col-md-3 col-sm-3 single-colmun">
                           <div class="icon-holder wow bounce"  data-wow-duration="2s">
                              <div class="icon-box">
                                 <i class="fa fa-leaf" aria-hidden="true"></i>
                              </div>
                           </div>
                           <!-- /.icon-holder -->
                        </div>
                        <!-- /.single-colmun -->
                        <div class="col-md-3 col-sm-3 single-colmun">
                           <div class="icon-holder wow bounce"  data-wow-duration="2s">
                              <div class="icon-box">
                                 <i class="fa fa-anchor" aria-hidden="true"></i>
                              </div>
                           </div>
                           <!-- /.icon-holder -->
                        </div>
                        <!-- /.single-colmun -->
                        <div class="col-md-3 col-sm-3 single-colmun">
                           <div class="icon-holder wow bounce"  data-wow-duration="2s">
                              <div class="icon-box">
                                 <i class="fa fa-diamond" aria-hidden="true"></i>
                              </div>
                           </div>
                           <!-- /.icon-holder -->
                        </div>
                        <!-- /.single-colmun -->
                        <div class="col-md-3 col-sm-3 single-colmun">
                           <div class="icon-holder wow bounce"  data-wow-duration="2s">
                              <div class="icon-box">
                                 <i class="fa fa-rocket" aria-hidden="true"></i>
                              </div>
                           </div>
                           <!-- /.icon-holder -->
                        </div>
                        <!-- /.single-colmun -->
                     </div>
                     <!-- /.callout-section -->
                  </div>
                  <!-- /.col-md-7 -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>

         <?php endif ?>


         <!-- /.our_section_one -->
         <?php if ( get_theme_mod('mission_title') ) : ?>
         <div class="our_section_two">
            <div class="container">
               <div class="row">
                  <div class="our_mission">
                     <div class="col-md-6 col-sm-6">
                        <div class="process_heading wow bounce"  data-wow-duration="2s">
                           <h2><?php echo get_theme_mod('mission_title'); ?></h2>
                        </div>
                        <!-- /.process_heading -->

                        <?php if ( get_theme_mod('sub_one_title') ) : ?>
                        <div class="our_collapse">
                           <div class="panel-group" id="accordion" role="tablist"  aria-multiselectable="true">
                              <div class="panel wow bounce"  data-wow-duration="2s">
                                 <div class="panel-heading active" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                       <button role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       <span class="panel_title_heading"><?php echo get_theme_mod('sub_one_title'); ?></span>
                                       </button>
                                    </h4>
                                 </div>
                                 <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                       <p><?php echo get_theme_mod('sub_one_content'); ?></p>
                                    </div>
                                    <!-- /.panel-body 1 -->
                                 </div>
                                 <!-- /.panel-collapse 1 -->
                              </div>
                              <!-- /.panel/panel-default 1 -->
                              <div class="panel wow bounce"  data-wow-duration="2s">
                                 <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                       <button class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       <span class="panel_title_heading"><?php echo get_theme_mod('sub_two_title'); ?></span>
                                       </button>
                                    </h4>
                                 </div>
                                 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                       <p><?php echo get_theme_mod('sub_two_content'); ?></p>
                                    </div>
                                    <!-- /.panel-body 2 -->
                                 </div>
                                 <!-- /.panel-collapse 2 -->
                              </div>
                              <!-- /.panel/panel-default 2 -->
                              <div class="panel wow bounce"  data-wow-duration="2s">
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                       <button class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <span class="panel_title_heading"><?php echo get_theme_mod('sub_three_title'); ?></span>
                                       </button>
                                    </h4>
                                 </div>
                                 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                       <p><?php echo get_theme_mod('sub_three_content'); ?></p>
                                    </div>
                                    <!-- /.panel-body 3 -->
                                 </div>
                                 <!-- /.panel-collapse 3 -->
                              </div>
                              <!-- /.panel/panel-default 3 -->
                              <div class="panel wow bounce"  data-wow-duration="2s">
                                 <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                       <button class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       <span class="panel_title_heading"><?php echo get_theme_mod('sub_four_title'); ?></span>
                                       </button>
                                    </h4>
                                 </div>
                                 <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                       <p><?php echo get_theme_mod('sub_four_content'); ?></p>
                                    </div>
                                    <!-- /.panel-body 4 -->
                                 </div>
                                 <!-- /.panel-collapse 4 -->
                              </div>
                              <!-- /.panel/panel-default 4 -->
                           </div>
                           <!-- /.panel-group -->
                        </div>
                        <!-- /.our_collapse -->

                     <?php endif; ?>



                     </div>
                     <!-- /.col-md-6 -->
                     <div class="col-md-6 col-sm-6">
                        <div class="mission_img wow bounce"  data-wow-duration="2s">
                           <img src="<?php echo get_theme_mod('mission_image'); ?>" class="img-responsive" alt="">
                        </div>
                        <!-- /.mission_img -->
                     </div>
                     <!-- /.col-md-4 -->
                  </div>
                  <!-- /.our_mission -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>

      <?php endif; ?>
         <!-- /.our_section_two -->
      </section>
      <!-- /#our -->