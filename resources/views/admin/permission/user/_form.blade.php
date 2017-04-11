<div class="form-group">
    <label for="tag" class="col-md-3 control-label">用户名</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="name" id="tag" value="{{ $name }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">邮箱</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="email" id="tag" value="{{ $email }}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">密码</label>
    <div class="col-md-5">
        <input type="password" class="form-control" name="password" id="tag" value="" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">密码确认</label>
    <div class="col-md-5">
        <input type="password" class="form-control" name="password_confirmation" id="tag" value="" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-3 control-label">角色列表</label>
    @if(isset($id)&&$id==1)
        <div class="col-md-4" style="float:left;padding-left:20px;margin-top:8px;"><h2>超级管理员</h2></div>
    @else
        <div class="col-md-5">
                <select class="form-control" id="role_id" name="role_id">
                    <option value="">请选择角色</option>
                    @foreach($rolesAll as $v)
                        <option value="{{$v['id']}}"
                        @if(old('role_id') == $v['id'])
                            selected="true"
                        @endif
                        >{{$v['name']}}</option>
                    @endforeach
                </select>
        </div>
    @endif
</div>

<table id="extra_property" class="table table-striped table-bordered dataTable no-footer dtr-inline" width="100%" cellspacing="0" border="0">
    <tbody>

    </tbody>
</table>

<script>
$(document).ready(function(){

    var role_id  = $("#role_id").val();

    function extra_Html(role_id)
    {
        var strHtml = "";
        $('#extra_property').empty();   //清空
        if(role_id == 1){
        strHtml += '<tr>'+
                '<td width="10%">单位号:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="unit_number" value="{{old("unit_number")}}" autofocus></td>'+
                '<td width="10%">姓名拼音:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="name_spell" value="{{old("name_spell")}}" autofocus></td>'+
                '<td width="10%">教研室ID:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_reasearch_room_ID" value="{{old("teach_reasearch_room_ID")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">曾用名:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="name_before" value="{{old("name_before")}}" autofocus></td>'+
                '<td width="10%">性别码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="sex_code" value="{{old("sex_code")}}" autofocus></td>'+
                '<td width="10%">出生日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="birthday" value="{{old("birthday")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">出身地码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="birthday_addr_code" value="{{old("birthday_addr_code")}}" autofocus></td>'+
                '<td width="10%">籍贯:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="native_place" value="{{old("native_place")}}" autofocus></td>'+
                '<td width="10%">民族码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="nation_code" value="{{old("nation_code")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">国籍/地区码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="nationility_code" value="{{old("nationility_code")}}" autofocus></td>'+
                '<td width="10%">身份证件类型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_type" value="{{old("identity_type")}}" autofocus></td>'+
                '<td width="10%">身份证件号:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_number" value="{{old("identity_number")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">身份证件有效期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_valid" value="{{old("identity_valid")}}" autofocus></td>'+
                '<td width="10%">婚姻状况码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="marriage_status_code" value="{{old("marriage_status_code")}}" autofocus></td>'+
                '<td width="10%">港澳台桥外码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="conuntrymen_code" value="{{old("conuntrymen_code")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">健康状态码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="health_status" value="{{old("health_status")}}" autofocus></td>'+
                '<td width="10%">信仰宗教码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="religion" value="{{old("religion")}}" autofocus></td>'+
                '<td width="10%">血型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="blood_type_code" value="{{old("blood_type_code")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">最高学历码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="educationest_code" value="{{old("educationest_code")}}" autofocus></td>'+
                '<td width="10%">文化程度码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="culture_standard_code" value="{{old("culture_standard_code")}}" autofocus></td>'+
                '<td width="10%">参加工作年月:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_first_work" value="{{old("date_first_work")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">来校日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="data_come_school" value="{{old("data_come_school")}}" autofocus></td>'+
                '<td width="10%">起薪日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_start_salary" value="{{old("date_start_salary")}}" autofocus></td>'+
                '<td width="10%">从教年月:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_start_teach" value="{{old("date_start_teach")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">编制类型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="authorized_strength_code" value="{{old("authorized_strength_code")}}" autofocus></td>'+
                '<td width="10%">教职工类别码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_staff_type_code" value="{{old("teach_staff_type_code")}}" autofocus></td>'+
                '<td width="10%">任课状况码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_status_code" value="{{old("teach_status_code")}}" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">档案编号:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="record_number" value="{{old("record_number")}}" autofocus></td>'+
                '<td width="10%">档案文本:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="record_text" value="{{old("record_text")}}" autofocus></td>'+
                '<td width="10%">当前状态码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="current_state_code" value="{{old("current_state_code")}}" autofocus></td>'+
            '</tr>';
        }else if(role_id == 2){
            strHtml += '<tr>'+
                    '<td width="10%">姓名拼音:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="name_spell" value="{{old("name_spell")}}" autofocus></td>'+
                    '<td width="10%">学生QQ:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="student_QQ" value="{{old("student_QQ")}}" autofocus></td>'+
                    '<td width="10%">学生电话:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="student_phone" value="{{old("student_phone")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">曾用名:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="name_before" value="{{old("name_before")}}" autofocus></td>'+
                    '<td width="10%">性别码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="sex_code" value="{{old("sex_code")}}" autofocus></td>'+
                    '<td width="10%">出生日期:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="birthday" value="{{old("birthday")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">出生地码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="birth_addr_code" value="{{old("birth_addr_code")}}" autofocus></td>'+
                    '<td width="10%">籍贯:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="native_place" value="{{old("native_place")}}" autofocus></td>'+
                    '<td width="10%">民族码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="nation_code" value="{{old("nation_code")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">国籍/地区码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="nationility_code" value="{{old("nationility_code")}}" autofocus></td>'+
                    '<td width="10%">身份证件类型码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_type" value="{{old("identity_type")}}" autofocus></td>'+
                    '<td width="10%">身份证件号:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_number" value="{{old("identity_number")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">身份证件有效期:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_valid" value="{{old("identity_valid")}}" autofocus></td>'+
                    '<td width="10%">婚姻状况码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="marriage_status_code" value="{{old("marriage_status_code")}}" autofocus></td>'+
                    '<td width="10%">港澳台桥外码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="conuntrymen_code" value="{{old("conuntrymen_code")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">健康状态码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="health_status" value="{{old("health_status")}}" autofocus></td>'+
                    '<td width="10%">信仰宗教码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="religion" value="{{old("religion")}}" autofocus></td>'+
                    '<td width="10%">血型码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="blood_type_code" value="{{old("blood_type_code")}}" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">政治面貌:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="politics_status" value="{{old("politics_status")}}" autofocus></td>'+
                    '<td width="10%">照片:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="photo" value="{{old("photo")}}" autofocus></td>'+
                '</tr>';
        }else{
            $('#extra_property').empty();
        }
        $('#extra_property').append(strHtml);
    }
    //选择,触发重新加载的方法
    $("#role_id").on('change',function(){
       var role_id  = $("#role_id").val();
       extra_Html(role_id);
    });

   extra_Html(role_id); //扩展属性
});
</script>
