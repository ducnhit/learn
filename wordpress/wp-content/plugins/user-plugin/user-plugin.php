<?php
/**
 * @package UserPlugin
 */
/*
Plugin Name: User Plugin
Plugin URI: http://userplugin.com/plugin
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series
Version: 1.0.0
Author: User Plugin Duc
Author URI: http://plugin.com
License: GPLv2 or later
Text Domain: user_plugin
*/


// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('USER_PLUGIN_VERSION', '1.0.0');
define('USER_PLUGIN_MINIMUM_WP_SERSION', '4.1.1');
define('USER_PLUGIN_PLUGIN_URL', plugin_dir_url(__FILE__));
define('USER_PLUGIN_PLUGIN_DIR', plugin_dir_path(__FILE__));

define('USER_PLUGIN_CSS_URL', USER_PLUGIN_PLUGIN_URL . 'css');
define('USER_PLUGIN_JS_URL', USER_PLUGIN_PLUGIN_URL . 'js');

require_once(USER_PLUGIN_PLUGIN_DIR . 'includes/class.user-plugin.php');

$user_plugin = new User_Plugin();