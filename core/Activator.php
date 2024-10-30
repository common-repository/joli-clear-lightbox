<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    joliclearlightbox
 * @author     Michael ANDRE <mxlaxe@gmail.com>
 */

namespace WPJoli\JoliClearLightBox;

defined('ABSPATH') or die('Wrong path bro!');

use WPJoli\JoliClearLightBox\Controllers\SettingsController;

class Activator
{

    public function activate()
    {
        //app settings
        $settings = JCLB()->requestService(SettingsController::class);
        $settings->setupSettings();
    }
}
?>
