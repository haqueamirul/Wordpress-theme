<?php

class award_client_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('award_client_widget', 'Hydroo Client Widget', array(
			'description' => 'Add your hydroo client widget.'
		));
	}
	public function widget($args, $instsnce){ ?>

		<?php echo $args['before_widget']; ?>
             <?php echo $args['before_title']; ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $instsnce['client_picture']; ?>" class="img-responsive" alt="image"></a>
             <?php echo $args['after_title']; ?>
             <!-- /.brand_logo -->
          <?php echo $args['after_widget']; ?>

<?php	}
	public function form($three){ ?>

		<p>
			<label>Title</label>
			<input type="text" name="">
		</p>
		<p>
			<button id="upload-button" class="button button-secondery">Upload image</button>
			<input type="text" id="client-picture" name="<?php echo $this->get_field_name('client_picture'); ?>" value="<?php echo $three['client_picture']; ?>">
		</p>

<?php	}
}

function client_widget(){
	register_widget('award_client_widget');
}
add_action('widgets_init','client_widget');


function hydroo_load_admin_script(){

	wp_enqueue_media();
	wp_register_script('hydroo-admin-script', get_template_directory_uri(). '/js/hydroo.admin.js', array('jquery'), '1.0.0', true);
 	wp_enqueue_script('hydroo-admin-script');
}
add_action('admin_enqueue_scripts','hydroo_load_admin_script');

