<div class="modal fade" id="modal-delete" tabIndex="-1">
<div class="modal-dialog modal-warning">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">
        ×
    </button>
    <h4 class="modal-title">提示</h4>
</div>
<div class="modal-body">
    <p class="lead">
        <i class="fa fa-question-circle fa-lg"></i>
        确认要删除这个权限吗?
    </p>
</div>
<div class="modal-footer">
    <form class="deleteForm" method="POST" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-danger">
            <i class="fa fa-times-circle"></i> 确认
        </button>
    </form>
</div>
</div>
</div>
</div>
