<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://visualbi.com
 * @since             1.0.0
 * @package           Vbi_Webinars
 *
 * @wordpress-plugin
 * Plugin Name:       VBI Webinars
 * Plugin URI:        https://github.com/vbiweb/vbi-webinars
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Balasubramaniyan M and K Gopal Krishna
 * Author URI:        https://visualbi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vbi-webinars
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
define( 'VBI_WEBINARS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vbi-webinars-activator.php
 */
function activate_vbi_webinars() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vbi-webinars-activator.php';
	Vbi_Webinars_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vbi-webinars-deactivator.php
 */
function deactivate_vbi_webinars() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vbi-webinars-deactivator.php';
	Vbi_Webinars_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vbi_webinars' );
register_deactivation_hook( __FILE__, 'deactivate_vbi_webinars' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vbi-webinars.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vbi_webinars() {

	$plugin = new Vbi_Webinars();
	$plugin->run();

}
run_vbi_webinars();
