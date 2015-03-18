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
				
	<!------------------- start form for form ----------------->

		     <div class="post-inner" style="background-color:#FDF8E8;">
                    <h1 class="name post-title endivy-title" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
                        <span itemprop="name">الاهداف</span>
                    </h1>
                        
                            <div >
                                
                                الاهداف 
                            </div> 
                    <!----------------- end of form         ----------->
                        
                        
                    <span style="display:none" class="updated">2015-01-21</span>
                                            <div style="display:none" class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><sdivong class="fn" itemprop="name"><a href="#?rel=author">+amin</a></sdivong></div>
                    
                </div><!-- .post-inner -->		
                        
      	<!-------------------end form ----------------->
				

<!----------- end of div for goals ------------------>

         
		</div>
<aside id="sidebar">
        <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif1.gif"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/4331.jpg"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/gif-de-bono.gif"></a></div>

                <div class="full-width"><a href="#" target="_blank"><img src="./template/wp-content/uploads/2015/01/43.jpg"></a></div>

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