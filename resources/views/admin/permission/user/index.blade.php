@extends('admin.layout.master')

{{--标题--}}
@section('title','用户管理')

{{--扩展的css--}}
@section('extendCss')
<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('back/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('back/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
<!-- 加载动画 -->
<link href="{{asset('back/css/load/load.css')}}" rel="stylesheet">

<style>
    td.details-control {
        background: url('{{asset("/back/img/details_open.png")}}') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('{{asset("/back/img/details_close.png")}}') no-repeat center center;
    }
</style>

@endsection

{{--扩展的JS--}}
@section('extendJs')

@include('admin.permission.user.index_JS')

@endsection

@section('content')
        @section('page_title','用户管理')  {{--页面标题--}}
        @include('admin.layout.bodyHeader')  {{--主页面头--}}
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            @include('admin.partials.success')  {{--正确提示--}}
            @include('admin.partials.errors')   {{--错误提示--}}

        <div class="panel">
		    <div class="panel-heading">
                <div class="row page-title-row" style="margin:5px;">

                <div class="col-md-1">选择角色：</div>
                <div class="col-md-2">
                    <select id="role_tag" class="form-control">
                      <option value="all" selected="true" >全部</option>

                      @foreach ($roles as $role)
                            <option value="{{$role['id']}}" >{{$role['name']}}</option>
                      @endforeach

                    </select>

                </div>

                @if(Gate::forUser(auth('admin')->user())->check('admin.user.create'))
                <div class="col-md-9 text-right">
                    <a href="/admin/user/create" class="btn btn-success btn-md"><i class="ti-plus"></i> 添加用户 </a>
                </div>
                @endif
                </div>

		    </div>

		    <div class="panel-body">
		        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                     <div class="row">
                         <div class="col-sm-12">
                         <table id="tags-table" class="table table-striped table-bordered dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-basic_info" style="width: 100%;">
                            <thead>
				                <tr role="row">
                                    <th></th>
                                    <th data-sortable="false">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"  aria-sort="ascending">用户名</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >邮箱</th>
                                    <th data-sortable="false">角色</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >角色创建日期</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" >角色修改日期</th>
                                    <th data-sortable="false">操作</th>
                                </tr>
				            </thead>
				            <tbody>
                                <!-- 表内容 -->
			                </tbody>
				        </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>

        <!--===================================================-->
        <!--End page content-->

<!-- 删除模态框 -->
@include("admin.partials.delete")

@endsection
