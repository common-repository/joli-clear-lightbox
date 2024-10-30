<?php

namespace WPJoli\JoliClearLightBox;

defined('ABSPATH') or die('Wrong path bro!');

use WPJoli\JoliClearLightBox\JoliApplication;
use WPJoli\JoliClearLightBox\Activator;
use WPJoli\JoliClearLightBox\Hooks;

class Application extends JoliApplication
{

    const NAME = 'Joli CLEAR Lightbox';
    const SLUG = 'joli_clear_lightbox';
    const SETTINGS_SLUG = 'joli_clear_lightbox_settings';
    const DOMAIN = 'joli-clb';
    const ID = 'joliclearlightbox';
    const USE_MINIFIED_ASSETS = true;

    protected $hooks;

    public $options;

    public function __construct()
    {
        parent::__construct();
        
        //Loads the translations
        load_plugin_textdomain('joli-clb',false,
                    trailingslashit(plugin_basename($this->path()) . '/languages')
                );
    }

    public function run()
    {
        $this->hooks = new Hooks( $this );
        $this->hooks->run();
    }

    public function activate()
    {
        $activator = new Activator();
        $activator->activate();
    }

    public function deactivate()
    { }

}
