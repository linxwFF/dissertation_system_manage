<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDissertationAnswerCommitteemanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //论文答辩委员
        Schema::create('dissertation_answer_committeeman', function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 30)->commit('答辩委员姓名');
            $table->string('duty_code', 3)->commit('答辩委员职务码');
            $table->string('unit', 60)->commit('答辩委员单位');
            $table->string('isTutor', 1)->commit('答辩委员是否博导');
            $table->string('isChairman', 1)->commit('答辩委员是否主席');
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
        Schema::dropIfExists('dissertationAnswerCommitteeman');
    }
}
