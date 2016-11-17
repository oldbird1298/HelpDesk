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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                            <li><a href="navbar/userProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                                        <a href="navbar/userProfile.php">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">System</a>
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
                                    <li>
                                        <a href="#">Send a Report</a>
                                    </li>
                                    <li>
                                        <a href="mase_workstation.php">Mase Workstation</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">First Level Item Chat</a>
                                            </li>
                                            <li>
                                                <a href="#">Second Level Item</a>
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
                            <h1 class="page-header">Mase Workstation</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <article class="col-xs-2">

                                <button type="button" class="btn btn-lg btn-circle btn-success " data-toggle="modal" data-target="#new_workstation" style="border-radius: 50% !important; -webkit-box-shadow: 0px 0px 3px 1px #3e8f3e; -moz-box-shadow:    0px 0px 3px 1px #3e8f3e; box-shadow:         0px 0px 3px 1px #3e8f3e;"><i class="glyphicon glyphicon-plus"></i></button>
                                <h4 class="text-center"> Add</h4>
                                <br />
                            </article>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <strong>MASE Workstation - <?php echo date("j - m - Y"); ?></strong>
                                </div>
                                <div class="panel-body">

                                    <div class="dataTables_wrapper">
                                        <?php
                                        require_once '../php_functions/Cvutils/utils.php';
                                        require_once '../php_functions/db_config/db_connect.php';
                                        $class = "table";
                                        $headArray = array("Θέση", "Serial Number", "Hostname", "MAC", "IP Address", "Switchport", "Patch Panel");
                                        $head = count($headArray);
                                        $sql = "SELECT `Serial_Number`, `Host_Name`, `MAC`, `ipAddrr`, `switchport`, `patch_panel_port`, `post` FROM `mase_ws`";
                                        $db = new DbMgmt;
                                        $db->runQuery("SET NAMES 'utf8'");
                                        $res = $db->runQuery($sql);
                                        echo "<table class=\"table table-striped table-bordered table-hover\" id=\"personel\">";
                                        echo "<caption class=\"text-center \">MASE WorkStation</caption>";
                                        echo "<thead>";
                                        echo "<tr>";
                                        for ($i = 0; $i < $head; $i++) {
                                            echo "<th>" . $headArray[$i] . "</th>";
                                        }
                                        echo "</tr>";
                                        echo "</thead>";

                                        echo "<tbody>";
                                        while ($row_workstation = mysqli_fetch_array($res)) {
                                            echo "<tr>";
                                            echo "<td>" . $row_workstation['post'] . "</td>";
                                            echo "<td>" . $row_workstation['Serial_Number'] . "</td>";
                                            echo "<td>" . $row_workstation['Host_Name'] . "</td>";
                                            echo "<td>" . $row_workstation['MAC'] . "</td>";
                                            echo "<td>" . $row_workstation['ipAddrr'] . "</td>";
                                            echo "<td>" . $row_workstation['switchport'] . "</td>";
                                            echo "<td>" . $row_workstation['patch_panel_port'] . "</td>";
                                            echo "</tr>";
                                        }

                                        echo "</tbody>";

                                        echo "</table>";


                                        //table($class, $headArray, $res);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="modal fade" id="new_workstation" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Add a New Workstation</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addWorkstation" name="addNewWorkstation" action="../php_functions/add_new_workstation.php" method="POST">
                                    <div class="form-horizontal">
                                        <div class="form-group bg-primary">

                                            <label class="col-sm-4 control-label">Serial Number : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="serial" class="form-control input-group-lg" required="" placeholder="Serial">
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Hostname : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="hostname" class="form-control input-group-lg" required="" placeholder="Hostname">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Θέση : </label>
                                            <div class="col-sm-8">
                                                <select name="post" class="form-control input-group-lg" required="" placeholder="Θέση">
                                                    <option value="" selected disabled>Select Post </option>
                                                    <option value="MC">MC</option>
                                                    <option value="MC/A">MC/A</option>
                                                    <option value="WA/BM">WA/BM</option>
                                                    <option value="RPO">RPO </option>
                                                    <option value="FA">FA </option>
                                                    <option value="FAA">FAA</option>
                                                    <option value="IC1">IC1 </option>
                                                    <option value="IC2">IC2 </option>
                                                    <option value="IC3">IC3 </option>
                                                    <option value="IC4">IC4 </option>
                                                    <option value="IC5/SAM">IC5/SAM </option>
                                                    <option value="SAM">SAM </option>
                                                    <option value="DLM">DLM </option>
                                                    <option value="TPO">TPO </option>
                                                    <option value="TPOA">TPOA </option>
                                                    <option value="IO">IO </option>
                                                    <option value="IOA">IOA </option>
                                                    <option value="TKM1">TKM1 </option>
                                                    <option value="TKM2">TKM2 </option>
                                                    <option value="TKM3">TKM3 </option>
                                                    <option value="TKM4">TKM4 </option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">MAC : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="MAC" class="form-control input-group-lg" required="" placeholder="MAC Address">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">IP : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="ipAddrr" class="form-control input-group-lg" required="" placeholder="IP Address">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Switch Port : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="switchport" class="form-control input-group-lg" required="" placeholder="Switch Port">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Patch Panel : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="patchpanel" class="form-control input-group-lg" required="" placeholder="Patch Panel Port">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">HD Serial No. : </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="hd_serial" class="form-control input-group-lg" required="" placeholder="Serial Number of HD">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="col-sm-4 control-label">Αυτοκόλλητο : </label>
                                            <div class="col-sm-4">
                                                <input type="checkbox" name="label" value="Yes" class="form-control input-group-lg">
                                            </div>
                                        </div>

                                        <hr />
                                        
                                        <br />
                                        
                                        <br />
                                        
                                        <br />
                                        
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

        <script>
                                            $(document).ready(function () {
                                                $("#personel").DataTable({
                                                    responsive: true
                                                });
                                            });
        </script>
        
        <script>
        $(document).ready(function () {
                $("#saveChanges").click(function () {
                    $("#addWorkstation").submit();
                });

            });
        </script>
        

    </body>

</html>

