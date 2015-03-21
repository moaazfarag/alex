<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="./template/img/favicon.png">
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
    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="./template/css/bootstrap.min.css" rel="stylesheet">
    <link href="./template/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="./template/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="./template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="./template/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="./template/css/style.css" rel="stylesheet">
    <link href="./template/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="./template/js/html5shiv.js"></script>
    <script src="./template/js/respond.min.js"></script>
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
                    <img alt="" src="./template/img/avatar1_small.jpg">
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



<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header-section") . ( substr("header-section",-1,1) != "/" ? "/" : "" ) . basename("header-section") );?>

<!--main content start-->
      <section id="main-content" style="margin-bottom:481px;">
          <section class="wrapper">
              <!--state overview start-->
              <!--state overview end-->
              <div style="text-align: center;" class="kufi font18">
                اهلا وسهلا في لوحة تحكم ديبونو 
              </div>
          </section>
      </section >
      <!--main content end-->
<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("footer") . ( substr("footer",-1,1) != "/" ? "/" : "" ) . basename("footer") );?>