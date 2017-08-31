<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.jpg';

//加减号图片地址
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//上下横线背景色
$bgcolor_line='#4FB4DE';

//其它色调可修改CSS部分

//--------------- 界面参数 ---------------


//识别并显示当前菜单
function EcmsShowThisMemberMenu(){
	global $memberskinurl,$noaddimgurl;
	$selffile=eReturnSelfPage(0);
	if(stristr($selffile,'/member/msg'))
	{
		$menuname='menumsg';
	}
	elseif(stristr($selffile,'e/DoInfo'))
	{
		$menuname='menuinfo';
	}
	elseif(stristr($selffile,'/member/mspace'))
	{
		$menuname='menuspace';
	}
	elseif(stristr($selffile,'e/ShopSys'))
	{
		$menuname='menushop';
	}
	elseif(stristr($selffile,'e/payapi')||stristr($selffile,'/member/buygroup')||stristr($selffile,'/member/card')||stristr($selffile,'/member/buybak')||stristr($selffile,'/member/downbak'))
	{
		$menuname='menupay';
	}
	else
	{
		$menuname='menumember';
	}
	echo'<script>turnit(do'.$menuname.',"'.$menuname.'img");</script>';
	?>
	<script>
	do<?=$menuname?>.style.display="";
	document.images.<?=$menuname?>img.src="<?=$noaddimgurl?>";
	</script>
	<?php
}

