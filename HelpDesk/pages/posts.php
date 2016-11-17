<?php

require_once '../php_functions/db_config/db_connect.php';
$db = new DbMgmt;
$db->runQuery("SET NAMES 'utf8'");
$am = $_SESSION['login_user'][2];
$sql_show_posts = "SELECT `date`, `tittle`, `message`, `user_reg`, `high` FROM `new` ORDER BY `new`.`date` DESC LIMIT 0, 30 ";
$qry_show_posts = $db->runQuery($sql_show_posts);
while ($row_show_posts = mysqli_fetch_array($qry_show_posts)) {
    echo "<li>";

    echo "<div class=\"timeline-badge\"><i class=\"fa fa-check\"></i></div>";
    echo "<div class=\"timeline-panel\">";
    echo "<div class=\"timeline-heading\">";
    echo "<h4>" . $row_show_posts['tittle'] . "</h4>";
    echo "</div>";
    echo "<div class=\"timeline-body\">";
    echo "<p>" . $row_show_posts['message'] . "</p>";
    echo "<br />";
    echo "<div class\"row\">";
    echo "<small class=\"pull-right text-primary\">" . $row_show_posts['date'] . "</small>";
    $name = $row_show_posts['user_reg'];
    $sql = "SELECT `rank_name`, `surname`  FROM `personel` WHERE `AM`=$name LIMIT 0, 30 ";
    $qry = $db->runQuery($sql);
    $row = mysqli_fetch_row($qry);
    echo "<em class=\"text-center text-muted\">" . $row[0] . " " . $row[1] . "</em>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "</li>";
}
?>

