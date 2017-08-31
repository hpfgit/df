<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_ecms_news_index`;");
E_C("CREATE TABLE `df_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8");
E_D("replace into `df_ecms_news_index` values('89','21','1','1503891046','1503891173','1503891955','1');");
E_D("replace into `df_ecms_news_index` values('38','19','1','1500792935','1500793139','1500793139','1');");
E_D("replace into `df_ecms_news_index` values('29','8','1','1500601525','1500601558','1500601558','1');");
E_D("replace into `df_ecms_news_index` values('27','14','1','1500598174','1500598233','1500943319','1');");
E_D("replace into `df_ecms_news_index` values('25','13','1','1500597327','1500597998','1500942314','1');");
E_D("replace into `df_ecms_news_index` values('37','12','1','1500773376','1500773433','1502442689','1');");
E_D("replace into `df_ecms_news_index` values('69','21','1','1502757811','1502757904','1503625571','1');");
E_D("replace into `df_ecms_news_index` values('13','17','1','1500451703','1500451786','1502784977','1');");
E_D("replace into `df_ecms_news_index` values('30','8','1','1500601560','1500601606','1500601606','1');");
E_D("replace into `df_ecms_news_index` values('15','18','1','1500452890','1500452997','1500452997','1');");
E_D("replace into `df_ecms_news_index` values('31','8','1','1500601609','1500601645','1500601645','1');");
E_D("replace into `df_ecms_news_index` values('32','8','1','1500601647','1500601726','1500604579','1');");
E_D("replace into `df_ecms_news_index` values('83','34','1','1502935455','1502935508','1502935508','1');");
E_D("replace into `df_ecms_news_index` values('34','7','1','1500604444','1500604487','1500604517','1');");
E_D("replace into `df_ecms_news_index` values('84','16','1','1502938674','1502938831','1502940391','1');");
E_D("replace into `df_ecms_news_index` values('122','37','1','1504062686','1504062756','1504064615','1');");
E_D("replace into `df_ecms_news_index` values('72','1','1','1502764279','1502764360','1502783496','1');");
E_D("replace into `df_ecms_news_index` values('43','25','1','1500942242','1500942272','1503632969','1');");
E_D("replace into `df_ecms_news_index` values('112','8','1','1504053384','1504053474','1504053474','1');");
E_D("replace into `df_ecms_news_index` values('94','22','1','1503977799','1503978106','1503987590','1');");
E_D("replace into `df_ecms_news_index` values('93','21','1','1503975086','1503976248','1503987691','1');");
E_D("replace into `df_ecms_news_index` values('92','25','1','1503912661','1503912833','1503912833','1');");
E_D("replace into `df_ecms_news_index` values('91','22','1','1503908314','1503908459','1503908459','1');");
E_D("replace into `df_ecms_news_index` values('126','37','1','1504065591','1504065726','1504068420','1');");
E_D("replace into `df_ecms_news_index` values('67','29','1','1502387224','1502387255','1502387255','1');");
E_D("replace into `df_ecms_news_index` values('58','15','1','1500943866','1500944067','1500944067','1');");
E_D("replace into `df_ecms_news_index` values('66','29','1','1502387181','1502387222','1502387222','1');");
E_D("replace into `df_ecms_news_index` values('71','24','1','1502760501','1502760528','1504012548','1');");
E_D("replace into `df_ecms_news_index` values('75','28','1','1502785087','1502785119','1502785182','1');");
E_D("replace into `df_ecms_news_index` values('85','8','1','1503362683','1503362772','1503362772','1');");
E_D("replace into `df_ecms_news_index` values('86','26','1','1503475905','1503476730','1503978189','1');");
E_D("replace into `df_ecms_news_index` values('82','7','1','1502932803','1502932913','1502932913','1');");
E_D("replace into `df_ecms_news_index` values('87','22','1','1503623818','1503624252','1503626430','1');");

@include("../../inc/footer.php");
?>