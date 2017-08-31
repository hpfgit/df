<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `df_enewsfeedbackclass`;");
E_C("CREATE TABLE `df_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `df_enewsfeedbackclass` values('1','默认反馈分类','[!--cp.header--]<table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''><form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''><input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>您的姓名</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''name\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>职务</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''job\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>公司名称</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''company\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系邮箱</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''email\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系电话</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''mycall\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>网站</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''homepage\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>联系地址</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''address\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息标题</td><td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''title\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''></td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>信息内容</td><td bgcolor=\\\\''ffffff\\\\''><textarea name=\\\\''saytext\\\\'' cols=\\\\''60\\\\'' rows=\\\\''12\\\\''></textarea></td></tr><tr><td bgcolor=\\\\''ffffff\\\\''></td><td bgcolor=\\\\''ffffff\\\\''><input type=\\\\''submit\\\\'' name=\\\\''submit\\\\'' value=\\\\''提交\\\\''></td></tr></form></table>[!--cp.footer--]','','您的姓名<!--field--->name<!--record-->职务<!--field--->job<!--record-->公司名称<!--field--->company<!--record-->联系邮箱<!--field--->email<!--record-->联系电话<!--field--->mycall<!--record-->网站<!--field--->homepage<!--record-->联系地址<!--field--->address<!--record-->信息标题<!--field--->title<!--record-->信息内容<!--field--->saytext<!--record-->','',',','0',',','');");

@include("../../inc/footer.php");
?>