<?php
/**
 * Plugin Name:  Development Overrides
 * Version:      1.0.0
 * Author:       Niche Studio
 * Author URI:   https://nichestud.io/
 * License:      MIT License
 */

if ( defined( 'WP_ENV' ) && WP_ENV === 'development' ) {

	add_filter( 'pre_option_' . 'home', function () {
		return WP_HOME;
	}, 10, 0 );

	add_filter( 'pre_option_' . 'siteurl', function () {
		return WP_SITEURL;
	}, 10, 0 );

}
