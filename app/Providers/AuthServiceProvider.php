<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;

use App\Models\Admin\Permission;
use App\Models\Admin\PermissionRole;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        if (!empty($_SERVER['SCRIPT_NAME']) && strtolower($_SERVER['SCRIPT_NAME']) === 'artisan') {
            return false;
        }

        //id为1的超级管理员,拥有全部的用户权限
        $gate->before(function ($user, $ability) {
            if ($user->id === 1) {
                return true;
            }
        });

        $this->registerPolicies($gate);

        $permissions = \App\Models\Admin\Permission::with('roles')->get();  //所有的权限
        // dd($permissions->toArray());

        $gate->define('admin.home','App\Http\Controllers\Admin\HomeController@index');

        //附加权限
        foreach ($permissions as $permission) {
            $gate->define($permission->name, function ($user) use ($permission) {
                return $user->has_permission($permission);
            });
        }

    }
}
