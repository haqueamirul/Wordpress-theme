<?php

class hydroo_pricing_section extends WP_Widget{
	public function __construct(){
		parent:: __construct('hydroo_pricing_section','Hydroo Pricing Widget', array(
			'description' => 'Include your hydroo pricing widget.'
		));
	}
	public function widget($args, $instance){ ?>

		<?php echo $args['before_widget']; ?>
             <?php echo $args['before_title']; ?>
                <h4>$ <?php echo $instance['price']; ?> </h4>
                <h5><?php echo $instance['title']; ?></h5>
             <?php echo $args['after_title']; ?>
                <ul>
                   <li><?php echo $instance['duration']; ?></li>
                   <li><?php echo $instance['option_one']; ?></li>
                   <li><?php echo $instance['option_two']; ?></li>
                   <li><?php echo $instance['option_three']; ?></li>
                   <li><?php echo $instance['option_four']; ?></li>
                   <li><?php echo $instance['option_five']; ?></li>
                </ul>
                <a href="#" class="btn btn-default btn-order">sign up now</a>
            
             
          <?php echo $args['after_widget']; ?>

<?php	}
	    public function form($three){ ?>

	    <p>
	    	<label for="<?php echo $this->get_field_id('title'); ?>">Package Name: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $three['title']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('price'); ?>">Price: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('price'); ?>" name="<?php echo $this->get_field_name('price'); ?>" value="<?php echo $three['price']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('duration'); ?>">Package Duration: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('duration'); ?>" name="<?php echo $this->get_field_name('duration'); ?>" value="<?php echo $three['duration']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('option_one'); ?>">Option One: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('option_one'); ?>" name="<?php echo $this->get_field_name('option_one'); ?>" value="<?php echo $three['option_one']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('option_two'); ?>">Option two: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('option_two'); ?>" name="<?php echo $this->get_field_name('option_two'); ?>" value="<?php echo $three['option_two']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('option_three'); ?>">Option three: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('option_three'); ?>" name="<?php echo $this->get_field_name('option_three'); ?>" value="<?php echo $three['option_three']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('option_fourfive'); ?>">Option fourfive: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('option_fourfive'); ?>" name="<?php echo $this->get_field_name('option_fourfive'); ?>" value="<?php echo $three['option_fourfive']; ?>" class="widefat">
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_id('option_five'); ?>">Option five: </label>
	    	<input type="text" id="<?php echo $this->get_field_id('option_five'); ?>" name="<?php echo $this->get_field_name('option_five'); ?>" value="<?php echo $three['option_five']; ?>" class="widefat">
	    </p>

	<?php    }

}

function pricing_widget(){
	register_widget('hydroo_pricing_section');
}
add_action('widgets_init','pricing_widget');