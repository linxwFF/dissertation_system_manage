<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskdocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //任务书信息
        Schema::create('task_doc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name')->comment('课题号');   //课题表外键
            $table->string('studentBaseInfo_id')->comment('学生号');   //学生表外键
            $table->string('teachBaseInfo_id')->comment('教工号');   //教工表外键
            $table->string('professionInfo_id',6)->comment('专业号');   //专业表外键
            $table->text('subject_content_require')->comment('课题内容与要求');
            $table->text('main_technology_index')->comment('主要技术指标');
            $table->string('date_begin',6)->comment('起始日期');
            $table->text('iterature_reference')->comment('参考文献');
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
        Schema::dropIfExists('taskdoc');
    }
}
