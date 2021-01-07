<?php
/**
 * Sample implementation of the Custom body section feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package hydroo
 */
//Default Excerpt

 function cExcerpt($number = 20, $readmore = 'Read More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	array_push($var, '<a href="'.get_the_permalink().'">'.$readmore.'</a>');
 	$var = implode(' ', $var);

 	return $var;
 }

//Costom body section

function themedemo_customize($wp_customize) {

$wp_customize->add_section( 'themedemo_demo_settings', array(
    'title'          => 'Welcome Section',
    'priority'       => 60,
) );

$wp_customize->add_setting( 'title_setting', array(
    'default'        => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'      => 'refresh'
) );

$wp_customize->add_control( 'title_setting', array(
    'label'   => 'Write Your Title',
    'section' => 'themedemo_demo_settings',
    'type'    => 'text',
) );

//content

$wp_customize->add_setting( 'content_setting', array(
    'default'        => 'Write somthing',
    'sanitize_callback' => 'esc_url_raw',
    'transport'      => 'refresh'
) );

$wp_customize->add_control( 'content_setting', array(
    'label'   => 'Write Your Content',
    'section' => 'themedemo_demo_settings',
    'type'    => 'textarea',
) );

$wp_customize->add_setting(
            'color_seting',
            array(
            	'default'        => '#fff',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_seting', array(
    'label'   => 'Bacground Color Setting',
    'section' => 'themedemo_demo_settings',
    'settings'   => 'color_seting',
) ) );

$wp_customize->add_setting(
            'heading_seting',
            array(
            	'default'        => '#000',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_seting', array(
    'label'   => ' Heading Color Setting',
    'section' => 'themedemo_demo_settings',
    'settings'   => 'heading_seting',
) ) );

$wp_customize->add_setting(
            'content_seting',
            array(
            	'default'        => '#787878',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_seting', array(
    'label'   => 'Content Color Setting',
    'section' => 'themedemo_demo_settings',
    'settings'   => 'content_seting',
) ) );

$wp_customize->add_setting(
            'welcome_image',
            array(
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'welcome_image',
			array(
				'label' => __('Welcome Image','generate'),
				'section' => 'themedemo_demo_settings',
				'settings' => 'welcome_image',
                'priority'   => 15
			)
		)
	);

//Design Section


	$wp_customize->add_section( 'design_demo_settings', array(
	    'title'          => 'Design Section',
	    'priority'       => 60,
	) );

	$wp_customize->add_setting( 'design_title_setting', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'design_title_setting', array(
	    'label'   => 'Write Your Title',
	    'section' => 'design_demo_settings',
	    'type'    => 'text',
	) );

	//content

	$wp_customize->add_setting( 'design_content_setting', array(
	    'default'        => 'Write somthing',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'design_content_setting', array(
	    'label'   => 'Write Your Content',
	    'section' => 'design_demo_settings',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting(
            'design_heading_color_seting',
            array(
                'default' => '#14c3dc',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'design_heading_color_seting', array(
	    'label'   => 'Heading Color Setting',
	    'section' => 'design_demo_settings',
	    'settings'   => 'design_heading_color_seting',
	) ) );

	$wp_customize->add_setting(
            'design_content_color_seting',
            array(
                'default' => '#fff',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'design_content_color_seting', array(
	    'label'   => 'Content Color Setting',
	    'section' => 'design_demo_settings',
	    'settings'   => 'design_content_color_seting',
	) ) );

	$wp_customize->add_setting(
            'Design_bg_image',
            array(
                'default' => '#000',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'Design_bg_image',
				array(
					'label' => __('Design Bacground Image','generate'),
					'section' => 'design_demo_settings',
					'settings' => 'Design_bg_image',
	                'priority'   => 15
				)
			)
		);


		//Our process

		$wp_customize->add_section( 'process_demo_settings', array(
		    'title'          => 'Our Process Section',
		    'priority'       => 60,
		) );

		$wp_customize->add_setting( 'process_title', array(
		    'default'        => '',
		    'sanitize_callback' => 'esc_url_raw',
		    'transport'      => 'refresh'
		) );

		$wp_customize->add_control( 'process_title', array(
		    'label'   => 'Write Your Title',
		    'section' => 'process_demo_settings',
		    'type'    => 'text',
		) );

		$wp_customize->add_setting( 'process_content', array(
		    'default'        => '',
		    'sanitize_callback' => 'esc_url_raw',
		    'transport'      => 'refresh'
		) );

		$wp_customize->add_control( 'process_content', array(
		    'label'   => 'Write Your Content',
		    'section' => 'process_demo_settings',
		    'type'    => 'textarea',
		) );

		$wp_customize->add_setting(
            'process_title_color',
            array(
                'default' => '#000',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'process_title_color', array(
		    'label'   => 'Title Color Setting',
		    'section' => 'process_demo_settings',
		    'settings'   => 'process_title_color',
		) ) );

		$wp_customize->add_setting(
            'process_content_color',
            array(
                'default' => '#2e2e2e',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'process_content_color', array(
		    'label'   => 'Content Color Setting',
		    'section' => 'process_demo_settings',
		    'settings'   => 'process_content_color',
		) ) );

		$wp_customize->add_setting( 'process_photo' );
		 
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'process_photo',
					array(
						'label' => __('Process Image','generate'),
						'section' => 'process_demo_settings',
						'settings' => 'process_photo',
		                'priority'   => 15
					)
				)
			);

//Our Mission

	$wp_customize->add_section( 'our_mission_settings', array(
	    'title'          => 'Our Mission Section',
	    'priority'       => 60,
	) );

	$wp_customize->add_setting( 'mission_title', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'mission_title', array(
	    'label'   => 'Write Your Title',
	    'section' => 'our_mission_settings',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting(
            'mission_image',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
                'transport'   => 'refresh',

            )
        );
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'mission_image',
				array(
					'label' => __('Mission Image','generate'),
					'section' => 'our_mission_settings',
					'settings' => 'mission_image',
				)
			)
		);

	$wp_customize->add_setting( 'sub_one_title', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_one_title', array(
	    'label'   => 'Write Your Collapse Title 1',
	    'section' => 'our_mission_settings',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'sub_one_content', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_one_content', array(
	    'label'   => 'Write Your Collapse Content 1',
	    'section' => 'our_mission_settings',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'sub_two_title', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_two_title', array(
	    'label'   => 'Write Your Collapse Title 2',
	    'section' => 'our_mission_settings',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'sub_two_content', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_two_content', array(
	    'label'   => 'Write Your Collapse Content 2',
	    'section' => 'our_mission_settings',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'sub_three_title', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_three_title', array(
	    'label'   => 'Write Your Collapse Title 3',
	    'section' => 'our_mission_settings',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'sub_three_content', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_three_content', array(
	    'label'   => 'Write Your Collapse Content 3',
	    'section' => 'our_mission_settings',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'sub_four_title', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_four_title', array(
	    'label'   => 'Write Your Collapse Title 4',
	    'section' => 'our_mission_settings',
	    'type'    => 'text',
	) );


	$wp_customize->add_setting( 'sub_four_content', array(
	    'default'        => '',
	    'sanitize_callback' => 'esc_url_raw',
	    'transport'      => 'refresh'
	) );

	$wp_customize->add_control( 'sub_four_content', array(
	    'label'   => 'Write Your Collapse Content 4',
	    'section' => 'our_mission_settings',
	    'type'    => 'textarea',
	) );



}
add_action('customize_register','themedemo_customize');



