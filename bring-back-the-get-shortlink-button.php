<?php
/**
 * Plugin Name:       Bring Back the Get Shortlink Button
 * Plugin URI:        https://wordpress.org/plugins/bring-back-the-get-shortlink-button/
 * Description:       This plugin brings back the Get Shortlink button, which is hidden by default since WordPress      4.4.
 * Version:           1.2.0
 * Requires at least: 4.4
 * Requires PHP:      5.3
 * Author:            Thorsten Frommen
 * Author URI:        https://tfrommen.de
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       bring-back-the-get-shortlink-button
 */

if ( ! function_exists( 'add_filter' ) ) {
	return;
}

add_filter( 'get_shortlink', function ( $shortlink ) {

	return $shortlink;
} );
