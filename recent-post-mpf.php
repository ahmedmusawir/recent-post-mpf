<?php 

/**
 *
 * Plugin Name: MPF Recent Post  
 * Plugin URI:	https://htmlfivedev.com 
 * Description: Display a short notice above the post content.
 * Version: 	1.0
 * Author URI: 	https://www.linkedin.com/in/ahmedmusawir
 * License: 	GPL-2.0+ 
 *
 */

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}
// define( "PLUGIN_DIR", plugin_dir_path( __FILE__ ) );

// echo PLUGIN_DIR;
// echo plugin_dir_path( __FILE__ ) . '<br>';
// echo plugins_url( '/assets/js/admin.js', __FILE__ );
// die;

require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-recent-post-mpf.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-recent-post-widget-body.php' );

function mpf_recent_post_start() {

	$setup_styles = new MPFRecentPostEnqueue();
	$setup_styles->initialize();

	$recent_post = new MPFRecentPostWidget();

}

mpf_recent_post_start();

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-activate.php';
register_activation_hook( __FILE__, array( 'MPFRecentPostActivate', 'activate' ) );

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-deactivate.php';
register_deactivation_hook( __FILE__, array( 'MPFRecentPostDeactivate', 'deactivate' ) );