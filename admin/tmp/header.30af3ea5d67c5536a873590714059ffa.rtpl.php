<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<!--
 * Created by PhpStorm.
 * User 	: Mohamed Hafez
 * Email	: Mohamed.hafezqo@gmail.com
 * Mobile	: 01144688896
 * Date:
 * Time: 5:20 PM


-->

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="./template/./img/favicon.png">
    <style>
        @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css); 
        .kufi
        {
            font-family: 'Droid Arabic Kufi', serif;
        }
        .font18
        {
            font-size: 18pt;
        }
        .font10
        {
            font-size: 10pt;
        }
    </style>
    <title>لوحة التحكم</title>

    <!-- Bootstrap core CSS -->
    <link href="./template/./css/bootstrap.min.css" rel="stylesheet">
    <link href="./template/./css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="./template/./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="./template/./assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./template/./css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="./template/./css/style.css" rel="stylesheet">
    <link href="./template/./css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="./template/./js/html5shiv.js"></script>
    <script src="./template/./js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="#" class="logo"><span>Debono</span></a>
    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="./template/./img/avatar1_small.jpg">
                         <span class="username"> test </span>
                                       <!--<span class="username"> <?php echo $ahmed;?></span>-->
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
