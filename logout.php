<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        echo "��Ȩ��";
        return;
    }
    require('libs/Smarty.class.php');
    $smarty = new Smarty;
    $smarty->configLoad('config.conf', 'database');
    $con = mysql_connect($smarty->getConfigVars('db_ip'), $smarty->getConfigVars('db_username'),
                    $smarty->getConfigVars('db_password'));
    if(!$con || !mysql_select_db($smarty->getConfigVars('db_name'), $con)){
        $smarty->assign('message', '���ݿ����');
        $smarty->display('login.tpl');
        if ($con){
            mysql_close($con);
        }
        return;    
    }
   
    mysql_query("insert into log (type, staff_id) 
                         values('0', ".$_SESSION['userid'].")");
    session_destroy(); 
    mysql_close($con);
    $smarty->assign('message', '');
    header("Location: login.php");
?>