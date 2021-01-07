  <!-- =========================
         Header SECTION
         ========================= -->
      <header id="header">
         <nav class="navbar agency-navbar wow bounce"  data-wow-duration="2s">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo get_theme_mod('logo_text'); ?></a><a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_theme_mod('upload_logo'); ?>"></a>
                  
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->

               <?php
               	wp_nav_menu( array(
				    'theme_location'    => 'primary',
				    'depth'             => 2,
				    'container'         => 'div',
				    'container_class'   => 'collapse navbar-collapse',
				    'container_id'      => 'bs-example-navbar-collapse-1',
				    'menu_class'        => 'nav navbar-nav pull-right',
				    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker())
				);
               ?>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
         </nav>
      </header>