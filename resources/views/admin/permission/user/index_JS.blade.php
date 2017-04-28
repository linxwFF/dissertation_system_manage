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
                        url: '{{ route('admin.user.index') }}',
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
                        {"orderable":false,"data": "role_name"},
                        {"data": "created_at"},
                        {"data": "updated_at"},
                        {"orderable":false, "data": "action"}
                    ],

                    columnDefs: [
                        {
                            'targets': -1, "render": function (data, type, row) {

                            var row_edit = {{Gate::forUser(auth('admin')->user())->check('admin.user.edit') ? 1 : 0}};
                            var row_delete = {{Gate::forUser(auth('admin')->user())->check('admin.user.destroy') ? 1 :0}};
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

                //删除按钮
                $("table").delegate('.delBtn', 'click', function () {
                    var id = $(this).attr('attr');
                    $('.deleteForm').attr('action', '/admin/user/' + id);     //添加ID到表单
                    $("#modal-delete").modal();
                });

                /* Formatting function for row details - modify as you need */
                function format ( d ) {
                    // `d` is the original data object for the row
                    return '<table id="extra_property'+d.id+'" class="table table-striped table-bordered dataTable no-footer dtr-inline"  width="100%"  cellspacing="0" border="0">'+'</table>';
                }

                //ajax添加扩展属性的回调函数
                function ajaxCallback(data,role_id,id)
                {
                    var strHtml = "";
                    if(role_id == 1){
                    strHtml += '<tr>'+
                            '<td width="10%">单位号:</td>'+
                            '<td width="20%">'+data.unit_number+'</td>'+
                            '<td width="10%">姓名拼音:</td>'+
                            '<td width="20%">'+data.name_spell+'</td>'+
                            '<td width="10%">教研室ID:</td>'+
                            '<td width="20%">'+data.teach_reasearch_room_ID+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">曾用名:</td>'+
                            '<td width="20%">'+data.name_before+'</td>'+
                            '<td width="10%">性别码:</td>'+
                            '<td width="20%">'+data.sex_code+'</td>'+
                            '<td width="10%">出生日期:</td>'+
                            '<td width="20%">'+data.birthday+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">出身地码:</td>'+
                            '<td width="20%">'+data.birthday_addr_code+'</td>'+
                            '<td width="10%">籍贯:</td>'+
                            '<td width="20%">'+data.native_place+'</td>'+
                            '<td width="10%">民族码:</td>'+
                            '<td width="20%">'+data.nation_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">国籍/地区码:</td>'+
                            '<td width="20%">'+data.nationility_code+'</td>'+
                            '<td width="10%">身份证件类型码:</td>'+
                            '<td width="20%">'+data.identity_type+'</td>'+
                            '<td width="10%">身份证件号:</td>'+
                            '<td width="20%">'+data.identity_number+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">身份证件有效期:</td>'+
                            '<td width="20%">'+data.identity_valid+'</td>'+
                            '<td width="10%">婚姻状况码:</td>'+
                            '<td width="20%">'+data.marriage_status_code+'</td>'+
                            '<td width="10%">港澳台桥外码:</td>'+
                            '<td width="20%">'+data.conuntrymen_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">健康状态码:</td>'+
                            '<td width="20%">'+data.health_status+'</td>'+
                            '<td width="10%">信仰宗教码:</td>'+
                            '<td width="20%">'+data.religion+'</td>'+
                            '<td width="10%">血型码:</td>'+
                            '<td width="20%">'+data.blood_type_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">最高学历码:</td>'+
                            '<td width="20%">'+data.educationest_code+'</td>'+
                            '<td width="10%">文化程度码:</td>'+
                            '<td width="20%">'+data.culture_standard_code+'</td>'+
                            '<td width="10%">参加工作年月:</td>'+
                            '<td width="20%">'+data.date_first_work+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">来校日期:</td>'+
                            '<td width="20%">'+data.data_come_school+'</td>'+
                            '<td width="10%">起薪日期:</td>'+
                            '<td width="20%">'+data.date_start_salary+'</td>'+
                            '<td width="10%">从教年月:</td>'+
                            '<td width="20%">'+data.date_start_teach+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">编制类型码:</td>'+
                            '<td width="20%">'+data.authorized_strength_code+'</td>'+
                            '<td width="10%">教职工类别码:</td>'+
                            '<td width="20%">'+data.teach_staff_type_code+'</td>'+
                            '<td width="10%">任课状况码:</td>'+
                            '<td width="20%">'+data.teach_status_code+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td width="10%">档案编号:</td>'+
                            '<td width="20%">'+data.record_number+'</td>'+
                            '<td width="10%">档案文本:</td>'+
                            '<td width="20%">'+data.record_text+'</td>'+
                            '<td width="10%">当前状态码:</td>'+
                            '<td width="20%">'+data.current_state_code+'</td>'+
                        '</tr>';
                    }else if(role_id == 2){
                        strHtml += '<tr>'+
                                '<td width="10%">姓名拼音:</td>'+
                                '<td width="20%">'+data.name_spell+'</td>'+
                                '<td width="10%">学生QQ:</td>'+
                                '<td width="20%">'+data.student_QQ+'</td>'+
                                '<td width="10%">学生电话:</td>'+
                                '<td width="20%">'+data.student_phone+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">曾用名:</td>'+
                                '<td width="20%">'+data.name_before+'</td>'+
                                '<td width="10%">性别码:</td>'+
                                '<td width="20%">'+data.sex_code+'</td>'+
                                '<td width="10%">出生日期:</td>'+
                                '<td width="20%">'+data.birthday+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">出生地码:</td>'+
                                '<td width="20%">'+data.birth_addr_code+'</td>'+
                                '<td width="10%">籍贯:</td>'+
                                '<td width="20%">'+data.native_place+'</td>'+
                                '<td width="10%">民族码:</td>'+
                                '<td width="20%">'+data.nation_code+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">国籍/地区码:</td>'+
                                '<td width="20%">'+data.nationility_code+'</td>'+
                                '<td width="10%">身份证件类型码:</td>'+
                                '<td width="20%">'+data.identity_type+'</td>'+
                                '<td width="10%">身份证件号:</td>'+
                                '<td width="20%">'+data.identity_number+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">身份证件有效期:</td>'+
                                '<td width="20%">'+data.identity_valid+'</td>'+
                                '<td width="10%">婚姻状况码:</td>'+
                                '<td width="20%">'+data.marriage_status_code+'</td>'+
                                '<td width="10%">港澳台桥外码:</td>'+
                                '<td width="20%">'+data.conuntrymen_code+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">健康状态码:</td>'+
                                '<td width="20%">'+data.health_status+'</td>'+
                                '<td width="10%">信仰宗教码:</td>'+
                                '<td width="20%">'+data.religion+'</td>'+
                                '<td width="10%">血型码:</td>'+
                                '<td width="20%">'+data.blood_type_code+'</td>'+
                            '</tr>'+
                            '<tr>'+
                                '<td width="10%">政治面貌:</td>'+
                                '<td width="20%">'+data.politics_status+'</td>'+
                                '<td width="10%">照片:</td>'+
                                '<td width="20%">'+data.photo+'</td>'+
                            '</tr>';
                    }
                     $('#extra_property'+id).append(strHtml);
                }

                // Add event listener for opening and closing details
                $('#tags-table tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = table.row( tr );
                    var id = table.row( $(this).parents('tr') ).data().id;
                    var role_id = table.row( $(this).parents('tr') ).data().role_id;

                    $.ajax({
                        type:'get',
                        url: '/admin/user/extra_property/'+id,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                        success:function(data){
                            ajaxCallback(data,role_id,id);  //回调函数
                        }
                    });

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