function hydroo_custom_post_slider(){

	register_post_type( 'hydrooservice',
		array(
			'labels' => array(
				'name' => __( 'Service' ),
				'singular_name' => __( 'service' ),
				'add_new' => __( 'Add New service' ),
				'add_new_item' => __( 'New service' ),
			),
			
			'public' => true,
			'has_archive' => true,
			'menu_icon'=> 'dashicons-tag',
			'rewrite' => array('slug' => 'service'),
			'supports' => array( 'title','editor' )
			
		)
	);

}
add_action('after_setup_theme','hydroo_custom_post_slider');

function hydroo_skill_and_concept(){

	register_post_type( 'skillconcept',
		array(
			'labels' => array(
				'name' => __( 'Concept' ),
				'singular_name' => __( 'skillconcept' ),
				'add_new' => __( 'Add New skillconcept' ),
				'add_new_item' => __( 'New skillconcept' ),
			),
			
			'public' => true,
			'has_archive' => true,
			'menu_icon'=> 'dashicons-welcome-add-page',
			'rewrite' => array('slug' => 'skillconcept'),
			'supports' => array( 'title','editor','thumbnail' )
			
		)
	);


	 register_taxonomy('topics',array('skillconcept'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));

	 register_post_type( 'amazingskills',
		array(
			'labels' => array(
				'name' => __( 'Skills' ),
				'singular_name' => __( 'amazing skills' ),
				'add_new' => __( 'Add New amazing skills' ),
				'add_new_item' => __( 'New amazing skills' ),
			),
			
			'public' => true,
			'has_archive' => true,
			'menu_icon'=> 'dashicons-pressthis',
			'rewrite' => array('slug' => 'skills'),
			'supports' => array( 'title','thumbnail' )
			
		)
	);

	 register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'portfolio' ),
				'add_new' => __( 'Add New portfolio' ),
				'add_new_item' => __( 'New portfolio' ),
			),
			
			'public' => true,
			'has_archive' => true,
			'menu_icon'=> 'dashicons-sticky',
			'rewrite' => array('slug' => 'portfolio'),
			'supports' => array( 'title','thumbnail' )
			
		)
	);

	 register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => __( 'Testimonial' ),
				'singular_name' => __( 'Testimonialonial' ),
				'add_new' => __( 'Add New testimonial' ),
				'add_new_item' => __( 'New testimonial' ),
			),
			
			'public' => true,
			'has_archive' => true,
			'menu_icon'=> 'dashicons-admin-page',
			'rewrite' => array('slug' => 'testimonial'),
			'supports' => array( 'title','editor','thumbnail' )
			
		)
	);

}
add_action('after_setup_theme','hydroo_skill_and_concept');


/**
 * Register a book post type.
 */
function book_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Books', 'textdomain' ),
        'supports' => array( 'title','thumbnail' ),
        'menu_icon' => 'dashicons-book',
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'book_setup_post_type' );



