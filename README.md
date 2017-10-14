mg-grunt-wp-theme
===================


mg-grunt-wp-theme is a template for creating WordPress Themes with Grunt.

----------

Installation
--------------

 - Clone the repository in your wp-content/theme/ folder and rename it as you want.
 - From the terminal run 'npm install' to install all the theme dependencies
 - To work locally add the constant `WP_DEVELOPMENT` setted to true in your web.config.

Tasks registered
--------------------

 - run `grunt watch` to listen for LESS and .Js changes.
 - run `grunt build` to build the production version of the theme (this task compresses the styles and javascripts).