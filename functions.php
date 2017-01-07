<?php
/**
 * Balassone functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Balassone
 */

if ( ! function_exists( 'balassone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function balassone_setup() {
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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'balassone' ),
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

}
endif;
add_action( 'after_setup_theme', 'balassone_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function balassone_widgets_init() {
	register_sidebar( array(
		'name'          => 'Primary',
		'id'            => 'primary-sidebar',
		'description'   => 'Main sidebar.',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>'
	) );
}
add_action( 'widgets_init', 'balassone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function balassone_scripts() {
	wp_enqueue_style( 'balassone-style', get_stylesheet_uri() );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js' );


}
add_action( 'wp_enqueue_scripts', 'balassone_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Search page shows all results
 */
function change_wp_search_size($query) {
    if ( $query->is_search() ) // Make sure it is a search page
        $query->query_vars['posts_per_page'] = -1;

    return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter
