<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.cistechconsulting.com
 * @since             1.0.0
 * @package           Wp_Banner_Injection
 *
 * @wordpress-plugin
 * Plugin Name:       Banner Injection
 * Plugin URI:        https://github.com/nicorellius/wp-banner-injection
 * Description:       Inject a banner into a WordPress theme.
 * Version:           1.0.0
 * Author:            CISTech Consulting
 * Author URI:        http://www.cistechconsulting.com
 * License:           MIT
 * License URI:       https://github.com/nicorellius/wp-banner-injection/blob/master/LICENSE
 * Text Domain:       wp-banner-injection
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-banner-injection-activator.php
 */
function activate_wp_banner_injection() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-banner-injection-activator.php';
	Wp_Banner_Injection_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-banner-injection-deactivator.php
 */
function deactivate_wp_banner_injection() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-banner-injection-deactivator.php';
	Wp_Banner_Injection_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_banner_injection' );
register_deactivation_hook( __FILE__, 'deactivate_wp_banner_injection' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-banner-injection.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_banner_injection() {

	$plugin = new Wp_Banner_Injection();
	$plugin->run();

}
run_wp_banner_injection();
