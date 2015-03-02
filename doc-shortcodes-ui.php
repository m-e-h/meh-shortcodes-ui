<?php
/**
 * Plugin Name: Doc Shortcodes UI
 * Plugin URI:  https://github.com/m-e-h/doc-shortcodes-ui
 * Description: Shortcodes for Shortcake.
 * Version:     0.1.0
 * Author:      Marty Helmick
 * Text Domain: doc-shortcodes-ui
 */

require_once( 'inc/shortcodes.php' );

/* Make sure the Shortcake plugin https://github.com/fusioneng/Shortcake is active. */
if( class_exists( 'Shortcode_UI' ) ) {
	require_once( 'inc/shortcode-ui-init.php' );
}