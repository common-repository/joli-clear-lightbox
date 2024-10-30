<?php

defined( 'ABSPATH' ) or die( 'Wrong path bro!' );
function jclb_xy_custom_connect_message_on_update(
    $message,
    $user_first_name,
    $plugin_title,
    $user_login,
    $site_link,
    $freemius_link
)
{
    return sprintf(
        __( 'Hey %1$s', 'joli-clb' ) . ',<br>' . __( 'Please help us improve %2$s! If you opt-in, some data about your usage of %2$s will be sent to %5$s. If you skip this, that\'s okay! %2$s will still work just fine.', 'joli-clb' ),
        $user_first_name,
        '<b>' . $plugin_title . '</b>',
        '<b>' . $user_login . '</b>',
        $site_link,
        $freemius_link
    );
}

jclb_xy()->add_filter(
    'connect_message_on_update',
    'jclb_xy_custom_connect_message_on_update',
    10,
    6
);
function jclb_fs_uninstall_cleanup()
{
    // delete_option( 'joli_clear_lightbox_settings' );
    delete_option( 'joli_clear_lightbox_rating_time' );
    delete_option( 'joli_clear_lightbox_gopro_time' );
}

jclb_xy()->add_action( 'after_uninstall', 'jclb_fs_uninstall_cleanup' );
if ( !function_exists( 'jclb_fs_file' ) ) {
    function jclb_fs_file( $file )
    {
        return $file;
    }

}

if ( !function_exists( 'jclb_fs_custom_icon' ) ) {
    function jclb_fs_custom_icon()
    {
        return dirname( __FILE__ ) . '/assets/icon-256x256.png';
    }
    
    jclb_xy()->add_filter( 'plugin_icon', 'jclb_fs_custom_icon' );
}
