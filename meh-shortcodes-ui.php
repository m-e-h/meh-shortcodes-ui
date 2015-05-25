<?php
/**
 * Plugin Name: MEH Shortcodes UI
 * Plugin URI:  https://github.com/m-e-h/meh-shortcodes-ui
 * Description: Shortcodes for Shortcake.
 * Version:     0.1.0
 * Author:      Marty Helmick
 * Text Domain: meh-shortcodes-ui
 */

define( 'MEHSC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once plugin_dir_path( __FILE__ ) . 'includes/class-template-loader.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode-ui-init.php';
