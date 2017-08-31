<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>副标题正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ftitle--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ftitle]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ftitle]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ftitle]" type="text" id="add[z_ftitle]" value="<?=stripSlashes($r[z_ftitle])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>导航企业文化正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--qywhnav--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_qywhnav]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_qywhnav]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_qywhnav]" type="text" id="add[z_qywhnav]" value="<?=stripSlashes($r[z_qywhnav])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>导航业务范围正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ywjsnav--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ywjsnav]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ywjsnav]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ywjsnav]" type="text" id="add[z_ywjsnav]" value="<?=stripSlashes($r[z_ywjsnav])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发展历程正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--fzlc--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_fzlc]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_fzlc]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_fzlc]" type="text" id="add[z_fzlc]" value="<?=stripSlashes($r[z_fzlc])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>公司理念正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gsly--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gsly]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gsly]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gsly]" type="text" id="add[z_gsly]" value="<?=stripSlashes($r[z_gsly])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>组织架构正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--zzjg--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_zzjg]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_zzjg]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_zzjg]" type="text" id="add[z_zzjg]" value="<?=stripSlashes($r[z_zzjg])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>公司简介正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gsjj--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gsjj]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gsjj]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gsjj]" type="text" id="add[z_gsjj]" value="<?=stripSlashes($r[z_gsjj])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>公司资质正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gszz--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gszz]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gszz]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gszz]" type="text" id="add[z_gszz]" value="<?=stripSlashes($r[z_gszz])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>企业文化正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--qywh--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_qywh]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_qywh]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_qywh]" type="text" id="add[z_qywh]" value="<?=stripSlashes($r[z_qywh])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>公司简介正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gsjjl--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gsjjl]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gsjjl]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gsjjl]" type="text" id="add[z_gsjjl]" value="<?=stripSlashes($r[z_gsjjl])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>导航关于鼎峰正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gydf--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gydf]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gydf]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gydf]" type="text" id="add[z_gydf]" value="<?=stripSlashes($r[z_gydf])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>业务介绍正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ywjs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ywjs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ywjs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ywjs]" type="text" id="add[z_ywjs]" value="<?=stripSlashes($r[z_ywjs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>工作流程图正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gzlct--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gzlct]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gzlct]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gzlct]" type="text" id="add[z_gzlct]" value="<?=stripSlashes($r[z_gzlct])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>业务领域正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ywly--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ywly]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ywly]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ywly]" type="text" id="add[z_ywly]" value="<?=stripSlashes($r[z_ywly])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>业务领域内容正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ywlyc--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ywlyc]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ywlyc]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ywlyc]" type="text" id="add[z_ywlyc]" value="<?=stripSlashes($r[z_ywlyc])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>行业业绩正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--hyyj--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_hyyj]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_hyyj]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_hyyj]" type="text" id="add[z_hyyj]" value="<?=stripSlashes($r[z_hyyj])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>行业业绩内容正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--hyyjc--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_hyyjc]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_hyyjc]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_hyyjc]" type="text" id="add[z_hyyjc]" value="<?=stripSlashes($r[z_hyyjc])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>子公司正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--zgs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_zgs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_zgs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_zgs]" type="text" id="add[z_zgs]" value="<?=stripSlashes($r[z_zgs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>总公司正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--zonggs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_zonggs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_zonggs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_zonggs]" type="text" id="add[z_zonggs]" value="<?=stripSlashes($r[z_zonggs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>分公司正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--fgs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_fgs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_fgs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_fgs]" type="text" id="add[z_fgs]" value="<?=stripSlashes($r[z_fgs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>职位正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--zw--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_zw]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_zw]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_zw]" type="text" id="add[z_zw]" value="<?=stripSlashes($r[z_zw])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>部门正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--bm--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_bm]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_bm]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_bm]" type="text" id="add[z_bm]" value="<?=stripSlashes($r[z_bm])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>工作地点正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--gzdd--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_gzdd]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_gzdd]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_gzdd]" type="text" id="add[z_gzdd]" value="<?=stripSlashes($r[z_gzdd])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>人数正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--rs--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_rs]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_rs]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_rs]" type="text" id="add[z_rs]" value="<?=stripSlashes($r[z_rs])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>联系我们正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--lxwm--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_lxwm]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_lxwm]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_lxwm]" type="text" id="add[z_lxwm]" value="<?=stripSlashes($r[z_lxwm])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>案例类型正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--allx--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_allx]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_allx]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_allx]" type="text" id="add[z_allx]" value="<?=stripSlashes($r[z_allx])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>发布时间正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>标题图片正则：</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>附件前缀 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        远程保存 </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (如填写这里，这就是字段的值)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>内容简介正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--smalltext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_smalltext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_smalltext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_smalltext]" type="text" id="add[z_smalltext]" value="<?=stripSlashes($r[z_smalltext])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>作者正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--writer--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_writer]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_writer]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_writer]" type="text" id="add[z_writer]" value="<?=stripSlashes($r[z_writer])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>信息来源正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--befrom--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_befrom]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_befrom]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_befrom]" type="text" id="add[z_befrom]" value="<?=stripSlashes($r[z_befrom])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>新闻正文正则：</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstext]" type="text" id="add[z_newstext]" value="<?=stripSlashes($r[z_newstext])?>">
            (如填写这里，将为字段的值)</td>
        </tr>
      </table></td>
  </tr>
