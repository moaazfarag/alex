<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<!--
 * Created by PhpStorm.
 * User 	: Mohamed Hafez
 * Email	: Mohamed.hafezqo@gmail.com
 * Mobile	: 01144688896
 * Date:
 * Time: 5:20 PM


-->
<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header") . ( substr("header",-1,1) != "/" ? "/" : "" ) . basename("header") );?>

<div id="main-content" class="containersidebar-right">
	<div class="content">
		<div class="page-head">
			<h1 class="page-title">
				الملف الصحفي 
                        </h1>
						<div class="stripe-line"></div>

					</div>
            <div class="box1">
                    <div class="image1">
                        <img src="./template//img/test.jpg" border="0">
                    </div>
                    <div class="details1">
                        <div class="title1">
                            <div style="font-weight: bold; color: #00468C;">الملف الصحفي </div>
                        </div>
                        <div class="subtitle1">
                            <div style="font-weight: normal; ">
الملف الصحفي الملف الصحفي الملف الصحفي الملف الصحفي                                 
                            </div>

                        </div>
                        <div class="description1">
الملف الصحفي الملف الصحفي الملف الصحفي الملف الصحفي                                 
                                <br/>
الملف الصحفي الملف الصحفي الملف الصحفي الملف الصحفي                                 
                        </div>
                    </div>
                    <div class="footer1">
                        <div class="owner1">المالك: شركة مساهمه</div>
                        <div class="statistics1">
                            28-12-2014 
                        </div>

                    </div>
                    <div class="shadow1">
                        <div class="shadow1"> </div>
                    </div>

                </div> <br/><br/>
				
								
				
				
<div id="comments">

		

		
</div><!-- #comments -->
	</div><!-- .content -->

<aside id="sidebar">
<div id="nav_menu-2" class="widget widget_nav_menu"><div class="widget-top">
        <h4>البوابة الاعلامية</h4>
        <div class="stripe-line">
            
        </div>
            
    </div>
    <div class="widget-container">
        <div class="menu-media-updates-container">
            <ul id="menu-media-updates" class="menu">
                <li id="menu-item-642" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-642">
                    <a href="eventsAndConferences.php">فعاليات و مؤتمرات</a>
                </li>
                <li id="menu-item-643" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-643">
                    <a href="pressFile.php">الملف الصحفي</a>
                </li>
                <li id="menu-item-644" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-644">
                    <a href="index7f33.html?cat=31">الملف الاعلامي</a>
                </li>
                <li id="menu-item-651" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-651">
                    <a href="index6032.html?page_id=649">قنوات البث المباشر</a>
                </li>
                <li id="menu-item-646" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-646">
                    <a href="index97dc.html?cat=33">فخر الاكاديمية</a>
                </li>
                <li id="menu-item-647" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-647">
                    <a href="index489b.html?cat=34">ارشيف الاخبار</a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- .widget /-->        <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif1.gif"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/4331.jpg"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif-de-bono.gif"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/43.jpg"></a></div>

        </aside><div class="clear"></div>
<nav class="container-last-menu">
    <div class="last-wrap">
        <div class="main-menu"><ul id="menu-%d9%82%d8%a7%d8%a6%d9%85%d8%a9-%d8%a7%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%81%d9%88%d8%aa%d8%b1" class="menu"><li id="menu-item-464" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-465" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-466" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-467" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-468" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
<li id="menu-item-469" class="menu-item  menu-item-type-custom  menu-item-object-custom"><a href="#">عنوان رئيسي</a></li>
</ul></div>    </div>
</nav><!-- .main-nav /-->
<div class="clear"></div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("footer") . ( substr("footer",-1,1) != "/" ? "/" : "" ) . basename("footer") );?>