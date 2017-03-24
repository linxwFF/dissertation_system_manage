<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTeamQueryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //答辩小组查询
        Schema::create('answerTeamQuery', function (Blueprint $table){
            $table->increments('id');
            $table->string('teachBaseInfo_id', 6)->commit('教工号');      //教工表外键
            $table->string('professionInfo_id', 6)->commit('专业号');     //专业表外键
            $table->string('studentBaseInfo_id', 10)->commit('学号');      //学生表外键
            $table->string('subjectInfo_id', 10)->commit('课题号');      //课题表外键
            $table->string('group_order', 8)->commit('组次');
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
        Schema::dropIfExists('answerTeamQuery');
    }
}
