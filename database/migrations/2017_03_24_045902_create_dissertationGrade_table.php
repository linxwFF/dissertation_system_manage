<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDissertationGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //论文成绩
        Schema::create('dissertationGrade', function (Blueprint $table){
            $table->increments('id');
            $table->string('teachBaseInfo_id', 10)->commit('教工号');
            $table->string('studentBaseInfo', 6)->commit('学号');
            $table->string('professionInfo', 8)->commit('专业号');
            $table->string('grade', 10)->commit('成绩');
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
        Schema::dropIfExists('dissertationGrade');
    }
}
