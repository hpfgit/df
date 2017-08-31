<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsfeedback`;");
E_C("CREATE TABLE `df_enewsfeedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `homepage` varchar(160) NOT NULL DEFAULT '',
  `company` varchar(80) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `saytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `job` varchar(36) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `filepath` varchar(20) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`),
  KEY `haveread` (`haveread`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsfeedback` values('1','1','kindeditor使用方法','fsdfsdfds','','','fsdfsdfsd','','','','2017-08-15 17:16:57','','121.24.253.43','','','0','','0','0');");
E_D("replace into `df_enewsfeedback` values('2','1','','','','','','','','','2017-08-25 14:18:40','','101.26.96.158','','','0','','0','0');");
E_D("replace into `df_enewsfeedback` values('3','1','张建行','招标代理收费标准是什么。','','','15100449013','','','','2017-08-25 14:19:52','','101.26.96.158','','','0','','1','0');");
E_D("replace into `df_enewsfeedback` values('4','1','fsd','fsd','','','fsd','','','','2017-08-26 08:34:45','','121.24.254.201','','','0','','0','0');");

@include("../../inc/footer.php");
?>