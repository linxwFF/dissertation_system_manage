<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //周记
        Schema::create('weekly', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subjectInfo_id',10)->comment('课题号'); //课题表外键
            $table->string('studentBaseInfo_id',10)->comment('学号'); //学生表外键
            $table->string('teachBaseInfo_id',10)->comment('教工号');    //教工表外键
            $table->string('professionInfo_id',6)->comment('专业号');    //专业表外键
            $table->string('classesInfo_id',10)->comment('班号');
            $table->string('date_begin',30)->comment('起始时间');
            $table->string('cycle',8)->comment('周次');
            $table->string('time',50)->comment('时间');
            $table->string('place',30)->comment('设计地点');
            $table->text('tutor_guidet_record')->comment('导师指导记录');
            $table->text('worklogs')->comment('毕业设计记录工作');
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
        Schema::dropIfExists('weekly');
    }
}
