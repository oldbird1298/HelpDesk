<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../DataBase/dbConnect.php';
session_start(); //starting a session

if (isset($_POST['submit'])) {
    if (empty($_POST['asma']) || empty($_POST['password'])) {
        $_error = "AM or Password is empty";
    } else {
        //Define $AM and $password
        //$user = new UserHandlers();
        $db = new DbMgmt();
        $asma = $db->quote($_POST['asma']);
        $password = $db->quote($_POST['password']);
        //$usr = "67045";
        //$pswd = "1234";
        $sql = "SELECT `Users`.`user_id`, `Users`.`password`, `Users`.`user_mode_id`, `Users`.`is_online`\n"
                . "FROM `Users`\n"
                . "WHERE ((`Users`.`user_id` =\"$asma\") AND (`Users`.`password` =\"$password\"))\n"
                . " LIMIT 0, 30 ";

        $result = $db->runQuery($sql);
        echo "<br> Eftase edw k eskase";
        //echo $result;

        if (mysqli_fetch_array($result) > 0) {
            echo "mpaie";
            echo "MPIKE to gamimeno";
            $db->runQuery("SET NAMES 'utf8'");
            $pendingQry = "SELECT `pending` FROM `Users` WHERE `user_id`=$asma  LIMIT 0, 30 ";
            $pendingResult = $db->runQuery($pendingQry);
            $pendingRow = mysqli_fetch_row($pendingResult);
            if ($pendingRow[0] != 0) {
                header("location: ../pages/registerPnd.html");
            } else {
                $sessionQry = "SELECT `name`, `last_name` , `user_id` , `unit_id`, `user_mode_id` FROM `Users` WHERE `user_id`=$asma ";
                $res = $db->runQuery($sessionQry);
                $row = mysqli_fetch_row($res);
                $_SESSION['login_user'] = $row; //Initializing Session
                $login_session = $_SESSION['login_user'];
                echo $row[4];
                if ($row[4] == 100 || $row == 900) {
                    header("Location: ../../pages/dashboard_admin.php"); //Redirecting to onether page
                }else {
                    echo "kati paei strave\n";
                }
            }
        } else {
            $_error = "AM or Password is invalid ";
        }
        $db->close();
    }
} else {
    echo "Huston we have problem";
}


//$am = $dba ->quote($_POST['am']);
//$password =  $dba ->quote($_POST['password']);
?>


