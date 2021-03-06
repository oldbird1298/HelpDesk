<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SECNET! | </title>

        <!-- Bootstrap core CSS -->

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/maps/jquery-jvectormap-2.0.3.css" />
        <link href="../css/icheck/flat/green.css" rel="stylesheet" />
        <link href="../css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="../js/jquery.min.js"></script>
        <script src="../js/nprogress.js"></script>

        <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



    </head>


    <body class="nav-md">
        <?php
        session_start();
        $name = $_SESSION['login_user'][0];
        $surname = $_SESSION['login_user'][1];
        $asma = $_SESSION['login_user'][2];
        $unit = $_SESSION['login_user'][3];
        $mode = $_SESSION['login_user'][4];

        require_once '../php/DataBase/dbConnect.php';
        $db = new DbMgmt();
        $db->runQuery("SET NAMES 'utf8'");
        ?>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="dashboard_admin.php" class="site_title"><i class="fa fa-paw"></i> <span>HAF SECNet!</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php echo $asma ?></h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <?php
                                            if ($mode == 100) {
                                                echo "<li><a href=\"dashboard_admin.php\">Dashboard</a>"
                                                . "</li>";
                                            } elseif ($mode == 125 || $mode == 121 || $mode == 122 || $mode == 120) {
                                                echo "<li><a href=\"../empty.html\">Sub1.2</a>"
                                                . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Monitor <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="network.php">Network</a>
                                            </li>
                                            <li><a href="../empty.html">Meny2.2s</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                    if ($mode == 100) {
                                        echo "<li><a><i class=\"fa fa-edit\"></i> Configure <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                            <li><a href=\"conf_devices.php\">Devices</a>
                                            </li>
                                            <li><a href=\"database.php\">Database</a>
                                            </li>
                                            <li><a href=\"users.php\">Users</a>
                                            </li>
                                        </ul>
                                    </li>";
                                    }
                                    ?>
                                    <li><a><i class="fa fa-edit"></i> Site Status <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="site_status.php">Site Status </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">

                                <div class="row x_title">
                                    <div class="col-md-6">
                                        <h3>Database <small>configurations</small></h3>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Configure Items</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <p>Configure Items in the Database. Database must have all the inputs to monitor the status of Units</p>
                                            <a id="units" class="btn btn-app">
                                                <i class="fa fa-bullseye"></i> Units
                                            </a>
                                            <a id="radars" class="btn btn-app">
                                                <i class="fa fa-wifi"></i> Radars
                                            </a>
                                            <a id="radios" class="btn btn-app">
                                                <i class="fa fa-bullhorn"></i> Radios
                                            </a>
                                            <a id="phones" class="btn btn-app">
                                                <i class="fa fa-phone"></i> Phones
                                            </a>
                                            <a id="routers" class="btn btn-app">
                                                <i class="fa fa-flash"></i> Routers
                                            </a>
                                            <a id="switches" class="btn btn-app">
                                                <i class="fa fa-sitemap"></i> Switches
                                            </a>
                                            <a id="servers" class="btn btn-app">
                                                <i class="fa fa-server"></i> Servers
                                            </a>
                                            <a id="workstations" class="btn btn-app">
                                                <i class="fa fa-desktop"></i> Workstations
                                            </a>
                                            <a class="btn btn-app">
                                                <i class="fa fa-save"></i> Save
                                            </a>
                                            <a class="btn btn-app">
                                                <span class="badge bg-green">211</span>
                                                <i class="fa fa-users"></i> Users
                                            </a>
                                            <a class="btn btn-app">
                                                <span class="badge bg-blue">102</span>
                                                <i class="fa fa-heart-o"></i> Likes
                                            </a>
                                            <br/>
                                            <div id="item">
                                                <b id="config_menu">Choose Item to configure</b>
                                                <hr/>
                                                <div class="clearfix"></div>

                                                <form id="unit-Form" action="../php/Sites/addUnit.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Unit</p>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="unit-id">Unit ID <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="unit-id" name="unit-id" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="unit-name">Unit Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="unit-name" name="unit-name" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <form id="radar-Form" action="../php/Sites/addRadar.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                                                    <p>Add or Delete a Radar</p>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="radar-id">Radar ID <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radar_id" name="radar-id" required="required" class="form-control col-md-7 col-xs-12">
                                                            <input type="text" id="user_id" name="user_id" hidden="" value="" class="hidden">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="unit-name">Unit :<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select name="unit-name" class="form-control">
                                                                <option disabled="" selected="">Choose option</option>
                                                                <?php
                                                                $r = $db->runQuery("Select * FROM `Units`");
                                                                while ($row = mysqli_fetch_assoc($r)):
                                                                    ?>
                                                                    <option value='<?php echo $row["unit_id"] ?>'><?php echo $row['unit_name'] ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="radar-name">Radar Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radar-name" name="radar-name" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="radar-type">Radar Type <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radar-type" name="radar-type" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="location">Location 
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radar-location" name="radar-location"  class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <form id="radios-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="radio-name">Radio Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radio-name" name="radio-name" required="required" class="form-control col-md-7 col-xs-12">
                                                            <input type="text" id="user_id" name="user_id" hidden="" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="radio-id">Radio Address <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="radio-id" name="radio-id" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="unit-name">Unit :<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select name="unit-name" class="form-control">
                                                                <option disabled="" selected="">Choose option</option>
                                                                <?php
                                                                $r = $db->runQuery("Select * FROM `Units`");
                                                                while ($row = mysqli_fetch_assoc($r)):
                                                                    ?>
                                                                    <option value='<?php echo $row["unit_id"] ?>'><?php echo $row['unit_name'] ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="unit-name">Radio Type<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 xol-xs-12">
                                                            <select name="radio-type" class="form-control">
                                                                <option value="UHF">UHF</option>
                                                                <option value="VHF">VHF</option>
                                                                <option value="UHF/VHF">UHF/VHF</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>

                                                </form>
                                                <form id="phone-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                </form>
                                                <form id="routers-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                </form>
                                                <form id="switches-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                </form>
                                                <form id="servers-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                </form>
                                                <form id="workstations-Form" action="../php/" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                                    <p>Add or Delete a Phone line</p>

                                                </form>
                                            </div>
                                        </div>
                                        <div id='response'></div>
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <br />
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="../js/bootstrap.min.js"></script>

        <!-- gauge js -->
        <script type="text/javascript" src="../js/gauge/gauge.min.js"></script>
        <script type="text/javascript" src="../js/gauge/gauge_demo.js"></script>
        <!-- chart js -->
        <script src="../js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
        <!-- icheck -->
        <script src="../js/icheck/icheck.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="../js/moment/moment.min.js"></script>
        <script type="text/javascript" src="../js/datepicker/daterangepicker.js"></script>

        <script src="../js/custom.js"></script>

        <!-- flot js -->
        <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="../js/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.orderBars.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.time.min.js"></script>
        <script type="text/javascript" src="../js/flot/date.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="../js/flot/curvedLines.js"></script>
        <script type="text/javascript" src="../js/flot/jquery.flot.resize.js"></script>
        <script>
            $(document).ready(function () {
                $("#unit-Form").hide();
                $("#radar-Form").hide();
                $("#radios-Form").hide();
                $("#phone-Form").hide();
                $("#routers-Form").hide();
                $("#switches-Form").hide();
                $("#servers-Form").hide();
                $("#workstations-Form").hide();
                $("#units").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Units");
                    $("#unit-Form").show();
                });
                $("#radars").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Radars");
                    $("#radar-Form").show();
                });
                $("#radios").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Rdios");
                    $("#radios-Form").show();
                });
                $("#phones").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Phone lines");
                    $("#phone-Form").show();
                });
                $("#routers").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Routers");
                    $("#routers-Form").show();
                });
                $("#switches").click(function () {
                    $("form").hide();
                    $("#config_menu").text("LAN Config");
                    $("#switches-Form").show();
                });
                $("#servers").click(function () {
                    $("form").hide();
                    $("#config_menu").text("Servers");
                    $("#servers-Form").show();
                });
                $("#workstations").click(function () {
                    $("form").hide();
                    $("#config_menu").text("W/S");
                    $("#workstations-Form").show();
                });

                $('#unit-Form').submit(function () {

                    // show that something is loading
                    $('#response').html("<b>Saving Unit. . .!!!</b>");

                    /*
                     * 'post_receiver.php' - where you will pass the form data
                     * $(this).serialize() - to easily read form data
                     * function(data){... - data contains the response from post_receiver.php
                     */
                    $.ajax({
                        type: 'POST',
                        url: '../php/Sites/addUnit.php',
                        data: $(this).serialize()
                    })
                            .done(function (data) {

                                // show the response
                                $('#response').html(data);
                                $("#unit-id").val(" ");
                                $("#unit-name").val(" ");

                            })
                            .fail(function () {

                                // just in case posting your form failed
                                alert("Posting failed.");

                            });

                    // to prevent refreshing the whole page page
                    return false;


                });
                $('#radar-Form').submit(function () {

                    // show that something is loading
                    $('#response').html("<b>Storing Radar in the Databsae. . .!!!</b>");

                    /*
                     * 'post_receiver.php' - where you will pass the form data
                     * $(this).serialize() - to easily read form data
                     * function(data){... - data contains the response from post_receiver.php
                     */
                    $.ajax({
                        type: 'POST',
                        url: '../php/Sites/addRadar.php',
                        data: $(this).serialize()
                    })
                            .done(function (data) {

                                // show the response
                                $('#response').html(data);
                                $("#radar_id").val(" ");
                                $("#unit-name").val(" ");
                                $("#radar-name").val(" ");
                                $("#radar-type").val(" ");
                                $("#radar-location").val(" ");

                            })
                            .fail(function () {

                                // just in case posting your form failed
                                alert("Posting failed.");

                            });

                    // to prevent refreshing the whole page page
                    return false;


                });
                $('#radios-Form').submit(function () {

                    // show that something is loading
                    $('#response').html("<b>Storing Radio in the Databsae. . .!!!</b>");

                    /*
                     * 'post_receiver.php' - where you will pass the form data
                     * $(this).serialize() - to easily read form data
                     * function(data){... - data contains the response from post_receiver.php
                     */
                    $.ajax({
                        type: 'POST',
                        url: '../php/Sites/addRadio.php',
                        data: $(this).serialize()
                    })
                            .done(function (data) {

                                // show the response
                                $('#response').html(data);
                                $("#radio-name").val(" ");
                                $("#unit-name").val(" ");
                                $("#radio-id").val(" ");
                                

                            })
                            .fail(function () {

                                // just in case posting your form failed
                                alert("Posting failed.");

                            });

                    // to prevent refreshing the whole page page
                    return false;


                });
            });
        </script>
        <script>
            $(document).ready(function () {
                // [17, 74, 6, 39, 20, 85, 7]
                //[82, 23, 66, 9, 99, 6, 2]
                var data1 = [
                    [gd(2012, 1, 1), 17],
                    [gd(2012, 1, 2), 74],
                    [gd(2012, 1, 3), 6],
                    [gd(2012, 1, 4), 39],
                    [gd(2012, 1, 5), 20],
                    [gd(2012, 1, 6), 85],
                    [gd(2012, 1, 7), 7]
                ];
                var data2 = [
                    [gd(2012, 1, 1), 82],
                    [gd(2012, 1, 2), 23],
                    [gd(2012, 1, 3), 66],
                    [gd(2012, 1, 4), 9],
                    [gd(2012, 1, 5), 119],
                    [gd(2012, 1, 6), 6],
                    [gd(2012, 1, 7), 9]
                ];
                $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                    data1, data2
                ], {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        verticalLines: true,
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#fff'
                    },
                    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                    xaxis: {
                        tickColor: "rgba(51, 51, 51, 0.06)",
                        mode: "time",
                        tickSize: [1, "day"],
                        //tickLength: 10,
                        axisLabel: "Date",
                        axisLabelUseCanvas: true,
                        axisLabelFontSizePixels: 12,
                        axisLabelFontFamily: 'Verdana, Arial',
                        axisLabelPadding: 10
                                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                    },
                    yaxis: {
                        ticks: 8,
                        tickColor: "rgba(51, 51, 51, 0.06)",
                    },
                    tooltip: false
                });
                function gd(year, month, day) {
                    return new Date(year, month - 1, day).getTime();
                }
            });</script>

        <!-- worldmap -->
        <script type="text/javascript" src="../js/maps/jquery-jvectormap-2.0.3.min.js"></script>
        <script type="text/javascript" src="../js/maps/gdp-data.js"></script>
        <script type="text/javascript" src="../js/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="../js/maps/jquery-jvectormap-us-aea-en.js"></script>
        <!-- pace -->
        <script src="../js/pace/pace.min.js"></script>
        <script>
            $(function () {
                $('#world-map-gdp').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    zoomOnScroll: false,
                    series: {
                        regions: [{
                                values: gdpData,
                                scale: ['#E6F2F0', '#149B7E'],
                                normalizeFunction: 'polynomial'
                            }]
                    },
                    onRegionTipShow: function (e, el, code) {
                        el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                    }
                });
            });</script>
        <!-- skycons -->
        <script src="../js/skycons/skycons.min.js"></script>
        <script>
            var icons = new Skycons({
                "color": "#73879C"
            }),
                    list = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;
            for (i = list.length; i--; )
                icons.set(list[i], list[i]);
            icons.play();</script>

        <!-- dashbord linegraph -->
        <script>
            var doughnutData = [{
                    value: 30,
                    color: "#455C73"
                }, {
                    value: 30,
                    color: "#9B59B6"
                }, {
                    value: 60,
                    color: "#BDC3C7"
                }, {
                    value: 100,
                    color: "#26B99A"
                }, {
                    value: 120,
                    color: "#3498DB"
                }];
            var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);</script>
        <!-- /dashbord linegraph -->
        <!-- datepicker -->
        <script type="text/javascript">
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
                }

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').daterangepicker(optionSet1, cb);
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });</script>
        <script>
            NProgress.done();
        </script>
        <!-- /datepicker -->
        <!-- /footer content -->
    </body>

</html>
