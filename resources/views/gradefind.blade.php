@include('header')
@include('left')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Tables</a></li>
        <li><a href="javascript:;">Managed Tables</a></li>
        <li class="active">Buttons</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">学生体侧成绩</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-2 -->

        <!-- end col-2 -->
        <!-- begin col-10 -->
        <div class="col-md-10">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">学生成绩</h4>
                </div>
                <div class="alert alert-warning fade in">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                            您可以在这里搜索你要查询的学生，点击下方按钮可以导出学生成绩
                </div>
                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>姓名</th>
                            <th>学号</th>
                            <th>身高</th>
                            <th>体重</th>
                            <th>肺活量</th>
                            <th>50m</th>
                            <th>立定跳远</th>
                            <th>坐位体前屈</th>
                            <th>800M/1000M跑</th>
                            <th>仰卧起坐</th>
                            <th>引体向上</th>
                            <th>左眼视力</th>
                            <th>右眼视力</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stu_grade as $grade)
                        <tr class="odd gradeX">
                            <td>{{ $grade->stu_name }}</td>
                            <td>{{ $grade->stu_id }}</td>
                            <td>{{ $grade->height }}</td>
                            <td>{{ $grade->weight }}</td>
                            <td>{{ $grade->gas }}</td>
                            <td>{{ $grade->fm}}</td>
                            <td>{{ $grade->em}}</td>
                            <td>{{ $grade->sit_ups }}</td>
                            <td>{{ $grade->jump }}</td>
                            <td>{{ $grade->sit_flexion }}</td>
                            <td>{{ $grade->sit_ups }}</td>
                            <td>{{ $grade->sit_ups }}</td>
                            <td>{{ $grade->bodyup }}</td>
                            <td>{{ $grade->left_eye }}</td>
                            <td>{{ $grade->right_eye }}</td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-10 -->
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
<script src="{{ URL::asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/table-manage-buttons.demo.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        TableManageButtons.init();
    });
</script>
</body>
</html>