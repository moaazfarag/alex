<?php if(!class_exists('raintpl')){exit;}?>


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header") . ( substr("header",-1,1) != "/" ? "/" : "" ) . basename("header") );?>
<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header-section") . ( substr("header-section",-1,1) != "/" ? "/" : "" ) . basename("header-section") );?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="">
            <div class="col-sm-10">
                <section class="panel">
                    <header class="panel-heading">
                        <center> جميع الحقائب التدريبية</center>
                       
                    </header>


                  <div class="col-md-11" style="margin-top: 10px; margin-bottom: 10px; background-color: white;">
                      <section class="panel" style="margin-bottom: 10px;">
                            
               <form method="post" action="deleteMultipleUsers.php"> 

                          <table class="table table-striped table-hover kufi font10" style=" margin-top: 10px; margin-bottom: 10px;" >
                              <thead>

                              <tr>
                              <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>  

                                   <script type="text/javascript">
                                        $(document).ready(function() {
                                                $('#checkall').click(function(event) {  //on click 
                                                    if(this.checked) { // check select status
                                                        $('.checkbox1').each(function() { //loop through each checkbox
                                                            this.checked = true;  //select all checkboxes with class "checkbox1"               
                                                        });
                                                    }else{
                                                        $('.checkbox1').each(function() { //loop through each checkbox
                                                            this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                                                        });         
                                                    }
                                                });

                                            });
                                                            
                                    </script>

                                  <th>اسم الحقيبة</th>
                                  <th>نبذة عن الحقيبة</th>
                                  <th>وصف كامل عن الحقيبة</th>
                                  <th>التاريخ</th>
                                  <th>المؤلف</th>
                                  
                                  
                              </tr>
                              </thead>
                              <tbody>
                                  <?php $counter1=-1; if( isset($trainingpackages) && is_array($trainingpackages) && sizeof($trainingpackages) ) foreach( $trainingpackages as $key1 => $value1 ){ $counter1++; ?>
                              <tr>

                                  <td><?php echo $value1["name"];?></td>
                                  <td><a href="#" style="color: blue; "><?php echo $value1["name"];?></a></td>
                                  <td><?php echo $value1["mini_description"];?></td>
                                  <td><?php echo $value1["date"];?> </td>
                                  <td><?php echo $value1["owner"];?> </td>
                                  
                              </tr>
                                    <?php } ?>
                              </tbody>
                          </table>
                          
                            <!--   clear div-->

                          <div class="clear"></div>
                                                      <!--   Update All button-->

                          <center>
                                    <button type="submit" name="delete" class="btn btn-danger btn-xs" >Delete</button>

                          </center>
</form>
                      </section>
                  </div>
              </div>

            
                </section>
            </div>
        </div>
    </section>
</section>


<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2013 &copy; FlatLab by VectorLab.
        <a href="#" class="go-top">
            <i class="icon-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="./template/js/jquery.js"></script>
<script src="./template/js/jquery-1.8.3.min.js"></script>
<script src="./template/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="./template/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="./template/js/jquery.scrollTo.min.js"></script>
<script src="./template/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="./template/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="./template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="./template/js/owl.carousel.js" ></script>
<script src="./template/js/jquery.customSelect.min.js" ></script>
<script src="./template/js/respond.min.js" ></script>

<script class="include" type="text/javascript" src="./template/js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="./template/js/common-scripts.js"></script>

<!--script for this page-->
<script src="./template/js/sparkline-chart.js"></script>
<script src="./template/js/easy-pie-chart.js"></script>
<script src="./template/js/count.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>