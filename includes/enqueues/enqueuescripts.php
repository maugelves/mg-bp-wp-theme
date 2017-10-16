<?php
/*
 * Register the JS scripts
 */
function site_scripts() {

	// Load LiveReload library for development purposes
	if( defined('WP_DEBUG') && true === WP_DEBUG )
		wp_enqueue_script('livereload', get_bloginfo( 'template_url' ) . '/js/libs/livereload.js', array(), '', false );

	/* Registrar y encolar aquí los ficheros Javascripts. Ejemplo:
	wp_register_script('commonjs', get_bloginfo('template_url') . '/js/common' . $jsExtension, array('jquery'),'',true);
	wp_enqueue_script('contactojs');
	*/
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );
?>