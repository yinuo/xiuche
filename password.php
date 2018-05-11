<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        echo "无权限";
        return;
    }
    require('libs/Smarty.class.php');
    $smarty = new Smarty;
    
    if(isset($_POST['ok'])) {
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $newpassword2 = $_POST['newpassword2'];
    if ($newpassword != $newpassword2){
        $smarty->assign('message', '两次输入的新密码不一致');
        $smarty->display('password.tpl');
        return;
    }
    
    $smarty->configLoad('config.conf', 'database');
    $con = mysql_connect($smarty->getConfigVars('db_ip'), $smarty->getConfigVars('db_username'),
                        $smarty->getConfigVars('db_password'));
    if(!$con || !mysql_select_db($smarty->getConfigVars('db_name'), $con)){
        echo "<script>alert('数据库出错')</script>";
        if ($con){
            mysql_close($con);
        }
        return;    
    }
   
    $userid = $_SESSION['userid'];
    $result = mysql_query("select * from staff where id=".$userid." and password='".$oldpassword."';");
    if (mysql_num_rows($result) == 0){
        $smarty->assign('message', '您输入的原始密码错误');
    }
    else {
        if (mysql_query("update staff set password='".$newpassword."' where id=".$userid)) {
            $smarty->assign('message', '修改密码成功');
        }
        else {
            $smarty->assign('message', '修改密码失败');
        }
    }
    mysql_close($con);
    }
    else
    {
        $smarty->assign('message', '');
    }
    $smarty->display('password.tpl');
?>