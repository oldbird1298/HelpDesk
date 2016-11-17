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
        <link href="../css/icheck/flat/green.css" rel="stylesheet">


        <script src="../js/jquery.min.js"></script>

        <!--[if lt IE 9]>
              <script src="../assets/js/ie8-responsive-file-warning.js"></script>
              <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->

    </head>

    <body style="background:#F7F7F7;">

        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <form id="login_user" name="login_user" action="../php/UserData/login_user.php" method="POST">
                            <h1>SECNET</h1>
                            <div>
                                <input type="text" name="asma" class="form-control" placeholder="ΑΣΜΑ" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button class="btn btn-default submit" name="submit" type="submit">Log in</button>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                                <p class="change_link">New to SECNET?
                                    <a href="#toregister" class="to_register"> Create Account </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
                <div id="register" class="animate form">
                    <section class="login_content">
                        <form id="create_account" name="create_account" action="../php/UserData/register.php" method="POST">
                            <h1>Create Account</h1>



                            <div>
                                <input name="asma" type="text" class="form-control" placeholder="ΑΣΜΑ" required="Please fill the gap" />
                            </div>
                            <div>
                                <input name="name" type="text" class="form-control" placeholder="ΟΝΟΜΑ" required="Please fill the gap" />
                            </div>
                            <div>
                                <input name="surname" type="text" class="form-control" placeholder="ΕΠΩΝΥΜΟ" required="Please fill the gap" />
                            </div>
                            <div>
                                <input name="password" type="password" class="form-control" placeholder="Password" required="Please fill the gap" />
                            </div>
                            <div>
                                <input name="chk_pswd" type="password" class="form-control" placeholder="Re-type Password" required="Please fill the gap" />
                            </div>
                            <br />
                            <div>
                                <select name="unit_id" class="form-control">
                                    <?php
                                    require_once '../php/DataBase/dbConnect.php';
                                    $db = new DbMgmt();
                                    $db->runQuery("SET NAMES 'utf8'");
                                    $r = $db->runQuery("Select * FROM `Units`");
                                    while ($row = mysqli_fetch_assoc($r)):
                                        ?>
                                        <option value='<?php echo $row["unit_id"] ?>'><?php echo $row['unit_name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>










                             <br />
                            <div>
                                <button class="btn btn-default submit" type="submit">Submit</button> 
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                                <p class="change_link">Already a member ?
                                    <a href="#tologin" class="to_register"> Log in </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <!-- where the response will be displayed -->
                                <div id='response'></div>
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> HAF SecNET</h1>

                                    <p>©2016 All Rights Reserved. Oldbird! Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#create_account').submit(function () {

                    // show that something is loading
                    $('#response').html("<b>Creating Account...</b>");

                    /*
                     * 'post_receiver.php' - where you will pass the form data
                     * $(this).serialize() - to easily read form data
                     * function(data){... - data contains the response from post_receiver.php
                     */
                    $.ajax({
                        type: 'POST',
                        url: '../php/UserData/register.php',
                        data: $(this).serialize()
                    })
                            .done(function (data) {

                                // show the response
                                $('#response').html(data);

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

    </body>

</html>
