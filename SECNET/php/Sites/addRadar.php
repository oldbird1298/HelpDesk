<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DataBase/dbConnect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$radar_id = $db->quote($_POST['radar-id']);
$unit_name = $db->quote($_POST['unit-name']);
$radar_name = $db->quote($_POST['radar-name']);
$radar_type = $db->quote($_POST['radar-type']);
$radar_location = $db->quote($_POST['radar-location']);
$radar_id = $db->quote($_POST['radar-id']);
$user_id = $db->quote($_POST['user_id']);


$sql = "INSERT INTO `SEC_NET`.`Radars` (`radar_id`, `unit_id`, `radar_name`, `location`, `radar_type`) VALUES ($radar_id, $unit_name, \"$radar_name\", \"$location\", \"$radar_type\");";
$qry = $db->runQuery($sql);
$sql_status = $sql = "INSERT INTO `SEC_NET`.`Radar_Status` (`radar_id`, `sr`, `ssr`, `srr`, `descr`, `actions`, `last_updated`, `user_update`)"
        . " VALUES ($radar_id, \'FOP\', \'FOP\', \'FOP\', \'\', \'\', NULL, $user_id);";
$qry_status = $db->runQuery($sql_status);
sleep(2);