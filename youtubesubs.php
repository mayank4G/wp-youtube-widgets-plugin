<?php
/*
Plugin Name: Youtubee Subs
Plugin URI: https://etawahsafari.com
Description: Checks the health of your WordPress install
Version: 1.0.0
Author: Mayank Porwal
Author URI: http://etawahsafari.com
*/
//Exit if access directly

 if(!defined('ABSPATH')){
 	exit;
 }
//Load script
require_once(plugin_dir_path(__FILE__). 'includes/youtubesubs-script.php');
// Load Class
require_once(plugin_dir_path(__FILE__). 'includes/youtubesubs-class.php');

function register_youtubesubs_widgets(){
	register_widget('Youtube_Subs_Widget');
}
add_action('widgets_init','register_youtubesubs_widgets');