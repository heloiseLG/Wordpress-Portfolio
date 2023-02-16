<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              wittyfolk.com
 * @since             1.0.0
 * @package           Bonjour Bar
 *
 * @wordpress-plugin
 * Plugin Name:       bonjour
 * Plugin URI:        wittyfolk.com
 * Description:       Eye catching Promotion And Notification WordPress Bar !
 * Version:           1.0.0
 * Author:            WittyFolk
 * Author URI:        wittyfolk.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bonjour
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bonjour-activator.php
 */
function activate_bonjour() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bonjour-activator.php';
	Bonjour_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bonjour-deactivator.php
 */
function deactivate_bonjour() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bonjour-deactivator.php';
	Bonjour_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bonjour' );
register_deactivation_hook( __FILE__, 'deactivate_bonjour' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bonjour.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bonjour() {

	$plugin = new Bonjour();
	$plugin->run();

}
run_bonjour();
