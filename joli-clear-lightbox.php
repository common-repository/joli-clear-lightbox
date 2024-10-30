<?php

use  WPJoli\JoliClearLightBox\Application ;
/**
 * @package joliclearlightbox
 */
/*
 * Plugin Name: Joli CLEAR Lightbox
 * Plugin URI: https://wpjoli.com/joli-clear-lightbox/
 * Description: Supercharge your image & gallery links with a <strong>C</strong>ustomizable <strong>L</strong>ightweight <strong>E</strong>legant <strong>A</strong>ccessible <strong>R</strong>esponsive Lightbox. 
 * Version: 1.0.3
 * Author: WPJoli
 * Author URI: https://wpjoli.com
 * License: GPLv2 or later
 * Text Domain: joli-clear-lightbox
 * Domain Path: /languages
 * 
 */
defined( 'ABSPATH' ) or die( 'Wrong path bro!' );

if ( function_exists( 'jclb_xy' ) ) {
    jclb_xy()->set_basename( false, __FILE__ );
} else {
    
    if ( !function_exists( 'jclb_xy' ) ) {
        function jclb_xy()
        {
            global  $jclb_xy ;
            
            if ( !isset( $jclb_xy ) ) {
                require_once dirname( __FILE__ ) . '/includes/fs/start.php';
                $jclb_xy = fs_dynamic_init( array(
                    'id'             => '5552',
                    'slug'           => 'joli-clear-lightbox',
                    'premium_slug'   => 'joli-clear-lightbox-pro',
                    'type'           => 'plugin',
                    'public_key'     => 'pk_437ca672c253739a3579529279dd1',
                    'is_premium'     => false,
                    'premium_suffix' => 'Pro',
                    'has_addons'     => false,
                    'has_paid_plans' => true,
                    'menu'           => array(
                    'slug'    => 'joli_clear_lightbox_settings',
                    'support' => false,
                    'account' => false,
                ),
                    'is_live'        => true,
                ) );
            }
            
            return $jclb_xy;
        }
        
        jclb_xy();
        do_action( 'jclb_xy_loaded' );
    }
    
    require_once dirname( __FILE__ ) . '/helpers.php';
    require_once dirname( __FILE__ ) . '/fs-helpers.php';
    require_once dirname( __FILE__ ) . '/autoload.php';
    //Let's go!
    $app = new Application();
    $app->run();
    register_activation_hook( __FILE__, [ $app, 'activate' ] );
    register_deactivation_hook( __FILE__, [ $app, 'deactivate' ] );
}
