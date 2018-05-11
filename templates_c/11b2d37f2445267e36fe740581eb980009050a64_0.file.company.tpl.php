<?php
/* Smarty version 3.1.30, created on 2018-05-10 08:24:31
  from "D:\phpStudy\WWW\prj\templates\company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af401bf0405c2_62221077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b2d37f2445267e36fe740581eb980009050a64' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\prj\\templates\\company.tpl',
      1 => 1522741931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af401bf0405c2_62221077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>修车系统</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />   
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/spinner/ui.spinner.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/charts/excanvas.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uniform.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/wizard/jquery.form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/uploader/plupload.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/uploader/plupload.html5.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/uploader/plupload.html4.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/tables/datatable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/tables/tablesort.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/tables/resizable.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.progress.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/calendar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/elfinder.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" src="js/custom.js"><?php echo '</script'; ?>
>
</head>

<body class="wrapper">     
    <form class="form widget" method="POST" >
        <div class="title"><h6>企业信息</h6></div> 
    <div class="widget">
        <div class="formRow"> 
            <label>企业代码:</label>  
            <div class="formRight"> 
            
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['companyid']->value;?>
" name="staff_type" disabled="true" style="background:#CCCCCC"/> 
                                      
            </div>
            <div class="clear"></div>       
        </div> 
        <div class="formRow">
            <label>企业名称:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" <?php if ($_smarty_tpl->tpl_vars['getCompany']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['getCompany']->value[0];?>
"<?php }?> disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所在地区:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" <?php if ($_smarty_tpl->tpl_vars['getCompany']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['getCompany']->value[1];?>
"<?php }?> disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所属分局:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" <?php if ($_smarty_tpl->tpl_vars['getCompany']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['getCompany']->value[2];?>
"<?php }?> disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>所属派出所:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" <?php if ($_smarty_tpl->tpl_vars['getCompany']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['getCompany']->value[3];?>
"<?php }?> disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
           	    <input type="text" name="commpyName" <?php if ($_smarty_tpl->tpl_vars['getCompany']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['getCompany']->value[4];?>
"<?php }?> disabled="true" style="background:#CCCCCC"/>
            </div>
            <div class="clear"></div>
        </div>
    </div>
      <div class="widget">
        <div class="formRow"> 
            <label>企业地址:</label>  
            <div class="formRight"> 
                <input type="text" name="commpyaddress" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[1];?>
"<?php }?> disabled="true"/>                                          
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>企业负责人:</label>
            <div class="formRight">
           	    <input type="text" name="charge" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[2];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow"> 
            <label>企业负责人电话:</label>  
            <div class="formRight"> 
                <input type="text" name="charge_phone" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[3];?>
"<?php }?> disabled="true"/>                                            
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>公司法人:</label>
            <div class="formRight">
           	    <input type="text" name="corporation" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[4];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>       
        <div class="formRow"> 
            <label>法人电话:</label>  
            <div class="formRight"> 
                <input type="text" name="corporation_phone" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[5];?>
"<?php }?> disabled="true"/>                                               
            </div>
            <div class="clear"></div>       
        </div>
        <div class="formRow">
            <label>企业性质:</label>
            <div class="formRight">
                <select disabled="disabled"  name="nature">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nature']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value && $_smarty_tpl->tpl_vars['table']->value[6] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>经营性质:</label>
            <div class="formRight">
                <select disabled="disabled" name="category">           
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value && $_smarty_tpl->tpl_vars['table']->value[7] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>           	    
            </div>
            <div class="clear"></div>
        </div> 

        <div class="formRow">
            <label>注册资金:</label>
            <div class="formRight">
           	    <input type="text" name="capital" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[8];?>
万"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>  
         <div class="formRow">
            <label>经营范围:</label>
            <div class="formRight">
           	    <input type="text" name="scope" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[9];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>从业人员数量:</label>
            <div class="formRight">
           	    <input type="text" name="staff" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[10];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>    
        <div class="formRow">
            <label>营业执照号码:</label>
            <div class="formRight">
           	    <input type="text" name="license" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[11];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>    
        <div class="formRow">
            <label>经营面积:</label>
            <div class="formRight">
           	    <input type="text" name="area" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[12];?>
平方米"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>道路运输许可证编号:</label>
            <div class="formRight">
           	    <input type="text" name="transport" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[13];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>开业时间:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="opentime" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[14];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>企业联系电话:</label>
            <div class="formRight">
           	    <input type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[15];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>注册时间:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="register" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[16];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="formRow">
            <label>治安负责人:</label>
            <div class="formRight">
           	    <input type="text" name="security" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[17];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>  
        <div class="formRow">
            <label>保安人员数量:</label>
            <div class="formRight">
           	    <input type="text" name="security_num" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[18];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>   
        <div class="formRow">
            <label>技防监控设施探头数量:</label>
            <div class="formRight">
           	    <input type="text" name="camera_num" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['table']->value[19];?>
"<?php }?> disabled="true"/>
            </div>
            <div class="clear"></div>
        </div>   
    </div> 
       <?php if ($_smarty_tpl->tpl_vars['staffTypeTest']->value == 1) {?>                                                                       
       <div class="wizButtons"> 
          <span class="wNavButtons">
       	    <a class="wButton bluewB ml15 m10" href="company_edit.php">
                <span>修改</span>
            </a>
          </span>
       <?php }?>
      </div> 
    
    </form>
    <div class="clear"></div>    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
</body>
</html>
<?php }
}
