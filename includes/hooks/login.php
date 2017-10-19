<?php

function my_login_logo() {

	if ( $GLOBALS['pagenow'] === 'wp-login.php' ): ?>
		<style type="text/css">
			body { background: #ffffff !important; }

			#login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
				height:96px;
				width:320px;
				background-size: 320px 107px;
				background-repeat: no-repeat;
			//padding-bottom: 30px;
			}
		</style>
	<?php endif;
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'X-Elio';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
