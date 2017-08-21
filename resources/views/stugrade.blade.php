@include('/header')
@include('/left')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Tables</a></li>
        <li class="active">Managed Tables</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Data Table - Default</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="width:50PX;">学号</th>
                                <th style="width:50PX;">班级</th>
                                <th style="width:50PX;">姓名</th>
                                <th style="width:50PX;">身高</th>
                                <th style="width:50PX;">体重</th>
                                <th style="width:50PX;">肺活量</th>
                                <th style="width:50PX;">50m</th>
                                <th style="width:50PX;">800m</th>
                                <th style="width:50PX;">1000m</th>
                                <th style="width:50PX;">左眼视力</th>
                                <th style="width:50PX;">右眼视力</th>
                                <th style="width:50PX;">立定跳远</th>
                                <th style="width:50PX;">坐卧体前驱</th>
                                <th style="width:50PX;">仰卧起坐</th>
                                <th style="width:50PX;">引体向上</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td>20154225023</td>
                                <td>软件1501</td>
                                <td>雷宗威</td>
                                <td><input style="width:40px;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>
                                <td><input style="width:40PX;" type="text" ></td>

                            </tr>

                            </tbody>
                        </table>
                        <button>提交</button>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--[if lt IE 9]>
        <script src="{{ URL::asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
        <script src="{{ URL::asset('assets/crossbrowserjs/respond.min.js')}}"></script>
        <script src="{{ URL::asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
        <![endif]-->
        <script src="{{ URL::asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{ URL::asset('assets/js/apps.min.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        </body>
        </html>
