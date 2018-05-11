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
        
    $companyid = $_SESSION['companyid'];
    
    if(isset($_POST['edit'])){
        mysql_query(
         "update company set address='".$_POST['commpyaddress']."',charge='".$_POST['charge']."',
                     charge_phone='".$_POST['charge_phone']."',corporation='".$_POST['corporation']."',corporation_phone='".$_POST['corporation_phone']."',
                     nature_id=".$_POST['nature'].",category_id=".$_POST['category'].",capital=".$_POST['capital'].",
                     scope='".$_POST['scope']."',staff=".$_POST['staff'].",license='".$_POST['license']."',
                     area=".$_POST['area'].",transport='".$_POST['transport']."',open='".$_POST['opentime']."', 
                     phone='".$_POST['phone']."',register='".$_POST['register']."',security='".$_POST['security']."',
                     security_num=".$_POST['security_num'].",camera_num=".$_POST['camera_num']." where company.id = '".$companyid."'");
         
        header("Location: company.php" );
        return;
    }      
   
    $companyid = $_SESSION['companyid'];
    $smarty->assign('companyid', $companyid);
    $result = mysql_query("select  name,address,charge,charge_phone,corporation,corporation_phone,nature.id,category.id,capital,scope,
    staff,license,area,transport,open,phone,register,security,
    security_num,camera_num from company,nature,category where company.nature_id = nature.id and company.category_id = category.id and company.id =".$companyid."");
   
    if ($result && mysql_num_rows($result) > 0){
        $editcompany = mysql_fetch_row($result);
        $smarty->assign('editcompany', $editcompany);
    } 
     $smarty->assign('companyid', $companyid);
     $smarty->assign('getCompany', getInternetCompany($companyid));//联网查
    //显示经营性质下拉列表
    $result = mysql_query("select id,category.describe from category");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $category[] = $row;
        }
        $smarty->assign('category', $category);
    } 
 //显示企业类型下拉列表
    $result = mysql_query("select id,nature.descri from nature");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $nature[] = $row;
        }
        $smarty->assign('nature', $nature);
      } 
   
    $smarty->display('company_edit.tpl');
?>
