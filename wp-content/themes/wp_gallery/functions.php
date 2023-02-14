<?php
/**
 * Gallery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gallery
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gallery_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Gallery, use a find and replace
		* to change 'gallery' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gallery', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'gallery' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gallery_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'gallery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gallery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gallery_content_width', 640 );
}
add_action( 'after_setup_theme', 'gallery_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gallery_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gallery' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gallery' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gallery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gallery_scripts() {
	wp_enqueue_style( 'gallery-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'gallery-style', 'rtl', 'replace' );

	wp_enqueue_style( 'wp-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'wp-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'wp-slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'wp-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'wp-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'wp-css3', get_template_directory_uri() . '/assets/css/css3.css' );
	wp_enqueue_style( 'wp-style', get_template_directory_uri() . '/assets/css/style1.css' );

	

	wp_enqueue_script( 'jquery-1.12.4.min', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js' );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.min.js' );
	wp_enqueue_script( 'waypoints-min', get_template_directory_uri() . '/assets/js/waypoints.min.js' );
	wp_enqueue_script( 'jquery-counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js' );
	wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/assets/js/portfolio.js' );

	
	wp_enqueue_script( 'gallery-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gallery_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
function create_posttype() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('portfolio', 'plural'),
'singular_name' => _x('portfolio', 'singular'),
'menu_name' => _x('portfolio', 'admin menu'),
'name_admin_bar' => _x('portfolio', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => _('Add New portfolio'),
'new_item' => ('New portfolio'),
'edit_item' => ('Edit portfolio'),
'view_item' => ('View portfolio'),
'all_items' => ('All portfolio'),
'search_items' => ('Search portfolio'),
'not_found' => ('No portfolio found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('portfolio', $args);
register_taxonomy('porfolio_category', 'portfolio', 
    array('hierarchical' => true, 
    	'label' => 'Category', 
    	'query_var' => true, 
    // 	'show_ui' => true,
    // 	'show_admin_column' => true,
    // 'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio-category' )));

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
