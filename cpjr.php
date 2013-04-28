<?php
/*
Plugin Name: Content Shortcodes
Plugin URI: http://rezzz.com
Description: This plugin was written by Jason Resnick to enhance the ability to format content with use of plugins
Author: Jason Resnick
Version: 1.0.0
Author URI: http://rezzz.com/
*/



add_action('wp_enqueue_scripts', 'cpjr_scripts');

include_once('theme_shortcodes/tabs.php');
include_once('theme_shortcodes/layout.php');
include_once('theme_shortcodes/tinymce/tinymce_shortcodes.php');

//things to load in the theme header
function cpjr_scripts(){
	wp_enqueue_script('cpjr-custom', plugins_url('/cpjr-custom.js', __FILE__), array('jquery') );
	wp_enqueue_style('cpjr-styles', plugins_url('cpjr-styles.css', __FILE__));
}



?>