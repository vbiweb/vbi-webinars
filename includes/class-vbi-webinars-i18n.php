<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://visualbi.com
 * @since      1.0.0
 *
 * @package    Vbi_Webinars
 * @subpackage Vbi_Webinars/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vbi_Webinars
 * @subpackage Vbi_Webinars/includes
 * @author     Balasubramaniyan M and K Gopal Krishna <website@visualbi.com>
 */
class Vbi_Webinars_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vbi-webinars',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
