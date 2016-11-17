<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DataBase/dbConnect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$radio_name = $db->quote($_POST['radio-name']);
$radio_id = $db->quote($_POST['radio-id']);
$unit_name = $db->quote($_POST['unit-name']);
$radio_type = $db->quote($_POST['radio-type']);
$user_id = $db->quote($_POST['user_id']);
$status = "FOP";



$sql = "INSERT INTO `SEC_NET`.`Radios` (`radio_id`, `unit_id`, `radio_name`, `radio_type`) VALUES (\"$radio_id\", $unit_name, \"$radio_name\", \"$radio_type\");";
$qry = $db->runQuery($sql);
$sql_as = "INSERT INTO `SEC_NET`.`Radio_Status` (`radio_id`, `assign_unit`, `radio_status`, `descr`, `actions`, `last_update`, `user_update`) "
        . "VALUES (\"$unit_id\", \'61\', \"$status\", \'\', \'\', CURRENT_DATE(), $user_id);";
sleep(2);