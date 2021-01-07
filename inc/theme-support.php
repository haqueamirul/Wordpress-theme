<?php
/**
 * hydroo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hydroo
 */

if ( ! function_exists( 'hydroo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hydroo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hydroo, use a find and replace
		 * to change 'hydroo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hydroo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// custom menu
		if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
		// file does not exist... return an error.
		return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
		// file exists... require it.
		require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
		}

		register_nav_menus( array(
		    'primary' => __( 'Primary Menu', 'THEMENAME' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hydroo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'hydroo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hydroo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hydroo_content_width', 640 );
}
add_action( 'after_setup_theme', 'hydroo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hydroo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hydroo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hydroo' ),
		'before_widget' => '<div class="col-md-3 col-sm-3 wow bounce"  data-wow-duration="2s">
                  <div class="facts_count">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="start-count">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Client Sidebar', 'hydroo' ),
		'id'            => 'client-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hydroo' ),
		'before_widget' => '<div class="brand-img"><div class="col-md-4 col-sm-4 agency-brand">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="brand_logo wow bounce"  data-wow-duration="2s">',
		'after_title'   => '</div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Pricing Sidebar', 'hydroo' ),
		'id'            => 'price-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hydroo' ),
		'before_widget' => '<div class="col-md-4 col-sm-4"><div class="price_column wow bounce"  data-wow-duration="2s">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<div class="price_title">',
		'after_title'   => '</div><div class="price_option wow bounce"  data-wow-duration="2s">',
	) );
}
add_action( 'widgets_init', 'hydroo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hydroo_scripts() {
	wp_enqueue_style( 'hydroo-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'hydroo-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'hydroo-magnific-popu', get_template_directory_uri() . '/dist/magnific-popup.css');
	wp_enqueue_style( 'hydroo-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'hydroo-owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.css');
	wp_enqueue_style( 'hydroo-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'hydroo-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'hydroo-responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'hydroo-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'hydroo-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
	wp_enqueue_script( 'hydroo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-jquery.parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-magnific', get_template_directory_uri() . '/dist/jquery.magnific-popup.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-wow', get_template_directory_uri() . '/js/wow.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	wp_enqueue_script( 'hydroo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hydroo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hydroo_scripts' );