<?php
    require('libs/Smarty.class.php');
    $smarty = new Smarty;
    
    $smarty->configLoad('config.conf', 'database');
    $con = mysql_connect($smarty->getConfigVars('db_ip'), $smarty->getConfigVars('db_username'),
                         $smarty->getConfigVars('db_password'));
    if(!$con || !mysql_select_db($smarty->getConfigVars('db_name'), $con)){
        $smarty->assign('message', '数据库出错');
        $smarty->display('login.tpl');
        if ($con){
            mysql_close($con);
        }
        return;    
    }
    $smarty->assign('message', '');
    if(isset($_POST['ok']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $companyid = $_POST["company"];
        $result = mysql_query("select id,type_id from staff where name='".$username."' and 
                               password='".$password."' and company_id=".$companyid.";");
        if ($result && mysql_num_rows($result) > 0){
            session_start();
            $row = mysql_fetch_row($result);
            $_SESSION['userid'] = $row[0];
            $_SESSION['staffType'] = $row[1];
            $_SESSION['companyid'] = $companyid;
            
            mysql_query("insert into log (type, staff_id) 
                         values('1', ".$_SESSION['userid'].")");
            $smarty->assign('username', $username);
            $smarty->display('main.tpl');
            return;
        }
        else{
            $smarty->assign('message', '用户名或密码错误');
        }
        
    }
    
    $result = mysql_query("select id,name from company");
    if ($result && mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_row($result)){
            $company[] = $row;
        }
        $smarty->assign('company', $company);
    } 
    $smarty->display('login.tpl');
    
    mysql_close($con);
?>