<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DataBase/dbConnect.php';
include_once '../pingApp.php';

$device = $_GET['device'];
$unit = $_GET['unit'];

$db = new DbMgmt();
$db->runQuery("SET NAMES 'utf8'");

$router = "router";
$switch = "switch";
$server = "server";
$workstation = "workstation";
$peripheral = "peripheral";


if ($device == $router) {
    echo "<br /> <label>Router</label>";
    echo "<br /> <label>$unit</label>";
    echo "<br />" . $unit;
    
    $sql = "SELECT `Routers`.`router_id`, `Routers`.`router_name`, `Router_Interfaces`.`descr`, `Router_Interfaces`.`type`, `Router_Interfaces`.`line_speed`, `Router_Interfaces`.`ip_addr`\n"
        . "FROM `Router_Interfaces`\n"
        . " LEFT JOIN `SEC_NET`.`Routers` ON `Router_Interfaces`.`router_id` = `Routers`.`router_id` \n"
        . "WHERE (`Routers`.`unit_id`= '$unit')\n"
        . " LIMIT 0, 30 ";
    
    

    echo "<table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">"
    . "<thead>"
        . "<tr>"
            . "<th>Router ID</th>"
            . "<th>Name</th>"
            . "<th>Description</th>"
            . "<th>Type</th>"
            . "<th>Line Speed</th>"
            . "<th>IP Address</th>"
            . "<th>State</th>"
        . "</tr>"
    . "</thead>"
        . "<tbody>";
    $result = $db->runQuery($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>"
        . "<td>". $row['router_id'] ."</td>"
        . "<td>". $row['router_name'] ."</td>"
        . "<td>". $row['descr'] ."</td>"
        . "<td>". $row['type'] ."</td>"
        . "<td>". $row['line_speed'] ."</td>"
        . "<td>". $row['ip_addr'] ."</td>";
        $up = ping($row['ip_addr']);
        $faClass = ($up) ? 'fa-check-square-o' : 'fa-close';
        echo sprintf('<td><i class="fa %s"></i></td>', $faClass)
        . "</tr>";
    }
    echo  "</tbody>"
    . "</table>";
}
