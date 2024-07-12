<?php
/**
 * fourjunctions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fourjunctions
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
function four_junctions_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on fourjunctions, use a find and replace
		* to change 'four_junctions' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'four_junctions', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'four_junctions' ),
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
			'four_junctions_custom_background_args',
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
add_action( 'after_setup_theme', 'four_junctions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function four_junctions_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'four_junctions_content_width', 640 );
}
add_action( 'after_setup_theme', 'four_junctions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function four_junctions_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'four_junctions' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'four_junctions' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'four_junctions_widgets_init' );




/**
 * Start Custom Post Type.
 */


 /**
 * Start Custom Post Type for People.
 */

 function team_custom_post() {

	$args = array(

		'labels' => array(
			'name' => 'People',
			'singular_name' => 'Person',
			'add_new' => 'Add Person',
			'add_new_item' => 'Full Name',
			'edit_item' => 'Edit Full Name',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-id-alt',

	);

	register_post_type( 'people', $args );
}
add_action('init', 'team_custom_post');


function remove_editor_from_team_custom_post() {
    remove_post_type_support( 'people', 'editor', 'thumbnail',);
}
add_action('init', 'remove_editor_from_team_custom_post');

 /**
 * End Custom Post Type for People.
 */




 /**
 * Start Custom Post Type for People.
 * 
 */

function works_custom_post() {

	$args = array(

		'labels' => array(
			'name' => 'Works',
			'singular_name' => 'Work',
			'add_new' => 'Add Work',
			'add_new_item' => 'Add Work',
			'edit_item' => 'Edit Work',
			'search_items' => 'Search Work',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-editor-paste-word',

	);

	register_post_type( 'works', $args );
}
add_action('init', 'works_custom_post');


function remove_editor_from_works_custom_post() {
    remove_post_type_support( 'works', 'editor', 'thumbnail' );
}
add_action('init', 'remove_editor_from_works_custom_post');

 /**
 * End Custom Post Type for People.
 */




 /**
 * Start Custom Post Type for Platform.
 * 
 */

 function platforms_custom_post() {

	$args = array(

		'labels' => array(
			'name' => 'Platforms',
			'singular_name' => 'Platform',
			'add_new' => 'Add Platform',
			'add_new_item' => 'Add Platform',
			'edit_item' => 'Edit Platform',
			'search_items' => 'Search Platform',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-screenoptions',

	);

	register_post_type( 'platforms', $args );
}
add_action('init', 'platforms_custom_post');


function remove_editor_from_platforms_custom_post() {
    remove_post_type_support( 'platforms', 'editor', 'thumbnail' );
}
add_action('init', 'remove_editor_from_platforms_custom_post');

 /**
 * End Custom Post Type for Platform.
 */



 /**
 * Start Custom Taxonomy.
 */

/**
 * Start Custom Taxonomy for People.
 */

function people_taxonomy() {

	$args = array(

		'labels' => array(
			'name' => 'Tags',
			'singular_name' => 'Tag'
		),
		'public' => true,
		'hierarchical' => false,

	);

	register_taxonomy( 'tags', array('people'), $args );
}
add_action('init', 'people_taxonomy');

/**
 * End Custom Taxonomy for People.
 */


 /**
 * Start Custom Taxonomy for Work.
 */
function work_taxonomy() {

	$args = array(

		'labels' => array(
			'name' => 'Categories',
			'singular_label' => 'Category', 
		),
		'public' => true,
		'hierarchical' => true,

	);

	register_taxonomy( 'categories', array('works'), $args );
}
add_action('init', 'work_taxonomy');

 /**
 * End Custom Taxonomy for Work.
 */





/**
 * Enqueue scripts and styles.
 */
function four_junctions_scripts() {
	wp_enqueue_style( 'four_junctions-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'four_junctions-style', 'rtl', 'replace' );

	wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri().'/dist/main-output.css', array(), _S_VERSION );

	wp_enqueue_style( 'custom_output', get_template_directory_uri().'/dist/custom-styles.css', array(), _S_VERSION );

	wp_enqueue_script( 'four_junctions-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'jquery', 'https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'four_junctions_scripts' );

/**
 * Custom Image Size.
 */
add_image_size('large', 800, 400, false);
add_image_size('small', 300, 200, true);


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