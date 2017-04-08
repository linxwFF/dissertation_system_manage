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
                        url: '/admin/user/index',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        data: function ( d ) {
                           //添加额外的参数传给服务器
                           d.role_tag = $('#role_tag option:selected').val();//选中的值
                        },
                    },
                    "columns": [
                        {
                            "class":'details-control',
                            "orderable":false,
                            "data":null,
                            "defaultContent":'',
                        },
                        {"orderable":false, "data": "id"},
                        {"data": "name"},
                        {"data": "email"},
                        {"data": "userable_type"},
                        {"data": "created_at"},
                        {"data": "updated_at"},
                        {"orderable":false, "data": "action"}
                    ],

                    columnDefs: [
                        {
                            'targets': -1, "render": function (data, type, row) {

                            {{--// var row_edit = {{Gate::forUser(auth('admin')->user())->check('admin.permission.edit') ? 1 : 0}};
                            // var row_delete = {{Gate::forUser(auth('admin')->user())->check('admin.permission.destroy') ? 1 :0}};
                            --}}

                            var row_edit = 1;
                            var row_delete = 1;
                            var str = '';

                            //编辑
                            if (row_edit) {
                                str += '<a style="margin:3px;" href="/admin/user/' + row['id'] + '/edit" class="btn-xs text-success "><i class="ti-pencil"></i> 编辑</a>';
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

                //点击排序时候时回调函数
                table.on('order.dt search.dt', function () {
                    table.column(1, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();

                //删除按钮
                $("table").delegate('.delBtn', 'click', function () {
                    var id = $(this).attr('attr');
                    $('.deleteForm').attr('action', '/admin/user/' + id);     //添加ID到表单
                    $("#modal-delete").modal();
                });

                /* Formatting function for row details - modify as you need */
                function format ( d ) {
                    // `d` is the original data object for the row
                    return '<table class="table table-striped table-bordered dataTable no-footer dtr-inline"  width="100%"  cellspacing="0" border="0">'+
                        '<tr>'+
                            '<td width="10%">单位号:</td>'+
                            '<td width="20%">'+d.unit_number+'</td>'+
                            '<td width="10%">姓名拼音:</td>'+
                            '<td width="20%">'+d.name_spell+'</td>'+
                            '<td width="10%">教研室ID:</td>'+
                            '<td width="20%">'+d.teach_reasearch_room_ID+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">曾用名:</td>'+
                            '<td width="20%">'+d.name_before+'</td>'+
                            '<td width="10%">性别码:</td>'+
                            '<td width="20%">'+d.sex_code+'</td>'+
                            '<td width="10%">出生日期:</td>'+
                            '<td width="20%">'+d.birthday+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">出身地码:</td>'+
                            '<td width="20%">'+d.birthday_addr_code+'</td>'+
                            '<td width="10%">籍贯:</td>'+
                            '<td width="20%">'+d.native_place+'</td>'+
                            '<td width="10%">民族码:</td>'+
                            '<td width="20%">'+d.nation_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">国籍/地区码:</td>'+
                            '<td width="20%">'+d.nationility_code+'</td>'+
                            '<td width="10%">身份证件类型码:</td>'+
                            '<td width="20%">'+d.identity_type+'</td>'+
                            '<td width="10%">身份证件号:</td>'+
                            '<td width="20%">'+d.identity_number+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">身份证件有效期:</td>'+
                            '<td width="20%">'+d.identity_valid+'</td>'+
                            '<td width="10%">婚姻状况码:</td>'+
                            '<td width="20%">'+d.marriage_status_code+'</td>'+
                            '<td width="10%">港澳台桥外码:</td>'+
                            '<td width="20%">'+d.countrymen_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">健康状态码:</td>'+
                            '<td width="20%">'+d.health_status+'</td>'+
                            '<td width="10%">信仰宗教码:</td>'+
                            '<td width="20%">'+d.religion+'</td>'+
                            '<td width="10%">血型码:</td>'+
                            '<td width="20%">'+d.blood_type_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">最高学历码:</td>'+
                            '<td width="20%">'+d.educationest_code+'</td>'+
                            '<td width="10%">文化程度码:</td>'+
                            '<td width="20%">'+d.culture_standard_code+'</td>'+
                            '<td width="10%">参加工作年月:</td>'+
                            '<td width="20%">'+d.date_first_work+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">来校日期:</td>'+
                            '<td width="20%">'+d.data_come_school+'</td>'+
                            '<td width="10%">起薪日期:</td>'+
                            '<td width="20%">'+d.date_start_salary+'</td>'+
                            '<td width="10%">从教年月:</td>'+
                            '<td width="20%">'+d.date_start_teach+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">编制类型码:</td>'+
                            '<td width="20%">'+d.authorized_strength_code+'</td>'+
                            '<td width="10%">教职工类别码:</td>'+
                            '<td width="20%">'+d.teach_staff_type_code+'</td>'+
                            '<td width="10%">任课状况码:</td>'+
                            '<td width="20%">'+d.teach_status_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">档案编号:</td>'+
                            '<td width="20%">'+d.record_number+'</td>'+
                            '<td width="10%">档案文本:</td>'+
                            '<td width="20%">'+d.record_text+'</td>'+
                            '<td width="10%">当前状态码:</td>'+
                            '<td width="20%">'+d.current_state_code+'</td>'+
                        '</tr>'+
                    '</table>';
                }

                // Add event listener for opening and closing details
                $('#tags-table tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = table.row( tr );
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });


                //选择,触发重新加载的方法
               $("#role_tag").on('change',function(){

                   //当选择时间后，出发dt的重新加载数据的方法
                   table.ajax.reload();
                   //获取dt请求参数
                   var args = table.ajax.params();
                   console.log("role_tag"+args.role_tag);
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

                <div class="col-md-1">选择角色：</div>
                <div class="col-md-2">
                    <select id="role_tag" class="form-control">
                      <option value="all" selected="true" >全部</option>

                      @foreach ($roles as $role)
                            <option value="{{$role['id']}}" >{{$role['name']}}</option>
                      @endforeach

                    </select>

                </div>

                <div class="col-md-9 text-right">
                    <a href="/admin/user/create" class="btn btn-success btn-md"><i class="ti-plus"></i> 添加用户 </a>
                </div>
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
                                    <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >角色</th>
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
