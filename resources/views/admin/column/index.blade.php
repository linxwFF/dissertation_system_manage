@extends('admin.layout.master')

{{--标题--}}
@section('title','角色列表')

{{--扩展的css--}}
@section('extendCss')
<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('back/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('back/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

@endsection

@section('content')
        @section('page_title','项目申报模版')  {{--页面标题--}}
        @include('admin.layout.bodyHeader')  {{--主页面头--}}
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            @include('admin.partials.success')  {{--正确提示--}}
            @include('admin.partials.errors')   {{--错误提示--}}

        <div class="panel">
            <div class="panel-heading">
                <div class="row page-title-row" style="margin:5px;">
                <div class="col-md-6">
                    <h3 class="panel-title"><button type="button" class="btn btn-warning btn-md animation-shake reloadBtn" onclick="add_parent()">添加父栏目</button></h3>
                </div>
                </div>
            </div>

            <div class="panel-body" id="item">
                @include('admin.column._form')
            </div>
		</div>

        <!--===================================================-->
        <!--End page content-->

@endsection
