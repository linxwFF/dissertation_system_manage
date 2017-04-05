<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachGroupingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //教职工分组
        Schema::create('teach_grouping', function (Blueprint $table){
            $table->increments('id');
            $table->string('teachBaseInfo_id', 10)->commit('教工号');      //教工表外键
            $table->string('groupKind', 10)->commit('组别');
            $table->string('jurisdiction', 4)->commit('权限');
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
        Schema::dropIfExists('teachGrouping');
    }
}
