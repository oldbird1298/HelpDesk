<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './db_config/db_connect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$poster = $db->quote($_POST['user_reg']);
$tittle = $db->quote($_POST['tittle']);
$message = $db->quote($_POST['news']);
$high = 0;

echo $poster . $tittle . $message . $high ;
$sql_add_post = "INSERT INTO `new`(`date`, `tittle`, `message`, `user_reg`, `high`) VALUES (NOW(), \"$tittle\", \"$message\", $poster, $high)";
$sql_create_post = $db->runQuery($sql_add_post) or die("Could not connect");
header('Location: ../pages/dashboard.php');

?>