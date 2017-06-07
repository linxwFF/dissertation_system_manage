@extends('admin.layout.master')

{{--标题--}}
@section('title','协同办公平台')

@section('content')
    @section('page_title','学生')  {{--页面标题--}}
    @include('admin.layout.bodyHeader')  {{--主页面头--}}
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">论文进行度：</h3>
                        </div>
                        <div class="panel-body">

                            <!--Progress bars with Animation-->
                            <!--===================================================-->
                            <div class="progress progress-striped active"><div style="width: 80%;" class="progress-bar progress-bar-danger"></div></div>
                            <!--===================================================-->

                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
					    <div class="col-md-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">学生基本信息：</h3>
					            </div>

					            <!--===================================================-->
					                <div class="panel-body" style="color:black;font-size:1.25em">
					                        <div class="row">
                                                <div class="col-md-2 col-md-offset-1">课题：</div>
                                                <div class="col-md-9">我是课题题目，我是课题题目我是课题题目我是课题题目我是课题题目</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">院 （部）:</div>
                                                <div class="col-md-3">软件学院</div>

                                                <div class="col-md-2 col-md-offset-1">姓名：</div>
                                                <div class="col-md-3">林雄伟</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">专业：</div>
                                                <div class="col-md-3">16软件工程（专升本）</div>

                                                <div class="col-md-2 col-md-offset-1">班级：</div>
                                                <div class="col-md-3">1601</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-1">指导老师：</div>
                                                <div class="col-md-3">林雄伟</div>

                                                <div class="col-md-2 col-md-offset-1">学号：</div>
                                                <div class="col-md-3">3168845212</div>
                                            </div>

					                </div>
					            <!--===================================================-->
					        </div>
					    </div>
		</div>

        <div class="row">
					    <div class="col-md-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">任务：</h3>
					            </div>

					            <!--===================================================-->
					                <div class="panel-body" style="color:black;font-size:1.25em">

                                        <div class="table-responsive">
					                    <table class="table table-bordered">
					                        <thead>
					                            <tr>
					                                <th class="text-center">编号</th>
					                                <th>材料项目</th>
					                                <th>件数</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                                <td class="text-center">1</td>
					                                <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
					                                <td><span class="label label-purple">Bussines</span></td>
					                            </tr>
					                            <tr>
					                                <td class="text-center">2</td>
					                                <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
					                                <td><span class="label label-info">Personal</span></td>
					                            </tr>
					                            <tr>
					                                <td class="text-center">3</td>
					                                <td><a href="#" class="btn-link">Steve N. Horton</a></td>
					                                <td><span class="label label-warning">Trial</span></td>
					                            </tr>
					                            <tr>
					                                <td class="text-center">4</td>
					                                <td><a href="#" class="btn-link">Charles S Boyle</a></td>
					                                <td><span class="label label-purple">Bussines</span></td>
					                            </tr>
					                            <tr>
					                                <td class="text-center">5</td>
					                                <td><a href="#" class="btn-link">Lucy Doe</a></td>
					                                <td><span class="label label-warning">Trial</span></td>
					                            </tr>
					                            <tr>
					                                <td class="text-center">6</td>
					                                <td><a href="#" class="btn-link">Michael Bunr</a></td>
					                                <td><span class="label label-info">Personal</span></td>
					                            </tr>
					                        </tbody>
					                    </table>
					                </div>

					                </div>
					            <!--===================================================-->
					        </div>
					    </div>
		</div>



    <!--===================================================-->
    <!--End page content-->
@endsection
