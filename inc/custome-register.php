<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_hydroo_';

	/**
	 * Initiate the metabox
	 */

	$service_item = new_cmb2_box( array(
		'id'            => 'service_matabox',
		'title'         => __( 'Service Metabox', 'hydroo' ),
		'object_types'  => array( 'hydrooservice', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'Service Animated', 'hydroo' ),
		'desc'       => __( 'Write here your service animated Name or <a href="https://daneden.github.io/animate.css/">Click Here</a>', 'hydroo' ),
		'id'         => $prefix . 'service_animated',
		'type'       => 'text'
	) );
	$service_item->add_field( array(
		'name'       => __( 'Service Icon (ex: laptop)', 'hydroo' ),
		'desc'       => __( 'Write here your service Icon name or <a href="http://fontawesome.io/icons/">Click Here</a>', 'hydroo' ),
		'id'         => $prefix . 'service_icon',
		'type'       => 'text'
	) );

//For Clear concept and skill

	$skillconcept_item = new_cmb2_box( array(
		'id'            => 'skillconcept_matabox',
		'title'         => __( 'Skill And Concept Metabox', 'hydroo' ),
		'object_types'  => array( 'skillconcept', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$skill_group_para = $skillconcept_item->add_field( array(
		'name'       => __( 'Groupable Field', 'hydroo' ),
		'id'         => $prefix . 'about_group_meta',
		'type'       => 'group'
	) );

	$skillconcept_item->add_group_field($skill_group_para, array(
		'name'       => __( 'Group Title', 'hydroo' ),
		'desc'       => __( 'Write here your Group Title', 'hydroo' ),
		'id'         => $prefix . 'group_title',
		'type'       => 'text'
	) );

	$skillconcept_item->add_group_field($skill_group_para, array(
		'name'       => __( 'Group Icon', 'hydroo' ),
		'desc'       => __( 'Write here your group icon', 'hydroo' ),
		'id'         => $prefix . 'icon_name',
		'type'       => 'text'
	) );

	$skillconcept_item->add_group_field($skill_group_para, array(
		'name'       => __( 'Group Description', 'hydroo' ),
		'desc'       => __( 'Write here your Group Description', 'hydroo' ),
		'id'         => $prefix . 'group_description',
		'type'       => 'textarea'
	) );

	
//skills

	$amazineskill_item = new_cmb2_box( array(
		'id'            => 'amazinskills_matabox',
		'title'         => __( 'Amazine Skills Metabox', 'hydroo' ),
		'object_types'  => array( 'amazingskills', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$amskill_group_para = $amazineskill_item->add_field( array(
		'name'       => __( 'Customize Field', 'hydroo' ),
		'id'         => $prefix . 'skills_group_meta',
		'type'       => 'group'
	) );

	$amazineskill_item->add_group_field($amskill_group_para, array(
		'name'       => __( 'Course Title', 'hydroo' ),
		'desc'       => __( 'Write here your Course Title', 'hydroo' ),
		'id'         => $prefix . 'course_title',
		'type'       => 'text'
	) );

	$amazineskill_item->add_group_field($amskill_group_para, array(
		'name'       => __( 'Course Persantage', 'hydroo' ),
		'desc'       => __( 'Write here your Course Persantage(Ex:78%)', 'hydroo' ),
		'id'         => $prefix . 'course_per',
		'type'       => 'text'
	) );
	$amazineskill_item->add_group_field($amskill_group_para, array(
		'name'       => __( 'Course Color Code', 'hydroo' ),
		'desc'       => __( 'Write here your Course Color Code(Ex:#fffff)', 'hydroo' ),
		'id'         => $prefix . 'course_color',
		'type'       => 'text'
	) );

//Porfolio section

	$porfolio_item = new_cmb2_box( array(
		'id'            => 'portfolio_metabox',
		'title'         => __( 'Portfolio Metabox', 'hydroo' ),
		'object_types'  => array( 'portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	$porfolio_item->add_field( array(
		'name'       => __( 'portfolio quality', 'hydroo' ),
		'id'         => $prefix . 'port_quality',
		'type'       => 'text'
	) );

	$porfolio_item->add_field( array(
		'name' => esc_html__( 'Your Large  Image', 'hydroo' ),
		'desc' => esc_html__( 'Upload an large image ', 'hydroo' ),
		'id'   => $prefix . 'large_image',
		'type' => 'file',
	) );

// Testimonial section

	$testimonial_item = new_cmb2_box( array(
		'id'            => 'testimonial_metabox',
		'title'         => __( 'Testimonial Metabox', 'hydroo' ),
		'object_types'  => array( 'testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	$testimonial_item->add_field( array(
		'name'       => __( 'Person Name', 'hydroo' ),
		'id'         => $prefix . 'person_name',
		'type'       => 'text'
	) );

	$testimonial_item->add_field( array(
		'name' => esc_html__( 'Position name', 'hydroo' ),
		'id'   => $prefix . 'position_name',
		'type' => 'text',
	) );



}