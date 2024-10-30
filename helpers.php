<?php

defined('ABSPATH') or die('Wrong path bro!');

use WPJoli\JoliClearLightBox\Controllers\SettingsController;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Returns an instance of the applciation
 * @return WPJoli\JoliClearLightBox\Application
 */
function JCLB()
{
    return WPJoli\JoliClearLightBox\Application::instance();
}

if (!function_exists('pre')) {
    function pre($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

/**
 * pre only if is super admin
 * @param type $data
 */
if (!function_exists('apre')) {
    function apre($data)
    {
        if (is_super_admin()) {
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }
}

if (!function_exists('jclb_pro_only')) {
    function jclb_pro_only()
    {
        return '<span class="joli-pro-only">' . __(' (Pro only)', 'joli-clb') . '</span>';
    }
}


/**
 * Converts a name into a slug friendly 
 * @param type $name
 * @return type
 */
if (!function_exists('jclb_slugify')) {
    
    function jclb_slugify($string, $delimiter = '-') {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }
}


if (!function_exists('arrayFind')) {
    /**
     * Returns the first sub_array from an array matching $key and $value
     * @param string $key Comparison key
     * @param mixed $value Value to search
     * @param array $array The array to search from
     * @return array
     */
    function arrayFind($value, $key, $array)
    {
        $item = null;
        foreach ($array as $row) {
            if ($row[ $key ] == $value ) {
                $item = $row;
                break;
            }
        }
        return $item;
    }
}


if (!function_exists('jclb_get_option')) {
    /**
     * Returns the first sub_array from an array matching $key and $value
     */
    function jclb_get_option($name, $section)
    {
        $settings = JCLB()->requestService(SettingsController::class);
        return $settings->getOption( $name, $section );
    }
}

if (!function_exists('jclb_get_option_default')) {
    /**
     * Returns the first sub_array from an array matching $key and $value
     */
    function jclb_get_option_default($name, $section)
    {
        $settings = JCLB()->requestService(SettingsController::class);
        return $settings->getOption( $name, $section, true );
    }
}

if (!function_exists('jclb_get_option_args')) {
    /**
     * Returns the first sub_array from an array matching $key and $value
     */
    function jclb_get_option_args($name, $section, $key = null)
    {
        $settings = JCLB()->requestService(SettingsController::class);
        return $settings->getOptionArgs( $name, $section, $key );
    }
}


if (!function_exists('isset_or_null')) {
    /**
     * Returns $var or null if $var is not set
     * $empty_string = true returns an empty string instead of null
     */
    function isset_or_null( &$var, $empty_string = null )
    {
        return  isset( $var ) ? $var : ( $empty_string ? '' : null);
    }
}

if (!function_exists('joli_minify')) {
    /**
     * Removes line breaks and excessive empty spaces from a string
     */
    function joli_minify( $string )
    {
        return  preg_replace('/\v(?:[\v\h]+)/', '', $string);
    }
}

if (!function_exists('jclb_is_front')) {
    function jclb_is_front(){
        if ( function_exists('wp_doing_ajax')){
            return !is_admin() && !wp_doing_ajax();
        }else{
            return !is_admin();
        }
    }
}

// if (!function_exists('saveHTMLNoWrapping')) {
//     function saveHTMLNoWrapping( $html ){
//         return substr(trim($html->saveHTML()), 12, -14);
//     }
// }

if (!function_exists('getHostURL')) {
    function getHostURL(){
        
        $_url = parse_url(site_url());
        return $_url ? urlencode($_url['host']) : false;

    }
}




if (!function_exists('jclb_mustache_key')) {
    /**
     * Returns the first sub_array from an array matching $key and $value
     */
    function jclb_mustache_key($string)
    {
        return '{{' . $string . '}}';
    }
}