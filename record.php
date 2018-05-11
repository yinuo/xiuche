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
    
    $selectstr = "select record.id,repair_state.describe,plate_num,customer1.name,customer2.name,staff.name,send_time 
               from repair_state,staff,car,record LEFT JOIN customer customer1 on record.send_id=customer1.id 
               LEFT JOIN customer customer2 on record.take_id=customer2.id
               where record.staff_id=staff.id and record.car_id=car.id and record.state_id=repair_state.id 
               and company_id=".$_SESSION['companyid'];
    if(isset($_POST['select'])){
        $selectstr = $selectstr." and send_time>'".$_POST['dateStart']." 00:00:00' and send_time<'".$_POST['dateEnd']." 24:00:00';";
    }
    $result = mysql_query($selectstr);
    if ($result && mysql_num_rows($result) > 0)
    while($row = mysql_fetch_row($result)){
        $table[] = $row;
    }
    $smarty->assign('table', $table); 
    
    mysql_close($con);
    $smarty->display('record.tpl');
?>