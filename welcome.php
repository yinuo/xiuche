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
    $smarty->assign('table', null); 
    $selectstr = "select name,time,type
                  from log,staff
                  where log.staff_id=staff.id and company_id=".$_SESSION['companyid'];    
    if(isset($_POST['select'])){
        $selectstr = $selectstr." and time>'".$_POST['dateStart']." 00:00:00' and time<'".$_POST['dateEnd']." 24:00:00';";
    }
    else {
        $selectstr = $selectstr." order by log.id desc limit 5;";
    }
    $result = mysql_query($selectstr);
    if ($result && mysql_num_rows($result) > 0)
    while($row = mysql_fetch_row($result)){
        $table[] = $row;
        $smarty->assign('table', $table); 
    }
    mysql_close($con);
    $smarty->display('welcome.tpl');     
?>