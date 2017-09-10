<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       phivh.github.com
 * @since      1.0.0
 *
 * @package    Wp_Custom_Theme_Features
 * @subpackage Wp_Custom_Theme_Features/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Custom_Theme_Features
 * @subpackage Wp_Custom_Theme_Features/includes
 * @author     Phd2d <phivhdev@gmail.com>
 */
class Wp_Custom_Theme_Features_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-custom-theme-features',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
