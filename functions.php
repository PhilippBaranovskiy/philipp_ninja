<?php
if ( ! function_exists( 'philipp_ninja_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function philipp_ninja_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on philipp_ninja, use a find and replace
	 * to change 'philipp_ninja' to the name of your theme in all the template files
	 */
	// load_theme_textdomain( 'philipp_ninja', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Top Menu', 'philipp_ninja' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'philipp_ninja_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // philipp_ninja_setup
add_action( 'after_setup_theme', 'philipp_ninja_setup' );

function prepareLibraries() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//yastatic.net/jquery/2.1.3/jquery.min.js', false, '2.1.3', true);
}
function bottomPageScripts() {
	prepareLibraries();
	wp_enqueue_script('sharing', '//yastatic.net/share/share.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'bottomPageScripts' );

?>