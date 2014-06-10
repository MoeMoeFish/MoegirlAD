<?php
/*
 * Static class for hooks handle by MoegirlAD.
 * 
 * @file MoegirlAD.hooks.php
 * 
 * @license Apache-2.0+
 * @author Fish Thirteen < fishthrteen@qq.com >
 *
 */
final class MoegirlADHooks {

  public static function onSkinAfterContent(&$data, Skin $skin) {
    global $wgMoegirlADBottomADCode;

    if (MoegirlADHooks::shouldShowADs()) {
      $data .= $wgMoegirlADTopADCode; 
    }
  }

  public static function onSiteNoticeAfter(&$siteNotice, $skin) {
    global $wgMoegirlADTopADCode;

    if (MoegirlADHooks::shouldShowADs()) {
      $siteNotice = $wgMoegirlADTopADCode . $siteNotice;
    }
  }


  /**
   * Check if the advertice should be display
   * 
   * @return boolean 
   */
  public static function shouldShowADs() {
    global $wgMoegirlADEnabled;

    if ($wgMoegirlADEnabled) {
      $currentUser = RequestContext::getMain()->getUser();

      //只对未登录用户和没有编辑过任何条目的用户显示广告
      return !(is_object($currentUser) && $currentUser->isLoggedIn() && $currentUser->getEditCount() != null && $currentUser->getEditCount() > 0);
    } else {
      return false;
    }
  }
}


?>
