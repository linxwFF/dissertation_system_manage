@extends('admin.layout.master')

{{--标题--}}
@section('title','角色列表')

{{--扩展的css--}}
@section('extendCss')
<!--DataTables [ OPTIONAL ]-->
<link href="{{asset('back/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('back/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
<!-- 加载动画 -->
<link href="{{asset('back/css/load/load.css')}}" rel="stylesheet">
@endsection

{{--扩展的JS--}}
@section('extendJs')
<script src="{{asset('back/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('back/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('back/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>


<script>
$(function () {
                var table = $("#tags-table").DataTable({
                    // 本地化
                    language: {
                        "sProcessing": "处理中...",
                        "sLengthMenu": "显示 _MENU_ 项结果",
                        "sZeroRecords": "没有匹配结果",
                        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                        "sInfoPostFix": "",
                        "sSearch": "搜索:",
                        "sUrl": "",
                        "sEmptyTable": "表中数据为空",
                        "sLoadingRecords": "载入中...",
                        "sInfoThousands": ",",
                        "oPaginate": {
                            "sFirst": "首页",
                            "sPrevious": "上页",
                            "sNext": "下页",
                            "sLast": "末页"
                        },
                        "oAria": {
                            "sSortAscending": ": 以升序排列此列",
                            "sSortDescending": ": 以降序排列此列"
                        }
                    },
                    order: [[1, "asc"]],
                    serverSide: true,
                    ajax: {
                        url: '{{ route('chooseTask.declare.taskCollect.index') }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    },
                    "columns": [
                        {"orderable":false,"data": "id"},
                        {"data": "subject_name"},
                        {"data": "subject_number"},
                        {"data": "teach_reasearch_room"},
                        {"data": "teachBaseInfo_id"},

                        {"data": "schedule"},
                        {"data": "state"},

                        {"data": "created_at"},
                        {"data": "updated_at"},
                        {"orderable":false,"data": "action"}
                    ],
                    columnDefs: [
                        {
                            'targets': -1, "render": function (data, type, row) {

                            // var row_edit = {{Gate::forUser(auth('admin')->user())->check('admin.role.edit') ? 1 : 0}};
                            // var row_delete = {{Gate::forUser(auth('admin')->user())->check('admin.role.destroy') ? 1 :0}};

                            var row_edit = 1;
                            var row_delete = 1;
                            var row_detail = 1;
                            var str = '';

                            //编辑
                            if (row_edit) {
                                str += '<a style="margin:3px;" href="/chooseTask/declare/taskCollect/' + row['id'] + '/edit" class="btn-xs text-success "><i class="ti-pencil"></i> 编辑</a>';
                            }

                            //删除
                            if (row_delete) {
                                str += '<a style="margin:3px;" href="#" attr="' + row['id'] + '" class="delBtn btn-xs text-danger"><i class="ti-close"></i> 删除</a>';
                            }

                            return str;

                        }
                        }
                    ]
                });

                table.on('preXhr.dt', function () {
                    //载入动画
                    $("#loading").show();
                });

                table.on('draw.dt', function () {
                    //载入动画
                	$("#loading").fadeOut(500);
                });

                $("table").delegate('.delBtn', 'click', function () {
                    var id = $(this).attr('attr');
                    $('.deleteForm').attr('action', '/chooseTask/declare/taskCollect/' + id);     //添加ID到表单
                    $("#modal-delete").modal();
                });

            });
</script>
@endsection

@section('content')
        @section('page_title','Page Title')  {{--页面标题--}}
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

                </div>

                @if(Gate::forUser(auth('admin')->user())->check('chooseTask.declare.taskIndex.index'))
                <div class="col-md-6 text-right">
                    <a href="/chooseTask/declare/taskCollect/create" class="btn btn-success btn-md"><i class="ti-plus"></i> 添加角色 </a>
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
                                    <th data-sortable="false">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"  aria-sort="ascending">课程名称</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >项目号</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >教研室ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >教工号</th>

                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >进度及安排</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >状态</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >创建日期</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" >修改日期</th>
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
