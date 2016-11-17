<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DataBase/dbConnect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$unit_id = $db->quote($_POST['unit-id']);
$unit_name = $db->quote($_POST['unit-name']);


$sql = "INSERT INTO `SEC_NET`.`Units` (`unit_id`, `unit_name`) VALUES ($unit_id, \"$unit_name\");";
$qry = $db->runQuery($sql);
sleep(2);