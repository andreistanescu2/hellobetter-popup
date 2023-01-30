<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.andreistanescu.com
 * @since             1.0.0
 * @package           Hellobetter_Popup
 *
 * @wordpress-plugin
 * Plugin Name:       HelloBetter Popup
 * Plugin URI:        https://https://hellobetter.de/
 * Description:       Lead catcher pop-up window for website visitors to sign up for our newsletter.
 * Version:           1.0.0
 * Author:            Andrei Stanescu
 * Author URI:        https://www.andreistanescu.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hellobetter-popup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HELLOBETTER_POPUP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hellobetter-popup-activator.php
 */
function activate_hellobetter_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hellobetter-popup-activator.php';
	Hellobetter_Popup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hellobetter-popup-deactivator.php
 */
function deactivate_hellobetter_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hellobetter-popup-deactivator.php';
	Hellobetter_Popup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hellobetter_popup' );
register_deactivation_hook( __FILE__, 'deactivate_hellobetter_popup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hellobetter-popup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hellobetter_popup() {

	$plugin = new Hellobetter_Popup();
	$plugin->run();

}
run_hellobetter_popup();
