<?php

/**
 * @package joliclearlightbox
 */
namespace WPJoli\JoliClearLightBox\Engine;

defined( 'ABSPATH' ) or die( 'Wrong path bro!' );
use  WPJoli\JoliClearLightBox\Engine\CLEARLightbox ;
use  WPJoli\JoliClearLightBox\Controllers\SettingsController ;
use  DOMDocument ;
use  DOMXPath ;
use  Exception ;
class ContentProcessing
{
    /**
     * Filters TheContent pre-rendering
     *
     * @param [type] $content
     * @return void
     */
    public function parseTheContent( $content )
    {
        global  $post ;
        if ( !jclb_is_front() ) {
            return $content;
        }
        //post check
        if ( !is_single( $post ) && !is_page( $post ) ) {
            return $content;
        }
        //manual interruption
        if ( apply_filters( 'joli_clear_lightbox_disable_lightbox', false ) ) {
            return $content;
        }
        //current post type
        $current_post_type = get_post_type();
        $forced_post_types = jclb_get_option( 'force-post-types', 'force-loading' );
        //forced post type check - continue over if is forced
        
        if ( !(is_array( $forced_post_types ) && in_array( $current_post_type, $forced_post_types )) ) {
            //allowed post types
            $allowed_post_types = jclb_get_option( 'post-types', 'post-types' );
            if ( !is_array( $allowed_post_types ) || is_array( $allowed_post_types ) && !in_array( $current_post_type, $allowed_post_types ) ) {
                return $content;
            }
            //check that the content has media links
            $has_medias = self::hasMediaLinks( $content );
            if ( !$has_medias ) {
                return $content;
            }
        }
        
        $theme = null;
        // USER SETTINGS--------
        $settings = JCLB()->requestService( SettingsController::class );
        $current_options = $settings->getOptions();
        //Only gets the options different from defaults
        $current_options_no_default = array_filter( $current_options, function ( $value, $key ) {
            $addr = explode( '.', $key );
            $option_val = $value;
            $default_val = jclb_get_option_default( $addr[1], $addr[0] );
            return $option_val !== null && $option_val != $default_val;
        }, ARRAY_FILTER_USE_BOTH );
        // processes the lightbox and enqueue styles/scripts only if media have been found
        $lightbox = new CLEARLightbox();
        $lightbox->renderLightbox( $current_options_no_default, $theme );
        return $content;
    }
    
    /**
     * Reads the actual HTML content from a post and processes the titles
     * @param $content HTML content from 'the_content' hook
     */
    public static function hasMediaLinks( $content, $media_types = null )
    {
        try {
            //Parses the content
            $html = new DOMDocument( '1.0', "UTF-8" );
            // @$html->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
            @$html->loadHTML( '<html><body>' . mb_convert_encoding( $content, 'HTML-ENTITIES', 'UTF-8' ) . '</body></html>', LIBXML_HTML_NODEFDTD );
            // var_dump($html->saveHTML());
            
            if ( $html ) {
                if ( !$media_types ) {
                    //fetches media types from options
                    $media_types = jclb_get_option( 'media-types', 'medias' );
                }
                //xpath queriable html
                $xhtml = new DOMXPath( $html );
                
                if ( $xhtml ) {
                    $media_types_arr = explode( '|', $media_types );
                    //builds the xpath string
                    $media_types_arr_xpath = array_map( function ( $item ) {
                        return sprintf( "contains(@href, '.%s')", $item );
                    }, $media_types_arr );
                    $xpath_str = sprintf( '//a[%s]', join( ' or ', $media_types_arr_xpath ) );
                    // query the DOM
                    $medias = $xhtml->query( $xpath_str );
                    // returns true if at least one has been found
                    return count( $medias ) > 0;
                }
                
                return;
            }
        
        } catch ( Exception $e ) {
            //return true and allows lightbox to be processed on parsing error
            return true;
        }
    }

}