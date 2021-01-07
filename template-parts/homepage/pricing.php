<!-- =========================
         Pricing SECTION
         ========================= -->
            
         
      <section id="pricing">
         <div class="container">
            <div class="row">



               <?php if ( !dynamic_sidebar('price-sidebar') ) {
                 echo 'Sidebar not active';
               } ?>



               
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /#pricing -->
      
      <?php 

      get_template_part( 'template-parts/homepage/testimonial' ); 
      get_template_part( 'template-parts/homepage/brand' ); 

      ?>