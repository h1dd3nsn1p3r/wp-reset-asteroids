<?php

use Kucrut\Vite;

/**
*
* Enqueue admin scripts.
* 
* @package 
* @subpackage 
* @since 1.0.0
*/
if ( isset( $_GET['page'] ) && 'wp-reset-asteroids' === $_GET['page'] ) { 

	$handle = 'wp-reset-asteroids';
	
	add_action(
		'admin_enqueue_scripts',
		function () use ( $handle ): void {
			Vite\enqueue_asset(
				dirname( __FILE__ ) . '/app/dist',
				'app/src/main.js',
				array(
					'handle'           => $handle,
					'dependencies'     => array('lodash', 'wp-api-fetch', 'wp-i18n'), // Dependencies.
					'css-dependencies' => array(), // Optional style dependencies. Defaults to empty array.
					'css-media'        => 'all', // Optional.
					'css-only'         => false, // Optional. Set to true to only load style assets in production mode.
					'in-footer'        => true, // Optional. Defaults to false.
				)
			);

			wp_localize_script(
				$handle,
				'WPResetAsteroidsLocalizer',
				array(
					'adminUrl'      => admin_url( '/' ),
					'ajaxUrl'       => admin_url( 'admin-ajax.php' ),
					'siteUrl'       => site_url( '/' ),
					'restNamespace' => 'wp-reset-asteroids/v1',
					'version' 		 => WP_RESET_ASTEROIDS_VERSION,
				)
			);
		}
	);
}
