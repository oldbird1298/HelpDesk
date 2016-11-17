<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Datepicker Responsive CSS -->
        <link href="../bower_components/datepicker/css/bootstrap-datepicker3.css" rel="stylesheet">
        <link href="../bower_components/datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <link href="../bower_components/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../bower_components/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Link mono gia ta datePickers -->


    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                    <b class="navbar-brand">Welcome : <i><?php
                            session_start();
                            $am = $_SESSION['login_user'][2];
                            echo $_SESSION['login_user'][0] . " " . $_SESSION['login_user'][1];
                            ?></i></b>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../php_functions/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="prosklitirio.php"><i class="fa fa-bar-chart fa-fw"></i> Προσκλητήριο</a>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope fa-fw"></i> Μηνύματα<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="new_message.php">Νεο Μυνημα</a>
                                    </li>
                                    <li>
                                        <a href="messages.php">Εισερχόμενα</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Agenda<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Άδειες</a>
                                    </li>
                                    <li>
                                        <a href="#">Υπ</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tasks.php"><i class="fa fa-edit fa-fw"></i> Tasks</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> Ρυθμίσεις<span class="fa arrow"> </span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Administation</a>
                                    </li>
                                    <li>
                                        <a href="#">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="test1.php">System</a>
                                    </li>
                                    <li>
                                        <a href="pendingUsers.php">Pending Users</a>
                                    </li>
                                    <li>
                                        <a href="#"> Data Base</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Extra<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="HAFchat.php" target="popup" onclick="window.open('HAFchat.php', 'popup', 'width=600,height=480');
                                                return false;">HAF Chat</a>
                                    </li>
                                    <li>Send a Report
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tasks - <?php
                                require_once '../php_functions/db_config/db_connect.php';
                                $db = new DbMgmt;
                                $db->runQuery("SET NAMES 'utf8'");
                                $am = $_SESSION['login_user'][2];
                                $sql = "SELECT `epistasia`, `section` FROM personel WHERE `AM`=$am";
                                $res = $db->runQuery($sql);
                                $row = mysqli_fetch_row($res);
                                echo $row[0] . " - " . $row[1];
                                ?></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-bell-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            include '../php_functions/Cvutils/utils.php';
                                            echo "<div class=\"huge\">";
                                            echo numNewTasks($am);
                                            echo "</div>";
                                            ?>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-android fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            echo "<div class=\"huge\">";
                                            echo numTasks($am);
                                            echo "</div>";
                                            ?>
                                            <div>Assigned</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-fighter-jet fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php
                                            echo "<div class=\"huge\">";
                                            echo numCompleted($am);
                                            echo "</div>";
                                            ?>
                                            <div>Completed</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row apo boxakia -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel panel-heading text-center">
                                    <h4>Tasks</h4>
                                </div>
                                <!-- /panel heading -->
                                <div class="panel-body">
                                    <!-- Pinakas xekinaei apo dw -->
                                    <?php
                                    $role = $_SESSION['login_user'][3];
                                    ?>
                                    <div class="row">
                                        <section class="col-xs-12">
                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <article class="col-xs-2">

                                                    <button type="button" class="btn btn-lg btn-circle btn-success " data-toggle="modal" data-target="#newTask" style="border-radius: 50% !important; -webkit-box-shadow: 0px 0px 3px 1px #3e8f3e; -moz-box-shadow:    0px 0px 3px 1px #3e8f3e; box-shadow:         0px 0px 3px 1px #3e8f3e;"><i class="glyphicon glyphicon-plus"></i></button>
                                                    <h4 class="text-center"> Add</h4>
                                                    <br />
                                                </article>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <article class="col-xs-2">

                                                    <button id="accept" type="submit" class="btn btn-lg btn-circle btn-primary btn-block"   style="border-radius: 50% !important; -webkit-box-shadow: 0px 0px 3px 1px #245580; -moz-box-shadow:    0px 0px 3px 1px #245580; box-shadow: 0px 0px 3px 1px #245580;"><i class="glyphicon glyphicon-ok"></i></button>
                                                    <h4 class="text-center"> Accept</h4>
                                                    <br />
                                                </article>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4">
                                                <article class="col-xs-2">

                                                    <button id="forward" type="button" class="btn btn-lg btn-circle btn-danger btn-block" data-toggle="modal" data-target="#forwardTaskToUser"  style="border-radius: 50% !important; -webkit-box-shadow: 0px 0px 3px 1px #1295bf; -moz-box-shadow:    0px 0px 3px 1px #1295bf; box-shadow: 0px 0px 3px 1px #1295bf;"><i class="glyphicon glyphicon-forward"></i></button>
                                                    <h4 class="text-center"> Forward</h4>
                                                    <br />
                                                </article>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="dataTable_wrapper">
                                        <form id="acceptForm" action="../php_functions/accept_new_task.php" method="POST" role="form"><?php
                                            $headArray = array(0 => "Id", 1 => "Subject", 2 => "From", 3 => "End Date", 4 => "Accept");
                                            $head = count($headArray);
