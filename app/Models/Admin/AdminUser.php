<?php

namespace App\Models\Admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use Notifiable;
    protected $table='admin_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    //目前只有学生和老师两个模型，多态关联
    public function extra_property()
    {
        return $this->morphTo('admin_users','userable_type','user_id');
    }

    //获取用户的权限
    public function get_permissions()
    {
        $permissions = PermissionRole::
        join('admin_permissions','permission_id','=','id')->where('role_id',$this->role_id)->get(['id']);

        return $permissions;
    }

    //判断用户是否拥有某种权限
    public function has_permission($per)
    {
        $permission = PermissionRole::where('role_id',$this->role_id)->where('permission_id',$per->id)->first();
        if (!$permission) return false;
        return true;
    }

    //用户对应的角色  一个用户只有一种角色
    public function role()
    {
        return $this->belongsTo('App\Models\Admin\Role');
    }
}
