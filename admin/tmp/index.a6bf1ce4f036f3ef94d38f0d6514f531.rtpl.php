<?php if(!class_exists('raintpl')){exit;}?>



<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header") . ( substr("header",-1,1) != "/" ? "/" : "" ) . basename("header") );?>
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