<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.andreistanescu.com
 * @since      1.0.0
 *
 * @package    Hellobetter_Popup
 * @subpackage Hellobetter_Popup/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hellobetter_Popup
 * @subpackage Hellobetter_Popup/includes
 * @author     Andrei Stanescu <contact@andreistanescu.com>
 */
class Hellobetter_Popup_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hellobetter-popup',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
