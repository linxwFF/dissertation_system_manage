<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidtimeExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //中期检查
        Schema::create('midtime_exam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('professionInfo_id',10)->comment('课题号'); //专业表外键
            $table->string('title',10)->comment('设计题目');
            $table->string('studentBaseInfo_id',10)->comment('学号');    //学生表外键
            $table->string('date_begin',6)->comment('起始时间');
            $table->string('place',30)->comment('设计地点');
            $table->string('teachBaseInfo_id',10)->comment('教工号');  //教工表外键
            $table->text('work_analyze_include')->comment('工作分析总结');
            $table->text('adjust_change')->comment('调整和变动');
            $table->text('reason')->comment('原因何在');
            $table->text('opinion_teacher')->comment('指导教师意见');
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
        Schema::dropIfExists('midtimeExam');
    }
}
