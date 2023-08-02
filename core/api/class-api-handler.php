<?php
/**
* Class - Wp_Reset_Asteroids_Api.
* Handles REST API request & response.
*
* @since 1.0.0
*/

namespace WPResetAsteroids\Core\Api;

use WPResetAsteroids\Core\Controller\Actions;

class Wp_Reset_Asteroids_Api {

    /**
    * Response of the API.
    *
    * @since 1.0.0
    *
    * @access   protected
    * @var      string    $response.
    */
    protected $response = array();

    /**
    * Has access to the API.
    *
    * @since 1.0.0
    *
    * @access   protected
    * @var      string    $has_access.
    */
    protected $has_access = false;

    /**
    * The namespace of the Rest API.
    *
    * @since 1.0.0
    *
    * @access   protected
    * @var      string    $rest_namespace.
    */
    protected $rest_namespace = 'wp-reset-asteroids/v1';

    public function __construct() {

        add_action( 'rest_api_init', array( $this, 'register_routes' ) );
    }

    /**
    * Register the all routes.
    *
    * @since 1.0.0
    */
    private function register_routes() {

        register_rest_route( $this->rest_namespace, '/reset', array(
            'methods'               => \WP_REST_Server::CREATABLE,
            'callback'              => array( $this, 'handle_reset' ),
            'permission_callback'   => array( $this, 'permission_callback' ),
        ));

        register_rest_route( $this->rest_namespace, '/delete', array(
            'methods'               => \WP_REST_Server::CREATABLE,
            'callback'              => array( $this, 'handle_delete' ),
            'permission_callback'   => array( $this, 'permission_callback' ),
        ));

        register_rest_route( $this->rest_namespace, '/schedules', array(
            'methods'               => \WP_REST_Server::CREATABLE,
            'callback'              => array( $this, 'handle_schedules' ),
            'permission_callback'   => array( $this, 'permission_callback' ),
        ));
    }

    /**
    * Permission callback.
    * Check if the user has sufficient permission.
    *
    * @since 1.0.7
    */
    public function permission_callback() {

        if ( ! current_user_can( 'manage_options' ) ) {

            $this->response = array(
                'status'    => 'error',
                'message'   => __( 'You do not have sufficient permission!!!', 'wp-reset-asteroids' ),
            );

            return new WP_Error( 'rest_forbidden', $this->response, array( 'status' => rest_authorization_required_code() ) );
        }

        return true;
    }


    /**
    * Callback function to handle the reset request.
    *
    * @param \WP_REST_Request $request The request object.
    * @return \WP_REST_Response $return_data The response object.
    * @since 1.0.0
    */
    private function handle_reset( $request ) {

        $this->response = array(
            'status'    => 'error',
            'message'   => __( 'Invalid action supplied!', 'wp-reset-asteroids' ),
        );

        if ( ! $request ) {

            return $response;
        }

        $params = $request->get_params();

        if ( !isset( $params['task'] ) ) {

            return $response;
        }

        // instantiate the actions class & pass the task.
        $actions = new Actions();

        $operation = $actions->handle_delete( $params['task'] );

        return rest_ensure_response( $operation );
    }


    /**
    * Handles the delete request.
    *
    * @param array $actions
    * @since 1.0.0
    */
    private function handle_delete( $action ) {

        
    }


    /**
    * Handles the schedule request.
    *
    * @param array $tasks
    * @since 1.0.0
    */
    private function handle_schedules( $tasks ) {

        
    }
}