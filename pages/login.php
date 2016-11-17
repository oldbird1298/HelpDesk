<!DOCTYPE html>
<html lang="eng">

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
            <script src="/bower_components/bootstrap/html5shiv.js" type="text/javascript"></script>
            <script src="/bower_components/bootstrap/respond.min.js" type="text/javascript"></script>
        <![endif]-->



    </head>

    <body>
        <div class="container" id="wrap">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Είσοδος</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../php_functions/eisodos.php" method="post" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="AM" name="am" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Κωδικός" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Είσοδος</a>-->
                                    <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Είσοδος</button>
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModal">Εγγραφή</button>
                                    <span><?php
                                        echo $_error;
                                        ?></span>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog"></div>
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Εφαρμογή Διαχείρησεις Προσωπικού</h4>
                    </div>
                    <div class="modal-body">
                        <p>Συμπήρώστε τα στοιχεία σας στην Παρακάτω φόρμα.</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-lg-6 col-md-6 well well-sm">
                                    <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Εγγραφή!</legend>
                                    <form name='register_user' action="../php_functions/classes/validateUsers/sotreUser.php" method="post" class="form-horizontal" role="form">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <label>Στοιχεία Στρατιωτικού</label>
                                                <input class="form-control" name="AM" placeholder="Αριθμός Μητρώου" type="text"
                                                       required autofocus />
                                            </div>
                                            <!-- 
                                            <div class="col-xs-6 col-md-6">
                                                <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                                            </div>-->
                                        </div>
                                        <input class="form-control" name="name" placeholder="Όνομα" type="text" required="Please fill Name" />
                                        <input class="form-control" name="surname" placeholder="Επώνυμο" type="text" required="Please fill Surname" />
                                        <div class="row">
                                            <div class="col-xs-6 col-lg-6 col-md-6">
                                                <select class="form-control" required="Choose Rank" name="rank_id">
                                                    <option value="" selected disabled>Βαθμός </option>
                                                    <option value="4">1.Ταξίαρχος</option>
                                                    <option value="5">2.Σμήναρχος</option>
                                                    <option value="6">3.Αντισμήναρχος</option>
                                                    <option value="7">4.Επισμηναγός</option>
                                                    <option value="8">5.Σμηναγός</option>
                                                    <option value="9">6.Υποσμηναγός</option>
                                                    <option value="10">7.Ανθηποσμηναγός</option>
                                                    <option value="11">8.Ανθηπαστπηστης</option>
                                                    <option value="12">9.Αρχισμηνίας</option>
                                                    <option value="13">10.Επισμηνίας</option>
                                                    <option value="14">11.Σμηνίας</option>
                                                    <option value="15">12.Υποσμηνίας</option>
                                                    <option value="16">13.Σμηνίτης</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label for="">
                                            Επιστασία - Τμήμα</label>
                                        <div class="row">
                                            <div class="col-xs-4 col-md-4">
                                                <select name='epistasia' onchange="window.loadSection()" class="form-control" required="">
                                                    <option value="" selected disabled >Επιστασία </option>
                                                    <?php
                                                    require_once '../php_functions/db_config/db_connect.php';
                                                    $db = new DbMgmt();
                                                    $db->runQuery("SET NAMES 'utf8'");
                                                    $r = $db->runQuery("Select * FROM `epistasia`");
                                                    while ($row = mysqli_fetch_assoc($r)):
                                                        ?>
                                                        <option value='<?php echo $row["ep_id"] ?>'><?php echo $row['name'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                            <div id='section_container' style="float:left"></div>
                                            <div style="clear: both"></div>
                                            <!--<div class="col-xs-6 col-md-6">
                                                <select class="form-control">
                                                    <option value="epistasia" selected disabled>Επιλέξτε Τμήμα </option>
                                                    <option value="Day">Τμ. Προγρμ. Αεράμ.</option>
                                                </select>
                                            </div>-->

                                        </div>
                                        <input class="form-control" name="telephone" placeholder="Εσωτερικό Τηλ." type="text" required="Please fill" />
                                        <label>Στοιχεία Κατοικίας</label>
                                        <input class="form-control" name="address" placeholder="Διεύθηνση" type="text" required="Please fill" />
                                        <input class="form-control" name="city" placeholder="Πόλη" type="text" required="Please fill" />
                                        <input class="form-control" name="mobile" placeholder="Κινητό" type="text" required="Please fill" />
                                        <label>Επιλέξτε κωδικό</label>
                                        <input class="form-control" name="password" placeholder="New Password" type="password" />
                                        <input class="form-control" name="reTypePassword" placeholder="Retype Password" type="password" />
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                                            Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                                            Female
                                        </label>
                                        <br />
                                        <br />
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                                            Εγγραφή</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../bower_components/bootstrap/placeholders.js" type="text/javascript"></script>
    <script src="../bower_components/bootstrap/better-placeholder-polyfill.js" type="text/javascript"></script>

    <script src="../php_functions/loadSection.js" type="text/javascript"></script>

</body>

</html>

