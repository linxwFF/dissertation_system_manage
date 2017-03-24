<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDissertationUpdateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //论文题目修改
        Schema::create('dissertationUpdateTopic', function (Blueprint $table){
            $table->increments('id');
            $table->string('studentBaseInfo_id', 10)->commit('学号');      //学生表外键
            $table->string('subjectInfo_id', 10)->commit('课题号');      //课题表外键
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
        Schema::dropIfExists('dissertationUpdateTopic');
    }
}
