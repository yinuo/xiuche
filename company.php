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
    $smarty->assign("message", null);
 
    $result = mysql_query("select id,nature.descri from nature");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $nature[] = $row;
        }
        $smarty->assign('nature', $nature);
      } 
    
    $result = mysql_query("select id,category.describe from category");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $category[] = $row;
        }
        $smarty->assign('category', $category);
       }
    $result = mysql_query("select id,staff_type.describe from staff_type");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $staff_type[] = $row;
        }
        $smarty->assign('staff_type', $staff_type);
       }   
    
    $companyid=$_SESSION['companyid'];//定义变量
    $smarty->assign('companyid', $companyid); //赋值变量
    
    $smarty->assign('getCompany', getInternetCompany($companyid));//联网查
    
//执行数据库查询      
    $result = mysql_query("select name,address,charge,charge_phone,corporation,corporation_phone,nature_id,category_id,capital,scope,
    staff,license,area,transport,open,phone,register,security,security_num,camera_num from company,nature,category where company.nature_id=
    nature.id and company.category_id=category.id and company.id=".$companyid."");  
    if ($result && mysql_num_rows($result) > 0){
    $table=mysql_fetch_row($result);
    $smarty->assign('table', $table); }
    $smarty->assign('staffTypeTest', $_SESSION['staffType'] );
    
    $smarty->display('company.tpl');
?>