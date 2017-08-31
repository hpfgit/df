<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsfile_1`;");
E_C("CREATE TABLE `df_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsfile_1` values('72','0','a826fe8effc0a886410d726e2dbd18d8.jpg','80673','2017-08-17','admin','1502938508','16','招标.jpg','1','0','1502938196','1502938196','0','0');");
E_D("replace into `df_enewsfile_1` values('28','1000010000000037','c9b7cf0193653c848276b4c517efd27b.jpg','317643','2017-07-23','admin','1500774334','12','anli.png','1','0','37','0','0','0');");
E_D("replace into `df_enewsfile_1` values('76','1000010000000086','1bb90976bbce48f463c02c73ad13f586.jpg','77051','2017-08-23','admin','1503476591','26','微信图片_20170823162241.jpg','1','0','86','0','0','0');");
E_D("replace into `df_enewsfile_1` values('63','1000010000000075','748d5173defd0da4925d1705f63b0450.jpg','206838','2017-08-15','admin','1502785113','28','造价工程.jpg','1','0','75','0','0','0');");
E_D("replace into `df_enewsfile_1` values('57','1000010000000067','eeb4ab261cbc0ad48148818ad4c49b7b.jpg','33770','2017-08-11','admin','1502387246','29','TIM截图20170810234341.jpg','1','0','67','0','0','0');");
E_D("replace into `df_enewsfile_1` values('56','1000010000000066','d9398ab3c06553bcfa2ab2fe5a434b34.jpg','33770','2017-08-11','admin','1502387214','29','TIM截图20170810234341.jpg','1','0','66','0','0','0');");
E_D("replace into `df_enewsfile_1` values('71','0','bd96cc2e601ff9f140c2a91812f4aa8b.jpg','82846','2017-08-17','admin','1502938415','16','造价甲级.jpg','1','0','1502938196','1502938196','0','0');");
E_D("replace into `df_enewsfile_1` values('70','0','9bf39e76196626df0ee78c235edb7785.jpg','409453','2017-08-16','admin','1502847593','0','banner.jpg','1','0','0','0','0','0');");
E_D("replace into `df_enewsfile_1` values('77','1000010000000086','0358f910857e65a2f3cf614303f83639.jpg','77051','2017-08-23','admin','1503476645','26','QQ截图20170823162312.jpg','1','0','86','0','0','0');");
E_D("replace into `df_enewsfile_1` values('18','1000010000000025','23de9b91171803b32fe8767274a40a44.jpg','111743','2017-07-21','admin','1500597965','13','发展历程.jpg','1','0','25','0','0','0');");
E_D("replace into `df_enewsfile_1` values('22','1000010000000027','8d2d032a4af9f39bb0b58f2acf376370.jpg','136636','2017-07-21','admin','1500598215','14','文化.jpg','1','0','27','0','0','0');");
E_D("replace into `df_enewsfile_1` values('21','1000010000000027','e922bed7c6c00aef3e7a6a8e5e2e8b0d.jpg','109050','2017-07-21','admin','1500598190','14','公司文化.jpg','1','0','27','0','0','0');");
E_D("replace into `df_enewsfile_1` values('23','1000010000000034','12dd22796458dd98db743615d2f23a44.jpg','320268','2017-07-21','admin','1500604510','7','武安市体育中心.jpg','1','0','34','0','0','0');");
E_D("replace into `df_enewsfile_1` values('24','0','f0c973cf91d2a1edb148a5cf5ff8217a.jpg','273206','2017-07-21','admin','1500604531','7','武安市向阳彩虹桥.jpg','1','0','33','33','0','0');");
E_D("replace into `df_enewsfile_1` values('25','1000010000000032','375d5b4cc9f2b6a2c99bd654ee1c641c.jpg','172875','2017-07-21','admin','1500604575','8','中晶玻璃.JPG','1','0','32','0','0','0');");
E_D("replace into `df_enewsfile_1` values('73','1000010000000084','76344ad806dfdd25c16cf132d6f85cdc.jpg','80673','2017-08-17','admin','1502938739','16','招标.jpg','1','0','84','0','0','0');");
E_D("replace into `df_enewsfile_1` values('58','1000010000000069','7a710058657ad476408b822a9d5401d8.jpg','141197','2017-08-15','admin','1502765168','21','招标代理.jpg','1','0','69','0','0','0');");
E_D("replace into `df_enewsfile_1` values('34','1000010000000043','5aa38eeaa1a4eb85b1ce3d86b4661b69.jpg','180134','2017-07-25','admin','1500942266','25','武安市怡祥苑小区.jpg','1','0','43','0','0','0');");
E_D("replace into `df_enewsfile_1` values('79','1000010000000089','471d3399d2ee6e65f9f969ece7a98ba4.jpg','1157398','2017-08-28','admin','1503891786','21','招标.jpg','1','0','89','0','0','0');");
E_D("replace into `df_enewsfile_1` values('90','1000010000000126','ac7fd6d2bac7a55c795a0a71b3d4c856.jpg','981825','2017-08-30','admin','1504065630','37','a622b14b667988c4af289364f6875e18.jpg','1','0','126','0','0','0');");
E_D("replace into `df_enewsfile_1` values('81','1000010000000091','788a9975152a583c93d9f55ef6eee3b7.jpg','906367','2017-08-28','admin','1503908345','22','咨询流程.jpg','1','0','91','0','0','0');");
E_D("replace into `df_enewsfile_1` values('82','1000010000000092','39c082400dcbac5d793c53eba17d208e.jpg','303958','2017-08-28','admin','1503912702','25','绘图1.jpg','1','0','92','0','0','0');");
E_D("replace into `df_enewsfile_1` values('49','1000010000000058','9e85ef796eed43a8a8a131118dc44b2c.jpg','94605','2017-07-25','admin','1500944043','15','组织结构.jpg','1','0','58','0','0','0');");
E_D("replace into `df_enewsfile_1` values('50','1000010000000037','a139a291a23d0ea78961fad8ee708ddd.jpg','26472','2017-07-25','admin','1500944188','12','公司简介.jpg','1','0','37','0','0','0');");
E_D("replace into `df_enewsfile_1` values('74','1000010000000084','d7d9c52c1b9297cd6a81be5a429c722c.jpg','80673','2017-08-17','admin','1502938820','16','招标.jpg','1','0','84','0','0','0');");
E_D("replace into `df_enewsfile_1` values('75','1000010000000084','3c9724ab690dc878bbc66747e2d2ba46.jpg','82846','2017-08-17','admin','1502939001','16','造价甲级.jpg','1','0','84','0','0','0');");
E_D("replace into `df_enewsfile_1` values('78','1000010000000089','941cd2610ab1bf5275d257cc62e08ec0.jpg','1108963','2017-08-28','admin','1503891082','21','绘图2.jpg','1','0','89','0','0','0');");

@include("../../inc/footer.php");
?>