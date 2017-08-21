@include('/header')
@include('/left')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">成绩录入</a></li>
        <li class="active">成绩录入</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">成绩录入<small>选择要录入的班级</small></h1>
    <!-- end page-header -->

    <!-- begin row -->

    <!-- begin col-6 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse" STYLE="width: 300PX" data-sortable-id="table-basic-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">已有班级</h4>
            </div>
            <div class="panel-body" STYLE="width: 300PX">
                <table class="table">
                    <thead>
                    <tr>

                        <th>班级名称</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach( $Class as $clas)
                        <tr>
                            <td><a href="{{url('/find/'.$clas->class_id.'/edit')}}">{{$clas->class_name}}</a></td>
                        </tr>
                    @endforeach



                    </tbody>



                </table>
            </div>
        </div>
        <!-- end panel -->
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
