@include('/header')
@include('/left')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">学院班级管理</a></li>
        <li class="active">班级管理</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">学院班级管理<small>这里你可以对班级进行修改</small></h1>
    <!-- end page-header -->

    <!-- begin row -->

    <!-- begin col-6 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">已有班级</h4>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>

                        <th>班级名称</th>
                        <th>删除</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach( $Class as $clas)
                        <tr>

                            <td>{{$clas->class_name}}</td>

                            <form action="{{ url('newclass/'.$clas->class_name) }}" method="POST" class="margin-bottom-0">
                                {{ method_field('DELETE') }}
                                {!! csrf_field() !!}
                                <td><button  type="submit" class="btn btn-sm btn-success" >删除</button></td>
                            </form>
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
    <div class="col-md-6">
        <div class="panel panel-inverse" data-sortable-id="table-basic-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">新增班级</h4>
            </div>
            <div class="panel-body">
                <form action="{{ url('newclass') }}" method="POST">
                    {!! csrf_field() !!}

                    <select class="form-control" style="width: 300px;margin: 10px" name="academy_name" placeholder="选择学院">
                        <option>信息工程学院</option>
                        <option>商学院</option>
                        <option>文法与外语学院</option>
                        <option>艺术设计学院</option>
                        <option>城建学院</option>
                        <option>护理学院</option>
                    </select>
                    <input type="text" style="width: 300px;margin: 10px" class="form-control" name="class_name" placeholder="新班级名">
                    <input type="text" style="width: 300px;margin: 10px" class="form-control" name="class_id" placeholder="新班级编号">

                    <button  style="margin: 10px" class="btn btn-sm btn-success">新增</button>


                </form>
            </div>
        </div>
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
