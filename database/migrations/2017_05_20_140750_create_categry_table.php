<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //栏目分类表
        Schema::create('category', function (Blueprint $table){
            $table->increments('id');
            $table->integer('parent_id')->commit("父id");
            $table->string('title', 10)->commit('栏目标题');
            $table->integer('sort_order')->commit('排序字段');
            $table->integer('status')->commit('是否启用新栏目')->nullable();
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
        Schema::dropIfExists('category');
    }
}
