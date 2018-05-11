<?php
/* Smarty version 3.1.30, created on 2018-05-11 01:37:54
  from "D:\phpStudy\WWW\prj\templates\staff_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af4f3f2dee874_78766008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f8e11652e38b505948fe7c1ea2e5388e90c293' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\prj\\templates\\staff_edit.tpl',
      1 => 1522636963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4f3f2dee874_78766008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>玉枢修车</title>
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
    <form class="form widget" method="POST" name="mainform">
        <div class="title"><h6>添加职工</h6></div> 
        <div class="formRow" hidden="true">
            <label>序号:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editid']->value;?>
"<?php }?> name="id" readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[0];?>
"<?php }?> name="name"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>性别:</label>
            <div class="radio formRight" id="sex-radio">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sex']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                <label><input type="radio" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[1] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</label>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>出生日期:</label>
            <div class="formRight">
           	    <input class="maskDate" type="text" name="birth" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[3];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>民族:</label>
            <div class="formRight">
                <select  name="nation">
                    <option value="0">请选择民族</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nation']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[4] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>国籍:</label>
            <div class="formRight">
                <select  name="country">
                    <option value="0">请选择国籍</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[5] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>证件类型:</label>
            <div class="formRight">
                <select  name="ID_type">
                    <option value="0">请选择证件类型</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idcard']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[6] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>证件号码:</label>
            <div class="formRight">
                <input type="text" name="ID_num" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[7];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>文化程度:</label>
            <div class="formRight">
                <select  name="education">
                    <option value="0">请选择文化程度</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['education']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[8] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>职位:</label>
            <div class="formRight">
                <select  name="type">
                    <option value="0">请选择职位</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[2] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[9];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="ID_address" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[10];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>现住地址:</label>
            <div class="formRight">
                <input type="text" name="address" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[11];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>入职日期:</label>
            <div class="formRight">
                <input class="maskDate" type="text" name="enter" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[12];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>人员状态:</label>
            <div class="formRight">
                <select  name="state">
                    <option value="0">请选择人员状态</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[14] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>离职日期:</label>
            <div class="formRight">
                <input class="maskDate" type="text" name="quit" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[13];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="wizButtons"> 
       	    <label class="red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</label>
			<span class="wNavButtons">
                <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>
               	<input class="blueB ml10" value="保存" type="submit" name="edit"/>
                <?php } else { ?>
                <input class="blueB ml10" value="添加" type="submit" name="add"/>
                <?php }?>
            </span>
        </div>
        <div class="clear"></div>   
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
