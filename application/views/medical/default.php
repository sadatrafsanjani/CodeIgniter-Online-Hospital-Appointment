<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/lib/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/stylesheets/theme.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resources/lib/font-awesome/css/font-awesome.css">

        <script src="<?= base_url(); ?>resources/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

        <!-- Demo page code -->
        <script type="text/javascript">
        
            function dump(){
                
                var check = confirm('Are You Sure ?');
                
                if(check){
                    
                    return true;
                }
                else{
                    
                    return false;
                }
            }
        
        </script>

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
        <link rel="shortcut icon" href="<?= base_url(); ?>resources/../assets/ico/favicon.ico">
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

                   
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i><?php echo $this->session->userdata('doctor_name'); ?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>superdoctor/logout.html">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <a class="brand" href="<?= base_url(); ?>"><span class="first">Your</span> <span class="second">Company</span></a>
            </div>
        </div>
        <div class="sidebar-nav">
            <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
            <ul id="dashboard-menu" class="nav nav-list collapse in">
                <li><a href="<?=base_url(); ?>superdoctor">Home</a></li>
                <li ><a href="<?= base_url(); ?>superdoctor/patient_info.html">Patient</a></li>
            </ul>

            <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i></a>
            <ul id="accounts-menu" class="nav nav-list collapse">
                <li ><a href="reset-password.html">Reset Password</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="header">
            </div>
            <div class="container-fluid">
                <div class="row-fluid">

                    <?php echo $content; ?>

                    <footer>
                        <hr>

                        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>

                        <p>&copy; 2012 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                    </footer>

                </div>
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