<?php
    require('action/httpconnect.php');

    function getOldCustom($id) {
        $result = mysql_query("select name,sex_id,phone,IDcard_type_id,IDcard_number,address
                               from customer where id='".$id."'"); 
        if ($result && mysql_num_rows($result) > 0) {
            return mysql_fetch_row($result);
        }
        else {
            echo "<script language=\"JavaScript\">alert(\"查无此客户\");</script>";
        }
    }
    function getInternetCustom($id) {
        $httpresult = send_post("{\"message\":\"custom\",\"id\":\"".$id."\"}");
        $json = json_decode($httpresult);
        if ($json->{'result'} == "yes") {
            $sex_id = 0;
            $IDcard_type_id = 0;
            $result = mysql_query("select id from sex where sex.describe='".$json->{'sex'}."'"); 
            if ($result && mysql_num_rows($result) > 0) {
                $row = mysql_fetch_row($result);
                $sex_id = $row[0];
            }
            $result = mysql_query("select id from idcard where idcard.describe='".$json->{'IDcard_type'}."'"); 
            if ($result && mysql_num_rows($result) > 0) {
                $row = mysql_fetch_row($result);
                $IDcard_type_id = $row[0];
            }
            return array($json->{'name'},$sex_id,$json->{'phone'},$IDcard_type_id,
                         $json->{'IDcard_number'},$json->{'address'});
        }
        else {
            echo "<script language=\"JavaScript\">alert(\"查无此客户\");</script>";
        }
    }
    function checkCustom($id) {
        $httpresult = send_post("{\"message\":\"idcard\",\"id\":\"".$id."\"}");
        $json = json_decode($httpresult);
        return $json->{'result'};
    }
    function getOldCar($id) {
        $result = mysql_query("select color,plate_type_id,plate_num,VIN,brand_id,model
                               from car where id='".$id."'"); 
        if ($result && mysql_num_rows($result) > 0) {
            return mysql_fetch_row($result);
        }
        else {
            echo "<script language=\"JavaScript\">alert(\"查无此车辆\");</script>";
        }
    }
    function getInternetCar($id) {
        $httpresult = send_post("{\"message\":\"car\",\"id\":\"".$id."\"}");
        $json = json_decode($httpresult);
        if ($json->{'result'} == "yes") {
            $plate_type = 0;
            $brand = 0;
            $result = mysql_query("select id from plate_type where plate_type.describe='".$json->{'plate_type'}."'"); 
            if ($result && mysql_num_rows($result) > 0) {
                $row = mysql_fetch_row($result);
                $plate_type = $row[0];
            }
            $result = mysql_query("select id from brand where brand.describe='".$json->{'brand'}."'"); 
            if ($result && mysql_num_rows($result) > 0) {
                $row = mysql_fetch_row($result);
                $brand = $row[0];
            }
            return array($json->{'color'},$plate_type,$json->{'plate_num'},
                         $json->{'VIN'},$brand,$json->{'model'});
        }
        else {
            echo "<script language=\"JavaScript\">alert(\"查无此车辆\");</script>";
        }
    }

    function getInternetCompany($id) {
        $httpresult = send_post("{\"message\":\"company\",\"id\":\"".$id."\"}");
        $json = json_decode($httpresult);
        if ($json->{'result'} == "yes") {
            return array($json->{'name'},$json->{'place'},$json->{'office'},
                         $json->{'station'},$json->{'phone'});
        }
        /*
        else {
            echo "<script language=\"JavaScript\">alert(\"查无此公司\");</script>";
        }*/
    }
?>
