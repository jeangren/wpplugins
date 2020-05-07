
<?php
// plugin Name: monplugin

// function activatehook()
// {
//     error_log('active');
// }
// register_activation_hook( __FILE__, 'activatehook' ) ;


// function desactivehook()
// {
//     error_log('desactive');
// }
// register_deactivation_hook( __FILE__, 'desactivehook' ) ;


// function uninstallhook()
// {
//     error_log('uninstallhook');
// }
// register_uninstall_hook( __FILE__, 'uninstallhook' ) ;
function monplugin_addmenu(){
    error_log("ajout de menu...");
    add_menu_page(
        'Mon plugin admin',
        'Menu',
        'manage_options',
        plugin_dir_path( __FILE__ ) . 'admin/pluginAdmin.php',
        null,
        'dashicons-admin-tools',
        20
    );
}
add_action( 'admin_menu', 'monplugin_addmenu' );
