<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsfile_public`;");
E_C("CREATE TABLE `df_enewsfile_public` (
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsfile_public` values('6','0','cdcd8e5fa50e8159163d236fe412e513.jpg','14872','2017-07-21','admin','1500618709','0','信用中国.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('2','0','842a4eb42bec1fe88ecc972fafa07511.jpg','20347','2017-07-20','admin','1500545429','0','财政部.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('3','0','a4cfef5f7dffe11147052ffb4f0e49bd.jpg','12572','2017-07-20','admin','1500545547','0','国际招标网.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('4','0','374533ee3de5c906dd2e06c84bd249e2.jpg','21964','2017-07-20','admin','1500545629','0','机电设备招标中心.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('5','0','b8c35fc22e6e4e538e0c11b7b99371a3.jpg','23392','2017-07-20','admin','1500545683','0','商务部.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('7','0','ab12f901f2ba2723f08135590e1a0e86.jpg','19999','2017-07-21','admin','1500618762','0','招标协会.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('8','0','e5df90b2bc09442814380cb986b55e4b.jpg','18384','2017-07-21','admin','1500618799','0','政府采购网.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('9','0','8a7e3f63790e20a3bc0a4b7a5ecdf19a.jpg','6278','2017-07-21','admin','1500618831','0','中国采购与招标网.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('10','0','d44b55f7feede50498db8247219ec358.jpg','22671','2017-07-21','admin','1500618875','0','中华人民共和国工业和信息化部.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('11','0','cc57bd845ef40b5d53f99b6646435df6.jpg','8254','2017-07-21','admin','1500618908','0','中华人民共和国国家发展和改革委员会.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('12','0','2c05e9a6a2f762223face3cbea6adcb0.jpg','23223','2017-07-21','admin','1500618938','0','住房和城乡建设部.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('13','0','9e61e912a7120652cb14c1777ad29faa.jpg','152949','2017-08-09','admin','1502283629','0','banner.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('14','0','414e39f89a7efc1dde54d725540f9802.jpg','14310','2017-08-09','admin','1502283673','0','[CropImg]banner.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('15','0','e4872addb652505ef94ad69b36084530.jpg','27132','2017-08-09','admin','1502283902','0','headerBg.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('16','0','723656ff2e00cc41d18ce30a1cd9b1da.jpg','11131','2017-08-09','admin','1502283930','0','[CropImg]headerBg.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('17','0','4cc522ca6049852ddc75ad4981896fc3.jpg','23650','2017-08-09','admin','1502284145','0','logo1.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('18','0','b923f16ab5e31cde95025e78e3f3dec2.jpg','13837','2017-08-09','admin','1502284162','0','[CropImg]logo1.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('19','0','8628e935b7bcea751c41a2bd9384b6a7.jpg','198217','2017-08-09','admin','1502284406','0','top_01.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('20','0','1b62ff178b339da50f3acc0d086f353a.jpg','28102','2017-08-09','admin','1502284420','0','[CropImg]top_01.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('21','0','ff92880d1476690bbd0df911c9161f27.jpg','16074','2017-08-09','admin','1502284943','0','捕获.JPG','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('22','0','77241c6cb1a9b2ba99a1c67c89723317.jpg','5922','2017-08-09','admin','1502285164','0','TIM截图20170809212513.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('23','0','0df7c1fbc84770929aa0e034c67c6822.jpg','5978','2017-08-09','admin','1502285304','0','TIM截图20170809212743.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('24','0','c8f496eb92ea67dfd817e17950862236.jpg','12927','2017-08-09','admin','1502285404','0','TIM截图20170809212914.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('25','0','1cd3aeb1a331bfc82279aa226ca8bd3a.jpg','16283','2017-08-09','admin','1502285518','0','TIM截图20170809213125.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('26','0','17b274c35abf8a478bf8f855ee8980be.jpg','4752','2017-08-09','admin','1502285749','0','TIM截图20170809213312.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('27','0','f25b887f97f57e74b28df5e1079620ca.jpg','5842','2017-08-09','admin','1502285813','0','TIM截图20170809213437.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('28','0','043727ee75edeba643aed89417731cd3.jpg','4984','2017-08-09','admin','1502285866','0','TIM截图20170809213722.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_public` values('29','0','fed9f49a6fd176b7285ae533c7d0912b.jpg','11663','2017-08-09','admin','1502285970','0','TIM截图20170809213848.jpg','1','0','0','0','0','0');");

@include("../../inc/footer.php");
?>