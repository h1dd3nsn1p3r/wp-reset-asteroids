<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/h1dd3nsn1p3r/
 * @since      1.0.0
 *
 * @package    Wp_Reset_Asteroids
 * @subpackage Wp_Reset_Asteroids/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Reset_Asteroids
 * @subpackage Wp_Reset_Asteroids/includes
 * @author     Anuj Subedi <hello@anujsubedi.com.np>
 */
class Wp_Reset_Asteroids_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-reset-asteroids',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