//                                        $id = "dataTables-example";
//                                        $class = "table table-striped table-bordered table-hover";

                                            $db = new DbMgmt();
                                            $db->runQuery("SET NAMES 'utf8'");
                                            $sql = "SELECT `subject_id`, `subject`, `user_reg`, `exp_date`  FROM `tbl_tasks` WHERE `user_id`=$am AND `isAssigned`=0";
                                            $qry_new_tasks = $db->runQuery($sql);

                                            echo "<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">";
                                            echo "<caption class=\"text-center \">New Tasks</caption>";
                                            echo "<thead>";
                                            echo "<tr>";
                                            for ($i = 0; $i < $head; $i++) {
                                                echo "<th>" . $headArray[$i] . "</th>";
                                            }
                                            echo "</tr>";
                                            echo "</thead>";
                                            //echo "<form id=\"acceptForm\" action=\"../php_functions/accept_new_task.php\" method=\"POST\" role=\"form\">";
                                            echo "<tbody>";
                                            while ($row_new_tasks = mysqli_fetch_array($qry_new_tasks)) {
                                                echo "<tr>";
                                                echo "<td>" . $row_new_tasks['subject_id'] . "</td>";
                                                echo "<td>" . $row_new_tasks['subject'] . "</td>";
                                                $_user_reg = $row_new_tasks['user_reg'];
                                                $sql_show_user_reg_name = "SELECT `rank_name`, `surname` FROM `personel` WHERE `AM`=$_user_reg";
                                                $qry_show_user_reg_name = $db->runQuery($sql_show_user_reg_name);
                                                while ($row_show_name = mysqli_fetch_array($qry_show_user_reg_name)) {
                                                    echo "<td>" . $row_show_name['rank_name'] . " " . $row_show_name['surname'] . " (" . $row_new_tasks['user_reg'] . ")</td>";
                                                }
                                                echo "<td>" . $row_new_tasks['exp_date'] . "</td>";

                                                echo "<td><input type=\"checkbox\" name=\"sbj_id[]\" value=\"" . $row_new_tasks['subject_id'] . "\"></td>";


                                                echo "</tr>";
                                            }

                                            echo "</tbody>";
                                            //echo "</form>";
                                            echo "</table>";

//                                    show_new_tasks($am);
                                            ?></form>
