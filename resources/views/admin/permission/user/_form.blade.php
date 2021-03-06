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
        <div class="col-md-5">
                <select class="form-control" id="role_id" name="role_id" @if($action == "edit") disabled="true" @endif>
                    <option value="">请选择角色</option>
                    @foreach($rolesAll as $v)
                        <option value="{{$v['id']}}"
                        @if(old('role_id') == $v['id'] || $role_id == $v['id'])
                            selected="true"
                        @endif
                        >{{$v['name']}}</option>
                    @endforeach
                </select>
        </div>
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
                '<td width="20%"><input type="text" class="form-control" name="unit_number" value="@if(isset($extra_property['unit_number'])) {{$extra_property['unit_number']}} @endif" autofocus></td>'+
                '<td width="10%">姓名拼音:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="name_spell" value="@if(isset($extra_property['name_spell'])){{$extra_property['name_spell']}} @endif" autofocus></td>'+
                '<td width="10%">教研室ID:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_reasearch_room_ID" value="@if(isset($extra_property['teach_reasearch_room_ID'])){{$extra_property['teach_reasearch_room_ID']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">曾用名:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="name_before" value="@if(isset($extra_property['name_before'])){{$extra_property['name_before']}} @endif" autofocus></td>'+
                '<td width="10%">性别码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="sex_code" value="@if(isset($extra_property['sex_code'])){{$extra_property['sex_code']}} @endif" autofocus></td>'+
                '<td width="10%">出生日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="birthday" value="@if(isset($extra_property['birthday'])){{$extra_property['birthday']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">出身地码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="birthday_addr_code" value="@if(isset($extra_property['birthday_addr_code'])){{$extra_property['birthday_addr_code']}} @endif" autofocus></td>'+
                '<td width="10%">籍贯:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="native_place" value="@if(isset($extra_property['native_place'])){{$extra_property['native_place']}} @endif" autofocus></td>'+
                '<td width="10%">民族码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="nation_code" value="@if(isset($extra_property['nation_code'])){{$extra_property['nation_code']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">国籍/地区码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="nationility_code" value="@if(isset($extra_property['nationility_code'])){{$extra_property['nationility_code']}} @endif" autofocus></td>'+
                '<td width="10%">身份证件类型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_type" value="@if(isset($extra_property['identity_type'])){{$extra_property['identity_type']}} @endif" autofocus></td>'+
                '<td width="10%">身份证件号:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_number" value="@if(isset($extra_property['identity_number'])){{$extra_property['identity_number']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">身份证件有效期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="identity_valid" value="@if(isset($extra_property['identity_valid'])){{$extra_property['identity_valid']}} @endif" autofocus></td>'+
                '<td width="10%">婚姻状况码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="marriage_status_code" value="@if(isset($extra_property['marriage_status_code'])){{$extra_property['marriage_status_code']}} @endif" autofocus></td>'+
                '<td width="10%">港澳台桥外码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="conuntrymen_code" value="@if(isset($extra_property['conuntrymen_code'])){{$extra_property['conuntrymen_code']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">健康状态码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="health_status" value="@if(isset($extra_property['health_status'])){{$extra_property['health_status']}} @endif" autofocus></td>'+
                '<td width="10%">信仰宗教码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="religion" value="@if(isset($extra_property['religion'])){{$extra_property['religion']}} @endif" autofocus></td>'+
                '<td width="10%">血型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="blood_type_code" value="@if(isset($extra_property['blood_type_code'])){{$extra_property['blood_type_code']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">最高学历码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="educationest_code" value="@if(isset($extra_property['educationest_code'])) {{$extra_property['educationest_code']}} @endif" autofocus></td>'+
                '<td width="10%">文化程度码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="culture_standard_code" value="@if(isset($extra_property['culture_standard_code'])) {{$extra_property['culture_standard_code']}} @endif" autofocus></td>'+
                '<td width="10%">参加工作年月:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_first_work" value="@if(isset($extra_property['date_first_work'])) {{$extra_property['date_first_work']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">来校日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="data_come_school" value="@if(isset($extra_property['data_come_school'])) {{$extra_property['data_come_school']}} @endif" autofocus></td>'+
                '<td width="10%">起薪日期:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_start_salary" value="@if(isset($extra_property['date_start_salary'])) {{$extra_property['date_start_salary']}} @endif" autofocus></td>'+
                '<td width="10%">从教年月:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="date_start_teach" value="@if(isset($extra_property['date_start_teach'])) {{$extra_property['date_start_teach']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">编制类型码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="authorized_strength_code" value="@if(isset($extra_property['authorized_strength_code'])) {{$extra_property['authorized_strength_code']}} @endif" autofocus></td>'+
                '<td width="10%">教职工类别码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_staff_type_code" value="@if(isset($extra_property['teach_staff_type_code'])) {{$extra_property['teach_staff_type_code']}} @endif" autofocus></td>'+
                '<td width="10%">任课状况码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="teach_status_code" value="@if(isset($extra_property['teach_status_code'])) {{$extra_property['teach_status_code']}} @endif" autofocus></td>'+
            '</tr>'+
            '<tr>'+
                '<td width="10%">档案编号:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="record_number" value="@if(isset($extra_property['record_number'])) {{$extra_property['record_number']}} @endif" autofocus></td>'+
                '<td width="10%">档案文本:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="record_text" value="@if(isset($extra_property['record_text'])) {{$extra_property['record_text']}} @endif" autofocus></td>'+
                '<td width="10%">当前状态码:</td>'+
                '<td width="20%"><input type="text" class="form-control" name="current_state_code" value="@if(isset($extra_property['current_state_code'])) {{$extra_property['current_state_code']}} @endif" autofocus></td>'+
            '</tr>';
        }else if(role_id == 2){
             strHtml += '<tr>'+
                    '<td width="10%">姓名拼音:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="name_spell" value="@if(isset($extra_property['name_spell'])) {{$extra_property['name_spell']}} @endif" autofocus></td>'+
                    '<td width="10%">学生QQ:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="student_QQ" value="@if(isset($extra_property['student_QQ'])) {{$extra_property['student_QQ']}} @endif" autofocus></td>'+
                    '<td width="10%">学生电话:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="student_phone" value="@if(isset($extra_property['student_phone'])) {{$extra_property['student_phone']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">曾用名:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="name_before" value="@if(isset($extra_property['name_before'])) {{$extra_property['name_before']}} @endif" autofocus></td>'+
                    '<td width="10%">性别码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="sex_code" value="@if(isset($extra_property['sex_code'])) {{$extra_property['sex_code']}} @endif" autofocus></td>'+
                    '<td width="10%">出生日期:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="birthday" value="@if(isset($extra_property['birthday'])) {{$extra_property['birthday']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">出生地码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="birth_addr_code" value="@if(isset($extra_property['birth_addr_code'])) {{$extra_property['birth_addr_code']}} @endif" autofocus></td>'+
                    '<td width="10%">籍贯:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="native_place" value="@if(isset($extra_property['native_place'])) {{$extra_property['native_place']}} @endif" autofocus></td>'+
                    '<td width="10%">民族码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="nation_code" value="@if(isset($extra_property['nation_code'])) {{$extra_property['nation_code']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">国籍/地区码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="nationility_code" value="@if(isset($extra_property['nationility_code'])) {{$extra_property['nationility_code']}} @endif" autofocus></td>'+
                    '<td width="10%">身份证件类型码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_type" value="@if(isset($extra_property['identity_type'])) {{$extra_property['identity_type']}} @endif" autofocus></td>'+
                    '<td width="10%">身份证件号:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_number" value="@if(isset($extra_property['identity_number'])) {{$extra_property['identity_number']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">身份证件有效期:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="identity_valid" value="@if(isset($extra_property['identity_valid'])) {{$extra_property['identity_valid']}} @endif" autofocus></td>'+
                    '<td width="10%">婚姻状况码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="marriage_status_code" value="@if(isset($extra_property['marriage_status_code'])) {{$extra_property['marriage_status_code']}} @endif" autofocus></td>'+
                    '<td width="10%">港澳台桥外码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="conuntrymen_code" value="@if(isset($extra_property['conuntrymen_code'])) {{$extra_property['conuntrymen_code']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">健康状态码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="health_status" value="@if(isset($extra_property['health_status'])) {{$extra_property['health_status']}} @endif" autofocus></td>'+
                    '<td width="10%">信仰宗教码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="religion" value="@if(isset($extra_property['religion'])) {{$extra_property['religion']}} @endif" autofocus></td>'+
                    '<td width="10%">血型码:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="blood_type_code" value="@if(isset($extra_property['blood_type_code'])) {{$extra_property['blood_type_code']}} @endif" autofocus></td>'+
                '</tr>'+
                '<tr>'+
                    '<td width="10%">政治面貌:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="politics_status" value="@if(isset($extra_property['politics_status'])) {{$extra_property['politics_status']}} @endif" autofocus></td>'+
                    '<td width="10%">照片:</td>'+
                    '<td width="20%"><input type="text" class="form-control" name="photo" value="@if(isset($extra_property['photo'])) {{$extra_property['photo']}} @endif" autofocus></td>'+
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
