<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt">

	<?php if((defined('WP_LOCAL_DEV') && WP_LOCAL_DEV )): ?>
    <!-- LiveReload -->
    <script src="//localhost:35729/livereload.js"></script>
    <?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'site-wrapper' ); ?>>


	<header class="site-header">

		<div class="site-header__branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

			<?php
				wp_nav_menu([
					'menu' => 'primary',
				]);
			?>
			
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">