<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //专业信息表
        Schema::create('profession_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60)->comment('专业名称');
            $table->string('name_short',20)->comment('专业简称');
            $table->string('name_english',180)->comment('专业英文名称');
            $table->string('direction_number',2)->comment('专业方向号');
            $table->string('department_number',8)->comment('院系所号');
            $table->double('length_school',3,1)->comment('学制');
            $table->string('subject_kind_code',2)->comment('学科门类码');
            $table->string('profession_code_bk',6)->comment('本专科专业码');
            $table->string('profession_code_yjs',6)->comment('研究生专业码');
            $table->string('date_build',6)->comment('建立年月');
            $table->string('term_start',1)->comment('起始学期');
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
        Schema::dropIfExists('professionInfo');
    }
}
