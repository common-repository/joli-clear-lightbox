<?php

/**
 * @package joliclearlightbox
 */
namespace WPJoli\JoliClearLightBox\Controllers;

defined( 'ABSPATH' ) or die( 'Wrong path bro!' );
use  WPJoli\JoliClearLightBox\Application ;
class AdminController
{
    public function enqueueAssets( $hook_suffix )
    {
        //enqueues scripts/styles only for admin page than contain "joli_toc" in the hook suffix or in posts
        
        if ( $hook_suffix == 'post.php' || stripos( $hook_suffix, JCLB()::SLUG ) !== false ) {
            wp_enqueue_style(
                'wpjoli-joli-clear-lightbox-admin-styles',
                JCLB()->url( 'assets/admin/css/joli-clb-admin.css', JCLB()::USE_MINIFIED_ASSETS ),
                [],
                '1.2.0'
            );
            wp_enqueue_script(
                'wpjoli-joli-clear-lightbox-admin-scripts',
                JCLB()->url( 'assets/admin/js/joli-clb-admin.js', JCLB()::USE_MINIFIED_ASSETS ),
                [ 'jquery', 'wp-color-picker' ],
                '1.2.0',
                true
            );
            wp_localize_script( 'wpjoli-joli-clear-lightbox-admin-scripts', 'jclbAdmin', [
                'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            ] );
            //        wp_enqueue_script( 'accordion', $this->plugin_url . '../../wp-content/wp-admin/js/accordion.min.js' );
            wp_enqueue_style( 'wp-color-picker' );
        }
        
        
        if ( jclb_xy()->is_free_plan() ) {
            wp_enqueue_script(
                'wpjoli-joli-clear-lightbox-admin-notice-scripts',
                JCLB()->url( 'assets/admin/js/joli-clb-admin-notices.js', JCLB()::USE_MINIFIED_ASSETS ),
                [ 'jquery' ],
                '1.2.0',
                true
            );
            wp_localize_script( 'wpjoli-joli-clear-lightbox-admin-notice-scripts', 'jclbAdminNotice', [
                'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            ] );
        }
    
    }
    
    public function addSettingsLink( $links )
    {
        $joli_link = '<a href="' . admin_url( 'admin.php?page=' . JCLB()::SETTINGS_SLUG ) . '">' . __( 'Settings' ) . '</a>';
        array_unshift( $links, $joli_link );
        return $links;
    }

}