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
        Schema::create('teachBaseInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password')->comment('密码');
            $table->string('unit_number',8)->comment('单位号');
            $table->string('name',30)->comment('姓名');
            $table->string('name_spell',60)->comment('姓名拼音');
            $table->string('teach_reasearch_room_ID',10)->comment('教研室ID');
            $table->string('name_before',30)->comment('曾用名');
            $table->string('sex_code',1)->comment('性别码');
            $table->string('birthday',8)->comment('出生日期');
            $table->string('birthday_addr_code',6)->comment('出身地码');
            $table->string('native_place',20)->comment('籍贯');
            $table->string('nation_code',2)->comment('民族码');
            $table->string('nationility_code',3)->comment('国籍/地区码');
            $table->string('identity_type',1)->comment('身份证件类型码');
            $table->string('identity_number',20)->comment('身份证件号');
            $table->string('identity_valid',17)->comment('身份证件有效期');
            $table->string('marriage_status_code',2)->comment('婚姻状况码');
            $table->string('countrymen_code',2)->comment('港澳台桥外码');
            $table->string('health_status',1)->comment('健康状态码');
            $table->string('religion',1)->comment('信仰宗教码');
            $table->string('blood_type_code',2)->comment('血型码');
            $table->string('educationest_code',2)->comment('最高学历码');
            $table->string('culture_standard_code',2)->comment('文化程度码');
            $table->string('date_first_work',6)->comment('参加工作年月');
            $table->string('data_come_school',8)->comment('来校日期');
            $table->string('date_start_salary',8)->comment('起薪日期');
            $table->string('date_start_teach',6)->comment('从教年月');
            $table->string('authorized_strength_code',2)->comment('编制类型码');
            $table->string('teach_staff_type_code',2)->comment('教职工类别码');
            $table->string('teach_status_code',2)->comment('任课状况码');
            $table->string('record_number',10)->comment('档案编号');
            $table->text('record_text')->comment('档案文本');
            $table->string('current_state_code',2)->comment('当前状态码');
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
        Schema::dropIfExists('teachBaseInfo');
    }
}
