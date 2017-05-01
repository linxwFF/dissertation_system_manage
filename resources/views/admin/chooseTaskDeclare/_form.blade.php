<div class="form-group">
    <label for="tag" class="col-md-2 control-label">课程名称</label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="subject_name" id="tag" value="{{ $subject_name }}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">项目号</label>
    <div class="col-md-3">
        <input type="text" class="form-control" name="subject_number" id="tag" value="{{ $subject_number }}" autofocus>
    </div>
    <label for="tag" class="col-md-2 control-label">教研室ID</label>
    <div class="col-md-3">
        <input type="text" class="form-control" name="teach_reasearch_room" id="tag" value="{{ $teach_reasearch_room }}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">教工号</label>
    <div class="col-md-3">
        <input type="text" class="form-control" name="teachBaseInfo_id" id="tag" value="{{ $teachBaseInfo_id }}" autofocus>
    </div>
    <label for="tag" class="col-md-2 control-label">适用层次</label>
    <div class="col-md-3">
        <input type="text" class="form-control" name="suitable_level" id="tag" value="{{ $suitable_level }}" autofocus>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">项目背景</label>
    <div class="col-md-8">
        <textarea name="project_background" class="form-control" rows="3">{{ $project_background }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">实现功能</label>
    <div class="col-md-8">
        <textarea name="achieve_fun" class="form-control" rows="3">{{ $achieve_fun }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">采用技术</label>
    <div class="col-md-8">
        <textarea name="technology" class="form-control" rows="3">{{ $technology }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">规格要求</label>
    <div class="col-md-8">
        <textarea name="specification" class="form-control" rows="3">{{ $specification }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">进度及安排</label>
    <div class="col-md-8">
        <textarea name="schedule" class="form-control" rows="3">{{ $schedule }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">提交作品内容及要求</label>
    <div class="col-md-8">
        <textarea name="subject_content_require" class="form-control" rows="3">{{ $subject_content_require }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">导师意见</label>
    <div class="col-md-8">
        <textarea name="opinion_tutor" class="form-control" rows="3">{{ $opinion_tutor }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">教研室审查意见</label>
    <div class="col-md-8">
        <textarea name="opinion_trch_room" class="form-control" rows="3">{{ $opinion_trch_room }}</textarea>
    </div>
</div>

<div class="form-group">
    <label for="tag" class="col-md-2 control-label">状态</label>
    <div class="col-md-8">
        <input type="text" class="form-control" name="state" id="tag" value="{{ $state }}" autofocus>
    </div>
</div>
<div class="form-group">

</div>
<script>
    $(function () {
        $('.all-check').on('click', function () {

        });
    });
</script>
