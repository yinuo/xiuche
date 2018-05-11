<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        echo "无权限";
        return;
    }
    require('libs/Smarty.class.php');
    $smarty = new Smarty;
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
    $smarty->assign("message", null);
    
    //员工列表
    $result = mysql_query("select staff.id,IDcard_num,name,sex_id,staff_type.describe,enter
                           from staff,staff_type
                           where staff.type_id=staff_type.id and company_id=".$_SESSION['companyid']);
    $table = array();
    if ($result && mysql_num_rows($result) > 0)
    while($row = mysql_fetch_row($result)){
        $table[] = $row;
    }
    $smarty->assign('table', $table); 
    $smarty->assign("staffType", $_SESSION["staffType"]);
    $smarty->display('staff.tpl');
?>