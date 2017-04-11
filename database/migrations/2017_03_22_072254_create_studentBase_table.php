<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //学生基础信息表
        Schema::create('student_base_info', function (Blueprint $table) {
            $table->increments('id');

            //登录必须字段，迁移到admin_users表中

            $table->string('name_spell',60)->comment('姓名拼音')->nullable();
            $table->string('student_QQ',20)->comment('学生QQ')->nullable();
            $table->string('student_phone',20)->comment('学生电话')->nullable();
            $table->string('name_before',30)->comment('曾用名')->nullable();
            $table->string('sex_code',1)->comment('性别码')->nullable();
            $table->string('birthday',8)->comment('出生日期')->nullable();
            $table->string('birth_addr_code',6)->comment('出生地码')->nullable();
            $table->string('native_place',20)->comment('籍贯')->nullable();
            $table->string('nation_code',2)->comment('民族码')->nullable();
            $table->string('nationility_code',3)->comment('国籍/地区码')->nullable();
            $table->string('identity_type',1)->comment('身份证件类型码')->nullable();
            $table->string('identity_number',20)->comment('身份证件号')->nullable();
            $table->string('marriage_status_code',2)->comment('婚姻状况码')->nullable();
            $table->string('conuntrymen_code',2)->comment('港澳台侨外码')->nullable();
            $table->string('politics_status',1)->comment('政治面貌')->nullable();
            $table->string('health_status',1)->comment('健康状态码')->nullable();
            $table->string('religion',1)->comment('信仰宗教码')->nullable();
            $table->string('blood_type_code',2)->comment('血型码')->nullable();
            $table->string('photo')->comment('照片')->nullable();
            $table->string('identity_valid',17)->comment('身份证件有效期')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentBaseInfo');
    }
}
