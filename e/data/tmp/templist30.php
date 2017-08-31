<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>[!--pagetitle--]-河北鼎峰招标咨询有限公司</title>
    <meta name="keywords" content="[!--pagekey--]" />
    <meta name="description" content="[!--pagedes--]" />
    <link href="[!--news.url--]skin/default/css/base.css" rel="stylesheet" type="text/css" />
    <link href="[!--news.url--]skin/default/css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>

<body class="listpage">
    <style>
    .nav-list li {
        margin-left: 27px;
    }
    .links-list li {
        height: 50px;
    }
    .links-list img {
        width: 230px;
        height: 50px;
    }
</style>
<div class="islogin">
    <script>
        document.write('<script src="[!--news.url--]e/member/login/loginjs.php?t=' + Math.random() + '"><' + '/script>');

    </script>
</div>
<div class="header">
<div class="header-top-login center">
    <p class="right"><span>您好！请</span><a href="/denglu/">登录</a><a href="http://www.hbdfzx.com/e/member/register/index.php?tobind=0&groupid=1&button=%E4%B8%8B%E4%B8%80%E6%AD%A5">注册</a></p>
    <div class="clearfix"></div>
</div>
    <div class="logo center">
        <div class="topl">
            <a href="/" class="logo-p">河北鼎峰招标咨询有限公司</a>
            <p>HEBEI DINGFENG TENDERING CONSULTING CO. LTD</p>
        </div>
        <form method="post" action="[!--news.url--]e/search/index.php" name="searchform" class="form1">
            <input type="hidden" name="show" value="title" />
            <input type="hidden" name="tempid" value="1" />
            <input type="hidden" name="tbname" value="news" />
            <input type="text" name="keyboard" placeholder="请输入您想搜索的" class="text">
            <input type="submit" value="搜索" class="btn">
        </form>
    </div>
    <div class="nav center">
        <ul class="nav-list clearfix">
            <li><a href="[!--news.url--]">首页</a></li>
            <? @sys_ShowClassByTemp('0',1,0,7);?>
        </ul>
    </div>

    <div class="banner">
        <ul class="banner-list clearfix">
            <li>
                <a href=""><img src="[!--news.url--]skin/default/images/about.jpg" alt=""></a>
            </li>
            <!--<li><a href=""><img src="[!--news.url--]skin/default/images/banner1.jpg" alt=""></a></li>-->
            <!--<li><a href=""><img src="[!--news.url--]skin/default/images/banner2.jpg" alt=""></a></li>-->
        </ul>
    </div>
    <div class="container">
        <div class="about center clearfix">
            <div class="about-left">
                <div class="about-left-top">
                    <div class="about-left-t clearfix">
                        <p>S</p>
                        <div class="guan clearfix">
                            <p>业务范围</p>
                            <p>cope of business</p>
                        </div>
                    </div>
                    <ul class="about-left-list ywfw-nav">
                        <li>招标代理</li>
                        <li>工程咨询</li>
                        <li>造价咨询</li>
                        <li>PPP项目咨询</li>
                        <li>政府采购</li>
                    </ul>
                </div>
                <div class="about-left-bottom">
                    <div class="about-left-t clearfix">
                        <p>C</p>
                        <div class="guan clearfix">
                            <p>联系我们</p>
                            <p>ontact us</p>
                        </div>
                    </div>
                    <div class="address">
                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(34,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?=$bqr['lxwm']?>
<?php
}
}
?>
                    </div>
                </div>
            </div>
            <div class="about-right">
                <ul class="ywfw">
                    <li>
                        <div class="about-right-t">
                            <span class="yw-title">招标代理</span>
                            <div class="navIndex"><div class="navIndex"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/yewufanwei/">业务范围</a>&nbsp;&gt;&nbsp;<a>招标代理</a></div></div>
                        </div>
                        <div class="about-right-b">
                            <div class="yw">
                                <ul class="yw-nav clearfix">
                                    <li>业务介绍</li>
                                    <li>工作流程图</li>
                                    <li>典型业绩</li>
                                </ul>
                                <ul class="yw-content">
                                    <li>
                                        <div class="about-right-b">
                                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                            <?=$bqr['ywjs']?>
                                            <?php
}
}
?>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                        <?=$bqr['gzlct']?>
                                        <?php
}
}
?>
                                    </li>
                                    <li>
                                        <div class="dianxing">
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">主要业务领域：</p>
                                            <ul class="ywly">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywly']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">行业业绩：</p>
                                            <ul class="hyyj left">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyj']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul class="ywly-content">
                                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywlyc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <ul class="hyyj-content">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyjc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about-right-t">
                            <span class="yw-title">工程咨询</span>
                            <div class="navIndex"><div class="navIndex"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/yewufanwei/">业务范围</a>&nbsp;&gt;&nbsp;<a>工程咨询</a></div></div>
                        </div>
                        <div class="about-right-b">
                            <div class="yw">
                                <ul class="yw-nav clearfix">
                                    <li>业务介绍</li>
                                    <li>工作流程图</li>
                                    <li>典型业绩</li>
                                </ul>
                                <ul class="yw-content">
                                    <li>
                                        <div class="about-right-b">
                                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                            <?=$bqr['ywjs']?>
                                            <?php
}
}
?>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                        <?=$bqr['gzlct']?>
                                        <?php
}
}
?>
                                    </li>
                                    <li>
                                        <div class="dianxing">
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">主要业务领域：</p>
                                            <ul class="ywly">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywly']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">行业业绩：</p>
                                            <ul class="hyyj left">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyj']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul class="ywly-content">
                                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywlyc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <ul class="hyyj-content">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyjc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </li>
                    <li>
                        <div class="about-right-t">
                            <span class="yw-title">造价咨询</span>
                            <div class="navIndex"><div class="navIndex"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/yewufanwei/">业务范围</a>&nbsp;&gt;&nbsp;<a>造价咨询</a></div></div>
                        </div>
                        <div class="about-right-b">
                            <div class="yw">
                                <ul class="yw-nav clearfix">
                                    <li>业务介绍</li>
                                    <li>工作流程图</li>
                                    <li>典型业绩</li>
                                </ul>
                                <ul class="yw-content">
                                    <li>
                                        <div class="about-right-b">
                                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                            <?=$bqr['ywjs']?>
                                            <?php
}
}
?>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                        <?=$bqr['gzlct']?>
                                        <?php
}
}
?>
                                    </li>
                                    <li>
                                        <div class="dianxing">
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">主要业务领域：</p>
                                            <ul class="ywly">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywly']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">行业业绩：</p>
                                            <ul class="hyyj left">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyj']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul class="ywly-content">
                                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywlyc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <ul class="hyyj-content">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyjc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about-right-t">
                            <span class="yw-title">PPP项目咨询</span>
                            <div class="navIndex"><div class="navIndex"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/yewufanwei/">业务范围</a>&nbsp;&gt;&nbsp;<a>PPP项目咨询</a></div></div>
                        </div>
                        <div class="about-right-b">
                            <div class="yw">
                                <ul class="yw-nav clearfix">
                                    <li>业务介绍</li>
                                    <li>工作流程图</li>
                                    <li>典型业绩</li>
                                </ul>
                                <ul class="yw-content">
                                    <li>
                                        <div class="about-right-b">
                                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                            <?=$bqr['ywjs']?>
                                            <?php
}
}
?>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                        <?=$bqr['gzlct']?>
                                        <?php
}
}
?>
                                    </li>
                                    <li>
                                        <div class="dianxing">
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">主要业务领域：</p>
                                            <ul class="ywly">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywly']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">行业业绩：</p>
                                            <ul class="hyyj left">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyj']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul class="ywly-content">
                                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywlyc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <ul class="hyyj-content">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyjc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about-right-t">
                            <span class="yw-title">政府采购</span>
                            <div class="navIndex"><div class="navIndex"><a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="/yewufanwei/">业务范围</a>&nbsp;&gt;&nbsp;<a>政府采购</a></div></div>
                        </div>
                        <div class="about-right-b">
                            <div class="yw">
                                <ul class="yw-nav clearfix">
                                    <li>业务介绍</li>
                                    <li>工作流程图</li>
                                    <li>典型业绩</li>
                                </ul>
                                <ul class="yw-content">
                                    <li>
                                        <div class="about-right-b">
                                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                            <?=$bqr['ywjs']?>
                                            <?php
}
}
?>
                                        </div>
                                    </li>
                                    <li>
                                        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                        <?=$bqr['gzlct']?>
                                        <?php
}
}
?>
                                    </li>
                                    <li>
                                        <div class="dianxing">
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">主要业务领域：</p>
                                            <ul class="ywly">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywly']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <p style="float: left; width: 150px; margin: 10px 0 0 0 !important;">行业业绩：</p>
                                            <ul class="hyyj left">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyj']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul class="ywly-content">
                                               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['ywlyc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                            <ul class="hyyj-content">
                                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                                <li><?=$bqr['hyyjc']?></li>
                                                <?php
}
}
?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="ind">
            <li></li>
            <li></li>
        </ul>
            <div class="links center">
        <div class="links-p">友情链接</div>
        <div class="links-line">
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="link-class clearfix">
            <li>行业主管</li>
            <li>行业相关</li>
            <li>其他</li>
        </ul>
        <ul class="links-list clearfix">
            <div>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=1 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqr[lurl]?>" target="_blank"><img src="<?=$bqr[lpic]?>" /></a></li>
                <?php
}
}
?>
            </div>
            <div>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=2 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqr[lurl]?>" target="_blank"><img src="<?=$bqr[lpic]?>" /></a></li>
                <?php
}
}
?>
            </div>
            <div>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=3 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li><a href="<?=$bqr[lurl]?>" target="_blank"><img src="<?=$bqr[lpic]?>" /></a></li>
                <?php
}
}
?>
            </div>
        </ul>
    </div>
