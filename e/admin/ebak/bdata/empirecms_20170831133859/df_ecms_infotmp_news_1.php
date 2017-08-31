<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_ecms_infotmp_news`;");
E_C("CREATE TABLE `df_ecms_infotmp_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `oldurl` varchar(200) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `tmptime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `keyboard` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `ftitle` varchar(120) NOT NULL DEFAULT '',
  `smalltext` varchar(255) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `ywjs` text NOT NULL,
  `gzlct` text NOT NULL,
  `ywly` varchar(255) NOT NULL DEFAULT '',
  `ywlyc` mediumtext NOT NULL,
  `hyyj` varchar(255) NOT NULL DEFAULT '',
  `hyyjc` mediumtext NOT NULL,
  `fzlc` text NOT NULL,
  `gsly` text NOT NULL,
  `zzjg` text NOT NULL,
  `gsjj` text NOT NULL,
  `zgs` text NOT NULL,
  `zonggs` text NOT NULL,
  `fgs` text NOT NULL,
  `gszz` text NOT NULL,
  `zw` varchar(255) NOT NULL DEFAULT '',
  `bm` varchar(255) NOT NULL DEFAULT '',
  `gzdd` varchar(255) NOT NULL DEFAULT '',
  `rs` varchar(255) NOT NULL DEFAULT '',
  `lxwm` text NOT NULL,
  `qywh` text NOT NULL,
  `gsjjl` text NOT NULL,
  `allx` varchar(255) NOT NULL DEFAULT '',
  `gydf` text NOT NULL,
  `qywhnav` text NOT NULL,
  `ywjsnav` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>