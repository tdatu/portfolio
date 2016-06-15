<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage hermitto
 * @since hermitto 1.0
 */

function hermitto_scripts()
{
	/** CUSTOMIZED STUFFS HERE */
	wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '20160615', true );
	wp_enqueue_script( 'handlebars', get_template_directory_uri() . '/bower_components/handlebars/dist/handlebars.min.js', array(), '20160615', true );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), '20160615', true );
	wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '3.6' );

}
add_action( 'wp_enqueue_scripts', 'hermitto_scripts' );


/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';
