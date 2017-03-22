<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openingReport', function (Blueprint $table) {
            $table->increments('id');
            $table->string('professionInfo_id',6)->comment('专业号');  //专业表的外键
            $table->string('subjectDesign',50)->comment('设计题目');
            $table->string('studentBaseInfo_id',10)->comment('学号'); //学生表外键
            $table->string('date_start',30)->comment('起始时间');
            $table->string('place_design',30)->comment('设计地点');
            $table->string('teachBaseInfo_id',10)->comment('教工号'); //教师表外键
            $table->text('subject_task_statetext')->comment('课题任务情况');
            $table->text('method_use')->comment('采用方法');
            $table->text('opinion_teacher')->comment('指导教师意见');
            $table->text('opinion_college')->comment('学院意见');
            $table->string('state',2)->comment('状态');
            $table->text('opinion_feedback')->comment('反馈意见');
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
        Schema::dropIfExists('openingReport');
    }
}
