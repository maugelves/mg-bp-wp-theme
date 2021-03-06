<?php

/** Disable the Admin Bar in the frontend **/
add_filter('show_admin_bar', '__return_false');


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function mgwp_after_setup_theme(){

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on mgtc-theme, use a find and replace
     * to change 'mgtc-theme' to the name of your theme in all the template files.
     */
    load_theme_textdomain( DOMAIN_NAME, get_template_directory() . '/languages' );


    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Enable support for Logo
     *
     * @link https://developer.wordpress.org/themes/functionality/custom-logo/
     */
    add_theme_support( 'custom-logo' );

    // Gutenberg Full-Width
    add_theme_support( 'align-wide' );


    // This theme uses wp_nav_menu() in many locations.
    register_nav_menus([
        'main-menu'   => __( 'Primary', DOMAIN_NAME ),
        'footer-menu' => __( 'Footer', DOMAIN_NAME ),
    ]);

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


    // 3. (Opcional) Ocultar el menú de ACF en el administrador de WordPress
    if( ! defined( 'WP_LOCAL_DEV' ) || false == WP_LOCAL_DEV )
        add_filter('acf/settings/show_admin', '__return_false');

}
add_action( 'after_setup_theme', 'mgwp_after_setup_theme' );