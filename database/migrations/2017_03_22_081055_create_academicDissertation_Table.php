<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicDissertationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //学问论文表
        Schema::create('academicDissertation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teach_reasearch_room_ID',10)->comment('教研室ID');
            $table->string('title_chinese',60)->comment('论文题目');
            $table->string('title_english',180)->comment('论文英文题目');
            $table->string('keyword_chinese',60)->comment('论文主题词');
            $table->string('keyword_english',180)->comment('论文英文主题词');
            $table->text('digest_chinese')->comment('中文摘要');
            $table->text('digest_english')->comment('英文摘要');
            $table->string('date_start',8)->comment('论文起始日期');
            $table->string('date_end',8)->comment('论文终止日期');
            $table->decimal('num_words',4,2)->comment('论文字数');
            $table->string('psw_code',1)->comment('论文密码级');
            $table->string('type_code',1)->comment('论文类型码');
            $table->string('select_source_code',2)->comment('论文选题来源码');
            $table->string('win_level_code',2)->comment('论文获奖级别码');
            $table->string('award_level_code',1)->comment('奖励等级码');
            $table->string('midgraph_classify_code',10)->comment('论文中图文分类号');
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
        Schema::dropIfExists('academicDissertation');
    }
}
