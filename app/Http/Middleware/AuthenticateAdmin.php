<?php

namespace App\Http\Middleware;

use Closure;
use Route, URL, Auth;
use Request;

class AuthenticateAdmin
{

    protected $except = [
        'admin/index',
    ];

    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->user()->id === 1) {
            return $next($request);
        }

        $previousUrl = URL::previous();
        //路由名字，以admin开头
        $routeName = Route::currentRouteName();
        //匹配admin的路由
        $flag = (bool)preg_match('/' . 'admin' . '/', Request::getRequestUri());
        $flag2 = (bool)preg_match('/' . 'admin' . '/', Route::currentRouteName());

        if($flag && !$flag2){
            $routeName = "admin.".Route::currentRouteName();
        }

        //进入后台的权限
        if($routeName == "admin.home"){
            return $next($request);
        }

        //判断登录到后台的用户是否具有某种权限
        if (!\Gate::forUser(auth('admin')->user())->check($routeName)) {
            //如果没有admin的权限
            if ($request->ajax() && ($request->getMethod() != 'GET')) {
                //通过ajax或者post
                return response()->json([
                    'status' => -1,
                    'code'   => 403,
                    'msg'    => '您没有权限执行此操作',
                ]);
            } else {
                //通过get方法
                return response()->view('errors.403', compact('previousUrl'));
            }
        }

        return $next($request);
    }
}
