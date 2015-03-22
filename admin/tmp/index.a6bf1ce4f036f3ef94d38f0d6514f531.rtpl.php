<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<!--
/*
    Theme Name: Adminty
    Theme URI: http://www.roqay.com
    Author: Hosam Zewain
    Author URI: http://www.hosamzewain.com
    Description:  Free Admin Panal
    Version: 1.0
*/
-->

<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adminy Admin Panal</title>
        <link href="./template/css/bootstrap.min.css" rel="stylesheet">
        <link href="./template/css/icon.css" rel="stylesheet">
        <link id="css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--Start Header Area-->
        <header class="container-fluid navbar navbar-default">
            <div class='col-lg-4 col-md-5 col-sm-7 col-xs-12 pull-right title'>
                <span class='glyphicon glyphicon-cog title_icon'></span>
                <h1 class='h3 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block title_text'>لوحة تحكم ادمني العربيه</h1> 
            </div>
            <div class='col-lg-2 col-md-3 col-sm-5 col-xs-12 text-center'><div class='dropdown  dropdown_nav'>
                    <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown'>
                        <span class='glyphicon glyphicon-user user_icon'></span>
                        Hosam Zewain
                        <span class='caret'></span>
                    </button> 
                    <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1'> 
                        <li>الوان اللوحة</li> 
                        <li role='presentation'>
                            <a role='menuitem' tabindex='-1' href='#' class='light'>light</a>
                            <a role='menuitem' tabindex='-1' href='#' class='dark'>dark</a>
                        </li>
                        <li role='presentation' class='divider'></li> 
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>معلومات الحساب</a></li> 
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>الرسائل الخاصة</a></li> 
                        <li role='presentation' class='divider'></li>
                        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>تسجيل خروج</a></li></ul> 
                </div></div>
        </header>
        <!--End Header Area-->

        <!--Start Mobile size Main Menu-->
        <div class="btn-group rtl btn-block hidden-lg hidden-md hidden-sm visible-xs">
            <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-list"></span>
                القائمة الرئيسية <span class="caret"></span>
            </button>
            <ul class="dropdown-menu main_menu_xs rtl text-center" role="menu">
                <li class="text-center"><a href="index.html">الرئيسية</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="siteinfo.html">بيانات الموقع</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة عضو</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الاعضاء</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة فئات</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الفئات</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">إضافة موضوع</a></li>
                <li class="divider"></li>
                <li class="text-center"><a href="#">عرض الموضوعات</a></li>
            </ul>
        </div>
        <!--End Mobile Size Main Meni-->

        <!--Start Admin Panal Main Body-->
        <div class="container-fluid main_block">
            <!--Start Admin Panal Main Left Menu-->
            <div class="main_menu col-lg-3 col-md-4 col-sm-3 hidden-xs pull-right">
                <img src="./template/img/site_logo.png" alt="">

                <div class="panel-group">
                    <a class="main_menu_link" href="index.html"><span class="glyphicon glyphicon-home menu_link_icon"></span>الصفحة الرئيسية</a>
                </div>
                <div class="panel-group">
                    <a class="main_menu_link" href="siteInfo.php"><span class="glyphicon glyphicon-link menu_link_icon"></span>بيانات الموقع</a>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#users" role="tab" aria-expanded="false" aria-controls="users">
                        <span class="glyphicon glyphicon-user menu_link_icon"></span>الاعضاء<span class="caret"></span>
                    </a>
                    <div id="users" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_users.html">إضافة عضو</a></li>
                            <li><a href="view_users.html">عرض الاعضاء</a></li>
                        </ul>
                    </div>
                </div>



                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#addnew11" role="tab" aria-expanded="false" aria-controls="addnew11">
                        <span class="glyphicon glyphicon-edit menu_link_icon"></span>المواضييع والمقالات<span class="caret"></span>
                    </a>
                    <div id="addnew11" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_topic.html">إضافة جديد</a></li>
                            <li><a href="view_topics.html">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#image_album" role="tab" aria-expanded="false" aria-controls="image_album">
                        <span class="glyphicon glyphicon-picture menu_link_icon"></span>البوم الصور<span class="caret"></span>
                    </a>
                    <div id="image_album" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="add_photo.html">إضافة جديد</a></li>
                            <li><a href="view_photos.html">عرض الكل</a></li>
                        </ul>
                    </div>
                </div>


                <div class="panel-group" role="tablist">
                    <a class="main_menu_link" data-toggle="collapse" href="#mailist" role="tab" aria-expanded="false" aria-controls="mailist">
                        <span class="glyphicon glyphicon-envelope menu_link_icon"></span>النشرة البريديه<span class="caret"></span>
                    </a>
                    <div id="mailist" class="panel-collapse collapse" role="tab" aria-expanded="false">
                        <ul class="list-group cols_item">
                            <li><a href="send_new_email.html">ارسال جديد</a></li>
                            <li><a href="view_mail_messages.html">عرض الرسائل</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-group">
                    <a class="main_menu_link" href="ads_control.html"><span class="glyphicon glyphicon-text-color menu_link_icon"></span>الاعلانات</a>
                </div>


            </div>
            <!--End Admin Panal Main Left Menu-->

            <!--Start Admin Panal MAin Content Right Block-->
            <div class="main_container col-lg-9 col-md-8 col-sm-9 col-xs- pull-left">
                <div class="row main_container_head">
                    <h4><span class="glyphicon glyphicon-home"></span>الصفحة الرئيسية </h4>
                </div>

                <div class="row control_panal_body">
                    <!--Start Admin Panal Section Description-->
                    <p class="page_desc">مرحبا بك في الصفحه الرئيسيه للوحة تحكم موقعك...</p>
                    <!--End Admin Panal Section Description-->

                    <div class="admin_index">
                        <!--Start Site Status-->
                        <div class="panel panel-default">
                            <div class="panel-heading text-right h4">احصائيات عامه عن الموقع</div>
                            <div class="text-center">
                                <div class="status">
                                    <h3 class="h4">المتواجدون الان</h3>
                                    <span><span class="glyphicon glyphicon-eye-open"></span></span>
                                    <h4 class="english">144</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد الاعضاء</h3>
                                    <span><span class="glyphicon glyphicon-user"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد الصفحات</h3>
                                    <span><span class="icon-file"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد المقالات</h3>
                                    <span><span class="glyphicon glyphicon-edit"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد الاقسام</h3>
                                    <span><span class="glyphicon glyphicon-folder-open"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عمر الموقع بالايام</h3>
                                    <span><span class="glyphicon glyphicon-hourglass"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد المديرين</h3>
                                    <span><span class="icon-user2"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                                <div class="status">
                                    <h3 class="h4">عدد الصور</h3>
                                    <span><span class="glyphicon glyphicon-picture"></span></span>
                                    <h4 class="english">222</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Site Status-->

                        <!--Start Note Panal-->
                        <div class="panel panel-default">
                            <!-- panel contents -->
                            <div class="panel-heading text-right h4">ملاحطات مديري الموقع
                                <a href="" title="إضافة جديد" class="pull-left text-primary glyphicon glyphicon-plus-sign"></a>
                            </div>
                            <div class="panel-body text-right">
                                <p>هنا يمكنك  إضافه ملاحظات او معلومات لتظهر لجميع مديري الموقع او لتذكيرك بعمل معين في الموقع</p>
                            </div>
                            <!-- Table -->
                            <table class="table">
                                <tr class="h4">
                                    <td class="">#</td>
                                    <td class="">العنوان</td>
                                    <td class="">الكاتب</td>
                                    <td class="">الملحوظة</td>
                                    <td class="text-center">التحكم</td>
                                </tr>
                                <tr>
                                    <td class="english">1</td>
                                    <td>ضروري</td>
                                    <td>Hosam</td>
                                    <td>مثال علي ملاحظه تكتب هنا</td>
                                    <td class="text-center">
                                        <a href="" title="view" class="glyphicon glyphicon-zoom-in"></a>
                                        <a href="" title="delete" class="glyphicon glyphicon-remove"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="english">2</td>
                                    <td>الي حسام</td>
                                    <td>Ahmed</td>
                                    <td>مثال علي ملاحظه اخري تكتب هنا</td>
                                    <td class="text-center">
                                        <a href="" title="view" class="glyphicon glyphicon-zoom-in"></a>
                                        <a href="" title="delete" class="glyphicon glyphicon-remove"></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!--End Note Panal-->
                    </div>
                </div>
            </div>
            <!--Start Admin Panal MAin Content Right Block-->
        </div>
        <!--End Admin Panal Main Body-->


        <!--Start Footer-->
        <div class="container-fluid last-foot"></div>
        <!--End Footer-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="./template/js/jquery-1.9.1.js"></script>
        <script src="./template/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./template/js/adminy.js"></script>


    </body>
</html>