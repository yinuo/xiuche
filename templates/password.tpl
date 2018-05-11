<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>玉枢修车</title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body class="wrapper">
	<div class="widget">
    	<div class="title">
    		<img src="images/icons/dark/pencil.png" alt="" class="titleIcon" />
        	<h6>修改密码</h6>
    	</div>
		<form id="wizard1" method="post" action="password.php" class="form">
        	<div class="formRow">
            	<label>原密码:</label>
            	<div class="formRight"><input type="password" name="oldpassword"/></div>
            	<div class="clear"></div>
        	</div>
        	<div class="formRow">
            	<label>新密码:</label>
            	<div class="formRight"><input type="password" name="newpassword"/></div>
            	<div class="clear"></div>
        	</div>
        	<div class="formRow">
            	<label>再次确认密码:</label>
            	<div class="formRight"><input type="password" name="newpassword2"/></div>
            	<div class="clear"></div>
        	</div>        
              
			<div class="wizButtons formRow"> 
            	<label class="red">{$message}</label>
				<span class="wNavButtons">
                	<input class="blueB ml10" name="ok" value="确认修改" type="submit" />
            	</span>
                <div class="clear"></div>
			</div>
        	<div class="clear"></div>
		</form>
    </div>
    <div id="footer">
        <div class="wrapper">
            版权所有© Copyright 2016-2018 版权所有 京ICP备16066672号&emsp;&emsp;&emsp;
            <a href="http://www.zslfinfo.com/" target="_blank">致生联发</a>
        </div>
    </div>
</body>
</html>
