<?php if(!class_exists('raintpl')){exit;}?>

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


<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("footer-admin") . ( substr("footer-admin",-1,1) != "/" ? "/" : "" ) . basename("footer-admin") );?>