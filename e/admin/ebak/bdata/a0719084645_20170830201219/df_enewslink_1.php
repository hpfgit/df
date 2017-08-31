<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewslink`;");
E_C("CREATE TABLE `df_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewslink` values('2','中华人民共和国财政部','/d/file/p/2017-08-09/414e39f89a7efc1dde54d725540f9802.jpg','http://www.mof.gov.cn/index.htm','2017-07-20 18:10:54','27','88','31','_blank','0','','','1','0','1');");
E_D("replace into `df_enewslink` values('3','中华人民共和国商务部','/d/file/p/2017-08-09/723656ff2e00cc41d18ce30a1cd9b1da.jpg','http://www.mofcom.gov.cn/','2017-07-20 18:13:00','18','88','31','_blank','0','','','1','0','1');");
E_D("replace into `df_enewslink` values('4','中华人民共和国国家发展和改革委员会','/d/file/p/2017-08-09/b923f16ab5e31cde95025e78e3f3dec2.jpg','http://www.ndrc.gov.cn/','2017-07-20 18:14:11','30','88','31','_blank','0','','','1','0','1');");
E_D("replace into `df_enewslink` values('5','中华人民共和国住房和城乡建设部','/d/file/p/2017-08-09/1b62ff178b339da50f3acc0d086f353a.jpg','http://www.mohurd.gov.cn/','2017-07-20 18:15:33','28','100','31','_blank','0','','','1','0','1');");
E_D("replace into `df_enewslink` values('6','中国招标投标协会','/d/file/p/2017-08-09/ff92880d1476690bbd0df911c9161f27.jpg','http://www.ctba.org.cn/','2017-07-21 14:32:30','19','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('7','河北省政府采购网','/d/file/p/2017-08-09/77241c6cb1a9b2ba99a1c67c89723317.jpg','http://www.ccgp-hebei.gov.cn/zfcg/','2017-07-21 14:33:03','32','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('8','河北省招标投标综合网','/d/file/p/2017-08-09/0df7c1fbc84770929aa0e034c67c6822.jpg','http://www.hebeibidding.com.cn/','2017-07-21 14:33:40','29','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('9','河北省建设工程造价管理协会','/d/file/p/2017-08-09/c8f496eb92ea67dfd817e17950862236.jpg','http://www.chinaheca.com.cn/','2017-07-21 14:34:18','24','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('10','河北省发改网','/d/file/p/2017-08-09/1cd3aeb1a331bfc82279aa226ca8bd3a.jpg','http://www.miit.gov.cn/','2017-07-21 14:34:51','30','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('11','邯郸发改网','/d/file/p/2017-08-09/17b274c35abf8a478bf8f855ee8980be.jpg','http://www.bidcenter.com.cn/newssearchyz-17378271.html','2017-07-21 14:35:22','28','88','31','_blank','0','','','1','0','2');");
E_D("replace into `df_enewslink` values('12','全国工程造价咨询企业注册造价工程师管理系统','/d/file/p/2017-08-09/f25b887f97f57e74b28df5e1079620ca.jpg','http://zaojiasys.jianshe99.com/cecaopsys/','2017-07-21 14:36:00','26','88','31','_blank','0','','','1','0','3');");
E_D("replace into `df_enewslink` values('13','中国政府采购网','/d/file/p/2017-08-09/043727ee75edeba643aed89417731cd3.jpg','http://www.ccgp.gov.cn/','2017-08-09 21:38:01','0','88','31','_blank','0','','','1','0','3');");
E_D("replace into `df_enewslink` values('14','中国机电设备招标中心','/d/file/p/2017-08-09/fed9f49a6fd176b7285ae533c7d0912b.jpg','http://www.miitcntc.org.cn/','2017-08-09 21:39:45','0','88','31','_blank','0','','','1','0','3');");

@include("../../inc/footer.php");
?>