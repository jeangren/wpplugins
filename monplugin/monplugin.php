<!-- version travail -->
<?php
// plugin Name: Monplugin

function activatehook()
{
    error_log('active');
}
register_activation_hook( __FILE__, 'activatehook' ) ;


function desactivehook()
{
    error_log('desactive');
}
register_deactivation_hook( __FILE__, 'desactivehook' ) ;


function uninstallhook()
{
    error_log('uninstallhook');
}
register_uninstall_hook( __FILE__, 'uninstallhook' ) ;