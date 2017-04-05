<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeSlotTaskArriveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //时间段任务下达
        Schema::create('time_slot_task_arrive', function (Blueprint $table){
            $table->increments('id');
            $table->string('teach_reasearch_room_ID', 10)->commit('教研室ID');
            $table->string('byTeachStaffNo', 10)->commit('教工号来自');
            $table->string('toTeachStaffNo', 10)->commit('教工号目标');
            $table->string('arrive_time_task', 8)->commit('任务下达时间');
            $table->string('name_task', 180)->commit('任务名称');
            $table->string('date_begin', 8)->commit('起始日期');
            $table->string('date_end', 8)->commit('终止日期');
            $table->text('content_task')->commit('任务内容');
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
        Schema::dropIfExists('timeSlotTaskArrive');
    }
}
