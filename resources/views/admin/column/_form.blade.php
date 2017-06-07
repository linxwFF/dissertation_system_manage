<?php $count = 1; ?>
@foreach ($data as $k=>$v)

<div class="col-md-12" id="parent{{ $count }}">
<form id="{{ $v['top']['id'] }}">
    <input type="hidden" value="{{ $v['top']['parent_id']}}" name="parent_id">
    <div class="form-group">

        <label for="tag" class="col-md-1 control-label">栏目名称</label>
        <div class="col-md-2">
            <input disabled="true" type="text" class="form-control" name="title" value="{{ $v['top']['title'] }}" autofocus>
        </div>

        <label for="tag" class="col-md-1 control-label">排序</label>
        <div class="col-md-2">
            <input disabled="true" type="number" class="form-control" name="sort_order" value="{{ $v['top']['sort_order']}}" autofocus>
        </div>

    </div>
</form>

    <div class="col-md-3">
    <button class="btn btn-primary btn-md" onclick="add_sub({{ $v['top']['id']}},{{ $count }})">
        增加子栏目
    </button>

    <button class="btn btn-primary btn-md" onclick="update_parent({{ $v['top']['id'] }}, {{ $count }})">
        修改栏目
    </button>

    <button class="btn btn btn-success btn-md hidden" onclick="update_parent_submit({{ $v['top']['id'] }}, {{ $count }})">
        提交
    </button>

    @if(!isset($v['sub']))  {{--存在子栏目时不允许删除--}}
    <button class="btn btn-primary btn-md" onclick="delete_submit({{$v['top']['id']}})">
        删除栏目
    </button>
    @endif
    </div>
</div>

@if(isset($v['sub']))
    @foreach($v['sub'] as $kk=>$vv)
    <div class="col-md-10" id="sub{{ $vv['id'] }}">
    <div class="col-md-2">|-------------</div>
    <form id="{{ $vv['id'] }}">
        <input type="hidden" value="{{$vv['parent_id']}}" name="parent_id">
        <div class="form-group">

            <label for="tag" class="col-md-1 control-label">栏目名称</label>
            <div class="col-md-2">
                <input disabled="true" type="text" class="form-control" name="title" value="{{$vv['title']}}" autofocus >
            </div>

             <label for="tag" class="col-md-1 control-label">排序</label>
             <div class="col-md-2">
                 <input disabled="true" type="number" class="form-control" name="sort_order" value="{{$vv['sort_order']}}" autofocus>
             </div>
        </div>
    </form>

        <div class="col-md-3">

        <button class="btn btn btn-success btn-md" onclick="update_sub({{$vv['id']}})">
            修改栏目
        </button>

        <button class="btn btn btn-success btn-md hidden" onclick="update_sub_submit({{$vv['id']}})">
            提交
        </button>

        <button class="btn btn btn-success btn-md" onclick="delete_submit({{$vv['id']}})">
            删除栏目
        </button>
        </div>
    </div>
    @endforeach
@endif

<?php $count++; ?>
@endforeach


{{--扩展的JS--}}
@section('extendJs')
<!--Layer -->
<script src="{{asset('back/plugins/layer/layer.js')}}"></script>
<script>
    function tips(msg, status){
        layer.confirm(msg, {
            btn: ['确定'] //按钮
        }, function(){
            window.location.reload();
        });
    }
</script>
<script>
//添加表单
function add_submit(id){

    console.log(id);

    $.ajax({
        type:'post',
        url: '/column/subject/add',
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            $('#'+ id +" input[class='form-control']").attr('disabled',true);
            $('button[onclick="add_submit('+id+')"]').attr('disabled',true);

            tips(data.message); //提示

            console.log(data);
        },
        error: function(jqXhr) {
            var errors = jqXhr.responseJSON;

            var errorHtml = '';
            $.each(errors, function(index, value) {
                errorHtml += value;
            });
            layer.alert(errorHtml, {icon: 2});
        }
    });

}
//更新事件_大题
function update_parent(id, count){

    $('#parent'+ count +" input[class='form-control']").removeAttr('disabled');
    $('button[onclick="update_parent('+id+', '+count+')"]').addClass('hidden');   //隐藏     修改栏目
    $('button[onclick="update_parent_submit('+id+', '+count+')"]').removeClass('hidden'); //显示     //提交

    console.log("修改的ID："+id);

}
//更新事件_子题
function update_sub(id){

    $('#sub'+ id +" input[class='form-control']").removeAttr('disabled');
    $('button[onclick="update_sub('+id+')"]').addClass('hidden');   //隐藏
    $('button[onclick="update_sub_submit('+id+')"]').removeClass('hidden'); //显示

    console.log("修改的ID："+id);

}

