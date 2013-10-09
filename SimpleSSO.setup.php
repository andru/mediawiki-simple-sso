<?php

$wgAutoloadClasses['SimpleSSO'] = dirname(__FILE__) . '/SimpleSSO.body.php';
$wgAutoloadClasses['SimpleSSO_AuthPlugin'] = dirname(__FILE__) . '/AuthPlugin.php';
$wgAutoloadClasses['SimpleSSO_FormEditAction'] = dirname(__FILE__) . '/FormEditAction.php';
//set $auth to the custom SimpleSSO AuthPlugin instance
$wgHooks['AuthPluginSetup'][] = 'SimpleSSO_AuthPlugin::getInstance';
//Forward to the login page when a user tries to edit without permissions
$wgHooks['AlternateEdit'][] = 'SimpleSSO::loginToEdit';

//override SF formedit action to provide forward to login
//this means this extension will have to be initialized AFTER SemanticForms
$wgActions['formedit'] = 'SimpleSSO_FormEditAction'; 

//$wgGroupPermissions['*']['edit']             = false;
$wgGroupPermissions['*']['createaccount']    = false;

?>