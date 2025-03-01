<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mardis.studio
 * @since             1.0.0
 * @package           Mardis_Reviews
 *
 * @wordpress-plugin
 * Plugin Name:       Mardis Reviews
 * Plugin URI:        https://mardis.studio
 * Description:       Turn customer testimonials into a standout feature. This add-on for Mardis Studio Core delivers a smooth, sliding showcase of reviews—simple to customize and designed to shine.
 * Version:           1.0.0
 * Author:            Levi Mardis
 * Author URI:        https://mardis.studio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mardis-reviews
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
define( 'MARDIS_REVIEWS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mardis-reviews-activator.php
 */
function activate_mardis_reviews() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mardis-reviews-activator.php';
	Mardis_Reviews_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mardis-reviews-deactivator.php
 */
function deactivate_mardis_reviews() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mardis-reviews-deactivator.php';
	Mardis_Reviews_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mardis_reviews' );
register_deactivation_hook( __FILE__, 'deactivate_mardis_reviews' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mardis-reviews.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mardis_reviews() {

	$plugin = new Mardis_Reviews();
	$plugin->run();

}
run_mardis_reviews();
