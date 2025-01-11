<?php
/**
 * Plugin Name: Hello World Plugin
 * Description: A simple WordPress plugin that displays a Hello World message.
 * Version: 1.0
 * Author: Your Name
 *
 * @package HelloWorldPlugin
 */

/** Enqueue scripts and styles */
function hello_world_enqueue_assets() {
	wp_enqueue_script(
		'hello-world-plugin-js',
		plugin_dir_url( __FILE__ ) . 'hello-world-plugin.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_style(
		'hello-world-plugin-css',
		plugin_dir_url( __FILE__ ) . 'hello-world-plugin.css',
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_world_enqueue_assets' );
