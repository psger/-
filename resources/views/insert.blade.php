@include('/header')
@include('/left')
<style>
    /* 定义模态对话框外面的覆盖层样式 */
    #modal-overlay {
        visibility: hidden;
        position: absolute; /* 使用绝对定位或固定定位  */
        left: 0px;
        top: 0px;
        width: 100%;
        height: 1262px;
        text-align: center;
        z-index: 1000;
        background-color: #333;
        background:rgba(0,0,0,0.6);

    }
    #modal-overlay2 {
        visibility: hidden;
        position: absolute; /* 使用绝对定位或固定定位  */
        left: 0px;
        top: 0px;
        width: 100%;
        height: 1262px;
        text-align: center;
        z-index: 1000;
        background-color: #333;
        background:rgba(0,0,0,0.6);

    }
    /* 模态框样式 */
    .modal-data {
        width: 500px;
        margin: 100px auto;
        background-color: #fff;
        border: 1px solid #000;
        padding: 15px;
        text-align: center;
        border:2px solid;
        border-radius:25px;
    }
</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/css/style.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/css/style-responsive.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/css/theme/default.css" rel="stylesheet')}}" id="theme" />
<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{URL::asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{URL::asset('assets/plugins/pace/pace.min.js')}}"></script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">成绩录入</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    @foreach($class_name as $cname)
    <h1 class="page-header">成绩录入:{{ $cname->class_name }}<small></small></h1>
    @endforeach
    <!-- end page-header -->

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
                    <h4 class="panel-title">学生列表</h4>
                </div>
                <div class="panel-body">

                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>学号</th>
                            <th>姓名</th>

                        </tr>
                        </thead>

                        <form action="{{ url('grade') }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <tbody>
                            @foreach( $stu as $st )
                                <tr class="odd gradeX">
                                    <td>{{ $st->stu_id }}</td>
                                    <td>{{  $st->stu_name }}</td>
                                    <td>
                                        <a href="#" onclick="overlay2('{{ $st->stu_id }}')" title="delete" class="btn btn-sm btn-danger pull-right delete">删除</a>
                                        <a href="#" onclick="overlay('{{ $st->stu_name }}','{{ $st->stu_id }}')" title="edit" class="btn btn-sm btn-primary  m-r-5 pull-right">编辑</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                            </form>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
</div>

<!-- begin 删除提示 -->
<div id="modal-overlay2">
    <div class="modal-data">
        <p>您确定删除该学生及其成绩吗？</p>
        <a onclick="overlay2()" href="" class="btn btn-sm btn-primary  m-r-5 pull-right">取消</a>
    <form action="{{ url('grade') }}" method="POST">
        {!! csrf_field() !!}
        {{ method_field('DELETE') }}
    <a href="" title="delete" id="deletesure" class="btn btn-sm btn-danger pull-right delete">删除</a>
        <hr>
    </form>

</div>
</div>
<!-- end 删除提示 -->

<!-- begin 录入页面 -->
<div id="modal-overlay">
    <div class="modal-data">
        <p>体测项目</p>
        <div class="panel-body panel-form">
            <form action="{{ url('grade')}}" class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="fullname" >姓名:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" readonly="on" name="stu_name" id="stu_name" placeholder="Required" data-parsley-required="true" />
                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-md-4 col-sm-4" for="email">学号:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" readonly="on" id="stu_id" name="stu_id" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="website">身高:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" id="website" name="height" data-parsley-type="digits" placeholder="cm" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">体重:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" id="digits" name="weight" data-parsley-type="digits" placeholder="kg" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">肺活量:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" id="digits" name="gas" data-parsley-type="digits" placeholder="ml" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="50m">50M跑:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" id="number" name="50m" data-parsley-type="number" placeholder="0.0s" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="jump">立定跳远:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" id="data-phone" name="jump" data-parsley-type="number" placeholder="0.00m" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">坐位体前屈:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="sit_flexion" id="data-phone" data-parsley-type="number" placeholder="个" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">800M/1000M跑:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="81m" id="data-phone" data-parsley-type="number" placeholder="0.00min" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">仰卧起坐:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="sit_ups" id="data-phone" data-parsley-type="number" placeholder="个" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">引体向上:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="bodyup" id="data-phone" data-parsley-type="number" placeholder="个" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">左眼视力:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="left_eye" id="data-phone" data-parsley-type="number" placeholder="0.0" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="message">右眼视力:</label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="right_eye" id="data-phone" data-parsley-type="number" placeholder="0.0" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4"></label>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
        <p>点击<a onclick="overlay()" href="">这里</a>关闭</p>
    </div>
</div>
<!-- end 录入页面 -->


<script>
    //弹出成绩录入页面
    function overlay(name,id) {
        var e1 = document.getElementById('modal-overlay');
        e1.style.visibility = (e1.style.visibility == "visible") ? "hidden" : "visible";
        document.getElementById('stu_name').value=name;
        document.getElementById('stu_id').value=id;
    }
    function overlay2(stu_id){
        var e2 = document.getElementById('modal-overlay2');
        e2.style.visibility = (e2.style.visibility == "visible") ? "hidden" : "visible";
        document.getElementById('deleteure').herf= '{{url('/grade/'.'stu_id')}}';
    }
</script>




<!-- ================== BEGIN BASE JS ================== -->
<script src="{{URL::asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{URL::asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{URL::asset('assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{URL::asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{URL::asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{URL::asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/js/table-manage-default.demo.min.js')}}"></script>
<script src="{{URL::asset('assets/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();
    });
</script>
</body>
</html>
