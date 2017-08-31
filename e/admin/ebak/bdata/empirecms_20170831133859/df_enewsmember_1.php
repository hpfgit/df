<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsmember`;");
E_C("CREATE TABLE `df_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsmember` values('1','admin','e0d92b3a387dd12dc103539fd4ca8c80','Yoi9EEqPu07rgWog6wf5','admin@qq.com','1499912614','1','0','0','0.00','0','0','1','lxsA03','hEBM35dWMFMg');");
E_D("replace into `df_enewsmember` values('2','g7T5jmb5','83279f243b11a731c835eda4cc08d3a2','a3HLoGPSOVorxc859Ppf','7PzO1lGN@163.com','1500784506','1','0','0','0.00','0','0','1','vhMlWh','8bALfTTAh3AE');");
E_D("replace into `df_enewsmember` values('3','PXUxyrv3','eb603290cd846c169248837c00a26e08','Ig1TUwPsO2pjeupa88IF','w92IM6Iu@163.com','1500785325','1','0','0','0.00','0','0','1','UkKJhS','oM6Z4qWqE5vu');");
E_D("replace into `df_enewsmember` values('4','6G51Wzy3','82b36c960bbaf94f7dbc6d5ff1bd60b0','XCozja15JQqvyWwjEBPx','O2B11jLl@163.com','1500790301','1','0','0','0.00','0','0','1','FQLWrV','u7nuAJWB4W1E');");
E_D("replace into `df_enewsmember` values('5','jtaJDw23','a2a493d0d29dce0fd64c2918bd0f644e','XkTwzy9Eii0hSJJwPvzf','RLfCXDz6@163.com','1500830485','1','0','0','0.00','0','0','1','Dp8PNB','APBCc6uAi8L0');");
E_D("replace into `df_enewsmember` values('6','MwTBr41G','26e226b9eea51ebc63e366ee01403fbe','qRHufeXSHmnAF27bqBsP','hrCU1sci@163.com','1500841921','1','0','0','0.00','0','0','1','SY3xdi','VwARU8cuuhae');");
E_D("replace into `df_enewsmember` values('7','5FHBCEC7','a896026e259d708c01edd8395b3725f5','FnMVwQ18xtAjtu254cs8','uK0r01TE@163.com','1500842769','1','0','0','0.00','0','0','1','NnIXfI','koIxOqxktxJJ');");
E_D("replace into `df_enewsmember` values('8','瑞地建筑','b0143e4cfa2a91177a28606ebd8e1513','7VyRGnmK3x2UEJRStFLb','335197569@qq.com','1502271482','1','0','0','0.00','0','0','1','8wY7D6','AcwQ3X09f15S');");
E_D("replace into `df_enewsmember` values('9','3H7Xj8fT','97db60182dd0c2afbcd3c17ea36761fb','RKLFAl3SmkTUzqZzFH7z','T2nvDTeq@163.com','1502306223','1','0','0','0.00','0','0','1','3CeGJ8','b5Ns1JDbdHJs');");
E_D("replace into `df_enewsmember` values('10','9f9S9x0r','349736187b839ae4e8b115a1804f2b3d','zeA7gFe41aCkCac6NRj8','181Ex81e@163.com','1502307057','1','0','0','0.00','0','0','1','AwJD0f','wbKHB5sL5Uxo');");
E_D("replace into `df_enewsmember` values('11','t4kg78tz','f0f84751430894dc0e005cf8ea19932b','lXAMET4p0VRK0WVN46ad','08SEpE2j@163.com','1502308158','1','0','0','0.00','0','0','1','uRnt10','eEYhUWCTWFC6');");
E_D("replace into `df_enewsmember` values('12','S9v522mT','d9a621eeb9123140bf99d2f38f0727fe','KpuRXJCssH0frsiA9FI1','qf8q7C27@163.com','1502308597','1','0','0','0.00','0','0','1','jpJGm0','aEyfJMb6wHOu');");
E_D("replace into `df_enewsmember` values('13','5rjdOxLU','ab6f067a7c82fb8feb106d8275c12147','qcA4t0cFpE5LMiBj2cpi','3C03fxML@163.com','1502309377','1','0','0','0.00','0','0','1','HMZzh9','8oBlz6rIDnPI');");
E_D("replace into `df_enewsmember` values('14','269nJpy9','a6b2b732bb4a1c716d2adfd46cc9ac5f','oBxZ9SvUtKAxrR0uoOBG','582v1Dil@163.com','1502309987','1','0','0','0.00','0','0','1','lfKHc3','4oSqN84QxP47');");
E_D("replace into `df_enewsmember` values('15','7GH5WRAx','5bee66be3e70500dd483b01c760dc272','h52GKUijXLBV4Fy7p3tw','01gm979y@163.com','1502310244','1','0','0','0.00','0','0','1','YjrwAL','sewuLCfXFN1e');");
E_D("replace into `df_enewsmember` values('16','jd83e1hL','f6014f2e03c69c2a73355a77930f7e6b','m6sWOJT8gj4YHjcZQ6Z6','k3XQ5W6w@163.com','1502310368','1','0','0','0.00','0','0','1','x3fgjn','iIwUKWaiFwz6');");
E_D("replace into `df_enewsmember` values('17','t0a2948c','46b76c95e37adaf236a5119aba431fd0','VqIlYRQKDpDZ86j7tWOr','2H272zD9@163.com','1502325725','1','0','0','0.00','0','0','1','vt5ahm','ydH77aGkRgL6');");
E_D("replace into `df_enewsmember` values('18','2fl28FdW','e76eed553c12526ff991445b2f51e3c8','ldMmCxNutM9XmZffinhQ','T5Mq9dsi@163.com','1502334434','1','0','0','0.00','0','0','1','fgyjBj','aLuHcvOkUqo8');");
E_D("replace into `df_enewsmember` values('19','UU336D51','7527707a2215339cda5a1d08a3321fed','5EnfHQP5sRwwfjfL0A6A','Y5rp6N5Z@163.com','1502350728','1','0','0','0.00','0','0','1','WY1l8r','imEsPDdyqA21');");
E_D("replace into `df_enewsmember` values('20','G6Sq2i6l','8482cf3cc6d6f3af250a8132971c32d5','B3aJLsgD4jLRnQZDNVdx','N6XWGQtZ@163.com','1502352994','1','0','0','0.00','0','0','1','0nBG1Y','Zgi2bzzbSPu5');");
E_D("replace into `df_enewsmember` values('21','w4L58XYG','cee67d269a65ecb3cc2c7575d53e2fe9','48DYQiHqt8RrNz4G0D7t','a3njQxys@163.com','1502361543','1','0','0','0.00','0','0','1','S62cdj','m12xO5IHhYIi');");
E_D("replace into `df_enewsmember` values('22','45z8XJ1K','9201fdb17a6ccd6a88fa1256d8a11799','7bk0IoWIhgLVtTs4zPSF','hzcY72Ql@163.com','1502366948','1','0','0','0.00','0','0','1','S9oXZd','wbmQ3BaVZyme');");
E_D("replace into `df_enewsmember` values('23','4clxX8Y5','6004e8db639d853d119ec1adfa085e09','6AIUxMUuNfiqA6qvE2AS','EADM2MnZ@163.com','1502370865','1','0','0','0.00','0','0','1','ieOkTO','l3OHIaNSekFP');");
E_D("replace into `df_enewsmember` values('24','989LElr3','170e75c36d0fca1ff20434feb4177bae','JNMpiGXjeWjjqNbWfRu4','56CdFrD7@163.com','1502458737','1','0','0','0.00','0','0','1','AipJL9','5iXM0zl0fPkM');");
E_D("replace into `df_enewsmember` values('25','OBPx590f','f01811a8d19da38f616da98e85cee00b','y99iMIWYJhsLFV4X2558','61lTfX70@163.com','1502460550','1','0','0','0.00','0','0','1','JdCPe2','2n5bvfOGWNdm');");
E_D("replace into `df_enewsmember` values('26','z3z42z2R','b62c5456764f224ab94706a519dfa609','vTtHYDFUr6BT8kmpnbXf','2GQ00G5S@163.com','1502469482','1','0','0','0.00','0','0','1','PvhqX9','UZ84hRpwYmeu');");
E_D("replace into `df_enewsmember` values('27','9gyuZxSl','1f6508f2ac4e1fcf13c945d1d35e4c8c','lFD4oQlvbHqKcgBT6a58','6QIZSz2H@163.com','1502561731','1','0','0','0.00','0','0','1','EWumb1','MV6x2RZthZRd');");
E_D("replace into `df_enewsmember` values('28','5b21I6Tk','6a1dcfb9e01852e43aabdaafe85c9cd3','ETDfDS7L6eC24o2xUadV','7oD7xd22@163.com','1502562100','1','0','0','0.00','0','0','1','cC4ILR','Zeo26IHiUYwD');");
E_D("replace into `df_enewsmember` values('29','WMm9yeE4','dea696532bfa37ccb7d3bde2c3d4e5e9','SH8ykbpirqKLoirTQptQ','3G27uvuV@163.com','1502596919','1','0','0','0.00','0','0','1','cxwPRx','lJrX3Sbnnfi4');");
E_D("replace into `df_enewsmember` values('30','3cv8j5zC','faaf0dc8b94298c1d9bf401ee7199b90','VcDN4qAklY8nf0I6rsjx','oR4i2uTW@163.com','1502597405','1','0','0','0.00','0','0','1','BN4RG7','oG2HLugo3HHO');");
E_D("replace into `df_enewsmember` values('31','8uJ6XkKx','141216be773ac60784babab0292106f8','CEcayenC0SE9l81rRAVp','1Bn9ly1y@163.com','1502604659','1','0','0','0.00','0','0','1','VIrHFc','gbZUonpwmDBh');");
E_D("replace into `df_enewsmember` values('32','syYy7kHW','2669ff8fd95d7ea8a101470de05bbb2a','V0L14X8z57lVoVZBV5RH','g1oS97B6@163.com','1502644877','1','0','0','0.00','0','0','1','KQu2Mz','Luol5WOZR5ZI');");
E_D("replace into `df_enewsmember` values('33','B9qdbTsF','706ef38d412535bdff71e1babe80ec4e','5fKSHDSiXkaHxfL4dsAn','125s1Ee3@163.com','1502663117','1','0','0','0.00','0','0','1','ZXuZTI','Ew5eNirj6TFR');");
E_D("replace into `df_enewsmember` values('34','7MNm71C1','52dc515b667227828539ee3cc2b70ccf','IbQsiluILW46pGNC34jV','9oAfct0n@163.com','1502679100','1','0','0','0.00','0','0','1','f6E8t5','C66qoEgQxYm8');");
E_D("replace into `df_enewsmember` values('35','SB8H6jm5','a133e631ef0660e071ac6572c55cc558','YxnDE9sy1ETcRzJTTkZF','V4ZNFYCo@163.com','1502684744','1','0','0','0.00','0','0','1','f9PU2l','6bODjjo6RFr9');");
E_D("replace into `df_enewsmember` values('36','I6MOdQrS','41c532dd3f91ddb036ec5039d8f2db64','YGTxRUW6MIGtQytgelM3','50ZEV0RO@163.com','1502689606','1','0','0','0.00','0','0','1','l8tWzl','yEMTH1YPAtHZ');");
E_D("replace into `df_enewsmember` values('37','k0Rhzw7H','3f724faaa00db629bf6187c5e8d17985','oD9nWiJPcPIG9KvnTWRz','8dFfJF8t@163.com','1502689768','1','0','0','0.00','0','0','1','FdYIwt','omCexf05Y22W');");
E_D("replace into `df_enewsmember` values('38','IK1ibqoB','25a0e216e1876c47c11a0ec6a60304fa','r5Ml9s3ujsCdstfeO3mg','7o36JEq3@163.com','1502697603','1','0','0','0.00','0','0','1','1U03oY','ovi1Jo2EZnYX');");
E_D("replace into `df_enewsmember` values('39','hx5ME21N','d8f606eec54d6017778f1e5e347a2454','VLIh2d9EZGqgzVSa80Td','5Y3N4T6e@163.com','1502700833','1','0','0','0.00','0','0','1','LsWAlQ','BMH7RApYuQSt');");
E_D("replace into `df_enewsmember` values('40','13I030HH','92322c196610c40af9a7b462d7fffbe9','FuiT3isgyHhLCIKX44OT','f5y2jsOj@163.com','1502703101','1','0','0','0.00','0','0','1','kar8Li','zUyNB7MYdyLD');");
E_D("replace into `df_enewsmember` values('41','5hY85AzT','5280dfd2330183d06751e363d0b81760','tHdDBB7Q8W4LrCO4pKTl','71uH118Q@163.com','1502705390','1','0','0','0.00','0','0','1','qG8ZY2','54dY7BV85quA');");
E_D("replace into `df_enewsmember` values('42','209lWxoz','c9c5a092c08aacf9986006d5021f4d1d','yyQJLmLmlSjF2HN5e2Yr','lHctO5BV@163.com','1502724519','1','0','0','0.00','0','0','1','UDQ5oF','SbjN6L2nhrn0');");
E_D("replace into `df_enewsmember` values('43','EAFhM6Eo','350ff017e52bfa8351b6f174c349bde6','if6ZwxWaZG0yKcvnR9s8','lBMQc5bO@163.com','1502724600','1','0','0','0.00','0','0','1','fYsqGo','e5wXr167HNzV');");
E_D("replace into `df_enewsmember` values('44','NVc0Nkk4','8e3ef4e7bb5a95efdcc1f5ae0e8a0101','yxybDbUUUjVgJxk6D55I','cw60TV04@163.com','1502728013','1','0','0','0.00','0','0','1','nAuqOv','rOks469xpQ8O');");
E_D("replace into `df_enewsmember` values('45','RXxLZ4V2','92867b92cc3f0e77b7551c399605e065','6iR3DrxsjyADDkkLwjZ0','3FVhG5cG@163.com','1502728823','1','0','0','0.00','0','0','1','0Ofyjv','Uctmwjxz9Axh');");
E_D("replace into `df_enewsmember` values('46','dypgs25H','23750a9f37e84b6701836da9a1a4e466','5gnr5WRUPzuAFjovDFfA','UF49E6Rs@163.com','1502733170','1','0','0','0.00','0','0','1','Y5ljT0','LCzysKzaAAGA');");
E_D("replace into `df_enewsmember` values('47','IwzCeKi1','de9b8cc0416cadfefd19904a0ec518fd','sXyMgUyqqLkuI8ZsjwA3','ahCm892E@163.com','1502735209','1','0','0','0.00','0','0','1','pb5itg','gsraesv6IPrh');");
E_D("replace into `df_enewsmember` values('48','83ZVmZKq','b5297a3ae9284c267679b0d910a721cc','hcbbGjyOSJZZm7IDDuGI','X1YKX680@163.com','1502735271','1','0','0','0.00','0','0','1','hSIA1a','t2yvzKWxhKR7');");
E_D("replace into `df_enewsmember` values('49','43SO6Dv2','4833b1e3866c91e08d598d3cd4acd7f8','KIOrQGJX58RtsN12eJtI','Tpf9Pj4p@163.com','1502743580','1','0','0','0.00','0','0','1','5X86vW','8F7PUbsfDdMp');");
E_D("replace into `df_enewsmember` values('50','BehpnA2R','1c1811f02a3119d6c7070c99a7627aec','fpPlYNQCyLoA9eQFzc4b','iWY5i437@163.com','1502745269','1','0','0','0.00','0','0','1','OMzkvv','apK8No4XbyBO');");
E_D("replace into `df_enewsmember` values('51','Jo6T398h','fea11962e3ba4e790a777154cff106e1','fht4psOih3ycREyA1onM','05ECJRSC@163.com','1502765193','1','0','0','0.00','0','0','1','B6iSkh','tIufYv3KEGzC');");
E_D("replace into `df_enewsmember` values('52','7eztkmwo','3eb66cdc69b4dda29ae1c58699d8ad06','Bcp8LA4s67njcsvHrSrD','Dd2U1R88@163.com','1502771496','1','0','0','0.00','0','0','1','wb7LJF','ycN1XLp6oE9B');");
E_D("replace into `df_enewsmember` values('53','kL2FTzfM','4f48a52c54553bc215c39f1016943d17','atC349bIbI9HhfXrVQiq','60NnwiEI@163.com','1502812332','1','0','0','0.00','0','0','1','EGtffh','BmUssFN6igN3');");
E_D("replace into `df_enewsmember` values('54','d5lPJL5w','6d0a92dd934d060de63ff9f7e8401a31','F3QbJ8e2j30RtPFDdj7J','tGE6Ent2@163.com','1502821686','1','0','0','0.00','0','0','1','9u3rsi','PpxBmJXpEcYg');");
E_D("replace into `df_enewsmember` values('55','bPfKVFTV','87ba0c0d27225edf1feabdaa59d7cef3','Syx57mmLdqscoGmTRAxR','2drsAR3I@163.com','1502832255','1','0','0','0.00','0','0','1','Ygp7rn','nsNLPQ65kGpz');");
E_D("replace into `df_enewsmember` values('56','v5k4VMO1','d7dbb528c6372d41920032a4eab1f5e2','YtDKew0acgcUNSzXXtXj','RfYTHIf5@163.com','1502835742','1','0','0','0.00','0','0','1','Da10Xl','SnBwQNFGQcxc');");
E_D("replace into `df_enewsmember` values('57','ZtkbCIR9','3f14eaf8a11fdc4b6d94961bda191608','q4qH1k7WX5KnWYMaX6ix','4o39p6gy@163.com','1502837267','1','0','0','0.00','0','0','1','YvCNXA','a0BV9j0OZOii');");
E_D("replace into `df_enewsmember` values('58','M15KZpbC','241106719de86ece163cf9541526cfb6','0LVMpvTBGhEGr2QHhCRo','3z0175zl@163.com','1502844941','1','0','0','0.00','0','0','1','ipz1mt','QVPhZ4JSGABV');");
E_D("replace into `df_enewsmember` values('59','tEt0sY2l','0e408477bc2309bb470a862aa14cb127','EojdwjulCH2E1gJifNIL','BCKiCP37@163.com','1502846144','1','0','0','0.00','0','0','1','w95t8s','4w5J3Jf35WqJ');");
E_D("replace into `df_enewsmember` values('60','v8RZTmZk','c5f047e58cea94a8cc9250c3aee2460d','yP5VZKMQZxjBg7QOgQWH','E8YX11LO@163.com','1502847973','1','0','0','0.00','0','0','1','XZSFaU','50aL9y4e0vFA');");
E_D("replace into `df_enewsmember` values('61','JMD0sbgW','7904c1b7ac6770944479a7bbeb8bb116','kDp94mJCNpuAwxujDSv0','cl7ni68z@163.com','1502860035','1','0','0','0.00','0','0','1','myFf9N','NVMY98rggiJT');");
E_D("replace into `df_enewsmember` values('62','D9pLkG3K','6ef90f1e0a0858d2df1a007d84ffbf06','A3CfPYCwISmTYKRTC5cA','PLH1IeQ4@163.com','1502860497','1','0','0','0.00','0','0','1','YHOXoz','D8uYfSKJ7Bzd');");
E_D("replace into `df_enewsmember` values('63','gF8ZSGTJ','417271f2dfcc32c6752806e19679422e','BAneakrqsc0uumSD5HcF','JQQwRu7y@163.com','1502879889','1','0','0','0.00','0','0','1','HKn6Pp','WrTKPNFlNbtb');");
E_D("replace into `df_enewsmember` values('64','vodKK0uY','b806f3e1fb29766643df07c9790f48bf','6uqS0TyKaKnJjolRfD4R','PFu47hhr@163.com','1502888482','1','0','0','0.00','0','0','1','7uXi3G','fmqZrWreyNN1');");
E_D("replace into `df_enewsmember` values('65','PY9eNNaJ','65d98a1b335ad5a89c96b733ba7357f7','cZbALJD81T3TobIbXtE1','1U9k0P1A@163.com','1502888950','1','0','0','0.00','0','0','1','K4g99m','pdeXR3OLvboU');");
E_D("replace into `df_enewsmember` values('66','4iVJ7jhZ','7c3373896a747f4584b4b8cd79ba6cf7','m2hqFbwbitXSI2r7wFuf','6EE73bxM@163.com','1502891080','1','0','0','0.00','0','0','1','iFKPDL','SNM2AUJTdpxb');");
E_D("replace into `df_enewsmember` values('67','9aOkUZ4J','53a5cdbc8c70f2db376c55179036861d','8iLSEzfEO1H8dkoRBk0Z','PnK4q34r@163.com','1502898034','1','0','0','0.00','0','0','1','opS4Pq','JtQQDPRgCHzA');");
E_D("replace into `df_enewsmember` values('68','7Lqgv46C','796fe1de3cb3d91bdf87f672b628d00c','PC6fEgc9fGPe886oxi0Q','fY1yT5qC@163.com','1502903262','1','0','0','0.00','0','0','1','FNPJ59','2gOLKKStYweC');");
E_D("replace into `df_enewsmember` values('69','3LDB9jRB','f6dd1486f1433f1954866b96e12a046b','oEwIgi756cIoDWd2AP1p','7vhVHJcR@163.com','1502915955','1','0','0','0.00','0','0','1','Lh8JRh','i0CpOKxauIFW');");
E_D("replace into `df_enewsmember` values('70','7Mmbm72D','cb2c2e2b55b016d05d59e27b26ee6f13','VzQ68b03zdwGW4Ik0CPN','7lGVCOxn@163.com','1502930598','1','0','0','0.00','0','0','1','k5zDmB','yhlaMB90RjPW');");
E_D("replace into `df_enewsmember` values('71','33es2YFC','1e2cf8cae99586bde95863ce9c1e5eb9','a1h1wpdfMoT9zzMvDO7G','rhP1I95f@163.com','1502932923','1','0','0','0.00','0','0','1','F0yB9N','m0ZKLi208wdX');");
E_D("replace into `df_enewsmember` values('72','IKi3IK4m','f13627035146139379fc69283127170b','rIDUnecqzQkFAl25Vhj6','OU15tix8@163.com','1502933256','1','0','0','0.00','0','0','1','tnH7IX','XoRzDlBd8piL');");
E_D("replace into `df_enewsmember` values('73','Ocmx4738','a14f23431880e58c8aa76dab0f3e81da','AX6LGjOe4zBfiyWWTvOy','KM99b5jh@163.com','1502937811','1','0','0','0.00','0','0','1','hOsBpn','RU3KWOzAvv5p');");
E_D("replace into `df_enewsmember` values('74','kQ54pNUY','de24b6c1cad2fc1a2c50446c6eb3d026','T94DSOjhCD0ND8MjFr5Z','Ax847F5l@163.com','1502950028','1','0','0','0.00','0','0','1','vB0gsv','uPiTT42rULvS');");
E_D("replace into `df_enewsmember` values('75','757JCD39','f9e718d52e7a827a82d803d21e845970','JAK4G6MuXLv4kvviLRqG','04f4kxSv@163.com','1502952445','1','0','0','0.00','0','0','1','k6g0VE','4FhCb8YHuHOg');");
E_D("replace into `df_enewsmember` values('76','49210Jpv','75921fd8fefe340e0fd5c680cb023584','9eTFw7lsAeBbq9jrfNcP','7qNT62N7@163.com','1502952806','1','0','0','0.00','0','0','1','KMvF76','XneIpEXbm6Fs');");
E_D("replace into `df_enewsmember` values('77','6c029Ya5','e3f7d3b81f06eba5a1f1c7381e5729d4','z9kziw0Um9sOjC7KgDrt','F7ay951L@163.com','1502964116','1','0','0','0.00','0','0','1','EFNWAp','0g5MoqLpOmFV');");
E_D("replace into `df_enewsmember` values('78','wKGoyJ2E','cb01f1a1992b924cc3d5ce2eb3e0dde9','E9oMl9Fzl55Y6bXq6K6y','pIHmIFN2@163.com','1503000012','1','0','0','0.00','0','0','1','NiMj5D','MseZqeIDSWOn');");
E_D("replace into `df_enewsmember` values('79','BhOQ0kPv','0e9d754b37acbbeaf33890936f980b60','MDYFa9bLujgrR19g7nHr','G30UphAC@163.com','1503018246','1','0','0','0.00','0','0','1','qbO1Kq','Kha7oUIBxCWQ');");
E_D("replace into `df_enewsmember` values('80','QcKHoFpr','7a3e8c0cd80889a557ef097c0fff8315','FKyqBLsFnTN8hrJ28a6C','qcg09jPR@163.com','1503018348','1','0','0','0.00','0','0','1','C0P4X3','7HCDeWfphUlE');");
E_D("replace into `df_enewsmember` values('81','zxa90ew7','e0c10a115e11fe1de4a36c4819cd33c7','bDIP3KRQwwV9wKVPLEKf','fdddVE88@163.com','1503027854','1','0','0','0.00','0','0','1','sYE7mi','F2B22t4n2Fbf');");
E_D("replace into `df_enewsmember` values('82','Z5uh1HUh','20c3852975060061310cfbad66036c28','YedxO9mtjxpFKhyaLL6z','CD3b3mmA@163.com','1503033007','1','0','0','0.00','0','0','1','DPBwMm','65fQe5QxyfQc');");
E_D("replace into `df_enewsmember` values('83','3wB8C80Y','7ae3687162af85986e8ff939d1ebad49','VBgPZFhgM0G8HS69KtWx','17M8s908@163.com','1503033780','1','0','0','0.00','0','0','1','mKQ5YP','Bz94mSPzg06v');");
E_D("replace into `df_enewsmember` values('84','YAkj7G15','5059f7bab9ea4c6718f24564ec96692b','5OFieo73sVhS36rlvrZU','fD9v3s1E@163.com','1503051333','1','0','0','0.00','0','0','1','hKw6GL','fgkjo37VF6dt');");
E_D("replace into `df_enewsmember` values('85','L5z1yi4J','cf00450d1601db89f7e496edf959f696','oZBSHl28X6tz0OpAK3mY','VkcRdpkA@163.com','1503069361','1','0','0','0.00','0','0','1','kQatsA','uZYFyq11X0DS');");
E_D("replace into `df_enewsmember` values('86','8aQ3ziOM','c4cba975f10dd48e518fd38cfeb484a3','BnLqge0EG0jU9YE8RZQu','UU3Uwf5d@163.com','1503073420','1','0','0','0.00','0','0','1','rzlX4Y','UwiJHEmHa9YI');");

@include("../../inc/footer.php");
?>