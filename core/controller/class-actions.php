<?php
/**
* Class actions.
* Detects the action and calls the corresponding method.
*
*
* @package    WP_Reset_Asteroids
* @subpackage WP_Reset_Asteroids/core/controller/actions.
*
* @since 1.0.0
*/

namespace WPResetAsteroids\Core\Controller;

class Wp_Reset_Asteroids_Actions {

    /**
    * Identifies the action and calls the corresponding method.
    *
    * @param string $action
    * @return array $response
    * @since 1.0.0
    */
    public function handle_delete( $action ) {

        $response = array(
            'status'    => 'error',
            'message'   => __( 'Invalid action supplied to perform task!', 'wp-reset-asteroids' ),
        );

        if ( ! $action ) {

            return $response;
        }

        // Proceed to check the action.
        switch ( $action ) {

            case 'everything':
                // Reset everything.
                break;
            
            case 'themes':
                // Reset themes.
                break;

            case 'plugins':
                // Reset plugins.
                break;

            case 'all-comments':
                // Reset comments.
                break;

            case 'spam-comments':
                // Reset spam comments.
                break;

            case 'trackbacks': 
                // Reset trackbacks.
                break;

            case 'pingbacks': 
                // Reset pingbacks.
                break;

            case 'users': 
                // Reset users.
                break;

            case 'posts': 
                // Reset posts.
                break;

            case 'pages': 
                // Reset pages.
                break;

            case 'menu':
                // Reset menu.
                break;

            case 'widgets':
                // Reset widgets.
                break;

            case 'customizer':
                // Reset customizer.
                break;

            default:
                return $response;
        }
    }
}