//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" href="/skin/default/css/base.css" />
<link rel="stylesheet" href="/skin/default/css/index.css" />
<title><?=$thispagetitle?></title>
<style>
table					{ font: 9pt Tahoma, Verdana; color: #000000 }
input,select,textarea	{ font: 9pt Tahoma, Verdana; font-weight: normal; }
select					{ font: 9pt Tahoma, Verdana; font-weight: normal; }
.category				{ font: 9pt Tahoma, Verdana; color: #000000; background-color: #fcfcfc }
.singleborder			{ font-size: 0px; line-height: 1px; padding: 0px; background-color: #F8F8F8 }
.bold					{ font-weight: bold }

/*修改主要色调*/
.tableborder			{ background: #C9F1FF; border: 1px solid #4FB4DE } 

/*分页样式*/
.nav-list li {
        margin-left: 27px;
}
.epages{margin:3px 0;font:11px/12px Tahoma}
.epages *{vertical-align:middle;}
.epages a{padding:1px 4px 1px;border:1px solid #A6CBE7;margin:0 1px 0 0;text-align:center;text-decoration:none;font:normal 12px/14px verdana;}
.epages a:hover{border:#659B28 1px solid;background:#f3f8ef;text-decoration:none;color:#004c7d}
.epages input{margin-bottom:0px;border:1px solid #659B28;height:15px;font:bold 12px/15px Verdana;padding-bottom:1px;padding-left:1px;margin-right:1px;color:#659B28;}

</style>

<SCRIPT lanuage="JScript">
function DisplayImg(ss,imgname,phome)
{
	if(imgname=="menumemberimg")
	{
		img=todisplay(domenumember,phome);
		document.images.menumemberimg.src=img;
	}
	else if(imgname=="menumsgimg")
	{
		img=todisplay(domenumsg,phome);
		document.images.menumsgimg.src=img;
	}
	else if(imgname=="menuinfoimg")
	{
		img=todisplay(domenuinfo,phome);
		document.images.menuinfoimg.src=img;
	}
	else if(imgname=="menuspaceimg")
	{
		img=todisplay(domenuspace,phome);
		document.images.menuspaceimg.src=img;
	}
	else if(imgname=="menupayimg")
	{
		img=todisplay(domenupay,phome);
		document.images.menupayimg.src=img;
	}
	else if(imgname=="menushopimg")
	{
		img=todisplay(domenushop,phome);
		document.images.menushopimg.src=img;
	}
	else
	{
	}
	DisplayAllMenu(imgname);
}
function todisplay(ss,phome)
{
	if(ss.style.display=="") 
	{
  		ss.style.display="none";
		theimg="<?=$addimgurl?>";
	}
	else
	{
  		ss.style.display="";
		theimg="<?=$noaddimgurl?>";
	}
	return theimg;
}
function turnit(ss,img)
{
	DisplayImg(ss,img,0);
}
function DisplayAllMenu(imgname)
{
	if(imgname!='menumemberimg'&&domenumember.style.display=="")
	{
		domenumember.style.display="none";
		document.images.menumemberimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menumsgimg'&&domenumsg.style.display=="")
	{
		domenumsg.style.display="none";
		document.images.menumsgimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menuinfoimg'&&domenuinfo.style.display=="")
	{
		domenuinfo.style.display="none";
		document.images.menuinfoimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menuspaceimg'&&domenuspace.style.display=="")
	{
		domenuspace.style.display="none";
		document.images.menuspaceimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menupayimg'&&domenupay.style.display=="")
	{
		domenupay.style.display="none";
		document.images.menupayimg.src="<?=$addimgurl?>";
	}
	if(imgname!='menushopimg'&&domenushop.style.display=="")
	{
		domenushop.style.display="none";
		document.images.menushopimg.src="<?=$addimgurl?>";
	}
}
</SCRIPT>
</head>

<body leftmargin="0" topmargin="0">
<div class="header">
    <div class="logo center">
<div class="topl">
        <a href="/" class="logo-p">河北鼎峰招标咨询有限公司</a>
        <p>Hebei dingfeng tendering consulting co. LTD</p>
</div>
<form method="post" action="/e/search/index.php" name="searchform" class="form1">
            <input name="show" value="title" type="hidden">
            <input name="tempid" value="1" type="hidden">
            <input name="tbname" value="news" type="hidden">
            <input name="keyboard" placeholder="请输入您想搜索的" class="text" type="text">
            <input value="搜索" class="btn" type="submit">
        </form>
    </div>
<div class="nav center">
        <ul class="nav-list clearfix">
            <li><a href="/">首页</a></li>
            <li><a href="/guanyudingfeng/">关于鼎峰</a></li><li><a href="/qiyewenhua/">企业文化</a></li><li><a href="/yewufanwei/">业务范围</a></li><li><a href="/xinwendongtai/">新闻动态</a></li><li><a href="/rencaizhaopin/">人才招聘</a></li><li><a href="/zaixianliuyan/">在线留言</a></li><li><a href="/lianxiwomen/">联系我们</a></li>        </ul>
    </div>
<div class="banner">
    <ul class="banner-list clearfix">
        <li><a href=""><img src="/skin/default/images/about.jpg" alt=""></a></li>
        <!--<li><a href=""><img src="images/banner1.jpg" alt=""></a></li>-->
        <!--<li><a href=""><img src="images/banner2.jpg" alt=""></a></li>-->
    </ul>
</div>
<div class="container">
    <div class="about center clearfix">
        <div class="about-left">
            <div class="about-left-top">
                <div class="about-left-t clearfix">
                    <p>A</p>
                    <div class="guan clearfix"><p>关于鼎峰</p><p>bout Ding Feng</p></div>
                </div>
                <ul class="about-left-list">
                    <li><a href="/gongsijianjie/">公司简介</a></li>
                    <li><a href="/fazhanlicheng/">发展历程</a></li>
                    <li><a href="/gongsilinian/">公司理念</a></li>
                    <li><a href="/zuzhijiagou/">组织架构</a></li>
                </ul>
            </div>
            <div class="about-left-bottom">
                <div class="about-left-t clearfix">
                    <p>C</p>
                    <div class="guan clearfix"><p>联系我们</p><p>ontact us</p></div>
                </div>
                <div class="address">
                    <p>河北鼎峰招标咨询有限公司</p>
                    <p>电话：0310-3150500</p>
                    <p>&nbsp;&nbsp;&nbsp;7021299</p>
                    <p>&nbsp;&nbsp;&nbsp;7021296</p>
                    <p>邮箱：hbdfgs@163.com</p>
                    <p>地址：邯郸市中华北大街369号华祥大厦804室</p>
                </div>
            </div>
        </div>
        <div class="about-right">
            <div class="about-right-t">
                会员注册
                <div class="navIndex">首页 > 会员注册</div>
            </div>
            <div class="about-right-b">
                <!--<table width="880" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td>当前位置：//$url</td>
                  </tr>
                </table>-->
                <table width="880" border="0" align="center" cellpadding="12" cellspacing="1" bgcolor="#C9F1FF">
                  <tr>
                    <td width="80%" height="420" valign="top" bgcolor="#FFFFFF">
