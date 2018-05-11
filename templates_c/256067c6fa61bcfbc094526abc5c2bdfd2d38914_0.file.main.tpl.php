<?php
/* Smarty version 3.1.30, created on 2018-05-10 08:24:21
  from "D:\phpStudy\WWW\prj\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af401b5cd4f79_44148324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256067c6fa61bcfbc094526abc5c2bdfd2d38914' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\prj\\templates\\main.tpl',
      1 => 1522287857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af401b5cd4f79_44148324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="html">
<head>
    <meta charset="UTF-8">
    <title>玉枢修车</title>
    <link rel="shortcut icon" href="ys.ico" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
>
		function changeFrameHeight(){
    		var ifm= document.getElementById("rightFrame"); 
    		ifm.height=document.documentElement.clientHeight;
		}
		window.onresize=function(){  
     		changeFrameHeight();  
		} 
	<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/php" src="../main.php"><?php echo '</script'; ?>
>
</head>

<body class="mainbody">
<div id="leftSide">
    <div class="sidebarSep mt0"></div>
    <div>
        <img src="images/logo.png" style="vertical-align:middle;text-align:center"/>      
    </div>
    <div class="sidebarSep mt0"></div>
	<div class="logo">
        <a href="welcome.php" target="rightFrame">
            <img src="images/userPic.png" alt="" />
            <span class="white">您好，<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
        </a>
    </div>
    
    <ul id="menu" class="nav">
        <li><a href="record.php" target="rightFrame"><span>修车记录</span></a></li>
        <li><a href="company.php" target="rightFrame"><span>企业管理</span></a></li>
        <li><a href="staff.php" target="rightFrame"><span>职工管理</span></a></li>
        <li><a href="password.php" target="rightFrame"><span>修改密码</span></a></li>
        <li><a href="logout.php"><span>退出登录</span></a></li>
    </ul>
</div>

<div id="rightSide">
	<iframe	width="100%" src="welcome.php" name="rightFrame" id="rightFrame" 
    	onload="changeFrameHeight()" frameborder="0"></iframe>
</div>

</body>
</html><?php }
}
