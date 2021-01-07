<?php

class award_section_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('award_section_widget','Hydroo Award Widget', array(
			'description' => 'This is a award widget.'
		));
	}
	public function widget($args, $instance){ ?>

		<?php echo $args['before_widget']; ?>
             <i class="fa fa-<?php echo $instance['icon']; ?>" aria-hidden="true"></i>
             <?php echo $args['before_title'].$instance['proposal'].$args['after_title']; ?>
             <p><?php echo $instance['title']; ?></p>
          </div>
          <!-- /.facts_count -->
       <?php echo $args['after_widget']; 

	}
	public function form($three){ ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $three['title']; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('proposal'); ?>">Number of Client</label>
			<input type="text" id="<?php echo $this->get_field_id('proposal'); ?>" class="widefat" name="<?php echo $this->get_field_name('proposal'); ?>" value="<?php echo $three['proposal']; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('icon'); ?>">Icon Name </label>
			<input type="text" id="<?php echo $this->get_field_id('icon'); ?>" class="widefat" name="<?php echo $this->get_field_name('icon'); ?>" value="<?php echo $three['icon']; ?>">
		</p>

<?php	}
}

function award_widget(){
	register_widget('award_section_widget');
}
add_action('widgets_init','award_widget');