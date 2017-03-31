@extends('admin.layout.master')

{{--标题--}}
@section('title','协同办公平台')

@section('content')
    {{--页面标题--}}
    @section('page_title','Page Title')
    @include('admin.layout.bodyHeader')  {{--主页面头--}}

    <div id="page-content">

    <div class="panel">
        <div class="panel-heading">
            <div class="row page-title-row" style="margin:5px;">
            <div class="col-md-6">
                <h3 class="panel-title">添加权限</h3>
            </div>
            </div>
        </div>

        <div class="panel-body">

                                <form class="form-horizontal" role="form" method="POST" action="/admin/permission">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="cove_image"/>
                                    @include('admin.permission.permission._form')
                                    <div class="form-group">
                                        <div class="col-md-7 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary btn-md">
                                                <i class="fa fa-plus-circle"></i>
                                                添加
                                            </button>
                                        </div>
                                    </div>
                                </form>

            </div>
    </div>

    </div>
@endsection
