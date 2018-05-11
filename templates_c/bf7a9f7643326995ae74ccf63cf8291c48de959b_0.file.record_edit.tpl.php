<?php
/* Smarty version 3.1.30, created on 2018-05-11 01:38:24
  from "D:\phpStudy\WWW\prj\templates\record_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af4f410074018_31446202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7a9f7643326995ae74ccf63cf8291c48de959b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\prj\\templates\\record_edit.tpl',
      1 => 1522637097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4f410074018_31446202 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="formRow" hidden="true">
            <label>序号:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editid']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editid']->value;?>
"<?php }?> name="id" readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>送修人信息</h6></div>
        <div class="formRow">
            <label>驾驶证条码:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[1];?>
"<?php }?> name="number" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button1"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button1"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['sendCustomer']->value[0];?>
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
" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value && $_smarty_tpl->tpl_vars['sendCustomer']->value[1] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>checked="checked"
                <?php } elseif ($_smarty_tpl->tpl_vars['sendCustomer']->value == null && $_smarty_tpl->tpl_vars['i']->value[1] == '男') {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value && $_smarty_tpl->tpl_vars['sendCustomer']->value[3] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
                <input type="text" name="ID_num" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['sendCustomer']->value[4];?>
"<?php }?> style="width:60%" onchange="setText()"/>
                <input class="blueB ml10" value="验证" type="submit" name="button1"/>
                <input type="text" name="idcheck" style="border:none;box-shadow:none;background:none;width:10%" 
                value=<?php if ($_smarty_tpl->tpl_vars['idcheck']->value) {
if ($_smarty_tpl->tpl_vars['idcheck']->value == 'yes') {?>"*****"<?php } else { ?>"验证通过"<?php }
} else { ?>"未验证"<?php }?> readonly="true"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['sendCustomer']->value[2];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="address" <?php if ($_smarty_tpl->tpl_vars['sendCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['sendCustomer']->value[5];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>送修日期:</label>
            <div class="formRight">
                <input class="maskDateTime" type="text" name="sendTime" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[4];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="title"><h6>车辆信息</h6></div> 
        <div class="formRow">
            <label>行驶证条码:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[6];?>
"<?php }?> name="licenseNumber" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button2"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button2"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车身主颜色:</label>
            <div class="formRight">
                <input type="text" name="color" <?php if ($_smarty_tpl->tpl_vars['car']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['car']->value[0];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车牌类型:</label>
            <div class="formRight">
                <select  name="plateType">
                    <option value="0">请选择车牌类型</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plateType']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['car']->value && $_smarty_tpl->tpl_vars['car']->value[1] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>车牌号:</label>
            <div class="formRight">
                <input type="text" name="plateNumber" <?php if ($_smarty_tpl->tpl_vars['car']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['car']->value[2];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车架号:</label>
            <div class="formRight">
                <input type="text" name="VIN" <?php if ($_smarty_tpl->tpl_vars['car']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['car']->value[3];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>车辆品牌:</label>
            <div class="formRight">
                <select  name="brand">
                    <option value="0">请选择车辆品牌</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['car']->value && $_smarty_tpl->tpl_vars['car']->value[4] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>车辆型号:</label>
            <div class="formRight">
                <input type="text" name="model" <?php if ($_smarty_tpl->tpl_vars['car']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['car']->value[5];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>修车信息</h6></div>
        <div class="formRow">
            <label>修车人员:</label>
            <div class="formRight">
                <select  name="repairStaff">
                    <option value="0">请选择修车人员</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repairStaff']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[7] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>当前状态:</label>
            <div class="formRight">
                <select  name="state">
                    <option value="0">请选择当前状态</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['editdata']->value && $_smarty_tpl->tpl_vars['editdata']->value[0] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>修车描述:</label>
            <div class="formRight">
                <textarea name="describe" rows="8" class="autoGrow" style="height: auto; overflow: hidden;">
                <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {
echo $_smarty_tpl->tpl_vars['editdata']->value[3];
}?>
                </textarea>
            </div>
            <div class="clear"></div>
        </div>
        <div class="title"><h6>取车人信息</h6></div> 
        <div class="formRow">
            <label>驾驶证条码:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[2];?>
"<?php }?> name="number2" style="width:60%"/>
                <input class="blueB ml10" value="老客户" type="submit" name="button3"/>
                <input class="blueB ml10" value="联网查" type="submit" name="button3"/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>姓名:</label>
            <div class="formRight">
           	    <input type="text" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['takeCustomer']->value[0];?>
"<?php }?> name="name2"/>
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
                <label><input type="radio" name="sex2" value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value && $_smarty_tpl->tpl_vars['takeCustomer']->value[1] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>checked="checked"
                <?php } elseif ($_smarty_tpl->tpl_vars['sendCustomer']->value == null && $_smarty_tpl->tpl_vars['i']->value[1] == '男') {?>checked="checked"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
            <label>证件类型:</label>
            <div class="formRight">
                <select  name="ID_type2">
                    <option value="0">请选择证件类型</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idcard']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value && $_smarty_tpl->tpl_vars['takeCustomer']->value[3] == $_smarty_tpl->tpl_vars['i']->value[0]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
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
                <input type="text" name="ID_num2" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['takeCustomer']->value[4];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>联系电话:</label>
            <div class="formRight">
                <input type="text" name="phone2" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['takeCustomer']->value[2];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>户籍地址:</label>
            <div class="formRight">
                <input type="text" name="address2" <?php if ($_smarty_tpl->tpl_vars['takeCustomer']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['takeCustomer']->value[5];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>取车日期:</label>
            <div class="formRight">
                <input class="maskDateTime" type="text" name="takeTime" <?php if ($_smarty_tpl->tpl_vars['editdata']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['editdata']->value[5];?>
"<?php }?>/>
            </div>
            <div class="clear"></div>
        </div> 
        <div class="wizButtons"> 
        <label class="red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</label>
			<span class="wNavButtons">
                <?php if ($_smarty_tpl->tpl_vars['editid']->value) {?>
               	<input class="blueB ml10" value="保存" type="submit" name="edit"/>
                <?php } else { ?>
                <input class="blueB ml10" value="添加" type="submit" name="add"/>
                <?php }?>
            </span>
        </div>
    <div class="clear"></div>
    </form>
    
    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
    
    <?php echo '<script'; ?>
>
        function setText() {
            document.getElementById("idcheck").value="未验证";
        }
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
