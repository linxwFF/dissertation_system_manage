@extends('admin.layout.master')

{{--标题--}}
@section('title','角色列表')

{{--扩展的css--}}
@section('extendCss')
<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('back/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('back/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

@endsection

{{--扩展的JS--}}
@section('extendJs')


<script>
$(document).ready(function(){

    $('#add_parent').click(function(){
        console.log('添加大标题');

        var lastformId = $('form').size(); //创建新的from的ID
        console.log('创建新的from的ID'+lastformId);

        var html_item = '';
        html_item += '<div class="col-md-12" id="div'+lastformId+'">';
        html_item += '<form id="'+lastformId+'">';
        html_item += '    <input type="hidden" value="0" name="parent_id">';
        html_item += '    <div class="form-group">';

        html_item += '        <label for="tag" class="col-md-1 control-label">栏目名称</label>';
        html_item += '        <div class="col-md-2">';
        html_item += '            <input type="text" class="form-control" name="title" id="tag" value="" autofocus>';
        html_item += '        </div>';

        html_item += '         <label for="tag" class="col-md-1 control-label">排序</label>';
        html_item += '         <div class="col-md-2">';
        html_item += '             <input type="number" class="form-control" name="sort_order" id="tag" value="" autofocus>';
        html_item += '         </div>';
        html_item += '    </div>';
        html_item += '</form>';

        html_item += '    <div class="col-md-3">';
        html_item += '    <button class="btn btn-primary btn-md" onclick="sumbit_form('+lastformId+')" >';
        html_item += '        添加';
        html_item += '    </button>';

        html_item += '    </div>';
        html_item += '</div>';

        $("#item").append(html_item);

    });
});
</script>
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
                    <h3 class="panel-title"><button id="add_parent" type="button" class="btn btn-warning btn-md animation-shake reloadBtn">添加父栏目</button></h3>
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
