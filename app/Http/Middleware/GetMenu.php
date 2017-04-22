<?php

namespace App\Http\Middleware;

use Closure;
use Auth, Cache;

//根据权限显示左侧菜单栏
class GetMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //设置全局的菜单属性
        $request->attributes->set('comData_menu', $this->getMenu());
        return $next($request);
    }

    /**
     * 获取左边菜单栏
     * @return array
     */
    function getMenu()
    {
        $openArr = [];  //打开的项目
        $data = [];
        $data['top'] = [];  //顶级目录
        //查找并拼接出地址的别名值
        $path_arr = explode('/', \URL::getRequest()->path());
        if (isset($path_arr[1])) {
            $urlPath = $path_arr[0] . '.' . $path_arr[1] . '.index';
        } else {
            $urlPath = $path_arr[0] . '.index';
        }
        //查找出所有的地址,父节点
        // $table = Cache::store('file')->rememberForever('menus', function () {
        //     return \App\Models\Admin\Permission::where('name', 'LIKE', '%index')
        //         ->orWhere('cid', 0)
        //         ->get();
        // });

        $table = \App\Models\Admin\Permission::where('name', 'LIKE', '%index')->orWhere('cid', 0)->get();

        // dd(auth('admin')->user());
        foreach ($table as $v) {
            // echo "$v->name".\Gate::forUser(auth('admin')->user())->check($v->name) ."<br/>";
            if ($v->cid == 0 || \Gate::forUser(auth('admin')->user())->check($v->name)) {

                if ($v->name == $urlPath) {
                    $openArr[] = $v->id;
                    $openArr[] = $v->cid;
                }
                $data[$v->cid][] = $v->toarray();
            }
        }
        foreach ($data[0] as $v) {
            if (isset($data[$v['id']]) && is_array($data[$v['id']]) && count($data[$v['id']]) > 0) {
                $data['top'][] = $v;    //顶级目录
            }
        }

        unset($data[0]);
        //ation open 可以在函数中计算给他
        $data['openarr'] = array_unique($openArr);
// dd($data);
        return $data;

    }
}
