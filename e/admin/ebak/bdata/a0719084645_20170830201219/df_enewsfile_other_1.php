<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsfile_other`;");
E_C("CREATE TABLE `df_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsfile_other` values('1','0','52af87db3da8dced49a8f65cf4dd41f9.jpg','35557','2017-07-23','admin','1500796009','0','dechang_07.jpg','1','0','21','0','0','1');");
E_D("replace into `df_enewsfile_other` values('2','0','9555b78d9bcbcadf2898250ab7842b9b.jpg','141197','2017-07-25','admin','1500942951','0','招标代理.jpg','1','0','21','0','0','1');");
E_D("replace into `df_enewsfile_other` values('3','0','314e859398a811cdf60b013b85ae03cd.jpg','188176','2017-07-25','admin','1500942969','0','工程咨询.jpg','1','0','22','0','0','1');");
E_D("replace into `df_enewsfile_other` values('9','0','eb6a44e87da71549ca6ffbedb7774d17.jpg','206838','2017-08-30','admin','1504059361','0','e28dad597dd8927bdab50656e5e95aa5.jpg','1','0','37','0','0','1');");
E_D("replace into `df_enewsfile_other` values('5','0','979e400f6470f733ef3e4ea25c0aa39f.jpg','187726','2017-07-25','admin','1500943027','0','ppp.jpg','1','0','25','0','0','1');");
E_D("replace into `df_enewsfile_other` values('6','0','729e69e910f6a1a954781d0b9f81e75f.jpg','180134','2017-07-25','admin','1500943043','0','武安市怡祥苑小区.jpg','1','0','25','0','0','1');");
E_D("replace into `df_enewsfile_other` values('7','0','e575cb267c100cf4d25c4439240d705d.jpg','187726','2017-07-25','admin','1500943090','0','ppp.jpg','1','0','24','0','0','1');");

@include("../../inc/footer.php");
?>