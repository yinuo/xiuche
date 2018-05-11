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
    
    if(isset($_POST['add'])){
       
        mysql_query("insert into staff(name,sex_id,type_id,birth,nation_id,country_id,IDcard_type_id,
                     IDcard_num,education_id,phone,IDaddress,address,enter,quit,state,password,company_id)
                     values ('".$_POST['name']."',".$_POST['sex'].",".$_POST['type'].",
                     '".$_POST['birth']."',".$_POST['nation'].",".$_POST['country'].",
                     ".$_POST['ID_type'].",'".$_POST['ID_num']."',".$_POST['education'].",
                     '".$_POST['phone']."','".$_POST['ID_address']."','".$_POST['address']."',
                     '".$_POST['enter']."','".$_POST['quit']."',".$_POST['state'].",
                     '000000',".$_SESSION['companyid'].")");
        header("Location: staff.php" );
        return;
    }
    else if(isset($_POST['edit'])){
        session_start();  
        mysql_query("update staff set name='".$_POST['name']."',sex_id=".$_POST['sex'].",type_id=".$_POST['type'].",
                     birth='".$_POST['birth']."',nation_id=".$_POST['nation'].",country_id=".$_POST['country'].",
                     IDcard_type_id=".$_POST['ID_type'].",IDcard_num='".$_POST['ID_num']."',education_id=".$_POST['education'].",
                     phone='".$_POST['phone']."',IDaddress='".$_POST['ID_address']."',address='".$_POST['address']."',
                     enter='".$_POST['enter']."',quit='".$_POST['quit']."',state=".$_POST['state']." where id=".$_POST['id']);
        header("Location: staff.php" );
        return;
    }
    
    $smarty->assign("message", null);
    
    
    
    $result = mysql_query("select id,nation.describe from nation");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $nation[] = $row;
        }
        $smarty->assign('nation', $nation);
    } 
    
    $result = mysql_query("select id,sex.describe from sex");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $sex[] = $row;
        }
        $smarty->assign('sex', $sex);
    }
    
    $result = mysql_query("select id,country.describe from country");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $country[] = $row;
        }
        $smarty->assign('country', $country);
    } 
    
    $result = mysql_query("select id,idcard.describe from idcard");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $idcard[] = $row;
        }
        $smarty->assign('idcard', $idcard);
    }
    
    $result = mysql_query("select id,education.describe from education");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $education[] = $row;
        }
        $smarty->assign('education', $education);
    }  
    
    $result = mysql_query("select id,staff_type.describe from staff_type");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $type[] = $row;
        }
        $smarty->assign('type', $type);
    }   
    
    $result = mysql_query("select id,staff_state.describe from staff_state");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $state[] = $row;
        }
        $smarty->assign('state', $state);
    }   
            
    $smarty->assign('editdata', null);         
    if (isset($_GET['editid'])){
        $editid = $_GET['editid'];  
        $result = mysql_query("select name,sex_id,type_id,birth,nation_id,country_id,
                               IDcard_type_id,IDcard_num,education_id,phone,IDaddress,
                               address,enter,quit,state,password 
                               from staff where id=".$editid);   
        if ($result && mysql_num_rows($result) > 0) {
            $editdata = mysql_fetch_row($result);
            $smarty->assign('editdata', $editdata);
            $smarty->assign('editid', $editid);
        }
    }   

    $smarty->display('staff_edit.tpl');
?>