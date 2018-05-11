<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>玉枢修车</title>
    <link rel="shortcut icon" href="images/ys.ico" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
	<script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

	<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
	<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
	<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

	<script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>

	<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
	<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

	<script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
	<script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
	<script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

	<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
	<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

	<script type="text/javascript" src="js/plugins/calendar.min.js"></script>
	<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

	<script type="text/javascript" src="js/custom.js"></script> 
</head>

<body class="loginPage">
<div class="loginWrapper">
    <div class="widget">
        <div class="title"><h6>登录</h6></div>
        <form action="login.php" class="form" method="post">
            <fieldset>
                <div class="formRow">
                    <label>公司名称:</label>
                    <div class="loginInput">
                        <select  name="company">
                            <option>请选择公司名称</option>
                            {foreach from=$company item=i}
                            <option value="{$i[0]}">{$i[1]}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="login">用户名:</label>
                    <div class="loginInput"><input type="text" name="username"/></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">密码:</label>
                    <div class="loginInput"><input type="password" name="password"/></div>
                    <div class="clear"></div>
                </div>
                <div class="loginControl">
                    <label class="red">{$message}</label>
                    <input type="submit" name="ok" value="登录" class="blueB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>    
</body>
</html>