<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordOfCategryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //栏目分类表
        Schema::create('word_of_categry', function (Blueprint $table){
            $table->increments('id');
            $table->integer('categry_id')->commit("所属栏目");  //分类表外键
            $table->string('title', 10)->commit('内容标题');
            $table->text('content')->commit('内容');
            $table->integer('status')->commit('发布/更新／草稿...？预留字段');
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
        Schema::dropIfExists('wordOfCategry');
    }
}
