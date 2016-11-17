<!DOCTYPE html>
<html>

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

        <!-- Timeline CSS -->
        <link href="../dist/css/timeline.css" rel="stylesheet">

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

    <body onload="setInterval('chat.update()', 1000)">
        <?php
        session_start();
        //echo $_SESSION['login_user'][0] . " " . $_SESSION['login_user'][1];
        $user = $_SESSION['login_user'][1];
        ?>
        <div class="chat-panel panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>
                Chat
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu slidedown">
                        <li>
                            <a href="#">
                                <i class="fa fa-refresh fa-fw"></i> Refresh
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-circle fa-fw"></i> Available
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-times fa-fw"></i> Busy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o fa-fw"></i> Away
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" onclick="window.close()">
                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="chat-body clearfix">
                    <div class="header">
                        <p id="name-area"></p>
                    </div>
                    <p id="chat-area"></p>
                </div>
                <!--                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <small class=" text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font">Jack Sparrow</strong>
                                                <small class="pull-right text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <small class=" text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                            </p>
                                        </div>
                                    </li>-->
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
                <div class="input-group">
                    <form id="send-message-area">
                        <div class="form-group">
                            <input id="sendie" type="text" class="form-control input-sm" placeholder="Type your message here..." maxlength='100' />
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="sendie">
                                    Send
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <!-- Custom Chat Theme JavaScript -->
        <script src="chat.js"></script>

        <script type="text/javascript">

                                // ask user for name with popup prompt    
                                var name = <?php echo $user ?>;

                                // default name is 'Guest'
                                //if (!name || name === ' ') {
                                //name = "Guest";	
                                //}

                                // strip tags
                                //name = name.replace(/(<([^>]+)>)/ig, "");

                                // display name on page
                                $("#name-area").html("<span>" + name + "</span>");

                                // kick off chat
                                var chat = new Chat();
                                $(function () {

                                    chat.getState();

                                    // watch textarea for key presses
                                    $("#sendie").keydown(function (event) {

                                        var key = event.which;

                                        //all keys including return.  
                                        if (key >= 33) {

                                            var maxLength = $(this).attr("maxlength");
                                            var length = this.value.length;

                                            // don't allow new content if length is maxed out
                                            if (length >= maxLength) {
                                                event.preventDefault();
                                            }
                                        }
                                    });
                                    // watch textarea for release of key press
                                    $('#sendie').keyup(function (e) {

                                        if (e.keyCode == 13) {

                                            var text = $(this).val();
                                            var maxLength = $(this).attr("maxlength");
                                            var length = text.length;

                                            // send 
                                            if (length <= maxLength + 1) {

                                                chat.send(text, name);
                                                $(this).val("");

                                            } else {

                                                $(this).val(text.substring(0, maxLength));

                                            }


                                        }
                                    });

                                });
        </script>

    </body>
</html>
