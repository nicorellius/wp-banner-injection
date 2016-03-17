<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.cistechconsulting.com
 * @since      1.0.0
 *
 * @package    Wp_Banner_Injection
 * @subpackage Wp_Banner_Injection/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Banner_Injection
 * @subpackage Wp_Banner_Injection/includes
 * @author     CISTech Consulting <info@cistechconsulting.com>
 */
class Wp_Banner_Injection_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-banner-injection',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
