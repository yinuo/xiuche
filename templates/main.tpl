<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="html">
<head>
    <meta charset="UTF-8">
    <title>玉枢修车</title>
    <link rel="shortcut icon" href="ys.ico" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script>
		function changeFrameHeight(){
    		var ifm= document.getElementById("rightFrame"); 
    		ifm.height=document.documentElement.clientHeight;
		}
		window.onresize=function(){  
     		changeFrameHeight();  
		} 
	</script>
    <script type="text/php" src="../main.php"></script>
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
            <span class="white">您好，{$username}</span>
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
</html>