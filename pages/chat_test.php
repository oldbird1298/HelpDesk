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

        <?php
        session_start();
        //echo $_SESSION['login_user'][0] . " " . $_SESSION['login_user'][1];
        $user = $_SESSION['login_user'][1];
        ?>
        <script type="text/javascript">

            // ask user for name with popup prompt    
            var name = <?php echo "$user" ?>;

            // default name is 'Guest'
            //if (!name || name === ' ') {
            //name = "Guest";	
            //}

            // strip tags
            name = name.replace(/(<([^>]+)>)/ig,"");

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

    </head>

    <body onload="setInterval('chat.update()', 1000)">
        
        <div id="page-wrapper">
            
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your Message : </p>
            <textarea id="sendie" maxlength="100"></textarea>
        </form>
            

        </div>
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

    </body>
</html>
