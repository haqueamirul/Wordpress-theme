<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package hydroo
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses hydroo_header_style()
 */
function hydroo_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'hydroo_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => true,
		'wp-head-callback'       => 'hydroo_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'hydroo_custom_header_setup' );

if ( ! function_exists( 'hydroo_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see hydroo_custom_header_setup().
	 */
	function hydroo_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;


//header information

function hydroo_header_section($headerinfo){
	$headerinfo->add_section('header_info_section', array(
		'title' => 'Header Info Section',
		'description' => 'All Font-awesome Icon name here <a href="http://fontawesome.io/icons/" >Click Here</a>',
		'priority' => 60
	));

	$headerinfo->add_setting('info_section', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('info_section', array(
		'section' => 'header_info_section',
		'label' => 'Email Here',
		'type' => 'text'
	));
	//icon here
	$headerinfo->add_setting('info_icon', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('info_icon', array(
		'section' => 'header_info_section',
		'label' => 'Write Icon name(ex: envelope)',
		'type' => 'text'
	));

	//phone

	$headerinfo->add_setting('phone_section', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('phone_section', array(
		'section' => 'header_info_section',
		'label' => 'Phone Number Here',
		'type' => 'text'
	));
	//icon
	$headerinfo->add_setting('phone_icon', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('phone_icon', array(
		'section' => 'header_info_section',
		'label' => 'Write Icon name(ex: phone)',
		'type' => 'text'
	));

	//logo text

	$headerinfo->add_section('logo_section', array(
		'title' => 'Logo Section',
		'priority' => 60
	));

	$headerinfo->add_setting('logo_text', array(
		'default' => 'Logo',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('logo_text', array(
		'section' => 'logo_section',
		'label' => 'Logo Text Here',
		'type' => 'text'
	));

	//Logo upload

	$headerinfo->add_setting('upload_logo', array(
		'default' => 'Logo',
		'transport' => 'refresh'
	));

	$headerinfo->add_control(
			new WP_Customize_Image_Control($headerinfo,'upload_logo', array(

				'section' => 'logo_section',
				'label' => 'Upload Your Logo',
				'settings' => 'upload_logo'

				)));

	// Social media section

	$headerinfo->add_section('social_media_section', array(
		'title' => 'Social Media Section',
		'priority' => 60
	));

	//Facebook

	$headerinfo->add_setting('facebook', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('facebook', array(
		'section' => 'social_media_section',
		'label' => 'Write Facebook link here',
		'type' => 'text'
	));

	//Twitter
	$headerinfo->add_setting('twitter', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('twitter', array(
		'section' => 'social_media_section',
		'label' => 'Write twitter link here',
		'type' => 'text'
	));

	//google-plus
	$headerinfo->add_setting('google_pluse', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('google_pluse', array(
		'section' => 'social_media_section',
		'label' => 'Write Google+ link here',
		'type' => 'text'
	));

	//pinterest-p
	$headerinfo->add_setting('pinterest', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('pinterest', array(
		'section' => 'social_media_section',
		'label' => 'Write pinterest link here',
		'type' => 'text'
	));

	//instagram
	$headerinfo->add_setting('instagram', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('instagram', array(
		'section' => 'social_media_section',
		'label' => 'Write instagram link here',
		'type' => 'text'
	));

	//youtube
	$headerinfo->add_setting('youtube', array(
		'default' => '',
		'transport' => 'refresh'
	));

	$headerinfo->add_control('youtube', array(
		'section' => 'social_media_section',
		'label' => 'Write youtube link here',
		'type' => 'text'
	));

}
add_action('customize_register','hydroo_header_section');


