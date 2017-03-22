<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //课题信息表
        Schema::create('subjectInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name',50)->comment('课程名称');
            $table->string('subject_number',10)->comment('项目号');
            $table->string('teach_reasearch_room',10)->comment('教研室ID');
            $table->string('teachBaseInfo_id',10)->comment('教工号');
            $table->string('suitable_level',10)->comment('适用层次');
            $table->string('project_background')->comment('项目背景');
            $table->text('achieve_fun')->comment('实现功能');
            $table->text('technology')->comment('采用技术');
            $table->text('specification')->comment('规格要求');
            $table->text('schedule')->comment('进度及安排');
            $table->text('subject_content_require')->comment('提交作品内容及要求');
            $table->string('state',10)->comment('状态');
            $table->text('opinion_tutor')->comment('导师意见');
            $table->text('opinion_trch_room')->comment('教研室审查意见');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjectInfo');
    }
}
