<?php

$wgExtensionCredits['parserhook'][] = array(
    'path' => __FILE__,
    'name' => 'MoegirlAD',
    'author' => 'Fish Thirteen', 
    'url' => 'https://github.com/FishThirteen/MoegirlAD', 
    'description' => 'Show advertisement in the page header and page footer in moegirl',
    'version'  => 0.1,
    'license-name' => "Apache-2.0+",   // Short name of the license, links LICENSE or COPYING file if existing - string, added in 1.23.0
);


/*
 * Options:
 *
 * $wgMoegirlADEnabled 
 *      - determine if show advertisement in moegirl.
 * 
 */
$wgMoegirlADEnabled  = true;



$wgAutoloadClasses['MoegirlADHooks'] = __DIR__ . '/MoegirlAD.hooks.php';


$wgHooks['SkinAfterBottomScripts'][] = 'MoegirlADHooks::advertiseBottom';
$wgHooks['SkinAfterContent'][] = 'MoegirlADHooks::onSkinAfterContent';

?>
