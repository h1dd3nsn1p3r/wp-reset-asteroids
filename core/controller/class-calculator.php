<?php
/**
* Class - Wp_Reset_Asteroids_Calculator.
* Gets the stats of pages, posts, comments, etc.
*
* @since 1.0.0
*/

namespace WPResetAsteroids\Core\Controller;

class Wp_Reset_Asteroids_Calculator {

    public function __construct() {

        global $wpdb, $current_user;
    }

    /**
    * Count everything.
    *
    * @return array $response
    * @since 1.0.0
    */
    public function calculate() {

        $response = array();
        
    }
}
