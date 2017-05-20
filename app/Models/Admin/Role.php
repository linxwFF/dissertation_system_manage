<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='admin_roles';

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'admin_permission_role','role_id','permission_id');
    }

    //给角色添加权限
    public function givePermissionTo($permission)
    {
        return $this->permissions()->save($permission);
    }

    //角色对于的用户  一个角色有多个用户
    public function adminUser()
    {
        return $this->hasMany('App\Models\Admin\AdminUer');
    }

}
