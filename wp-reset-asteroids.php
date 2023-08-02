<?php
/**
 *
 * @link              https://github.com/h1dd3nsn1p3r/wp-reset-asteroids/
 * @since             1.0.0
 * @package           Wp_Reset_Asteroids
 *
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

if ( ! defined( 'WPINC' ) ) {

	die;
}

define( 'WP_RESET_ASTEROIDS_VERSION', '1.0.0' );

define( 'ROOT_PATH', __DIR__ );

/**
 * Plugin activation.
 */
function activate_wp_reset_asteroids() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids-activator.php';
	Wp_Reset_Asteroids_Activator::activate();
}

/**
 * Plugin deactivation.
 */
function deactivate_wp_reset_asteroids() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids-deactivator.php';
	Wp_Reset_Asteroids_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_reset_asteroids' );
register_deactivation_hook( __FILE__, 'deactivate_wp_reset_asteroids' );

/**
 * The core plugin class.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-reset-asteroids.php';

/**
 * Require auto load.
 */
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Require app.
 */
require plugin_dir_path( __FILE__ ) . 'app.php';

/**
 * Run the plugin.
 *
 * @since    1.0.0
 */
function run_wp_reset_asteroids() {

	$plugin = new Wp_Reset_Asteroids();
	$plugin->run();

}
run_wp_reset_asteroids();
