<?php

namespace App\Http\Middleware;

use Closure;
use Route, URL, Auth;

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
        // if (Auth::guard('admin')->user()->id === 1) {
        //     return $next($request);
        // }

        $previousUrl = URL::previous();
        $routeName = starts_with(Route::currentRouteName(), 'admin.') ? Route::currentRouteName() : 'admin.' . Route::currentRouteName();

        // echo $routeName;
        // dd(!\Gate::forUser(auth('admin')->user())->check($routeName));
        // if (!\Gate::forUser(auth('admin')->user())->check($routeName)) {
        //     //如果没有admin的权限
        //     if ($request->ajax() && ($request->getMethod() != 'GET')) {
        //         //通过ajax或者post
        //         return response()->json([
        //             'status' => -1,
        //             'code'   => 403,
        //             'msg'    => '您没有权限执行此操作',
        //         ]);
        //     } else {
        //         //通过get方法
        //         return response()->view('errors.500', compact('previousUrl'));
        //     }
        // }

        return $next($request);
    }
}
