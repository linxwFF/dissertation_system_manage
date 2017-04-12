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

    // 判断用户是否具有某个角色
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !!$role->intersect($this->roles)->count();
    }

    // 判断用户是否具有某权限
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name',$permission)->first();
            if (!$permission) return false;
        }

        return $this->hasRole($permission->roles);
    }

    //目前只有学生和老师两个模型，多态关联
    public function extra_property()
    {
        return $this->morphTo('admin_users','userable_type','user_id');
    }

}
