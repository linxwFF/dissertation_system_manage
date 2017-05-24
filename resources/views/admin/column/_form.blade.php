<!-- <div class="col-md-12" id="div1">
<form id="1">
    <input type="hidden" value="0" name="parent_id">
    <div class="form-group">

        <label for="tag" class="col-md-1 control-label">栏目名称</label>
        <div class="col-md-2">
            <input disabled="true" type="text" class="form-control" name="title" id="tag" value="项目背景" autofocus >
        </div>

        <label for="tag" class="col-md-1 control-label">排序</label>
        <div class="col-md-2">
            <input disabled="true" type="number" class="form-control" name="sort_order" id="tag" value="1" autofocus >
        </div>

    </div>
</form>

    <div class="col-md-3">
    <button class="btn btn-primary btn-md" onclick="sumbit_form(1)" disabled="true">
        提交
    </button>

    <button class="btn btn-primary btn-md" onclick="add_sub(1)">
        增加子栏目
    </button>

    <button class="btn btn-primary btn-md" onclick="update(1)">
        修改栏目
    </button>

    <button class="btn btn-primary btn-md">
        删除栏目
    </button>
    </div>
</div> -->

@foreach ($data as $k=>$v)

<div class="col-md-12" id="div{{ $v['top']['id'] }}">
<form id="{{ $v['top']['id'] }}">
    <input type="hidden" value="{{ $v['top']['parent_id']}}" name="parent_id">
    <div class="form-group">

        <label for="tag" class="col-md-1 control-label">栏目名称</label>
        <div class="col-md-2">
            <input disabled="true" type="text" class="form-control" name="title" value="{{ $v['top']['title'] }}" autofocus >
        </div>

        <label for="tag" class="col-md-1 control-label">排序</label>
        <div class="col-md-2">
            <input disabled="true" type="number" class="form-control" name="sort_order" value="{{ $v['top']['sort_order']}}" autofocus >
        </div>

    </div>
</form>

    <div class="col-md-3">
    <button class="btn btn-primary btn-md" onclick="add_sub({{ $v['top']['id']}})">
        增加子栏目
    </button>

    <button class="btn btn-primary btn-md" onclick="update({{ $v['top']['id']}})">
        修改栏目
    </button>

    @if(!isset($v['sub']))  {{--存在子栏目时不允许删除--}}
    <button class="btn btn-primary btn-md">
        删除栏目
    </button>
    @endif
    </div>
</div>

@if(isset($v['sub']))
    @foreach($v['sub'] as $kk=>$vv)
    <div class="col-md-10">
    <div class="col-md-2">+------</div>
    <form id="{{$vv['id']}}">
        <input type="hidden" value="{{$vv['parent_id']}}" name="parent_id">
        <div class="form-group">

            <label for="tag" class="col-md-1 control-label">栏目名称</label>
            <div class="col-md-2">
                <input disabled="true" type="text" class="form-control" name="title" value="{{$vv['title']}}" autofocus>
            </div>

             <label for="tag" class="col-md-1 control-label">排序</label>
             <div class="col-md-2">
                 <input disabled="true" type="number" class="form-control" name="sort_order" value="{{$vv['sort_order']}}" autofocus>
             </div>
        </div>
    </form>

        <div class="col-md-3">

        <button class="btn btn btn-success btn-md" onclick="update({{$vv['id']}})">
            修改栏目
        </button>

        <button class="btn btn btn-success btn-md hidden" onclick="update_submit({{$vv['id']}})">
            提交
        </button>

        <button class="btn btn btn-success btn-md" onclick="delete_submit({{$vv['id']}})">
            删除栏目
        </button>
        </div>
    </div>
    @endforeach
@endif

@endforeach

<script>
//添加表单
function sumbit_form(id){

    $.ajax({
        type:'post',
        url: '/column/subject/add',
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            $('#'+ id +" input[class='form-control']").attr('disabled',true);
            $('button[onclick="sumbit_form('+id+')"]').attr('disabled',true);
            window.location.reload();
        }
    });

}


function update(id){

    $('#'+ id +" input[class='form-control']").removeAttr('disabled');
    $('button[onclick="update('+id+')"]').addClass('hidden');
    $('button[onclick="update_submit('+id+')"]').removeClass('hidden');

    console.log(id);

}

function update_submit(id){

    $.ajax({
        type:'post',
        url: '/column/subject/edit/'+id,
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            $('#'+ id +" input[class='form-control']").attr('disabled',true);
            $('button[onclick="sumbit_form('+id+')"]').attr('disabled',true);
            window.location.reload();
        }
    });
}

function delete_submit(id){
    $.ajax({
        type:'post',
        url: '/column/subject/delete/'+id,
        data: $('#'+ id).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            window.location.reload(); 
        }
    });
}


function add_sub(id){

    var lastformId = $('form').size();      //创建新的from的ID

    console.log(lastformId);
    console.log('对应的父节点ID：'+id);

    var html_item = '';
    html_item += '<div class="col-md-10">';
    html_item += '<div class="col-md-2">+------</div>'
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
    html_item += '    <button class="btn btn btn-danger btn-md" onclick="sumbit_form('+lastformId+')" >';
    html_item += '        添加';
    html_item += '    </button>';

    html_item += '    </div>';
    html_item += '</div>';

    $('#div'+ id).append(html_item);

}
</script>
