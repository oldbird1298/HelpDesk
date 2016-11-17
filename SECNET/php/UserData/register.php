<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DataBase/dbConnect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$asma = $db->quote($_POST['asma']);
$name = $db->quote($_POST['name']);
$surname = $db->quote($_POST['surname']);
$password = $db->quote($_POST['password']);
$chk_pswd = $db->quote($_POST['chk_pswd']);
$Unit_id = $db->quote($_POST['unit_id']);
$role = 120;
$ro = 1;
$isOnline = 0;

if (isset($asma) && isset($name) && isset($surname)) {
   if(isset($password) && isset($chk_pswd)) {
       if($password == $chk_pswd) {
           
           $register_user = "INSERT INTO `SEC_NET`.`Users` (`user_id`, `user_mode_id`, `name`, `last_name`, `password`, `unit_id`, `ro`, `is_online`) "
                   . "VALUES ($asma, $role , \"$name\", \"$surname\", $password, $Unit_id, $ro, $isOnline);";
           $db->runQuery($register_user);
           sleep(2);
           echo "<b> Your Account has created Succesfully";
       }else {
           echo "<b>Password doesnt match!!!</b>";
       }
   }
    
}else {
    echo "<p>Fill all the fields</p>";
}

