<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Doctor Panel</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="hospital">
        <meta name="author" content="RJ">

        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/stylesheets/theme.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resources/lib/font-awesome/css/font-awesome.css">

        <script src="<?= base_url(); ?>resources/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

        <!-- Demo page code -->

        <style type="text/css">
            #line-chart {
                height:300px;
                width:800px;
                margin: 0px auto;
                margin-top: 1em;
            }
            .brand { font-family: georgia, serif; }
            .brand .first {
                color: #ccc;
                font-style: italic;
            }
            .brand .second {
                color: #fff;
                font-weight: bold;
            }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>resources/../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>resources/../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>resources/../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>resources/../assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
    <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
    <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
    <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <body class=""> 
        <!--<![endif]-->

        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav pull-right">

                </ul>
                <a class="brand" href="<?php echo base_url(); ?>doctor"><span class="first">Doctor</span> <span class="second">Arena</span></a>
            </div>
        </div>

        <div class="row-fluid">
            <div class="dialog">
                <div class="block">
                    <p class="block-heading">Sign In</p>
                    <div class="block-body">
                    <?php
                
                        $exception = $this->session->userdata('exception');

                        if($exception){

                            echo $exception;
                            $this->session->unset_userdata('exception');
                        }


                        $message = $this->session->userdata('message');

                        if($message){

                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                    ?>
                        <form action="<?= base_url(); ?>doctor/doctor_login.html" method="POST">
                            <label>Username</label>
                            <input type="text" name="doctor_email" class="span12">
                            <label>Password</label>
                            <input type="password" name="doctor_password" class="span12">
                            <input type="submit" value="Sign In" class="btn btn-primary pull-right">
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <p><a href="reset-password.html">Forgot your password?</a></p>
            </div>
        </div>
        <script src="<?= base_url(); ?>resources/lib/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
            $("[rel=tooltip]").tooltip();
            $(function() {
                $('.demo-cancel-click').click(function() {
                    return false;
                });
            });
        </script>

    </body>
</html>