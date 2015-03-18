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
						<h2 class="page-title">
				اعضاء هيئة التدريب</h2>
			<div class="stripe-line"></div>
		</div>

	       
                        <!---------------------- dalel elmarakez eltadrebya  -------------->
                <div class="box1">
                    <div class="image1">
                        <img src="./template/img/test.jpg" border="0">
                    </div>
                    <div class="details1">
                        <div class="title1">
                            <div style="font-weight: bold; color: #00468C;">أنس محمد ابو بكر</div>
                        </div>
                        <div class="subtitle1">
                            <div style="font-weight: normal; ">
                                مدرب معتمد من برنامج القبعات الست في التفكير 
                            </div>

                        </div>
                        <div class="description1">
                             مدرب معتمد من برنامج القبعات الست في التفكير 
                            مدرب معتمد من برنامج القبعات الست في التفكير 
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
           <!---------------------- dalel elmarakez eltadrebya  -------------->
           
		</div>
<aside id="sidebar">
    <div id="nav_menu-8" class="widget widget_nav_menu"><div class="widget-top"><h4>اعضاء هيئة التدريب</h4><div class="stripe-line"></div></div>
						<div class="widget-container"><div class="menu"><ul id="menu" class="menu"><li id="menu-item-673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-673"><a href="#">اعضاء هئية التدريب</a></li>
<li id="menu-item-674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-674"><a href="search-member.php">البحث عن مدرب</a></li>
</ul></div></div></div><!-- .widget /-->        <div class="full-width"><a href="#"  ><img src="./template/wp-content/uploads/2015/01/4331.jpg"></a></div>

                <div class="full-width"><a href="#"  ><img src="./template/wp-content/uploads/2015/01/gif-de-bono.gif"></a></div>

                <div class="full-width"><a href="#"  ><img src="./template/wp-content/uploads/2015/01/43.jpg"></a></div>

        </aside>
<div class="clear"></div>
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