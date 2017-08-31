<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewslog`;");
E_C("CREATE TABLE `df_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=179 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewslog` values('1','admin','2017-07-12 16:29:25','::1','1','','0','59931');");
E_D("replace into `df_enewslog` values('2','admin','2017-07-12 18:06:37','::1','1','','0','52183');");
E_D("replace into `df_enewslog` values('3','admin','2017-07-12 21:58:14','::1','1','','0','54216');");
E_D("replace into `df_enewslog` values('4','admin','2017-07-13 08:56:07','127.0.0.1','1','','0','52441');");
E_D("replace into `df_enewslog` values('5','admin','2017-07-13 14:35:41','::1','1','','0','49965');");
E_D("replace into `df_enewslog` values('6','admin','2017-07-13 16:56:42','127.0.0.1','0','','0','65413');");
E_D("replace into `df_enewslog` values('7','admin','2017-07-13 16:56:51','127.0.0.1','1','','0','65433');");
E_D("replace into `df_enewslog` values('8','admin','2017-07-13 16:59:31','127.0.0.1','1','','0','49401');");
E_D("replace into `df_enewslog` values('9','admin','2017-07-14 09:16:32','::1','1','','0','53355');");
E_D("replace into `df_enewslog` values('10','admin','2017-07-15 09:01:38','::1','1','','0','53953');");
E_D("replace into `df_enewslog` values('11','admin','2017-07-18 08:34:28','127.0.0.1','1','','0','51267');");
E_D("replace into `df_enewslog` values('12','admin','2017-07-19 15:52:12','121.24.254.36','1','','0','0');");
E_D("replace into `df_enewslog` values('13','admin','2017-07-19 16:45:24','121.24.254.36','1','','0','0');");
E_D("replace into `df_enewslog` values('14','admin','2017-07-19 17:04:53','121.24.254.36','1','','0','0');");
E_D("replace into `df_enewslog` values('15','admin','2017-07-20 08:45:19','121.24.254.98','0','','1','0');");
E_D("replace into `df_enewslog` values('16','admin','2017-07-20 08:45:29','121.24.254.98','1','','0','0');");
E_D("replace into `df_enewslog` values('17','admin','2017-07-20 08:53:01','121.24.254.98','1','','0','0');");
E_D("replace into `df_enewslog` values('18','admin','2017-07-20 09:32:24','121.24.254.98','1','','0','0');");
E_D("replace into `df_enewslog` values('19','admin','2017-07-20 17:55:41','121.24.254.98','1','','0','0');");
E_D("replace into `df_enewslog` values('20','admin','2017-07-21 08:30:55','120.9.195.176','1','','0','0');");
E_D("replace into `df_enewslog` values('21','admin','2017-07-21 09:57:53','120.9.195.176','1','','0','0');");
E_D("replace into `df_enewslog` values('22','admin','2017-07-21 10:33:14','120.9.195.176','1','','0','0');");
E_D("replace into `df_enewslog` values('23','admin','2017-07-21 14:30:01','120.9.195.176','1','','0','0');");
E_D("replace into `df_enewslog` values('24','admin','2017-07-22 08:30:37','120.9.194.112','1','','0','0');");
E_D("replace into `df_enewslog` values('25','admin','2017-07-22 08:44:11','120.9.194.112','1','','0','0');");
E_D("replace into `df_enewslog` values('26','admin','2017-07-22 14:35:50','120.9.194.112','1','','0','0');");
E_D("replace into `df_enewslog` values('27','admin','2017-07-22 16:09:55','120.9.194.112','1','','0','0');");
E_D("replace into `df_enewslog` values('28','admin','2017-07-22 17:42:38','120.9.194.112','1','','0','0');");
E_D("replace into `df_enewslog` values('29','admin','2017-07-23 08:29:11','120.9.195.7','1','','0','0');");
E_D("replace into `df_enewslog` values('30','admin','2017-07-23 09:01:15','120.9.195.7','1','','0','0');");
E_D("replace into `df_enewslog` values('31','admin','2017-07-23 14:51:13','120.9.195.7','1','','0','0');");
E_D("replace into `df_enewslog` values('32','admin','2017-07-23 16:29:44','120.9.195.7','1','','0','0');");
E_D("replace into `df_enewslog` values('33','admin','2017-07-23 17:06:55','120.9.195.7','1','','0','0');");
E_D("replace into `df_enewslog` values('34','admin','2017-07-24 15:13:42','120.9.194.51','1','','0','0');");
E_D("replace into `df_enewslog` values('35','admin','2017-07-25 08:17:52','120.9.192.251','1','','0','0');");
E_D("replace into `df_enewslog` values('36','admin','2017-07-25 09:00:16','120.9.192.251','1','','0','0');");
E_D("replace into `df_enewslog` values('37','admin','2017-07-25 09:26:21','120.9.192.251','1','','0','0');");
E_D("replace into `df_enewslog` values('38','admin','2017-07-25 22:28:06','183.198.9.36','1','','0','0');");
E_D("replace into `df_enewslog` values('39','admin','2017-07-26 08:27:45','121.24.252.82','0','','0','0');");
E_D("replace into `df_enewslog` values('40','admin','2017-07-26 08:27:54','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('41','admin','2017-07-26 08:28:12','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('42','admin','2017-07-26 08:42:24','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('43','admin','2017-07-26 11:00:30','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('44','admin','2017-07-26 14:12:22','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('45','admin','2017-07-26 14:34:33','121.24.252.82','1','','0','0');");
E_D("replace into `df_enewslog` values('46','admin','2017-07-28 11:08:48','121.24.253.42','1','','0','0');");
E_D("replace into `df_enewslog` values('47','admin','2017-07-28 14:06:43','121.24.253.42','1','','0','0');");
E_D("replace into `df_enewslog` values('48','admin','2017-07-28 21:03:28','183.198.9.144','1','','0','0');");
E_D("replace into `df_enewslog` values('49','admin','2017-07-29 08:23:08','121.24.254.58','1','','0','0');");
E_D("replace into `df_enewslog` values('50','admin','2017-07-29 11:20:55','121.24.254.58','1','','0','0');");
E_D("replace into `df_enewslog` values('51','admin','2017-07-31 08:34:01','121.24.252.215','1','','0','0');");
E_D("replace into `df_enewslog` values('52','admin','2017-07-31 13:13:22','183.198.9.201','1','','0','0');");
E_D("replace into `df_enewslog` values('53','admin','2017-07-31 15:36:25','121.24.252.215','1','','0','0');");
E_D("replace into `df_enewslog` values('54','admin','2017-08-01 08:50:54','121.24.254.75','1','','0','0');");
E_D("replace into `df_enewslog` values('55','admin','2017-08-01 11:24:21','121.24.254.75','1','','0','0');");
E_D("replace into `df_enewslog` values('56','admin','2017-08-01 12:53:47','183.198.9.201','1','','0','0');");
E_D("replace into `df_enewslog` values('57','admin','2017-08-01 14:07:28','121.24.254.75','1','','0','0');");
E_D("replace into `df_enewslog` values('58','admin','2017-08-01 15:36:25','121.24.254.75','1','','0','0');");
E_D("replace into `df_enewslog` values('59','admin','2017-08-02 08:37:45','121.24.254.97','1','','0','0');");
E_D("replace into `df_enewslog` values('60','admin','2017-08-02 10:54:17','121.24.254.97','1','','0','0');");
E_D("replace into `df_enewslog` values('61','admin','2017-08-02 14:08:29','121.24.254.97','1','','0','0');");
E_D("replace into `df_enewslog` values('62','admin','2017-08-02 22:46:24','183.198.9.201','1','','0','0');");
E_D("replace into `df_enewslog` values('63','admin','2017-08-03 08:20:59','120.9.194.66','1','','0','0');");
E_D("replace into `df_enewslog` values('64','admin','2017-08-03 13:32:35','183.198.9.201','1','','0','0');");
E_D("replace into `df_enewslog` values('65','admin','2017-08-03 14:13:37','120.9.194.66','1','','0','0');");
E_D("replace into `df_enewslog` values('66','admin','2017-08-03 16:10:25','120.9.194.66','1','','0','0');");
E_D("replace into `df_enewslog` values('67','admin','2017-08-03 17:03:17','120.9.194.66','1','','0','0');");
E_D("replace into `df_enewslog` values('68','admin','2017-08-04 08:33:56','120.9.192.111','1','','0','0');");
E_D("replace into `df_enewslog` values('69','admin','2017-08-04 18:05:19','120.9.192.111','1','','0','0');");
E_D("replace into `df_enewslog` values('70','admin','2017-08-05 08:29:22','121.24.254.84','1','','0','0');");
E_D("replace into `df_enewslog` values('71','admin','2017-08-05 11:29:58','121.24.254.84','1','','0','0');");
E_D("replace into `df_enewslog` values('72','admin','2017-08-09 09:19:53','121.24.255.199','1','','0','0');");
E_D("replace into `df_enewslog` values('73','admin','2017-08-09 11:09:00','121.24.255.199','1','','0','0');");
E_D("replace into `df_enewslog` values('74','admin','2017-08-09 20:58:47','183.197.77.49','1','','0','0');");
E_D("replace into `df_enewslog` values('75','admin','2017-08-10 08:28:11','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('76','admin','2017-08-10 08:41:04','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('77','admin','2017-08-10 09:18:47','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('78','admin','2017-08-10 09:28:31','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('79','admin','2017-08-10 10:16:14','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('80','admin','2017-08-10 14:12:18','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('81','admin','2017-08-10 16:43:08','120.9.192.128','1','','0','0');");
E_D("replace into `df_enewslog` values('82','admin','2017-08-10 23:35:19','183.197.77.49','1','','0','0');");
E_D("replace into `df_enewslog` values('83','admin','2017-08-11 09:13:59','121.24.254.115','1','','0','0');");
E_D("replace into `df_enewslog` values('84','admin','2017-08-11 16:38:26','121.24.254.115','1','','0','0');");
E_D("replace into `df_enewslog` values('85','admin','2017-08-11 16:54:08','121.24.254.115','1','','0','0');");
E_D("replace into `df_enewslog` values('86','admin','2017-08-11 16:57:23','121.24.254.115','1','','0','0');");
E_D("replace into `df_enewslog` values('87','admin','2017-08-11 17:03:52','121.24.254.115','1','','0','0');");
E_D("replace into `df_enewslog` values('88','admin','2017-08-12 15:33:18','120.9.194.131','1','','0','0');");
E_D("replace into `df_enewslog` values('89','admin','2017-08-14 17:53:01','120.9.193.95','1','','0','0');");
E_D("replace into `df_enewslog` values('90','admin','2017-08-14 20:17:01','106.117.150.138','1','','0','0');");
E_D("replace into `df_enewslog` values('91','admin','2017-08-15 07:33:03','106.117.150.138','1','','0','0');");
E_D("replace into `df_enewslog` values('92','admin','2017-08-15 08:19:36','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('93','admin','2017-08-15 08:41:04','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('94','admin','2017-08-15 08:43:06','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('95','admin','2017-08-15 09:09:40','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('96','admin','2017-08-15 09:09:56','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('97','admin','2017-08-15 09:26:30','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('98','admin','2017-08-15 10:29:37','120.9.193.235','1','','0','0');");
E_D("replace into `df_enewslog` values('99','admin','2017-08-15 15:49:39','121.24.253.43','1','','0','0');");
E_D("replace into `df_enewslog` values('100','admin','2017-08-15 17:15:42','121.24.253.43','1','','0','0');");
E_D("replace into `df_enewslog` values('101','admin','2017-08-15 21:04:17','106.117.150.138','1','','0','0');");
E_D("replace into `df_enewslog` values('102','admin','2017-08-16 08:20:43','101.26.109.64','1','','0','0');");
E_D("replace into `df_enewslog` values('103','admin','2017-08-16 08:31:10','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('104','admin','2017-08-16 08:31:23','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('105','admin','2017-08-16 08:39:37','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('106','admin','2017-08-16 08:48:53','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('107','admin','2017-08-16 08:56:10','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('108','admin','2017-08-16 09:46:30','101.26.109.64','1','','0','0');");
E_D("replace into `df_enewslog` values('109','admin','2017-08-16 09:47:49','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('110','admin','2017-08-16 10:03:43','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('111','admin','2017-08-16 14:06:56','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('112','admin','2017-08-16 14:54:17','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('113','admin','2017-08-16 15:19:39','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('114','admin','2017-08-16 16:01:02','101.26.109.64','1','','0','0');");
E_D("replace into `df_enewslog` values('115','admin','2017-08-16 16:18:36','121.24.253.111','1','','0','0');");
E_D("replace into `df_enewslog` values('116','admin','2017-08-17 09:12:04','101.26.97.9','1','','0','0');");
E_D("replace into `df_enewslog` values('117','admin','2017-08-17 09:58:32','120.9.192.61','1','','0','0');");
E_D("replace into `df_enewslog` values('118','admin','2017-08-17 09:59:42','101.26.97.9','0','','0','0');");
E_D("replace into `df_enewslog` values('119','admin','2017-08-17 10:00:03','101.26.97.9','1','','0','0');");
E_D("replace into `df_enewslog` values('120','admin','2017-08-17 10:00:53','120.9.192.61','1','','0','0');");
E_D("replace into `df_enewslog` values('121','admin','2017-08-17 10:02:22','101.26.97.9','1','','0','0');");
E_D("replace into `df_enewslog` values('122','admin','2017-08-17 10:03:46','120.9.192.61','1','','0','0');");
E_D("replace into `df_enewslog` values('123','admin','2017-08-17 10:32:39','120.9.192.61','0','','1','0');");
E_D("replace into `df_enewslog` values('124','admin','2017-08-17 10:33:17','120.9.192.61','1','','0','0');");
E_D("replace into `df_enewslog` values('125','admin','2017-08-17 10:49:25','101.26.97.9','0','','0','0');");
E_D("replace into `df_enewslog` values('126','admin','2017-08-17 10:49:41','101.26.97.9','1','','0','0');");
E_D("replace into `df_enewslog` values('127','admin','2017-08-17 11:22:16','120.9.192.61','0','','1','0');");
E_D("replace into `df_enewslog` values('128','admin','2017-08-17 11:22:36','120.9.192.61','1','','0','0');");
E_D("replace into `df_enewslog` values('129','admin','2017-08-22 08:42:49','101.26.114.126','1','','0','0');");
E_D("replace into `df_enewslog` values('130','admin','2017-08-23 16:05:37','101.26.122.227','0','','0','0');");
E_D("replace into `df_enewslog` values('131','admin','2017-08-23 16:06:02','101.26.122.227','1','','0','0');");
E_D("replace into `df_enewslog` values('132','admin','2017-08-23 16:27:56','121.24.253.250','1','','0','0');");
E_D("replace into `df_enewslog` values('133','admin','2017-08-23 16:36:08','101.26.122.227','1','','0','0');");
E_D("replace into `df_enewslog` values('134','admin','2017-08-25 09:14:04','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('135','admin','2017-08-25 09:40:35','120.9.193.87','1','','0','0');");
E_D("replace into `df_enewslog` values('136','admin','2017-08-25 09:44:09','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('137','admin','2017-08-25 09:46:31','120.9.193.87','1','','0','0');");
E_D("replace into `df_enewslog` values('138','admin','2017-08-25 09:59:21','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('139','admin','2017-08-25 10:13:30','120.9.193.87','1','','0','0');");
E_D("replace into `df_enewslog` values('140','admin','2017-08-25 10:40:51','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('141','admin','2017-08-25 11:10:00','120.9.193.87','1','','0','0');");
E_D("replace into `df_enewslog` values('142','admin','2017-08-25 11:18:22','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('143','admin','2017-08-25 14:18:59','101.26.96.158','1','','0','0');");
E_D("replace into `df_enewslog` values('144','admin','2017-08-26 08:36:17','121.24.254.201','1','','0','0');");
E_D("replace into `df_enewslog` values('145','admin','2017-08-28 11:29:20','101.26.102.208','1','','0','0');");
E_D("replace into `df_enewslog` values('146','admin','2017-08-28 14:59:07','101.26.102.208','1','','0','0');");
E_D("replace into `df_enewslog` values('147','admin','2017-08-28 17:36:33','101.26.102.208','1','','0','0');");
E_D("replace into `df_enewslog` values('148','admin','2017-08-29 10:19:10','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('149','admin','2017-08-29 11:19:58','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('150','admin','2017-08-29 11:23:51','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('151','admin','2017-08-29 11:27:31','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('152','admin','2017-08-29 11:30:16','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('153','admin','2017-08-29 14:06:49','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('154','admin','2017-08-29 14:51:42','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('155','admin','2017-08-29 15:27:36','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('156','admin','2017-08-29 16:18:06','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('157','admin','2017-08-29 16:35:12','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('158','admin','2017-08-29 16:45:10','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('159','admin','2017-08-29 16:47:58','101.26.121.115','1','','0','0');");
E_D("replace into `df_enewslog` values('160','admin','2017-08-29 17:09:04','120.9.192.206','1','','0','0');");
E_D("replace into `df_enewslog` values('161','admin','2017-08-29 20:19:21','106.117.149.12','1','','0','0');");
E_D("replace into `df_enewslog` values('162','admin','2017-08-30 08:23:31','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('163','admin','2017-08-30 08:34:47','101.26.121.171','0','','0','0');");
E_D("replace into `df_enewslog` values('164','admin','2017-08-30 08:34:55','101.26.121.171','1','','0','0');");
E_D("replace into `df_enewslog` values('165','admin','2017-08-30 08:44:28','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('166','admin','2017-08-30 10:42:29','101.26.121.171','1','','0','0');");
E_D("replace into `df_enewslog` values('167','admin','2017-08-30 11:20:55','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('168','admin','2017-08-30 11:35:43','101.26.121.171','1','','0','0');");
E_D("replace into `df_enewslog` values('169','admin','2017-08-30 11:48:26','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('170','admin','2017-08-30 12:42:21','106.117.149.12','1','','0','0');");
E_D("replace into `df_enewslog` values('171','admin','2017-08-30 14:14:37','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('172','admin','2017-08-30 14:25:26','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('173','admin','2017-08-30 14:37:07','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('174','admin','2017-08-30 14:40:52','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('175','admin','2017-08-30 15:51:24','120.9.194.107','1','','0','0');");
E_D("replace into `df_enewslog` values('176','admin','2017-08-30 20:10:11','106.117.149.12','1','','0','0');");
E_D("replace into `df_enewslog` values('177','admin','2017-08-30 21:17:26','127.0.0.1','1','','0','53866');");
E_D("replace into `df_enewslog` values('178','admin','2017-08-31 13:38:51','127.0.0.1','1','','0','49441');");

@include("../../inc/footer.php");
?>