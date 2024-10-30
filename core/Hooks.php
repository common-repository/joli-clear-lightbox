<?php

/**
 * @package joliclearlightbox
 */
namespace WPJoli\JoliClearLightBox;

defined( 'ABSPATH' ) or die( 'Wrong path bro!' );
use  WPJoli\JoliClearLightBox\Application ;
use  WPJoli\JoliClearLightBox\Controllers\AdminController ;
use  WPJoli\JoliClearLightBox\Controllers\MenuController ;
use  WPJoli\JoliClearLightBox\Controllers\SettingsController ;
use  WPJoli\JoliClearLightBox\Controllers\ShortcodesController ;
use  WPJoli\JoliClearLightBox\Controllers\NoticesFreeController ;
use  WPJoli\JoliClearLightBox\Engine\ContentProcessing ;
class Hooks
{
    protected  $app ;
    protected  $admin ;
    protected  $menu ;
    // protected $public_app;
    protected  $settings ;
    protected  $shortcodes ;
    protected  $content_processing ;
    protected  $notices_free ;
    public function __construct( Application &$app )
    {
        $this->app = $app;
        $this->admin = $app->requestService( AdminController::class );
        $this->menu = $app->requestService( MenuController::class );
        $this->settings = $app->requestService( SettingsController::class );
        $this->content_processing = $app->requestService( ContentProcessing::class );
        if ( jclb_xy()->is_free_plan() ) {
            $this->notices_free = $app->requestService( NoticesFreeController::class );
        }
    }
    
    /**
     * Registers all the plugin hooks and filters
     */
    public function run()
    {
        $this->registerAdminHooks();
        $this->registerPublicHooks();
    }
    
    private function registerAdminHooks()
    {
        //actions
        
        if ( jclb_xy()->is_free_plan() ) {
            add_action( 'init', [ $this->notices_free, 'initNotices' ] );
            add_action( 'wp_ajax_joli_clb_handle_notice', [ $this->notices_free, 'jclbHandleNotice' ] );
        }
        
        // add_action( 'plugins_loaded',                       [ $this->app,           'registerLanguages' ] );
        add_action( 'admin_enqueue_scripts', [ $this->admin, 'enqueueAssets' ] );
        add_action( 'admin_menu', [ $this->menu, 'addAdminMenu' ] );
        add_action( 'admin_init', [ $this->settings, 'registerSettings' ] );
        //filters
        add_filter( 'plugin_action_links_' . plugin_basename( JCLB()->path( 'joli-clear-lightbox.php' ) ), [ $this->admin, 'addSettingsLink' ] );
    }
    
    private function registerPublicHooks()
    {
        //only for front end, avoid interferences with the editor
        if ( jclb_is_front() ) {
            //filters
            add_filter( 'the_content', [ $this->content_processing, 'parseTheContent' ] );
        }
    }

}