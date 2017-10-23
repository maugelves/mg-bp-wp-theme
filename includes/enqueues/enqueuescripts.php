<?php
/*
 * Register the JS scripts
 */
function site_scripts() {

	// Load LiveReload library for development purposes
	if( defined('WP_DEBUG') && true === WP_DEBUG )
		wp_enqueue_script('livereload', get_bloginfo( 'template_url' ) . '/js/libs/livereload.js', array(), '', false );

	// Register Libraries
	wp_register_script('umbrellajs', get_bloginfo( 'template_url' ) . '/js/libs/umbrella.min.js', array(), false, true );
	wp_register_script('validatejs', get_bloginfo( 'template_url' ) . '/js/libs/validate.min.js', array(), false, true ); // https://github.com/cferdinandi/validate


	/*
	 * HeadRoom Js
	 * http://wicky.nillia.ms/headroom.js/
	 */
	wp_enqueue_script('headroom', get_bloginfo( 'template_url' ) . '/js/libs/headroom.min.js', array(), false, true );


	/*
	Object Fit Images Polyfill
	https://github.com/bfred-it/object-fit-images
	*/
	wp_enqueue_script('ofi', get_bloginfo( 'template_url' ) . '/js/libs/ofi.min.js', array(), false, true );

	/* Registrar y encolar aquí los ficheros Javascripts. Ejemplo:
	wp_register_script('commonjs', get_bloginfo('template_url') . '/js/common' . $jsExtension, array('jquery'),'',true);
	wp_enqueue_script('contactojs');
	*/
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );
?>