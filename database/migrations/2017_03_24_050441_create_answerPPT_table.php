<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerPPTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //答辩PPT
        Schema::create('answerPPT', function (Blueprint $table){
            $table->increments('id');
            $table->string('subjectInfo_id', 10)->commit('课题号');      //课题表外键
            $table->string('studentBaseInfo_id', 10)->commit('学号');      //学生表外键
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
        Schema::dropIfExists('answerPPT');
    }
}
