<?php
/*
Plugin Name: Nextchat
Plugin URI: https://lrandomdev.com
Description: Click to chat, contact your site visitors through social networking channels, compact display with a fab button.
Version: 4.0.2
Author: Koodinh
Author URI: https://lrandomdev.com
License: GPLv2 or later
Text Domain: Nextchat
*/

if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('NEXTCHAT_VSERSION', '1.0.0');
define('NEXTCHAT_MINIMUM_WP_VERSION', '4.1.1');
define('NEXTCHAT_PLUGIN_URL', plugin_dir_url(__FILE__));
define('NEXTCHAT_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(NEXTCHAT_PLUGIN_DIR . 'includes/class.nextchat-setting.php');
require_once(NEXTCHAT_PLUGIN_DIR . 'includes/class.nextchat-frontend.php');
require_once(NEXTCHAT_PLUGIN_DIR . 'includes/class.nextchat.php');

$nextchat = new Nextchat;