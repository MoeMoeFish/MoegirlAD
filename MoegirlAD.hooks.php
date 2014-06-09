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
  public static function  advertiseBottom($skin, &$text) {
    $text = "Hello, World";
    return true;
  }

  public static function onSkinAfterContent(&$data, Skin $skin) {
    $val = "Not Loggin";

    $currentUser = RequestContext::getMain()->getUser();

    if (is_object($currentUser) && $currentUser->isLoggedIn()) {
      $editCount = $currentUser->getEditCount();

      if ($editCount != null && $editCount > 0) {
        $val = "Has edited";
      } else {
        $val = "Not edited";
      }

    }
    $data = $val; 
  }


}


?>
