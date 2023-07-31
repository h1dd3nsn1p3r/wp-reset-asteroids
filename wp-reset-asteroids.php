<?php
/**
 *
 * @link              https://github.com/h1dd3nsn1p3r/wp-reset-asteroids
 * @since             1.0.0
 * @package           Wp_Reset_Asteroids
 *
 * @wordpress-plugin
 * Plugin Name:       WP Reset - Asteroids 
 * Plugin URI:        https://github.com/h1dd3nsn1p3r/wp-reset-asteroids
 * Description:       - 
 * Version:           1.0.0
 * Author:            Anuj Subedi
 * Author URI:        https://github.com/h1dd3nsn1p3r/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-reset-asteroids
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
define( 'WP_RESET_ASTEROIDS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-reset-asteroids-activator.php
 */
function activate_wp_reset_asteroids() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids-activator.php';
	Wp_Reset_Asteroids_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-reset-asteroids-deactivator.php
 */
function deactivate_wp_reset_asteroids() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids-deactivator.php';
	Wp_Reset_Asteroids_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_reset_asteroids' );
register_deactivation_hook( __FILE__, 'deactivate_wp_reset_asteroids' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_reset_asteroids() {

	$plugin = new Wp_Reset_Asteroids();
	$plugin->run();

}
run_wp_reset_asteroids();
