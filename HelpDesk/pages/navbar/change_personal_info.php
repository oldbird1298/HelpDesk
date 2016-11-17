<?php

/* * ***********************************************************************
 * change_personal_info.php
 * 
 * Allazei ta stoixeia enos xrhsth ston pinaka personel ths database.
 * Xrhsimopoiei ths metavlites ths formas apo tin selida userProfile.php
 * 
 * 
 * ************************************************************************* */
include './userHandlers.class.php';
include '../../php_functions/db_config/db_connect.php';

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$asma = $db->quote($_POST['asma']);
$name = $db->quote($_POST['name']);
$surname = $db->quote($_POST['surname']);
$mobile = $db->quote($_POST['mobile']);
$address = $db->quote($_POST['address']);
$city = $db->quote($_POST['city']);

echo $asma;

echo $telephone;

if (isset($name)) {
echo $name;
    
$sql_name = "UPDATE `hrm`.`personel` SET `name` = \'$name\' WHERE `personel`.`AM` = $asma;";
$qry_name = $db->runQuery($sql_name);

}
if (isset($surname)) {
echo $surname;    
$sql_surname = "UPDATE `hrm`.`personel` SET `surname` = \'$surname\' WHERE `personel`.`AM` = $asma;";
$qry_surname = $db->runQuery($sql_surname);

}
if (isset($mobile)) {
    
$sql_mobile = "UPDATE `hrm`.`personel` SET `mobile` = \'$mobile\' WHERE `personel`.`AM` = $asma;";
$qry_mobile = $db->runQuery($sql_mobile);

}
if (isset($address)) {
    
$sql_address = "UPDATE `hrm`.`personel` SET `address` = \'$address\' WHERE `personel`.`AM` = $asma;";
$qry_address = $db->runQuery($sql_address);

}
if (isset($city)) {
    
$sql_city = "UPDATE `hrm`.`personel` SET `city` = \'$city\' WHERE `personel`.`AM` = $asma;";
$qry_city = $db->runQuery($sql_city);

}

//header("location: ./userProfile.php");



