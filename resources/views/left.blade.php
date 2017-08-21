		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="{{URL::asset('assets/img/user-13.jpg')}}" alt="" /></a>
						</div>
						<div class="info">
							
							<small>欢迎您</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">导航</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-gear"></i>
						    <span>学院班级管理</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="{{url('/newclass/7')}}">信息工程学院</a></li>
							<li><a href="{{url('/newclass/2')}}">商学院</a></li>
							<li><a href="{{url('/newclass/3')}}">文法与外语学院</a></li>
							<li><a href="{{url('/newclass/4')}}">艺术设计学院</a></li>
							<li><a href="{{url('/newclass/5')}}">城建学院</a></li>

						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-user"></i>
						    <span>学生信息导入</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="{{url('/import')}}">从excel导入学生信息</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-pencil"></i>
							<span>成绩录入和管理</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{url('/insertgrade/7')}}">信息工程学院</a></li>
							<li><a href="{{url('/insertgrade/2')}}">商学院</a></li>
							<li><a href="{{url('/insertgrade/3')}}">文法与外语学院</a></li>
							<li><a href="{{url('/insertgrade/4')}}">艺术设计学院</a></li>
							<li><a href="{{url('/insertgrade/5')}}">城建学院</a></li>

						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-file-text"></i>
							<span>成绩查询和导出</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{url('/export')}}">导出所有数据</a></li>
							<li><a href="{{url('/find/7')}}">信息工程学院</a></li>
							<li><a href="{{url('/find/2')}}">商学院</a></li>
							<li><a href="{{url('/find/3')}}">文法与外语学院</a></li>
							<li><a href="{{url('/find/4')}}">艺术设计学院</a></li>
							<li><a href="{{url('/find/5')}}">城建学院</a></li>

						</ul>
					</li>

			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->