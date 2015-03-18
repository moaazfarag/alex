<?php if(!class_exists('raintpl')){exit;}?><!--footer start-->
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
<script src="template/./js/jquery.js"></script>
<script src="template/./js/jquery-1.8.3.min.js"></script>
<script src="template/./js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="template/./js/jquery.dcjqaccordion.2.7.js"></script>
<script src="template/./js/jquery.scrollTo.min.js"></script>
<script src="template/./js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="template/./js/jquery.sparkline.js" type="text/javascript"></script>
<script src="template/./assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="template/./js/owl.carousel.js" ></script>
<script src="template/./js/jquery.customSelect.min.js" ></script>
<script src="template/./js/respond.min.js" ></script>

<script class="include" type="text/javascript" src="template/./js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="template/./js/common-scripts.js"></script>

<!--script for this page-->
<script src="template/./js/sparkline-chart.js"></script>
<script src="template/./js/easy-pie-chart.js"></script>
<script src="template/./js/count.js"></script>

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