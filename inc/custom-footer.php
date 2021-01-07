<?php
/**
 * Sample implementation of the Custom Footer feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package hydroo
 */


//Copyright Section
function hydroo_footer_section($copyright){
	$copyright->add_section('cpyright_text_section', array(
		'title' => 'Copyright Section',
		'priority' => 60
	));

	$copyright->add_setting('logo_title', array(
		'default' => 'Logo',
		'transport' => 'refresh'
	));

	$copyright->add_control('logo_title', array(
		'section' => 'cpyright_text_section',
		'label' => 'Footer Logo Text',
		'type' => 'text'
	));

	//text title
	$copyright->add_setting('copyrith_title', array(
		'default' => 'Soft-all',
		'transport' => 'refresh'
	));

	$copyright->add_control('copyrith_title', array(
		'section' => 'cpyright_text_section',
		'label' => 'Copyright Text',
		'type' => 'text'
	));

	//Copyright text link
	$copyright->add_setting('copyrith_link', array(
		'default' => 'http://www.soft-all.com',
		'transport' => 'refresh'
	));

	$copyright->add_control('copyrith_link', array(
		'section' => 'cpyright_text_section',
		'label' => 'Copyright Text Link',
		'type' => 'text'
	));

	// Social media section

	//Facebook

	$copyright->add_setting('footer_facebook', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$copyright->add_control('footer_facebook', array(
		'section' => 'cpyright_text_section',
		'label' => 'Write Facebook link here',
		'type' => 'text'
	));

	//Twitter
	$copyright->add_setting('footer_twitter', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$copyright->add_control('footer_twitter', array(
		'section' => 'cpyright_text_section',
		'label' => 'Write twitter link here',
		'type' => 'text'
	));
	//pinterest-p
	$copyright->add_setting('footer_pinterest', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$copyright->add_control('footer_pinterest', array(
		'section' => 'cpyright_text_section',
		'label' => 'Write pinterest link here',
		'type' => 'text'
	));

	//instagram
	$copyright->add_setting('footer_instagram', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$copyright->add_control('footer_instagram', array(
		'section' => 'cpyright_text_section',
		'label' => 'Write instagram link here',
		'type' => 'text'
	));

}
add_action('customize_register','hydroo_footer_section');