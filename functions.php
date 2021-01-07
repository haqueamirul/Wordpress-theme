<?php
/**
 * hydroo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hydroo 
 */

/**
 * Implement the Theme support.
 */
require get_template_directory() . '/inc/theme-support.php';
/**
 * Implement the Custtom section.
 */
require get_template_directory() . '/inc/custom-body-section.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Implement the Custom Footer feature.
 */
require get_template_directory() . '/inc/custom-footer.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
 /**
 * CMB2  
 */
require_once __DIR__ . '/inc/custome-register.php';
require_once __DIR__ . '/inc/widget/custom-widget.php';
require_once __DIR__ . '/inc/widget/client-widget.php';
require_once __DIR__ . '/inc/widget/pricing-widget.php';
require_once __DIR__ . '/inc/hydroo-plugin-activation.php';



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

