<?php

/*
*   =================================================================================================
*   GLOBAL VARIABLES
*   =================================================================================================
*/
define( 'DOMAIN_NAME', 'theme_domain' );


/*
*   =================================================================================================
*   INSTALLATION
*   Create in this file all the needed pages, posts for the website
*   =================================================================================================
*/
include __DIR__ . "/includes/installation.php";





/*
*   =================================================================================================
*   BASIC CONFIGURATION
*   Register in this file the needed sidebars, widgets, menus.
*   =================================================================================================
*/
include __DIR__ . "/includes/config.php";





/*
*   =================================================================================================
*   LIBRARIES
*   Load all the needed libraries
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/libs/*.php") as $filename)
	include $filename;



/*
*   =================================================================================================
*   HELPERS
*   Load all the needed helpers
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/helpers/*.php") as $filename)
	include $filename;





/*
*   =================================================================================================
*   SCRIPTS AND STYLES
*   Register the JS Scripts and CSS Styles in the 'includes/enqueues/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/enqueues/*.php") as $filename)
    include $filename;





/*
*   ================================================================================================= 
*   CUSTOM POST TYPES
*   Include all the Custom Post Types you need in the 'includes/cpts/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/cpts/*.php") as $filename)
    include $filename;





/*
*   =================================================================================================
*   HOOKS
*	Include all the Custom Hooks you need in the 'includes/hooks/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/hooks/*.php") as $filename)
	include $filename;





/*
*   =================================================================================================
*   GUTENBERG BLOCKS
*	Include all the Gutenberg Blocks you need in the 'includes/gblocks/' folder and they will be 
*	loaded automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/gblocks/*.php") as $filename)
	include $filename;
