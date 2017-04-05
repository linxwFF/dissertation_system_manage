<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGroupingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //学生分组表
        Schema::create('student_grouping', function (Blueprint $table){
            $table->increments('id');
            $table->string('studentBaseInfo_id', 10)->commit('学号');      //学生表外键
            $table->string('classesInfo_id', 10)->commit('班号');      //班级表外键
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
        Schema::dropIfExists('studentGrouping');
    }
}
