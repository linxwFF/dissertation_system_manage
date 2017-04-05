<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTeamAssignedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //答辩小组分配
        Schema::create('answer_team_assigned', function (Blueprint $table){
            $table->increments('id');
            $table->string('studentBaseInfo_id', 10)->commit('学号'); //学生表外键
            $table->string('professionInfo_id', 6)->commit('专业号'); //专业表外键
            $table->string('classesInfo_id', 10)->commit('班号');    //班级表外键
            $table->string('subjectInfo_id', 10)->commit('课题号');    //课题表外键
            $table->string('teachBaseInfo_id', 10)->commit('教工号');  //教工表外键
            $table->string('group_leader', 10)->commit('组长');
            $table->string('group_member', 50)->commit('组员');
            $table->dateTime('answer_time', 10)->commit('答辩时间');
            $table->string('answer_place', 30)->commit('答辩地点');
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
        Schema::dropIfExists('answerTeamAssigned');
    }
}
