<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr><td bgcolor=ffffff>标题</td><td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table></td></tr><tr><td bgcolor=ffffff>副标题</td><td bgcolor=ffffff><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td bgcolor=ffffff>导航企业文化</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("qywhnav",$ecmsfirstpost==1?"":stripSlashes($r[qywhnav]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>导航业务范围</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("ywjsnav",$ecmsfirstpost==1?"":stripSlashes($r[ywjsnav]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>发展历程</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("fzlc",$ecmsfirstpost==1?"":stripSlashes($r[fzlc]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>公司理念</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gsly",$ecmsfirstpost==1?"":stripSlashes($r[gsly]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>组织架构</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("zzjg",$ecmsfirstpost==1?"":stripSlashes($r[zzjg]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>公司简介</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gsjj",$ecmsfirstpost==1?"":stripSlashes($r[gsjj]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>公司资质</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gszz",$ecmsfirstpost==1?"":stripSlashes($r[gszz]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>企业文化</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("qywh",$ecmsfirstpost==1?"":stripSlashes($r[qywh]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>公司简介</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gsjjl",$ecmsfirstpost==1?"":stripSlashes($r[gsjjl]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>导航关于鼎峰</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gydf",$ecmsfirstpost==1?"":stripSlashes($r[gydf]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>业务介绍</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("ywjs",$ecmsfirstpost==1?"":stripSlashes($r[ywjs]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>工作流程图</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("gzlct",$ecmsfirstpost==1?"":stripSlashes($r[gzlct]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>业务领域</td><td bgcolor=ffffff>
<input name="ywly" type="text" id="ywly" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ywly]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>业务领域内容</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("ywlyc",$ecmsfirstpost==1?"":stripSlashes($r[ywlyc]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>行业业绩</td><td bgcolor=ffffff>
<input name="hyyj" type="text" id="hyyj" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[hyyj]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>行业业绩内容</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("hyyjc",$ecmsfirstpost==1?"":stripSlashes($r[hyyjc]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>子公司</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("zgs",$ecmsfirstpost==1?"":stripSlashes($r[zgs]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>总公司</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("zonggs",$ecmsfirstpost==1?"":stripSlashes($r[zonggs]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>分公司</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("fgs",$ecmsfirstpost==1?"":stripSlashes($r[fgs]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>职位</td><td bgcolor=ffffff>
<input name="zw" type="text" id="zw" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[zw]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>部门</td><td bgcolor=ffffff>
<input name="bm" type="text" id="bm" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[bm]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>工作地点</td><td bgcolor=ffffff>
<input name="gzdd" type="text" id="gzdd" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[gzdd]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>人数</td><td bgcolor=ffffff>
<input name="rs" type="text" id="rs" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[rs]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>联系我们</td><td bgcolor=ffffff>
<?=ECMS_ShowEditorVar("lxwm",$ecmsfirstpost==1?"":stripSlashes($r[lxwm]),"Basic","","300","100%")?>
</td></tr><tr><td bgcolor=ffffff>案例类型</td><td bgcolor=ffffff>
<input name="allx" type="text" id="allx" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[allx]))?>" size="">
</td></tr><tr><td bgcolor=ffffff>发布时间</td><td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td bgcolor=ffffff>标题图片</td><td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td bgcolor=ffffff>内容简介</td><td bgcolor=ffffff><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td bgcolor=ffffff>作者</td><td bgcolor=ffffff><?php
$writer_sql=$empire->query("select writer from {$dbtbpre}enewswriter");
while($w_r=$empire->fetch($writer_sql))
{
	$w_class.="<option value='".$w_r[writer]."'>".$w_r[writer]."</option>";
}
?>
<input type=text name=writer value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[writer]))?>" size=""> 
        <select name="w_id" id="select7" onchange="document.add.writer.value=document.add.w_id.value">
          <option>选择作者</option>
		  <?=$w_class?>
        </select>
<input type="button" name="wbutton" value="增加作者" onclick="window.open('NewsSys/writer.php?<?=$ecms_hashur[ehref]?>&addwritername='+document.add.writer.value);">
</td></tr><tr><td bgcolor=ffffff>信息来源</td><td bgcolor=ffffff><?php
$befrom_sql=$empire->query("select sitename from {$dbtbpre}enewsbefrom");
while($b_r=$empire->fetch($befrom_sql))
{
	$b_class.="<option value='".$b_r[sitename]."'>".$b_r[sitename]."</option>";
}
?>
<input type="text" name="befrom" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[befrom]))?>" size=""> 
        <select name="befrom_id" id="befromid" onchange="document.add.befrom.value=document.add.befrom_id.value">
          <option>选择信息来源</option>
          <?=$b_class?>
        </select>
<input type="button" name="wbutton" value="增加来源" onclick="window.open('NewsSys/BeFrom.php?<?=$ecms_hashur[ehref]?>&addsitename='+document.add.befrom.value);">
</td></tr><tr><td bgcolor=ffffff>新闻正文</td><td bgcolor=ffffff><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      远程保存图片(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php<?=$ecms_hashur[whehref]?>" target="_blank">加水印</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      远程保存FLASH(地址前缀： 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1">自动分页
      ,每 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      个字节为一页&nbsp;&nbsp; 取第 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      张上传图为标题图片( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      缩略图: 宽 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
      *高
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
      )</td>
          </tr>
        </table>
</td></tr>