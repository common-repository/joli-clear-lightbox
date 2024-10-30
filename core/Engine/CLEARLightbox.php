<?php

/**
 * @package joliclearlightbox
 */

namespace WPJoli\JoliClearLightBox\Engine;

defined('ABSPATH') or die('Wrong path bro!');

class CLEARLightbox
{

    /**
     * Enqueue styles & scripts and allow the lightbox to be rendered with custom options
     *
     * @param [type] $options
     * @param [type] $theme custom theme
     * @return void
     */
    public function renderLightbox($options, $theme = null)
    {
        do_action('joli_clear_lightbox_before_rendering');

        //enqueue style & script only if TOC is running
        wp_enqueue_style('wpjoli-joli-clb-styles', JCLB()->url('assets/public/css/wpjoli-clear-lightbox.css', JCLB()::USE_MINIFIED_ASSETS), [], '1.0.1');
        wp_enqueue_script('wpjoli-joli-clb-scripts', JCLB()->url('assets/public/js/' . jclb_fs_file('wpjoli-clear-lightbox') . '.js', JCLB()::USE_MINIFIED_ASSETS), [], '1.0.1', true);
   

        $js_options = $this->mapSettingsToJs($options);

        //themes
        if ($theme && $theme !== 'none' ) {

            $options_args = jclb_get_option_args('theme', 'theme');
            $presets = $options_args['settings'][$theme];

            //Theme override
            // $theme_override = jclb_get_option('theme-override', 'theme');
            // if ($theme_override == true) {
            //current options with defaults
            // $js_current = $this->mapSettingsToJs($current_options);

            //theme + user settings
            $js_options = array_merge($js_options, $presets);
            // } else {
            //theme only
            // $js_options = $presets;
            // }
        }


        $jclb_var = [
            'options' => apply_filters('joli_clear_lightbox_options', $js_options)
        ];

        //Outputs th JS var with settings
        wp_localize_script('wpjoli-joli-clb-scripts', 'JCLB', $jclb_var);
        
    }

    private function mapSettingsToJs($settings)
    {
        $js_options = [];

        //maps the local settings with the js settings option names
        //the js keys must correspond to the args[key] value
        foreach ($settings as $key => $value) {
            $addr = explode('.', $key);
            $option_args = jclb_get_option_args($addr[1], $addr[0]);
            // pre($option_args);
            if (!isset($option_args['key'])) {
                continue;
            }

            $js_key = $option_args['key'];

            if (isset($option_args['var_type'])) {
                if ($option_args['var_type'] == 'bool') {
                    $value = boolval($value);
                } else if ($option_args['var_type'] == 'int') {
                    $value = intval($value);
                } else if ($option_args['var_type'] == 'float') {
                    $value = floatval($value);
                }
            }

            $js_options[$js_key] = $value;
        }
        return $js_options;
    }
}
