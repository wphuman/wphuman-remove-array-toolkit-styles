<?php

/**
 * Plugin Name:         WP Human Remove Array Toolkit Styles
 * Description:         Disable Array Toolkit Styles Loading. Made by Tang Rufus from WP Human
 * Author:              Tang Rufus @ WP Human
 * Author URI:          http://wphuman.com
 * Author Twitter:      @tangrufus, @wphuman
 * Author Email:        rufus@wphuman.com
 * Version:             1.0.0
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/wphuman/wphuman-remove-array-toolkit-styles
 * GitHub Branch:       master
 *
 */

// Remove Array Toolkit Scripts
add_action( 'wp_enqueue_scripts', 'wphuman_dequeue_array_toolkit_styles' );
function wphuman_dequeue_array_toolkit_styles() {
	wp_dequeue_style( 'arraysocial_style' );
	wp_dequeue_style( 'arraysocial_icon_style' );
}
