<?php
/* Smarty version 3.1.30, created on 2018-04-04 11:03:26
  from "/var/www/html/templates/record.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac4407e44aae0_40200996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4abe2b9b744253c8398f7b6ac5f637d7d44713' => 
    array (
      0 => '/var/www/html/templates/record.tpl',
      1 => 1522810990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac4407e44aae0_40200996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>玉枢门禁</title>
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
    
    <?php echo '<script'; ?>
 type="text/php" src="php/device.php"><?php echo '</script'; ?>
>


</head>

<body class="wrapper">
    <form class="form widget" method="POST">
        <div class="formRow"> 
            <label>查找日期:</label>  
            <div class="formRight"> 
                开始日期： <input type="text" class="datepicker" name="dateStart" width="30%"/>
                结束日期： <input type="text" class="datepicker" name="dateEnd"/>                                                   
            </div>
            <div class="clear"></div>       
        </div>
        <div class="wizButtons"> 
       	    <div class="status" id="status1"></div>
			<span class="wNavButtons">
               	<input class="blueB ml10" value="查找" type="submit" name="select"/>
            </span>
        </div>
        <div class="clear"></div>   
    </form>
    <div class="widget">
        <div class="title"><h6>修车记录</h6></div>                          
       	<table class="display dTable">
            <thead>
            <tr>
                <th style="display:none">id</th>
                <th>状态</th>
                <th>车牌号</th>
                <th>送修人</th>
                <th>取车人</th>
                <th>维修人</th>
                <th>送修时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                <tr>
                    <td style="display:none"><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[4];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[5];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value[6];?>
</td>
                    <td class="actBtns">
                        <a title="修改" class="tipS" onclick="editRow(this)">
                            <img src="images/icons/edit.png" alt="" />
                        </a>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>  
    </div>      
    <div class="wizButtons"> 
        <span class="wNavButtons">
       	    <a class="wButton bluewB ml15 m10" href="record_edit.php">
                <span>添加记录</span>
            </a>
        </span> 
     </div>
     <div class="clear"></div>   
    
    
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function editRow(row) {
            var parentTD = row.parentNode;
            var parentTR = parentTD.parentNode;
            this.location = "record_edit.php?editid=" + parentTR.childNodes[1].innerHTML; 
        }
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
