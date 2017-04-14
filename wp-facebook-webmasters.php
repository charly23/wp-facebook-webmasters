<?php

/*
Plugin Name: WP Facebook Webmasters
Description: Wordpress Facebook Webmasters - Sharing
Version: 1.0
Author: Charly Capillanes
Author URI: https://charlycapillanes.wordpress.com/
*/

// wp facebook webmasters : define variable admin, includes, config
define( 'WP_Facebook_Webmasters_Admin', 'admin' );
define( 'WP_Facebook_Webmasters_Includes', 'includes' );
define( 'WP_Facebook_Webmasters_Config', 'config' );

// web facebook webmasters : define directory url
define( 'WP_Facebook_Webmasters_URL', plugins_url( 'wp-facebook-webmasters', dirname( __FILE__ ) ) );

// includes : facebook webmasters library
require_once ( WP_Facebook_Webmasters_Includes . '/facebook-webmasters.php' );
require_once ( WP_Facebook_Webmasters_Includes . '/html_var.php' );

// admin : facebook webmasters page sources
require_once ( WP_Facebook_Webmasters_Admin . '/web-og.php' );
require_once ( WP_Facebook_Webmasters_Admin . '/page.php' );

// config : loader
require_once ( WP_Facebook_Webmasters_Config . '/loader.php' );

?>