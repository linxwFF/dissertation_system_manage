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

        var html_item = '';
        html_item += '<div class="col-md-12">';
        html_item += '<form>';
        html_item += '    <input type="hidden" value="0" name="pid">';
        html_item += '    <div class="form-group">';
        html_item += '        <label for="tag" class="col-md-1 control-label">栏目标识</label>';
        html_item += '        <div class="col-md-2">';
        html_item += '            <input type="text" class="form-control" name="label" id="tag" value="project_background" autofocus>';
        html_item += '        </div>';

        html_item += '        <label for="tag" class="col-md-1 control-label">栏目名称</label>';
        html_item += '        <div class="col-md-2">';
        html_item += '            <input type="text" class="form-control" name="name" id="tag" value="项目背景" autofocus>';
        html_item += '        </div>';

        html_item += '        <label for="tag" class="col-md-1 control-label">栏目内容</label>';
        html_item += '        <div class="col-md-2">';
        html_item += '            <textarea name="content" class="form-control" rows="2">我是内容，我是内容，我是内容</textarea>';
        html_item += '        </div>';
        html_item += '    </div>';
        html_item += '</form>';

        html_item += '    <div class="col-md-3">';
        html_item += '    <button class="btn btn-primary btn-md">';
        html_item += '        提交';
        html_item += '    </button>';

        html_item += '    <button class="btn btn-primary btn-md">';
        html_item += '        增加子栏目';
        html_item += '    </button>';

        html_item += '    <button class="btn btn-primary btn-md">';
        html_item += '        修改栏目';
        html_item += '    </button>';

        html_item += '    <button class="btn btn-primary btn-md">';
        html_item += '        删除栏目';
        html_item += '    </button>';
        html_item += '    </div>';
        html_item += '</div>';

        $("#item").append(html_item);

    });

    $('#sumbit').click(function(){
        $.ajax({
            type:'post',
            url: '/column/subject/add',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success:function(data){
                console.log(data);
            }
        });
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
