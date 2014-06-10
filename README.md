MoegirlAD
=========

Show advertisement in moegirl


使用
---------
在mediawiki的安装目录中打开 `LocalSettings.php`, 加入 `require_once "$IP/extensions/MoegirlAD/MoegirlAD.php"`


配置
---------
在 `LocalSettings.php` 中使用下面的变量进行配置

`$wgMoegirlADEnabled  = true;`  //是否现实广告，如果为 true 可以省略

`$wgMoegirlADTopADCode = "advertice code in here";`   // 广告提供商给的代码，显示在顶部

`$wgMoegirlADTopBottomCode = "advertice code in here";`   // 广告提供商给的代码，显示在底部



