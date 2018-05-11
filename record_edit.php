<?php
    session_start(); 
    if(!isset($_SESSION['userid'])) {
        echo "无权限";
        return;
    }
    require('libs/Smarty.class.php');
    require('action/record_edit_action.php');
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
   
    if(isset($_POST['add']) || isset($_POST['edit'])){
        $result = mysql_query("select * from customer where id='".$_POST['number']."'");
        if ($result && mysql_num_rows($result) > 0) {
            mysql_query("update customer set name='".$_POST['name']."',
                         sex_id=".$_POST['sex'].",phone='".$_POST['phone']."',IDcard_type_id=".$_POST['ID_type'].",
                         IDcard_number='".$_POST['ID_num']."',address='".$_POST['address']."' 
                         where id='".$_POST['number']."'");
        }
        else {
            mysql_query("insert into customer(id,name,sex_id,phone,IDcard_type_id,IDcard_number,address)
                         values('".$_POST['number']."','".$_POST['name']."',".$_POST['sex'].",'".$_POST['phone']."',
                         ".$_POST['ID_type'].",'".$_POST['ID_num']."','".$_POST['address']."')");
        }
        
        $result = mysql_query("select * from customer where id='".$_POST['number2']."'");
        if ($result && mysql_num_rows($result) > 0) {
            mysql_query("update customer set name='".$_POST['name2']."',
                         sex_id=".$_POST['sex2'].",phone='".$_POST['phone2']."',IDcard_type_id=".$_POST['ID_type2'].",
                         IDcard_number='".$_POST['ID_num2']."',address='".$_POST['address2']."' 
                         where id='".$_POST['number2']."'");
        }
        else {
            mysql_query("insert into customer(id,name,sex_id,phone,IDcard_type_id,IDcard_number,address)
                         values('".$_POST['number2']."','".$_POST['name2']."',".$_POST['sex2'].",'".$_POST['phone2']."',
                         ".$_POST['ID_type2'].",'".$_POST['ID_num2']."','".$_POST['address2']."')");
        }
        
        $result = mysql_query("select * from car where id='".$_POST['licenseNumber']."'");
        if ($result && mysql_num_rows($result) > 0) {
            mysql_query("update car set color='".$_POST['color']."',plate_type_id=".$_POST['plateType'].",
                         plate_num='".$_POST['plateNumber']."',VIN='".$_POST['VIN']."',
                         brand_id=".$_POST['brand'].",model='".$_POST['model']."' 
                         where id='".$_POST['licenseNumber']."'");
        }
        else {
            mysql_query("insert into car(id,color,plate_type_id,plate_num,VIN,brand_id,model)
                         values('".$_POST['licenseNumber']."','".$_POST['color']."',".$_POST['plateType'].",
                         '".$_POST['plateNumber']."','".$_POST['VIN']."',".$_POST['brand'].",'".$_POST['model']."')");
        }
        
        if(isset($_POST['add'])) {
            mysql_query(str_replace("''","null","insert into record(state_id,send_id,take_id,record.describe,send_time,take_time,car_id,staff_id)
                         values (".$_POST['state'].",'".$_POST['number']."','".$_POST['number2']."',
                         '".$_POST['describe']."','".$_POST['sendTime']."','".$_POST['takeTime']."',
                         '".$_POST['licenseNumber']."',".$_POST['repairStaff'].")"));
        }
        else if(isset($_POST['edit'])){
            mysql_query("update record set state_id=".$_POST['state'].",send_id='".$_POST['number']."',
                         take_id='".$_POST['number2']."',record.describe='".$_POST['describe']."',
                         send_time='".$_POST['sendTime']."',take_time='".$_POST['takeTime']."',
                         car_id='".$_POST['licenseNumber']."',staff_id=".$_POST['repairStaff']."
                         where id=".$_POST['id']);
        }
        header("Location: record.php" );
        return;
    }   
    
    $smarty->assign("message", null);
    
    $result = mysql_query("select id,sex.describe from sex");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $sex[] = $row;
        }
        $smarty->assign('sex', $sex);
    }
    
    $result = mysql_query("select id,idcard.describe from idcard");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $idcard[] = $row;
        }
        $smarty->assign('idcard', $idcard);
    }
    
    $result = mysql_query("select id,car_type.describe from car_type");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $carType[] = $row;
        }
        $smarty->assign('carType', $carType);
    }
    
    $result = mysql_query("select id,plate_type.describe from plate_type");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $plateType[] = $row;
        }
        $smarty->assign('plateType', $plateType);
    }
    
    $result = mysql_query("select id,brand.describe from brand");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $brand[] = $row;
        }
        $smarty->assign('brand', $brand);
    }
    
    $result = mysql_query("select id,name from staff where type_id=2 and company_id=".$_SESSION['companyid']);
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $repairStaff[] = $row;
        }
        $smarty->assign('repairStaff', $repairStaff);
    }
    
    $result = mysql_query("select id,repair_state.describe from repair_state");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $state[] = $row;
        }
        $smarty->assign('state', $state);
    }
    
    $smarty->assign('editid', null);
    $smarty->assign('editdata', null);   
    $smarty->assign('sendCustomer', null);
    $smarty->assign('takeCustomer', null);   
    $smarty->assign('car', null);
    $smarty->assign('idcheck', null);
    
    if(isset($_POST['button1']) || isset($_POST['button2']) || isset($_POST['button3'])) {
        
        $smarty->assign('editid', null);
        if ($_POST['id'] != null && $_POST['id'] != "") {
            $smarty->assign('editid', $_POST['id']);
        }
        $editdata = array($_POST['state'],$_POST['number'],$_POST['number2'],$_POST['describe'],
                          $_POST['sendTime'],$_POST['takeTime'],$_POST['licenseNumber'],$_POST['repairStaff']);
        $smarty->assign('editdata', $editdata);  
        $sendCustomer = array($_POST['name'],$_POST['sex'],$_POST['phone'],$_POST['ID_type'],
                              $_POST['ID_num'],$_POST['address']); 
        $smarty->assign('sendCustomer', $sendCustomer);
        $takeCustomer = array($_POST['name2'],$_POST['sex2'],$_POST['phone2'],$_POST['ID_type2'],
                              $_POST['ID_num2'],$_POST['address2']);
        $smarty->assign('takeCustomer', $takeCustomer);  
        $car = array($_POST['color'],$_POST['plateType'],$_POST['plateNumber'],
                     $_POST['VIN'],$_POST['brand'],$_POST['model']);
        $smarty->assign('car', $car);  
        $smarty->assign('idcheck', $_POST['idcheck']); 
        
        if (isset($_POST['button1'])) {
            $smarty->assign('idcheck', null);
            switch($_POST['button1']) {
                case '验证':$smarty->assign('idcheck',checkCustom($_POST['ID_num']));break;
                case '老客户':$smarty->assign('sendCustomer', getOldCustom($editdata[1]));break;
                case '联网查':$smarty->assign('sendCustomer', getInternetCustom($editdata[1]));break;
            }
        }
        else if (isset($_POST['button2'])) {
            switch($_POST['button2']) {
                case '老客户':$smarty->assign('car', getOldCar($editdata[6]));break;
                case '联网查':$smarty->assign('car', getInternetCar($editdata[6]));break;
            }
        }
        else if (isset($_POST['button3'])){
            switch($_POST['button3']) {
                case '老客户':$smarty->assign('takeCustomer', getOldCustom($editdata[2]));break;
                case '联网查':$smarty->assign('takeCustomer', getInternetCustom($editdata[2]));break;
            }
        }        
    }
          
    else if (isset($_GET['editid'])){
        $editid = $_GET['editid']; 
        $result = mysql_query("select state_id,send_id,take_id,record.describe,send_time,take_time,car_id,staff_id
                               from record where id=".$editid); 
        if ($result && mysql_num_rows($result) > 0) {
            $editdata = mysql_fetch_row($result);
            $smarty->assign('editdata', $editdata);
            $smarty->assign('editid', $editid);
        }
        $result = mysql_query("select name,sex_id,phone,IDcard_type_id,IDcard_number,address
                               from customer where id='".$editdata[1]."'"); 
        if ($result && mysql_num_rows($result) > 0) {
            $smarty->assign('sendCustomer', mysql_fetch_row($result));
        }
        $result = mysql_query("select name,sex_id,phone,IDcard_type_id,IDcard_number,address
                               from customer where id='".$editdata[2]."'"); 
        if ($result && mysql_num_rows($result) > 0) {
            $smarty->assign('takeCustomer', mysql_fetch_row($result));
        }
        $result = mysql_query("select color,plate_type_id,plate_num,VIN,brand_id,model
                               from car where id='".$editdata[6]."'"); 
        if ($result && mysql_num_rows($result) > 0) {
            $smarty->assign('car', mysql_fetch_row($result));
        }
    }   

    $smarty->display('record_edit.tpl');
?>