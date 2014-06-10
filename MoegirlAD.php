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
 * Options: (Check these settings in LocalSettings.php file)
 *
 * $wgMoegirlADEnabled 
 *      - determine if show advertisement in moegirl.
 *
 * $wgMoegirlADADCode
 *      - The adverticement code form the advertising company
 *      E.g.
 *      $wgMoegirlADADCode = <<<EOD
 * <!-- 728*90 -->
 * <div id='div-gpt-ad-1388996185454-0' style='width:728px; height:90px;'>
 *   <script type='text/javascript'>
 *     googletag.cmd.push(function() { googletag.display('div-gpt-ad-1388996185454-0'); });
 *   </script>
 * </div>
 * EOD;
 * 
 */
$wgMoegirlADEnabled  = true;
$wgMoegirlADADCode = "";



$wgAutoloadClasses['MoegirlADHooks'] = __DIR__ . '/MoegirlAD.hooks.php';


$wgHooks['SkinAfterContent'][] = 'MoegirlADHooks::onSkinAfterContent';
$wgHooks['SiteNoticeAfter'][] = 'MoegirlADHooks::onSiteNoticeAfter';

?>