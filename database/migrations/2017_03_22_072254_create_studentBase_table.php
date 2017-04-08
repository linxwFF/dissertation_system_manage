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

            $table->string('name_spell',60)->comment('姓名拼音');
            $table->string('student_QQ',20)->comment('学生QQ');
            $table->string('student_phone',20)->comment('学生电话');
            $table->string('name_before',30)->comment('曾用名');
            $table->string('sex_code',1)->comment('性别码');
            $table->string('birthday',8)->comment('出生日期');
            $table->string('birth_addr_code',6)->comment('出生地码');
            $table->string('native_place',20)->comment('籍贯');
            $table->string('nation_code',2)->comment('民族码');
            $table->string('nationility_code',3)->comment('国籍/地区码');
            $table->string('identity_type',1)->comment('身份证件类型码');
            $table->string('identity_number',20)->comment('身份证件号');
            $table->string('marriage_states_code',2)->comment('婚姻状况码');
            $table->string('conuntrymen_code',2)->comment('港澳台侨外码');
            $table->string('politics_status',1)->comment('政治面貌');
            $table->string('health_status',1)->comment('健康状态码');
            $table->string('religion',1)->comment('信仰宗教码');
            $table->string('blood_type',2)->comment('血型码');
            $table->string('photo')->comment('照片');
            $table->string('identity_valid',17)->comment('身份证件有效期');
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
