<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>河北鼎峰招标咨询有限公司</title>
    <meta name="keywords" content="河北鼎峰招标咨询有限公司" />
    <meta name="description" content="河北鼎峰招标咨询有限公司成立于2003年，注册资金400万，具有独立的企业法人资格。公司具有工程招标代理机构甲级资质、工程造价咨询企业甲级资质、政府采购代理资质、中央投资项目招标代理预备级资质和工程咨询资质。经过多年的发展，河北鼎峰招标咨询有限公司现已成为邯郸市业务规模较大、综合实力较强、社会信誉较好的招标咨询代理服务类机构之一。" />
    <link href="/skin/default/css/base.css" rel="stylesheet" type="text/css" />
    <link href="/skin/default/css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="homepage">
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
    .header{
        padding-bottom:36px;
    }
</style>
<div class="islogin">
    <script>
        document.write('<script src="/e/member/login/loginjs.php?t=' + Math.random() + '"><' + '/script>');

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
        <form method="post" action="/e/search/index.php" name="searchform" class="form1">
            <input type="hidden" name="show" value="title" />
            <input type="hidden" name="tempid" value="1" />
            <input type="hidden" name="tbname" value="news" />
            <input type="text" name="keyboard" placeholder="请输入您想搜索的" class="text">
            <input type="submit" value="搜索" class="btn">
        </form>
    </div>
    <div class="nav center">
        <ul class="nav-list clearfix">
            <li><a href="/">首页</a></li>
            <? @sys_ShowClassByTemp('0',1,0,7);?>
        </ul>
        <div class="about-df clearfix">
            <div class="ba">
                <img src="/skin/default/images/df.jpg">
            </div>
            <div class="ab">
                <div class="bc clearfix">
                    <div class="zhaobiao">
                        <div class="contact-hover-t"><span><a href="/gongsijianjie/">公司简介</a></span>
                        </div>
                    </div>
                    <div class="zhaobiao">
                        <div class="contact-hover-t"><span><a href="/fazhanlicheng/">发展历程</a></span>
                        </div>
                    </div>
                    <div class="zhaobiao">
                        <div class="contact-hover-t"><span><a href="/gongsilinian/">公司理念</a></span>
                        </div>
                    </div>
                    <div class="zhaobiao">
                        <div class="contact-hover-t"><span><a href="/zuzhijiagou/">组织架构</a></span>
                        </div>
                    </div>
                    <div class="zhaobiao">
                        <div class="contact-hover-t"><span><a href="/gongsizizhi/">公司资质</a></span>
                        </div>
                    </div>
                </div>
                <div class="cd">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['gydf']?>
                    <?php
}
}
?>
                </div>
            </div>
        </div>
        <div class="qiye clearfix">
            <div class="qiyewh" style="float:left;">
                <div class="contact-hover-t"><span style="width: 100px;height: 36px;line-height: 36px;border-top-left-radius: 5px;border-top-right-radius: 5px;margin-top: 50px;margin-left: 100px;"><a href="/qiyewenhua/">企业文化</a></span>
                </div>
                <div class="qiyewenhua" style="margin-top: 100px;">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(26,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <div class="qiye-content">
                        <?=$bqr['qywhnav']?>
                    </div>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="qiyewenhua-list" style="float: right;width: 850px;">
                <ul>
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(26,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>
                        <a href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
                        <p><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
                    </li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
        <div class="rencai1">
            <div class="rencai2">
                <div class="rencai1-title">人才招聘</div>
                <table>
                    <tbody>
                    <tr>
                        <td>职位</td>
                        <td>部门</td>
                        <td>工作地点</td>
                        <td>招聘人数</td>
                    </tr>
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(33,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <tr>
                        <td>
                            <?=$bqr['zw']?>
                        </td>
                        <td>
                            <?=$bqr['bm']?>
                        </td>
                        <td>
                            <?=$bqr['gzdd']?>
                        </td>
                        <td>
                            <?=$bqr['rs']?>
                        </td>
                    </tr>
                    <?php
}
}
?>
                    </tbody>
                </table>
                <a href="/rencaizhaopin/" class="more right">查看更多 >></a>
            </div>
        </div>
        <div class="ywfw1 clearfix">
            <div class="zhaobiao">
                <div class="contact-hover-t"><span>招标代理</span></span>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['ywjsnav']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="zhaobiao">
                <div class="contact-hover-t"><span>工程咨询</span></span>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(22,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['ywjsnav']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="zhaobiao">
                <div class="contact-hover-t"><span>造价咨询</span></span>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(37,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['ywjsnav']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="zhaobiao">
                <div class="contact-hover-t"><span>PPP项目咨询</span></span>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(24,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['ywjsnav']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="zhaobiao">
                <div class="contact-hover-t"><span>政府采购</span></span>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(25,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['ywjsnav']?>
                    <?php
}
}
?>
                </div>
            </div>
        </div>
        <div class="news-hover">
            <ul class="news-hover-nav clearfix">
                <li><a href="/xinwendongtai/gongsixinwen/">公司新闻</a></li>
                <li><a href="/xinwendongtai/xingyedongtai">行业动态</a></li>
            </ul>
            <div class="news-hover-banner-container">
                <div class="news-hover-banner-b" style="display: block;">
                    <div class="news-hover-banner">
                        <div class="news-hover-banner-box">
                            <ul class="news-hover-banner-ul">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" /></a></li>
                                <?php
}
}
?>
                            </ul>
                        </div>
                        <!--<div class="news-hover-banner-prev"> < </div>
                    <div class="news-hover-banner-next"> > </div>-->
                    </div>
                    <div class="news-hover-ul">
                        <div class="news-hover-ul-title">新闻</div>
                        <ul class="news-hover-ul-list clearfix">
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>*
                                <a href="<?=$bqsr['titleurl']?>" target="_blank">
                                    <?=$bqr['title']?>
                                </a><span class="date"><?=date('y-m-d',$bqr['newstime'])?></span></li>
                            <?php
}
}
?>
                        </ul>
                        <a href="/xinwendongtai/gongsixinwen/" class="more">更多 > </a>
                    </div>
                </div>
                <div class="news-hover-banner-b">
                    <div class="news-hover-banner">
                        <div class="news-hover-banner-box">
                            <ul class="news-hover-banner-ul">
                                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(8,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                                <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" /></a></li>
                                <?php
}
}
?>
                            </ul>
                        </div>
                        <!--<div class="news-hover-banner-prev"> < </div>
                    <div class="news-hover-banner-next"> > </div>-->
                    </div>
                    <div class="news-hover-ul">
                        <div class="news-hover-ul-title">行业动态</div>
                        <ul class="news-hover-ul-list clearfix">
                            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(8,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                            <li>*
                                <a href="<?=$bqsr['titleurl']?>" target="_blank">
                                    <?=$bqr['title']?>
                                </a><span class="date"><?=date('y-m-d',$bqr['newstime'])?></span></li>
                            <?php
}
}
?>
                        </ul>
                        <a href="/xinwendongtai/xingyedongtai/" class="more">更多 > </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-hover clearfix">
            <div class="contact-hover-l">
                <div class="contact-hover-t"><span>总公司</span><span class="contact-hover-more"><a href="/zonggongsi/">MORE</a></span>
                    <div class="contact-hover-line"></div>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(17,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['zonggs']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="contact-hover-c">
                <div class="contact-hover-t"><span>子公司</span><span class="contact-hover-more"><a href="/zigongsi/">MORE</a></span>
                    <div class="contact-hover-line"></div>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(18,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['zgs']?>
                    <?php
}
}
?>
                </div>
            </div>
            <div class="contact-hover-r">
                <div class="contact-hover-t"><span>分公司</span><span class="contact-hover-more"><a href="/fengongsi/">MORE</a></span>
                    <div class="contact-hover-line"></div>
                </div>
                <div class="contact-hover-content">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(19,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <?=$bqr['fgs']?>
                    <?php
}
}
?>
                </div>
            </div>
        </div>
    </div>
    <div class="login clearfix">
        <div class="login-left">
            <ul class="banner-list banner-lists">
                <li><a href=""><img src="/skin/default/images/banner2.jpg" alt=""></a></li>
                <li><a href=""><img src="/skin/default/images/banner3.jpg" alt=""></a></li>
                <li><a href=""><img src="/skin/default/images/banner1.jpg" alt=""></a></li>
            </ul>
            <ul class="banner-list-btn">
                <li class="on"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="news center clearfix">
        <div class="news-left">
            <ul class="news-left-nav clearfix">
                <li><a href="/xinwendongtai/gongsixinwen/">公司新闻</a></li>
                <li><a href="/xinwendongtai/xingyedongtai/">行业动态</a></li>
                <a href="/xinwendongtai/gongsixinwen/" class="more">More +</a>
            </ul>
            <div class="ul-list">
                <ul class="news-left-list clearfix" style="display: block;">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,7,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>* <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a><span class="date"><?=date("y-m-d",$bqr['newstime'])?></span></li>
                    <?php
}
}
?>
                </ul>
                <ul class="news-left-list clearfix">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(8,7,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>* <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a><span class="date"><?=date("y-m-d",$bqr['newstime'])?></span></li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
        <div class="news-right">
            <ul class="news-left-nav clearfix">
                <li><a href="/zhaobiaogonggao/">招标公告</a></li>
                <li><a href="/zhongbiaogonggao/">中标公告</a></li>
                <a href="/xinwendongtai/zhaobiaogonggao/" class="more">More +</a>
            </ul>
            <div class="ul-list">
                <ul class="news-left-list clearfix" style="display: block;">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(9,7,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>* <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a><span class="date"><?=date("y-m-d",$bqr['newstime'])?></span></li>
                    <?php
}
}
?>
                </ul>
                <ul class="news-left-list clearfix">
                    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(10,7,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                    <li>* <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a><span class="date"><?=date("y-m-d",$bqr['newstime'])?></span></li>
                    <?php
}
}
?>
                </ul>
            </div>
        </div>
    </div>
    <div class="business center">
        <ul class="news-left-nav clearfix">
            <li>业务范围</li>
            <a href="/yewufanwei/" class="more">More +</a>
        </ul>
        <ul class="business-list clearfix">
            <? @sys_ShowClassByTemp(2,12,0,0);?>
        </ul>
    </div>
    <div class="case center">
        <ul class="news-left-nav clearfix">
            <li>经典案例</li>
            <a href="/jingdiananli/" class="more">More +</a>
        </ul>
        <ul class="case-list clearfix">
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(11,10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" /></a><p><?=$bqr['title']?></p></li>
            <?php
}
}
?>
        </ul>
        <div class="case-prev"> < </div>
        <div class="case-next"> > </div>
    </div>
    <ul class="ind">
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
            <img src="/skin/default/images/zxkfqq.png" alt="">
        </div>
        <div class="clearfix"></div>
        <p style="text-align: center;margin: 10px auto;">7x24技术支持服务</p>
    </div>
</div>
                <dl class="fn_cle">
                    <dt><img src="/skin/default/images/zxkfqq.png" height="31" width="31" style="margin-left: 40px;"></dt>
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
<script src="/skin/default/js/jquery-3.2.1.min.js"></script>
<script src="/skin/default/js/jquery.slides.min.js"></script>
<script src="/skin/default/js/tab.js"></script>
<script src="/skin/default/js/banner.js"></script>
<script src="/skin/default/js/header.js"></script>
<script src="/skin/default/js/jquery.js"></script>
</body>
</html>