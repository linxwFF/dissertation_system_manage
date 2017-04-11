<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachBaseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //教职工基础数据表
        Schema::create('teach_base_info', function (Blueprint $table) {
            $table->increments('id');

            //登录必须字段，迁移到admin_users表中

            $table->string('unit_number',8)->comment('单位号')->nullable();
            $table->string('name_spell',60)->comment('姓名拼音')->nullable();
            $table->string('teach_reasearch_room_ID',10)->comment('教研室ID')->nullable();
            $table->string('name_before',30)->comment('曾用名')->nullable();
            $table->string('sex_code',1)->comment('性别码')->nullable();
            $table->string('birthday',8)->comment('出生日期')->nullable();
            $table->string('birthday_addr_code',6)->comment('出身地码')->nullable();
            $table->string('native_place',20)->comment('籍贯')->nullable();
            $table->string('nation_code',2)->comment('民族码')->nullable();
            $table->string('nationility_code',3)->comment('国籍/地区码')->nullable();
            $table->string('identity_type',1)->comment('身份证件类型码')->nullable();
            $table->string('identity_number',20)->comment('身份证件号')->nullable();
            $table->string('identity_valid',17)->comment('身份证件有效期')->nullable();
            $table->string('marriage_status_code',2)->comment('婚姻状况码')->nullable();
            $table->string('conuntrymen_code',2)->comment('港澳台桥外码')->nullable();
            $table->string('health_status',1)->comment('健康状态码')->nullable();
            $table->string('religion',1)->comment('信仰宗教码')->nullable();
            $table->string('blood_type_code',2)->comment('血型码')->nullable();
            $table->string('educationest_code',2)->comment('最高学历码')->nullable();
            $table->string('culture_standard_code',2)->comment('文化程度码')->nullable();
            $table->string('date_first_work',6)->comment('参加工作年月')->nullable();
            $table->string('data_come_school',8)->comment('来校日期')->nullable();
            $table->string('date_start_salary',8)->comment('起薪日期')->nullable();
            $table->string('date_start_teach',6)->comment('从教年月')->nullable();
            $table->string('authorized_strength_code',2)->comment('编制类型码')->nullable();
            $table->string('teach_staff_type_code',2)->comment('教职工类别码')->nullable();
            $table->string('teach_status_code',2)->comment('任课状况码')->nullable();
            $table->string('record_number',10)->comment('档案编号')->nullable();
            $table->text('record_text')->comment('档案文本')->nullable();
            $table->string('current_state_code',2)->comment('当前状态码')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachBaseInfo');
    }
}
