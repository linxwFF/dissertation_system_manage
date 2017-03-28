@extends('admin.layout.master')

{{--标题--}}
@section('title','协同办公平台')

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
                // var cid = $('#cid').attr('attr');
                var cid = 0;
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
                    order: [[5, "asc"]],
                    serverSide: true,

                    ajax: {
                        url: '/permissionIndex',
                        type: 'POST',
                        data: function (d) {
                            d.cid = cid;
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    },
                    "columns": [
                        {"data": "id"},
                        {"data": "name"},
                        {"data": "label"},
                        {"data": "description"},
                        {"data": "created_at"},
                        {"data": "updated_at"},
                        {"data": "action"}
                    ],
                    columnDefs: [
                        {
                            'targets': -1, "render": function (data, type, row) {

                            {{--// var row_edit = {{Gate::forUser(auth('admin')->user())->check('admin.permission.edit') ? 1 : 0}};
                            // var row_delete = {{Gate::forUser(auth('admin')->user())->check('admin.permission.destroy') ? 1 :0}};
                            --}}

                            var row_edit = 0;
                            var row_delete = 0;
                            var str = '';

                            //下级菜单
                            if (cid == 0) {
                                str += '<a style="margin:3px;"  href="/admin/permission/' + row['id'] + '" class="btn-xs text-success "><i class="fa fa-adn"></i>下级菜单</a>';
                            }

                            //编辑
                            if (row_edit) {
                                str += '<a style="margin:3px;" href="/admin/permission/' + row['id'] + '/edit" class="btn-xs text-success "><i class="fa fa-edit"></i> 编辑</a>';
                            }

                            //删除
                            if (row_delete) {
                                str += '<a style="margin:3px;" href="#" attr="' + row['id'] + '" class="btn-xs text-danger"><i class="fa fa-times-circle"></i> 删除</a>';
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

                //点击排序时候时回调函数
                table.on('order.dt search.dt', function () {
                    // table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    //     cell.innerHTML = i + 1;
                    // });
                    // console.log('点击排序时候时回调函数');
                }).draw();

                $("table").delegate('.delBtn', 'click', function () {
                    var id = $(this).attr('attr');
                    $('.deleteForm').attr('action', '/admin/permission/' + id);
                    $("#modal-delete").modal();
                });

            });
</script>
@endsection

@section('content')
        {{--页面标题--}}
        @section('page_title','Page Title')
        @include('admin.layout.bodyHeader')  {{--主页面头--}}
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

        <div class="panel">
		    <div class="panel-heading">
		        <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
		    </div>

		    <div class="panel-body">
		        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                     <div class="row">
                         <div class="col-sm-12">
                         <table id="tags-table" class="table table-striped table-bordered dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-basic_info" style="width: 100%;">
                            <thead>
				                <tr role="row">
                                    <th data-sortable="false">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"  aria-sort="ascending">权限规则</th>
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >权限名称</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >权限概述</th>
                                    <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" >权限创建日期</th>
                                    <th class="min-desktop sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >权限修改日期</th>
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

        </div>
        <!--===================================================-->
        <!--End page content-->
@endsection