</div>
</div>
<div class="footer">
    <div class="footer-p">
        <p>电 话：0310-3150500    7021299    7021296</p>
        <p>邮箱：hbdfgs@163.com</p>
        <p>地址：邯郸市中华北大街369号华祥大厦8层 技术支持：邯郸渊博网络</p>
        <p>版权所有 Copyright （R）河北鼎峰招标咨询有限公司</p>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1263573679'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1263573679%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>
<!-- 客服部分 -->
    <div class="contactusdiyou">
        <div class="conter">
            <div class="qqcall">
<div style="width: 200px;margin: 0 auto;">
    <p style="font-size: 18px;text-align: center;color: #fff;margin: 20px auto;>">客户服务中心<span class="colse" style="background-repeat: no-repeat;width: 56px;height: 50px;display:inline-block;"></span></p>
    <div class="kfdh" style="font-size: 16px;color: #fff;">
        <div style="float: left;">
            <p>客服电话：</p>
            <p style="color: #0066cc;">0310-6039797</p>
            <p style="color: #0066cc;">0310-6039797</p>            
        </div>
        <div style="float: right;">
            <img src="[!--news.url--]skin/default/images/zxkfqq.png" alt="">
        </div>
        <div class="clearfix"></div>
        <p style="text-align: center;margin: 10px auto;">7x24技术支持服务</p>
    </div>
</div>
                <dl class="fn_cle">
                    <dt><img src="[!--news.url--]skin/default/images/zxkfqq.png" height="31" width="31" style="margin-left: 40px;"></dt>
                    <dd class="f1 f_s14">在线客服：</dd>
                    <dd class="f2 kefuQQ">
<div class="colse" style="background-repeat: no-repeat;width: 56px;height: 200px;position: absolute;"><span class="kfkf">在线客服</span></div>
<div>
                        <span>客服一</span>

                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1111111111&amp;site=qq&amp;menu=yes"></a>
</div>
                        <div><span>客服二</span>
                        <a target="_blank" href="http://sc.chinaz.com/jiaoben/"></a></div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
<script src="[!--news.url--]skin/default/js/jquery-3.2.1.min.js"></script>
<script src="[!--news.url--]skin/default/js/jquery.slides.min.js"></script>
<script src="[!--news.url--]skin/default/js/tab.js"></script>
<script src="[!--news.url--]skin/default/js/banner.js"></script>
<script src="[!--news.url--]skin/default/js/header.js"></script>
<script src="[!--news.url--]skin/default/js/jquery.js"></script>
        <ul class="indexx">
            <li></li>
            <li></li>
            <li></li>
        </ul>
</body>

</html>