<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classes')->comment('班級');
            $table->string('date_build')->comment('建班年月');
            $table->string('class_directorID')->comment('班主任教工号');
            $table->string('monitorID')->comment('班长学号');
            $table->string('instructorID')->comment('辅导员号');
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
        Schema::dropIfExists('classesInfo');
    }
}