//更新表单_大题
function update_parent_submit(id,count){

    $.ajax({
        type:'post',
        url: '/column/subject/edit/'+id,
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            $('#parent'+ count +" input[class='form-control']").attr('disabled',true);
            $('button[onclick="add_submit('+id+')"]').attr('disabled',true);
            tips(data.message); //提示
        },
        error: function(jqXhr) {
            var errors = jqXhr.responseJSON;

            var errorHtml = '';
            $.each(errors, function(index, value) {
                errorHtml += value;
            });
            layer.alert(errorHtml, {icon: 2});
        }
    });
}

//更新表单_子题
function update_sub_submit(id){

    $.ajax({
        type:'post',
        url: '/column/subject/edit/'+id,
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            $('#sub'+ id +" input[class='form-control']").attr('disabled',true);
            $('button[onclick="add_submit('+id+')"]').attr('disabled',true);
            tips(data.message); //提示
        },
        error: function(jqXhr) {
            var errors = jqXhr.responseJSON;

            var errorHtml = '';
            $.each(errors, function(index, value) {
                errorHtml += value;
            });
            layer.alert(errorHtml, {icon: 2});
        }
    });
}


//删除表单
function delete_submit(id){
    $.ajax({
        type:'post',
        url: '/column/subject/delete/'+id,
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            tips(data.message); //提示
        }
    });
}
//添加大标题
function add_parent(){
    console.log('添加大标题');

    var lastformId = $('form').size(); //创建新的from的ID
    console.log('创建新的from的ID'+lastformId);

    var html_item = '';
    html_item += '<div class="col-md-12" id="parent'+lastformId+'">';
    html_item += '<form id="'+lastformId+'">';
    html_item += '    <input type="hidden" value="0" name="parent_id">';
    html_item += '    <div class="form-group">';

    html_item += '        <label for="tag" class="col-md-1 control-label">栏目名称</label>';
    html_item += '        <div class="col-md-2">';
    html_item += '            <input type="text" class="form-control" name="title" value="" autofocus>';
    html_item += '        </div>';

    html_item += '         <label for="tag" class="col-md-1 control-label">排序</label>';
    html_item += '         <div class="col-md-2">';
    html_item += '             <input type="number" class="form-control" name="sort_order" value="" autofocus>';
    html_item += '         </div>';
    html_item += '    </div>';
    html_item += '</form>';

    html_item += '    <div class="col-md-3">';
    html_item += '    <button class="btn btn-primary btn-md" onclick="add_submit('+lastformId+')" >';
    html_item += '        添加';
    html_item += '    </button>';

    html_item += '    </div>';
    html_item += '</div>';

    $("#item").append(html_item);

}
//添加子标题
function add_sub(id, count){

    var lastformId = $('form').size();      //创建新的from的ID

    console.log(lastformId);
    console.log('对应的父节点ID：'+id);

    var html_item = '';
    html_item += '<div class="col-md-10" id="sub'+id+'">';
    html_item += '<div class="col-md-2">|-------------</div>'
    html_item += '<form id="'+lastformId+'">';
    html_item += '    <input type="hidden" value="'+ id +'" name="parent_id">';
    html_item += '    <div class="form-group">';

    html_item += '        <label for="tag" class="col-md-1 control-label">栏目名称</label>';
    html_item += '        <div class="col-md-2">';
    html_item += '            <input type="text" class="form-control" name="title" value="项目背景" autofocus>';
    html_item += '        </div>';

    html_item += '         <label for="tag" class="col-md-1 control-label">排序</label>';
    html_item += '         <div class="col-md-2">';
    html_item += '             <input type="number" class="form-control" name="sort_order" value="1" autofocus>';
    html_item += '         </div>';
    html_item += '    </div>';
    html_item += '</form>';

    html_item += '    <div class="col-md-3">';
    html_item += '    <button class="btn btn btn-danger btn-md" onclick="add_submit('+lastformId+')" >';
    html_item += '        添加';
    html_item += '    </button>';

    html_item += '    </div>';
    html_item += '</div>';

    $('#parent'+ count).append(html_item);

}
</script>
@endsection
