<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewslinkclass`;");
E_C("CREATE TABLE `df_enewslinkclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewslinkclass` values('1','行业主管');");
E_D("replace into `df_enewslinkclass` values('2','行业相关');");
E_D("replace into `df_enewslinkclass` values('3','其他');");

@include("../../inc/footer.php");
?>