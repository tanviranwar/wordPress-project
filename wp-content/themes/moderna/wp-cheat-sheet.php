<?php
https://www.youtube.com/watch?v=KBCfPZdbP6E&list=PLG9FGQQWJ7aLcQUBCY6KkhwiZ_TpRvWqG
<?php get_header(); ?>
//Header Section:
<?php language_attributes(); ?>
<?php bloginfo( 'charset' ); ?>
<?php wp_title('|', true, 'right');?>
<?php wp_head(); ?>

<?php body_class(); ?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

<?php echo get_template_directory_uri(); ?>/img

<?php bloginfo( 'name' ); ?>

<?php wp_footer(); ?>

<?php get_footer(); ?>



//Upload file from localhost

1. get file backup
2. get database backup
3. replace new URL in database
4. upload file in new location
5. create a database & db username & password & assign it.
6. Import database 
7. update wp-config.php file


// Option Tree setup
Create 'admin' and "panel" folder in root directory. -> past 'option-tree' files to admin folder. -> past demo files to panel folder and remove 'demo' word (rename).-> in functions.php past this 


/**********************************************
/* Add Theme Option */
/**********************************************
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'admin/ot-loader.php' );
include_once( 'panel/meta-boxes.php' );
include_once( 'panel/theme-options.php' );



Installation

Plugin Mode

Upload option-tree to the /wp-content/plugins/ directory
Activate the plugin through the Plugins menu in WordPress
Click the OptionTree->Documentation link in the WordPress admin sidebar menu for further setup assistance.
Theme Mode

Download the latest version of OptionTree and unarchive the .zip directory.
Put the option-tree directory in the root of your theme. For example, the server path would be /wp-content/themes/theme-name/option-tree/.
You must deactivate and/or delete the plugin version of OptionTree.
Add the following code to the beginning of your functions.php.

/**

Required: set ‘ot_theme_mode’ filter to true.
*/
add_filter( ‘ot_theme_mode’, ‘__return_true’ );
/**

Required: include OptionTree.
*/
require( trailingslashit( get_template_directory() ) . ‘option-tree/ot-loader.php’ );
For a list of all the OptionTree UI display filters refer to the demo-functions.php file found in the /assets/theme-mode/ directory of this plugin. This file is the starting point for developing themes with Theme Mode.

?>