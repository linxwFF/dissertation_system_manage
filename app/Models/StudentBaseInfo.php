<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentBaseInfo extends Model
{
    protected $table='student_base_info';
    public $timestamps = false;

    //不显示字段
    protected $guarded = ['id'];

    //用户表
    public function student()
    {
        return $this->morphMany( App\Models\Admin\AdminUser::class, 'admin_users','userable_type','user_id');
    }

}
