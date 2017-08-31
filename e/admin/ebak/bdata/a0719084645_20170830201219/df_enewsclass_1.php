<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsclass`;");
E_C("CREATE TABLE `df_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsclass` values('1','0','关于鼎峰','','0','25','10','1','0','10','','1','guanyudingfeng','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','关于鼎峰','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,关于鼎峰','10','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499849939');");
E_D("replace into `df_enewsclass` values('2','0','业务范围','|21|22|24|25|37|','0','25','10','1','0','20','','0','yewufanwei','.html','Y-m-d','0','.html','0','1','10','10','10','','0','3','','10','1','1','10','业务范围','1','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，业务范围','20','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499850284');");
E_D("replace into `df_enewsclass` values('3','0','新闻动态','|7|8|','0','8','10','0','0','35','','0','xinwendongtai','.html','Y-m-d','0','.html','0','1','10','10','10','','0','4','','10','1','1','10','新闻动态','1','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，新闻动态','35','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499850377');");
E_D("replace into `df_enewsclass` values('5','0','在线留言','','0','25','10','1','0','16','','1','zaixianliuyan','.html','Y-m-d','0','.html','0','1','10','10','10','','0','5','','10','1','1','10','在线留言','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,在线留言','16','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499850903');");
E_D("replace into `df_enewsclass` values('7','3','公司新闻','','0','8','10','1','0','22','|3|','1','xinwendongtai/gongsixinwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','24','','10','1','1','10','公司新闻','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，公司新闻','22','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1499852911');");
E_D("replace into `df_enewsclass` values('8','3','行业动态','','0','8','10','1','0','21','|3|','1','xinwendongtai/xingyedongtai','.html','Y-m-d','0','.html','0','1','10','10','10','','0','25','','10','1','1','10','行业动态','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，行业动态','21','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','6','6','1499852937');");
E_D("replace into `df_enewsclass` values('9','0','中标公告','','0','8','10','1','0','34','','1','zhongbiaogonggao','.html','Y-m-d','0','.html','0','1','10','10','10','','0','8','','10','1','1','10','中标公告','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,中标公告','34','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499868264');");
E_D("replace into `df_enewsclass` values('10','0','招标公告','','0','8','10','1','0','26','','1','zhaobiaogonggao','.html','Y-m-d','0','.html','0','1','10','10','10','','0','9','','10','1','1','10','招标公告','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,招标公告','26','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499868296');");
E_D("replace into `df_enewsclass` values('11','0','经典案例','|28|29|30|31|32|','0','8','10','11','0','36','','0','jingdiananli','.html','Y-m-d','0','.html','0','1','10','10','10','','0','10','','10','1','1','10','经典案例','1','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','1','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,经典案例','36','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1499869479');");
E_D("replace into `df_enewsclass` values('12','0','公司简介','','0','25','10','1','0','11','','1','gongsijianjie','.html','Y-m-d','0','.html','0','1','10','10','10','','0','11','','10','1','1','10','公司简介','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,公司简介','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499870579');");
E_D("replace into `df_enewsclass` values('13','0','发展历程','','0','25','10','1','0','12','','1','fazhanlicheng','.html','Y-m-d','0','.html','0','1','10','10','10','','0','12','','10','1','1','10','发展历程','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,发展历程','12','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499870621');");
E_D("replace into `df_enewsclass` values('14','0','公司理念','','0','25','10','1','0','13','','1','gongsilinian','.html','Y-m-d','0','.html','0','1','10','10','10','','0','13','','10','1','1','10','公司理念','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,公司理念','13','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499870664');");
E_D("replace into `df_enewsclass` values('15','0','组织架构','','0','25','10','1','0','14','','1','zuzhijiagou','.html','Y-m-d','0','.html','0','1','10','10','10','','0','14','','10','1','1','10','组织架构','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,组织架构','14','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499870727');");
E_D("replace into `df_enewsclass` values('16','0','公司资质','','0','25','10','1','0','33','','1','gongsizizhi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','15','','10','1','1','10','公司资质','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,公司资质','33','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1499914618');");
E_D("replace into `df_enewsclass` values('17','0','总公司','','0','25','10','1','0','23','','1','zonggongsi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','16','','10','1','1','10','总公司','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,总公司','23','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1500338321');");
E_D("replace into `df_enewsclass` values('18','0','子公司','','0','25','10','1','0','24','','1','zigongsi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','17','','10','1','1','10','子公司','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,子公司','24','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1500338952');");
E_D("replace into `df_enewsclass` values('19','0','分公司','','0','25','10','1','0','25','','1','fengongsi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','18','','10','1','1','10','分公司','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,分公司','25','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1500339000');");
E_D("replace into `df_enewsclass` values('21','2','招标代理','','0','25','10','1','0','27','|2|','1','yewufanwei/zhaobiaodaili','.html','Y-m-d','0','.html','0','1','10','10','10','','0','19','','10','1','1','10','招标代理','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','/d/file/p/2017-07-25/9555b78d9bcbcadf2898250ab7842b9b.jpg','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,招标代理','27','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1500686356');");
E_D("replace into `df_enewsclass` values('22','2','工程咨询','','0','25','10','1','0','28','|2|','1','yewufanwei/gongchengzixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','20','','10','1','1','10','工程咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','/d/file/p/2017-07-25/314e859398a811cdf60b013b85ae03cd.jpg','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,工程咨咨询','28','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1500686474');");
E_D("replace into `df_enewsclass` values('24','2','PPP项目咨询','','0','25','10','1','0','30','|2|','1','yewufanwei/PPPxiangmuzixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','22','','10','1','1','10','PPP项目咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','/d/file/p/2017-07-25/e575cb267c100cf4d25c4439240d705d.jpg','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,ppp项目咨询','30','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1500705639');");
E_D("replace into `df_enewsclass` values('25','2','政府采购','','0','25','10','1','0','31','|2|','1','yewufanwei/zhengfucaigou','.html','Y-m-d','0','.html','0','1','10','10','10','','0','23','','10','1','1','10','政府采购','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','/d/file/p/2017-07-25/729e69e910f6a1a954781d0b9f81e75f.jpg','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,政府采购','31','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1500881228');");
E_D("replace into `df_enewsclass` values('34','0','联系我们','','0','25','10','1','0','17','','1','lianxiwomen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','7','','10','1','1','10','联系我们','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，联系我们','17','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1502864859');");
E_D("replace into `df_enewsclass` values('33','0','人才招聘','','0','25','10','1','0','15','','1','rencaizhaopin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','6','','10','1','1','10','人才招聘','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司，人才招聘','15','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1502864721');");
E_D("replace into `df_enewsclass` values('26','0','企业文化','','0','25','10','17','0','32','','1','qiyewenhua','.html','Y-m-d','0','.html','0','1','10','10','10','','0','2','','10','1','1','10','企业文化','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','32','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1501247174');");
E_D("replace into `df_enewsclass` values('28','11','招标代理','','0','8','10','12','0','37','|11|','1','jingdiananli/zhaobiaodaili','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','招标代理','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','37','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1502380018');");
E_D("replace into `df_enewsclass` values('27','0','登陆','','0','25','10','1','0','9','','1','denglu','.html','Y-m-d','0','.html','0','1','10','10','10','','0','26','','10','1','1','10','登陆','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司','','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1501691903');");
E_D("replace into `df_enewsclass` values('29','11','工程咨询','','0','8','10','13','0','38','|11|','1','jingdiananli/gongchengzixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','工程咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','38','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1502380085');");
E_D("replace into `df_enewsclass` values('30','11','造价咨询','','0','8','10','14','0','39','|11|','1','jingdiananli/zaojiazixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','造价咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','39','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1502380148');");
E_D("replace into `df_enewsclass` values('31','11','PPP项目咨询','','0','8','10','15','0','40','|11|','1','jingdiananli/PPPxiangmuzixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','PPP项目咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','40','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1502380204');");
E_D("replace into `df_enewsclass` values('32','11','政府采购','','0','8','10','16','0','41','|11|','1','jingdiananli/zhengfucaigou','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','政府采购','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','41','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1502380233');");
E_D("replace into `df_enewsclass` values('37','2','造价咨询','','0','25','10','1','0','29','|2|','1','yewufanwei/zaojiazixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','23','','10','1','1','10','造价咨询','0','0','1','news','0','0','2','2','id DESC','newstime DESC','河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。','/d/file/p/2017-08-30/eb6a44e87da71549ca6ffbedb7774d17.jpg','1','0','0','0','0','0','0','','0','0','0','河北鼎峰招标咨询有限公司,造价咨询','29','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1504059395');");

@include("../../inc/footer.php");
?>