<!--                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <caption class="text-center ">New Tasks</caption>
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Subject</th>
                                                <th>From</th>
                                                <th>End Date</th>
                                                <th>Accept</th>
                                            </tr>
                                            </thead>
                                        </table>-->

                                    </div>

                                    <hr />

                                    <div class="panel panel-danger">
                                        <div class="panel-heading text-center text-muted">
                                            <h5>ASSIGNED TASKS</h5>
                                        </div>
                                        <!-- .panel-heading -->
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion">
                                                <?php

                                                function taskButtonHandlers() {
                                                    $dtToggle = "modal";
                                                    $dtTarget = array(0 => "#newDescrLog", 1 => "#markCompleted", 2 => "#deleteTask");
                                                    $classAdd = "btn btn-outline btn-primary";
                                                    $classComplete = "btn btn-outline btn-succes";
                                                    $classDelete = "btn btn-outline btn-danger";
                                                    $classes = [$classAdd, $classComplete, $classDelete];
                                                    $type = "modal";
                                                    $id = "";
                                                    $buttonNames = array(0 => "Update", 1 => "Complete", 2 => "Delete");
                                                    $N = count($buttonNames);
                                                    for ($i = 0; $i < $N; $i++) {
                                                        buttonDraw($index[$i], $classes[$i], $type, $id, $dtToggle, $dtaTarget[$i]);
                                                    }
                                                }

                                                $sql_user_details = "SELECT `post_id`, `ep_id`, `s_id` FROM `personel` WHERE `AM`=$am";
                                                $qry_user_details = $db->runQuery($sql_user_details);
                                                while ($row_user_details = mysqli_fetch_array($qry_user_details)) {

                                                    $user_post_id = $row_user_details['post_id'];
                                                    $user_epistasia = $row_user_details['ep_id'];
                                                    $user_section = $row_user_details['s_id'];
                                                }

                                                if ($user_post_id == 11) {
                                                    $sql = "SELECT `subject_id`, `subject`, `description`, `user_reg`, `exp_date`, `progress`  FROM `tbl_tasks` WHERE  `isAssigned`=1 AND `isCompleted`=0 AND `isRealeased`=1 OR `user_reg`=$am";
                                                    $qry_assigned_tasks = $db->runQuery($sql);
                                                } else if ($user_post_id == 12) {
                                                    $sql = "SELECT `subject_id`, `subject`, `description`, `user_reg`, `exp_date`, `progress`  FROM `tbl_tasks` WHERE (`ep_id`=$user_epistasia  AND `isAssigned`=1 AND `isRealeased`=1 AND `isCompleted`=0) OR (`user_reg`=$am AND `isCompleted`=0 AND `isAssigned`=1)";
                                                    $qry_assigned_tasks = $db->runQuery($sql);
                                                } else if ($user_post_id == 13) {
                                                    $sql = "SELECT `subject_id`, `subject`, `description`, `user_reg`, `exp_date`, `progress`  FROM `tbl_tasks` WHERE `s_id`=$user_section AND `ep_id`=$user_epistasia AND `isAssigned`=1 AND `isCompleted`=0 OR `user_reg`=$am";
                                                    $qry_assigned_tasks = $db->runQuery($sql);
                                                } else if ($user_post_id == 14) {
                                                    $sql = "SELECT `subject_id`, `subject`, `description`, `user_reg`, `exp_date`, `progress`  FROM `tbl_tasks` WHERE `user_id`=$am AND `isAssigned`=1 AND `isCompleted`=0 OR `Forwarder`=$am";
                                                    $qry_assigned_tasks = $db->runQuery($sql);
                                                }


                                                while ($row_assigned_tasks = mysqli_fetch_array($qry_assigned_tasks)) {
                                                    $loop_var = 0;
                                                    echo "<div class=\"panel panel-default\">";
                                                    echo "<div class=\"panel-heading\">";
                                                    echo "<h4 class=\"panel-title\">";
                                                    echo "<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#" . $row_assigned_tasks['subject_id'] . "\"><strong>#" . $row_assigned_tasks['subject_id'] . " " . $row_assigned_tasks['subject'] . "</strong></a>";
                                                    echo "</h4>";
                                                    //panel heading apo task id /panel-default
                                                    echo "</div>";
                                                    echo "<div id=\"" . $row_assigned_tasks['subject_id'] . "\" class=\"panel-collapse collapse\">";
                                                    echo "<div class=\"panel-body\">";
                                                    $assigned_id = $row_assigned_tasks['subject_id'];
                                                    $subject_id_parse[$loop_var] = $row_assigned_tasks['subject_id'];
                                                    $sql_show_descr = "SELECT `description_log`, `last_user`, `date_reg` FROM `tbl_tasks_description` WHERE `subject_id`=$assigned_id";
                                                    $qry_show_descr = $db->runQuery($sql_show_descr);
                                                    echo "<h4>Description : " . $row_assigned_tasks['description'] . "</h4>";
                                                    echo "<br />";
                                                    echo "<div class\"row\">";
                                                    echo "<div class=\"col-lg-6\">";
                                                    echo "<div class=\"panel panel-primary\">
                                                          <div class=\"panel-heading text-center\">"
                                                    . "Task History"
                                                    . "</div>";
                                                    echo "<div class=\"panel-body\">";
                                                    echo "<div class=\"table-responsive\">";
                                                    echo "<table class=\"table table-striped table-hover\">";
                                                    $taskHistoryTable = array(0 => "Descr", 1 => "Last Mod", 2 => "From");
                                                    $N = count($taskHistoryTable);
                                                    echo "<thead>";
                                                    echo "<tr>";
                                                    for ($i = 0; $i < $N; $i++) {
                                                        echo "<th>" . $taskHistoryTable[$i] . "</th>";
                                                    }
                                                    echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while ($row_show_descr = mysqli_fetch_array($qry_show_descr)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row_show_descr['description_log'] . "</td>";
                                                        echo "<td>" . $row_show_descr['date_reg'] . "</td>";
                                                        echo "<td>" . $row_show_descr['last_user'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";
                                                    echo "</table>";
                                                    // table responsible
                                                    echo "</div>";
                                                    //panel body
                                                    echo "</div>";
                                                    //panel

                                                    echo "</div>";
                                                    //col-lg-6
                                                    echo "<br />";
                                                    $progress = $row_assigned_tasks['progress'];
                                                    drawProgressBar($progress);
                                                    echo "<br />";
                                                    echo "<div class=\"row\">";
//                                                    buttonDraw("Update", "btn btn-outline btn-primary", "button", "id", "modal", "newDescrLog");
                                                    echo "</div>";
                                                    echo "</div>";
//                                                    taskButtonHandlers();
                                                    echo "<p>";
                                                    //echo $i;
                                                    echo $subject_id_parse[$loop_var];
                                                    echo "<button type=\"button\" class=\"btn btn-outline btn-primary\" data-toggle=\"modal\" data-target=\"#update" . "$subject_id_parse[$loop_var]" . " \">Update</button>";
                                                    echo "<button type=\"button\" class=\"btn btn-outline btn-success\" data-toggle=\"modal\" data-target=\"#markCompleted" . "$subject_id_parse[$loop_var]" . "\">Succes</button>";
                                                    echo "<button type=\"button\" class=\"btn btn-outline btn-danger\" data-toggle=\"modal\" data-target=\"#deleteTask" . $subject_id_parse[$loop_var] . "\">Delete</button>";
                                                    //buttonDraw("Update", "btn btn-outline btn-primary", "button", "id", "modal", "newDescrLog");
                                                    //buttonDraw("Success", "btn btn-outline btn-success", "button", "id", "modal", "markCompleted");
                                                    //buttonDraw("Delete", "btn btn-outline btn-danger", "button", "id", "modal", "deleteTask");
                                                    echo "</p>";
                                                    //row from task history panel
                                                    echo "</div>";
                                                    //panel collapse





                                                    echo "</div>";

                                                    //panel to kyrio
                                                    echo "</div>";
                                                    $loop_var = $loop_var + 1;
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <!-- .panel-body -->
                                    </div>

                                    <div class="panel panel-success">
                                        <div class="panel-heading text-center text-muted">
                                            <h5>COMPLETED TASKS</h5>
                                        </div>
                                        <!-- .panel-heading -->
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion">
                                                <?php
                                                $sql = "SELECT `subject_id`, `subject`, `description`, `user_reg`, `dateCompleted`, `progress`  FROM `tbl_tasks` WHERE `user_id`=$am AND `isAssigned`=1 AND `isCompleted`=1";
                                                $qry_assigned_tasks = $db->runQuery($sql);

                                                while ($row_assigned_tasks = mysqli_fetch_array($qry_assigned_tasks)) {
                                                    $loop_var = 0;
                                                    echo "<div class=\"panel panel-default\">";
                                                    echo "<div class=\"panel-heading\">";
                                                    echo "<h4 class=\"panel-title\">";
                                                    echo "<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#" . $row_assigned_tasks['subject_id'] . "\"><strong>#" . $row_assigned_tasks['subject_id'] . " " . $row_assigned_tasks['subject'] . "</strong></a>";
                                                    echo "</h4>";
                                                    //panel heading apo task id /panel-default
                                                    echo "</div>";
                                                    echo "<div id=\"" . $row_assigned_tasks['subject_id'] . "\" class=\"panel-collapse collapse\">";
                                                    echo "<div class=\"panel-body\">";
                                                    $assigned_id = $row_assigned_tasks['subject_id'];
                                                    $subject_id_parse[$loop_var] = $row_assigned_tasks['subject_id'];
                                                    $sql_show_descr = "SELECT `description_log`, `last_user`, `date_reg` FROM `tbl_tasks_description` WHERE `subject_id`=$assigned_id";
                                                    $qry_show_descr = $db->runQuery($sql_show_descr);
                                                    echo "<h4>Description : " . $row_assigned_tasks['description'] . "</h4>";
                                                    echo "<h4>Date completed : " . $row_assigned_tasks['dateCompleted'] . "</h4>";
                                                    echo "<br />";
                                                    echo "<div class\"row\">";
                                                    echo "<div class=\"col-lg-6\">";
                                                    echo "<div class=\"panel panel-primary\">
                                                          <div class=\"panel-heading text-center\">"
                                                    . "Task History"
                                                    . "</div>";
                                                    echo "<div class=\"panel-body\">";
                                                    echo "<div class=\"table-responsive\">";
                                                    echo "<table class=\"table table-striped table-hover\">";
                                                    $taskHistoryTable = array(0 => "Descr", 1 => "Last Mod", 2 => "From");
                                                    $N = count($taskHistoryTable);
                                                    echo "<thead>";
                                                    echo "<tr>";
                                                    for ($i = 0; $i < $N; $i++) {
                                                        echo "<th>" . $taskHistoryTable[$i] . "</th>";
                                                    }
                                                    echo "</tr>";
                                                    echo "</thead>";
                                                    echo "<tbody>";
                                                    while ($row_show_descr = mysqli_fetch_array($qry_show_descr)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row_show_descr['description_log'] . "</td>";
                                                        echo "<td>" . $row_show_descr['date_reg'] . "</td>";
                                                        echo "<td>" . $row_show_descr['last_user'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "</tbody>";
                                                    echo "</table>";
                                                    // table responsible
                                                    echo "</div>";
                                                    //panel body
                                                    echo "</div>";
                                                    //panel

                                                    echo "</div>";
                                                    //col-lg-6
                                                    echo "<br />";
                                                    $progress = $row_assigned_tasks['progress'];
                                                    drawProgressBar($progress);
                                                    echo "<br />";
                                                    echo "<div class=\"row\">";
//                                                    buttonDraw("Update", "btn btn-outline btn-primary", "button", "id", "modal", "newDescrLog");
                                                    echo "</div>";
                                                    echo "</div>";
//                                                    taskButtonHandlers();
                                                    echo "<p>";
                                                    //echo $i;
                                                    echo $subject_id_parse[$loop_var];
                                                    echo "</p>";
                                                    //row from task history panel
                                                    echo "</div>";
                                                    //panel collapse





                                                    echo "</div>";

                                                    //panel to kyrio
                                                    echo "</div>";
                                                    $loop_var = $loop_var + 1;
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <!-- .panel-body -->
                                    </div>

                                </div>
                                <!-- /panel Tasks -->
                            </div>
                        </div>

                    </div>
                    <!-- Modal Start  Add Tasks -->
                    <div class="modal fade" id="newTask" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title text-center">Add New Task</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="addTask" name="addNewTask" action="../php_functions/add_new_task.php" method="POST">
                                        <div class="form-horizontal">
                                            <div class="form-group bg-primary">

                                                <label class="col-sm-2 control-label">Subject : </label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="subject" class="form-control input-group-lg" required="Επιλέξτε Θέμα" placeholder="Θέμα">
                                                </div>
                                            </div>


                                            <hr />
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Task Created by User : </label><?php
                                                $user_reg = $_SESSION['login_user'][2];
                                                $chk_post = $_SESSION['login_user'][3];
                                                $user_details = "SELECT `ep_id`, `s_id` FROM `personel` WHERE `AM`=$am";
                                                $qry_user_details = $db->runQuery($user_details);
                                                while ($row_user_details = mysqli_fetch_array($qry_user_details)) {
                                                    $_epistasia = $row_user_details['ep_id'];
                                                    $_section = $row_user_details['s_id'];
                                                }
                                                echo "<div class=\"col-sm-8\"><strong class=\"text-danger\">$user_reg - $chk_post </strong></div>";
                                                echo "<input class=\"hidden\" name=\"user_reg\"  value=\"" . $user_reg . "\">";
                                                echo "<input class=\"hidden\" name=\"epistasia\"  value=\"" . $_epistasia . "\">";
                                                echo "<input class=\"hidden\" name=\"section\"  value=\"" . $_section . "\">";
                                                echo "<input class=\"hidden\" name=\"post_id\"  value=\"" . $chk_post . "\">";
                                                ?>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Task Created by User : </label><?php
                                                echo "<div class=\"col-sm-8\"><strong class=\"text-danger\">$chk_post </strong></div>";
                                                
                                                ?>
                                            </div>
                                            <br />
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-4 control-label">Assigned to :</label>
                                                <div class="col-sm-8">
                                                    <select name="user_id" required="Choose a user" class="form-control">
                                                        <?php
                                                        require_once '../php_functions/db_config/db_connect.php';
                                                        $db = new DbMgmt();
                                                        $db->runQuery("SET NAMES 'utf8'");


                                                        switch ($chk_post) {
                                                            case 11 :
                                                                $sql = "SELECT `AM`, `surname`, `rank_name` FROM `personel` WHERE `post_id`=12";
                                                                break;
                                                            case 12 :
                                                                $find_epid_sql = "SELECT `ep_id` FROM `personel` WHERE `AM`=$user_reg";
                                                                $user_epid = $db->runQuery($find_epid_sql);
                                                                $res_user_eipd = mysqli_fetch_array($user_epid);
                                                                $res_epid = $res_user_eipd['ep_id'];
                                                                $sql = "SELECT `AM`, `surname`, `rank_name` FROM `personel` WHERE `post_id`=13 AND `ep_id`=$res_epid OR `AM`=$user_reg";
                                                                break;
                                                            case 13 :
                                                                $find_esid_sql = "SELECT `s_id` FROM `personel` WHERE `AM`=$user_reg";
                                                                $user_esid = $db->runQuery($find_esid_sql);
                                                                $res_user_esid = mysqli_fetch_row($user_esid);
                                                                $res_esid = $res_user_esid[0];
                                                                $sql = "SELECT `AM`, `surname`, `rank_name` FROM `personel` WHERE `post_id`=14 AND `s_id`=$res_esid OR `AM`=$user_reg";
                                                                break;
                                                            case 14 :
                                                                $sql = "SELECT * FROM `personel` WHERE `AM`=$user_reg ";
                                                                break;
                                                        }
                                                        $assign_results = $db->runQuery($sql);
                                                        echo "<option value=\"\" selected disabled>Choose</option>";
                                                        while ($assgnRow = mysqli_fetch_array($assign_results)) {
                                                            echo "<option value=\"" . $assgnRow['AM'] . "\">" . $assgnRow['surname'] . " (" . $assgnRow['AM'] . ")" . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-4 control-label">Start Date : </label>
                                                <div  class="input-group date col-sm-6" >
                                                    <input type="text" class="form-control date datepicker" required="" name="init_date">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-4 control-label">End Date   : </label>
                                                <div class="input-group date col-sm-6">
                                                    <input type="text" class="form-control date datepicker" required="" name="end_date" >
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div>
                                            <br />
                                            <br />
                                            <strong class="text-success">Description :</strong>
                                            <textarea class="form-control" rows="5" required="Write" name="description"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="saveChanges" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="modal fade" id="forwardTaskToUser" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title text-center">Forward Task</h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="forward_Task" name="forwardTask" action="../php_functions/forward_task.php" method="POST">
                                        <div class="form-horizontal">
                                            <div class="form-group bg-primary">

                                                <label class="col-sm-2 control-label"></label>
                                            </div>


                                            <hr />
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-4 control-label">Select Task :</label>
                                                <div class="col-sm-8">
                                                    <?php
                                                    $sql_forward = "SELECT `subject_id`, `subject`   FROM `tbl_tasks` WHERE `user_id`=$am AND `isAssigned`=0";
                                                    $qry_forward = $db->runQuery($sql_forward);

                                                    echo "<select name=\"task\" class=\"form-control\" required=\"\">";
                                                    echo "<option value=\"\" selected disabled>Select Task </option>";
                                                    while ($row_forward_task = mysqli_fetch_array($qry_forward)) {
                                                        $task_id = $row_forward_task['subject_id'];
                                                        $task_subject = $row_forward_task['subject'];
                                                        echo "<option value=\"$task_id\"># $task_id" . "-" . $task_subject . "</option>";
                                                    }
                                                    echo "</select>";

                                                    //echo "<div class=\"col-sm-8\"><strong class=\"text-danger\">$user_reg</strong></div>";
                                                    echo "<input class=\"hidden\" name=\"am\"  value=\"" . $am . "\">";
                                                    ?>

                                                </div>
                                            </div>
                                            <div class="form-group form-group-sm">
                                                <label class="col-sm-4 control-label">Forward To :</label>
                                                <div class="col-sm-8">
                                                    <?php
                                                    $sql_forward_user = "SELECT `post_id`, `ep_id`, `s_id` FROM `personel` WHERE `AM`=$am";
                                                    $qry_forward_user = $db->runQuery($sql_forward_user);
                                                    while ($row_forward_user = mysqli_fetch_array($qry_forward_user)) {
                                                        $post_id = $row_forward_user['post_id'];
                                                        $forwarder_epistasia = $row_forward_user['ep_id'];
                                                        $forwarder_section = $row_forward_user['s_id'];
                                                    }
                                                    //echo $post_id;
                                                    //echo $am;

                                                    if ($post_id == 11) {
                                                        $sql_user_to_forward = "SELECT `AM`, `rank_name`, `surname` FROM `personel` WHERE `post_id`=12";
                                                        $qry_user_to_forward = $db->runQuery($sql_user_to_forward);
                                                        echo "<select name=\"user_to_forward\" class=\"form-control\" required=\"\">";
                                                        echo "<option value=\"\" selected disabled>Forward to </option>";
                                                        while ($row_user_to_forward = mysqli_fetch_array($qry_user_to_forward)) {
                                                            $am_to_forward = $row_user_to_forward['AM'];
                                                            $user_rank_to_forward = $row_user_to_forward['rank_name'];
                                                            $user_surname_to_forward = $row_user_to_forward['surname'];
                                                            echo "<option value=\"$am_to_forward\">$user_rank_to_forward" . " - " . $user_surname_to_forward . "</option>";
                                                        }
                                                        echo "</select>";
                                                    } else if ($post_id == 12) {
                                                        $sql_user_to_forward = "SELECT `AM`, `rank_name`, `surname` FROM `personel` WHERE `post_id`=13 AND `ep_id`=$forwarder_epistasia";
                                                        $qry_user_to_forward = $db->runQuery($sql_user_to_forward);
                                                        echo "<select name=\"user_to_forward\" class=\"form-control\" required=\"\">";
                                                        echo "<option value=\"\" selected disabled>Forward to </option>";
                                                        while ($row_user_to_forward = mysqli_fetch_array($qry_user_to_forward)) {
                                                            $am_to_forward = $row_user_to_forward['AM'];
                                                            $user_rank_to_forward = $row_user_to_forward['rank_name'];
                                                            $user_surname_to_forward = $row_user_to_forward['surname'];
                                                            echo "<option value=\"$am_to_forward\">$user_rank_to_forward" . "-" . $user_surname_to_forward . "</option>";
                                                        }
                                                        echo "</select>";
                                                    } else if ($post_id == 13) {
                                                        $sql_user_to_forward = "SELECT `AM`, `rank_name`, `surname` FROM `personel` WHERE `post_id`=14 AND `s_id`=$forwarder_section";
                                                        $qry_user_to_forward = $db->runQuery($sql_user_to_forward);
                                                        echo "<select name=\"user_to_forward\" class=\"form-control\" required=\"\">";
                                                        echo "<option value=\"\" selected disabled>Forward to </option>";
                                                        while ($row_user_to_forward = mysqli_fetch_array($qry_user_to_forward)) {
                                                            $am_to_forward = $row_user_to_forward['AM'];
                                                            $user_rank_to_forward = $row_user_to_forward['rank_name'];
                                                            $user_surname_to_forward = $row_user_to_forward['surname'];
                                                            echo "<option value=\"$am_to_forward\">$user_rank_to_forward" . "-" . $user_surname_to_forward . "</option>";
                                                        }
                                                        echo "</select>";
                                                    } else if ($post_id == 14) {
                                                        $sql_user_to_forward = "SELECT `AM`, `rank_name`, `surname` FROM `personel` WHERE `post_id`=14 AND `s_id`=$forwarder_section";
                                                        $qry_user_to_forward = $db->runQuery($sql_user_to_forward);
                                                        echo "<select name=\"user_to_forward\" class=\"form-control\" required=\"\">";
                                                        echo "<option value=\"\" selected disabled>Forward to </option>";
                                                        while ($row_user_to_forward = mysqli_fetch_array($qry_user_to_forward)) {
                                                            $am_to_forward = $row_user_to_forward['AM'];
                                                            $user_rank_to_forward = $row_user_to_forward['rank_name'];
                                                            $user_surname_to_forward = $row_user_to_forward['surname'];
                                                            echo "<option value=\"$am_to_forward\">$user_rank_to_forward" . "-" . $user_surname_to_forward . "</option>";
                                                        }
                                                        echo "</select>";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                            <br />

                                            <br />
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="forwardTask" class="btn btn-primary">Forward</button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Modals Starts Update Delete Complete task -->
                    <?php
                    $sql_update_tasks = "SELECT `subject_id` , `subject` FROM `tbl_tasks` WHERE `user_id`=$am AND `isAssigned`=1";
                    $qry_update_tasks = $db->runQuery($sql_update_tasks);
                    while ($row_update_tasks = mysqli_fetch_array($qry_update_tasks)) {
                        $loop_var = 0;
                        $subject_id_parse[$loop_var] = $row_update_tasks['subject_id'];

                        //Update Modal
                        echo "<div class=\"modal fade\" id=\"update" . $subject_id_parse[$loop_var] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">\n";
                        echo "<div class=\"modal-dialog\">\n";
                        echo "<div class=\"modal-content\">\n";
                        echo "<div class=\"modal-header\">\n";
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>\n";
                        echo "<h4 class=\"modal-title text-center \">Update Task Job </h4>\n";
                        //modal header
                        echo "</div>\n";
                        $sbj_to_update = $row_update_tasks['subject'];
                        $sbj_id_update = $row_update_tasks['subject_id'];
                        echo $sbj_id_update;

                        echo "<div class=\"modal-body\">\n";
                        echo "<form role=\"form\" id=\"updateForm\" name=\"updateTask\" action=\"../php_functions/update_tasks.php\" method=\"POST\">\n";
                        echo "<div class=\"form-horizontal\">\n";
                        echo "<div class=\"form-group\">\n";
                        //echo "<div class=\"row\"";
                        echo "<label class=\"col-sm-8 control-label\">Update Task Status : " . $sbj_to_update . "</label>\n";
                        //echo "</div>";
                        //Heading of Modal
                        echo "<input class=\"hidden\" name=\"user_reg\"  value=\"" . $user_reg . "\">\n";
                        echo "<input class=\"hidden\" name=\"subject_id\"  value=\"" . $sbj_id_update . "\">\n";
                        echo "</div>\n";

                        echo "<hr />\n";
                        echo "<br />\n";
                        echo "<br />\n";
                        echo "<strong class=\"text-success\">Update Status :</strong>\n";
                        echo "<textarea class=\"form-control\" rows=\"10\" required=\"Write\" name=\"updateStatus\"></textarea>\n";

                        echo "<br />\n";

                        /*
                         * Select progress
                         */
                        echo "<div class=\"form-group form-group-sm\">\n";
                        echo "<div class=\"col-md-4\">\n";
                        echo "<label class\"control-label\">Select progress : </label>\n";
                        echo "</div>\n";
                        echo "<div class=\"col-md-2\">\n";
                        echo "<select class=\"col-sm-8 form-control\" name=\"progress\">\n";
                        for ($arx = 0; $arx < 100; $arx++) {
                            echo "<option value=\"" . $arx . "\">" . $arx . "</option>\n";
                        }
                        echo "</select>\n";
                        echo "</div>\n";
                        echo "</div>\n";
                        /*
                         * End here
                         */
                        //Select ends here:

                        echo "<div class=\"form-group form-group-sm\">\n";
                        echo "<div class=\"col-md-4\">\n";
                        echo "<label>Release : </label>\n";
                        echo "</div>\n";
                        echo "<div class=\"col-md-2\">\n";
                        echo "<label class=\"radio-inline\">\n";
                        echo "<input type=\"radio\" name=\"isReleased\" id=\"isRel\" value=\"1\" checked>Yes";
                        echo "</label>\n";
                        echo "</div>\n";
                        echo "<div class=\"col-md-2\">\n";
                        echo "<label class=\"radio-inline\">\n";
                        echo "<input type=\"radio\"  name=\"isReleased\" id=\"isRel\" value=\"0\">No";
                        echo "</label>\n";
                        echo "</div>\n";
                        echo "</div>\n";

                        /*
                         * Is Released is ends Here::
                         */

                        echo "<div class=\"form-group form-group-sm\">\n";
                        echo "<div class=\"col-md-4\">\n";
                        echo "<label>Is editable : </label>\n";
                        echo "</div>\n";
                        echo "<div class=\"col-md-2\">\n";
                        echo "<label class=\"radio-inline\">\n";
                        echo "<input type=\"radio\" name=\"isEditable\" id=\"isEdi\" value=\"1\" checked>Yes";
                        echo "</label>\n";
                        echo "</div>\n";
                        echo "<div class=\"col-md-2\">\n";
                        echo "<label class=\"radio-inline\">\n";
                        echo "<input type=\"radio\"  name=\"isEditable\" id=\"isEdi\" value=\"0\">No";
                        echo "</label>\n";
                        echo "</div>\n";
                        echo "</div>\n";

                        echo "</div>";
                        //Modal Body
                        echo "</div>";
                        echo "<div class=\"modal-footer\">";
                        echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
                        echo "<button type=\"submit\" id=\"update\" class=\"btn btn-primary\">Update</button>";
                        echo "</form>";




                        //Modal Footer
                        echo "</div>";

                        // modal content
                        echo "</div>";

                        // modal dialog
                        echo "</div>";

                        //modal end
                        echo "</div>";


                        //Complete Modal
                        echo "<div class=\"modal fade\" id=\"markCompleted" . $subject_id_parse[$loop_var] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
                        echo "<div class=\"modal-dialog\">";
                        echo "<div class=\"modal-content\">";
                        echo "<div class=\"modal-header\">";
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>";
                        echo "<h4 class=\"modal-title text-center \">Complete Task</h4>";
                        //modal header
                        echo "</div>";

                        echo "<div class=\"modal-body\">";
                        echo "<form role=\"form\" id=\"complete_task\" name=\"completeTask\" action=\"../php_functions/complete_task.php\" method=\"POST\">";
                        echo "<div class=\"form-horizontal\">";

                        echo "<div class=\"form-group text-center\">\n";
                        //echo "<div class=\"row\"";
                        echo "<label class=\"text-center\">Are you sure you want to mark <strong class=\"text-success\">" . $sbj_to_update . "</strong> task as completed?</label>\n";
                        //echo "</div>";
                        //Heading of Modal
                        echo "<input class=\"hidden\" name=\"user_reg\"  value=\"" . $user_reg . "\">\n";
                        echo "<input class=\"hidden\" name=\"subject_id\"  value=\"" . $sbj_id_update . "\">\n";
                        echo "<input class=\"hidden\" name=\"progress\"  value=\"100\">\n";
                        echo "<input class=\"hidden\" name=\"isReleased\"  value=\"1\">\n";
                        echo "</div>\n";


                        echo "</div>";
                        //Modal Body
                        echo "</div>";
                        echo "<div class=\"modal-footer\">";
                        echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
                        echo "<button type=\"submit\" class=\"btn btn-success\">Completed</button>";
                        echo "</form>";




                        //Modal Footer
                        echo "</div>";

                        // modal content
                        echo "</div>";

                        // modal dialog
                        echo "</div>";

                        //modal end
                        echo "</div>";


                        //Delete Modal
                        echo "<div class=\"modal fade\" id=\"deleteTask" . $subject_id_parse[$loop_var] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
                        echo "<div class=\"modal-dialog\">";
                        echo "<div class=\"modal-content\">";
                        echo "<div class=\"modal-header\">";
                        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>";
                        echo "<h4 class=\"modal-title text-center \">Update Task Job </h4>";
                        //modal header
                        echo "</div>";

                        echo "<div class=\"modal-body\">";
                        echo "<form role=\"form\" id=\"addTask\" name=\"updateTask\" action=\"../php_functions/update_task.php\" method=\"POST\">";
                        echo "<div class=\"form-horizontal\">";




                        echo "</div>";
                        echo "</form>";
                        //Modal Body
                        echo "</div>";
                        echo "<div class=\"modal-footer\">";
                        echo "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
                        echo "<button type=\"button\" class=\"btn btn-danger\">Delete</button>";




                        //Modal Footer
                        echo "</div>";

                        // modal content
                        echo "</div>";

                        // modal dialog
                        echo "</div>";

                        //modal end
                        echo "</div>";
                    }
                    ?>
                    <!-- Modal Start Update task -->
                    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title text-center ">Update Task Job </h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="addTask" name="updateTask" action="../php_functions/update_task.php" method="POST">
                                        <div class="form-horizontal">
                                            <div class="form-group bg-primary">

                                                <label class="col-sm-2 control-label">Subject : </label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="subject" class="form-control input-group-lg" required="Επιλέξτε Θέμα" placeholder="Θέμα">
                                                </div>
                                            </div>


                                            <hr />
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Task Created by User : </label><?php
                                                $user_reg = $_SESSION['login_user'][2];
                                                echo "id" . $subject_id_parse[0];
                                                echo "<div class=\"col-sm-8\"><strong class=\"text-danger\">$user_reg</strong></div>";
                                                echo "<input class=\"hidden\" name=\"user_reg\"  value=\"" . $user_reg . "\">";
                                                ?>

                                            </div>
                                            <br />
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>

                    </div>


                    <!-- Modal Mark Complete task -->
                    <div class="modal fade" id="#" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>

                    </div>


                    <!-- Modal Delete task -->
                    <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>


        <!-- DataTables JavaScript -->
        <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Datepicker Theme -->
        <script type="text/javascript" src="../bower_components/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../bower_components/datepicker/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="../bower_components/datepicker/locales/bootstrap-datepicker.el.min.js"></script>

        <script>
                                            $(document).ready(function () {
                                                $("#dataTables-example").DataTable({
                                                    responsive: true
                                                });
                                            });
        </script>

        <script type="text/javascript">
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked",
                clearBtn: true,
                language: "el",
                orientation: "top right",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true

            });
        </script>


        <script>
            $(document).ready(function () {
                $("#saveChanges").click(function () {
                    $("#addTask").submit();
                });

            });
            $(document).ready(function () {
                $("#accept").click(function () {
                    $("#acceptForm").submit();
                });
            });

            $(document).ready(function () {
                $("button.update").click(function () {
                    $("#updateForm").submit();
                });
            });

            $(document).ready(function () {
                $("#forwardTask").click(function () {
                    $("#forward_Task").submit();
                });
            });


        </script>





    </body>

</html>

