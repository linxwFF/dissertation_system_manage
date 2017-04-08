<?php

namespace App\Http\Controllers\Admin\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\AdminUser;
use App\Models\Admin\Role;
use App\Models\StudentBaseInfo;
use App\Models\TeachBaseInfo;


use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\AdminUserUpdateRequest;

class UserController extends Controller
{
    protected $fields = [
        'name'  => '',
        'email' => '',
        'roles' => [],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = array();
            $data['draw'] = $request->get('draw');
            $start = $request->get('start');
            $length = $request->get('length');
            $order = $request->get('order');
            $columns = $request->get('columns');    //指定排序字段
            $search = $request->get('search');
            $role_tag = $request->get('role_tag');  //指定角色

            //全部未过滤
            $data['recordsTotal'] = AdminUser::count();

            if($role_tag == 'all')
            {
                //模糊查询
                if (strlen($search['value']) > 0) {
                    //模糊查询总计筛选条数
                    $data['recordsFiltered'] = AdminUser::where(function ($query) use ($search) {
                        $query->where('name', 'LIKE', '%' . $search['value'] . '%')
                            ->orWhere('email', 'like', '%' . $search['value'] . '%');
                    })->count();

                    //分页记录
                    $data['data'] = AdminUser::where(function ($query) use ($search) {
                        $query->where('name', 'LIKE', '%' . $search['value'] . '%')
                            ->orWhere('email', 'like', '%' . $search['value'] . '%');
                    })
                        ->skip($start)->take($length)
                        ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                        ->get();

                } else {
                    $data['recordsFiltered'] = AdminUser::count();

                    $array_ids = array_pluck(AdminUser::all(), 'id');
                    $data['data'] = AdminUser::whereIn('id', $array_ids)->get()->toArray();
                    //多对多的用户其他属性
                    foreach ($array_ids as $key => $value) {
                        $data['data'][$key] = array_merge( $data['data'][$key],
                        current(AdminUser::find($value)
                        ->admin_users()
                        ->skip($start)->take($length)
                        ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                        ->get()->toArray()));
                    }

                }
            }else{
                $admin_role = Role::where('id',$role_tag)->get(['model_type','name'])->first()->toArray();   //角色
                $admin_role_model = $admin_role['model_type'];   //角色模型
                //模糊查询
                if (strlen($search['value']) > 0) {
                    //记录筛选
                    $data['recordsFiltered'] = AdminUser::where(function ($query) use ($search) {
                        $query->where('userable_type',$admin_role_model)
                            ->where('name', 'LIKE', '%' . $search['value'] . '%')
                            ->orWhere('email', 'like', '%' . $search['value'] . '%');
                    })->count();

                    //分页记录
                    $data['data'] = AdminUser::where(function ($query) use ($search) {
                        $query->where('userable_type',$admin_role_model)
                            ->where('name', 'LIKE', '%' . $search['value'] . '%')
                            ->orWhere('email', 'like', '%' . $search['value'] . '%');
                    })
                        ->skip($start)->take($length)
                        ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                        ->get();
                } else {
                    $data['recordsFiltered'] = AdminUser::where('userable_type',$admin_role_model)->count();

                    $array_ids = array_pluck(AdminUser::where('userable_type',$admin_role_model)->get(), 'id');
                    $data['data'] = AdminUser::whereIn('id', $array_ids)->where('userable_type',$admin_role_model)->get()->toArray();
                    //多对多的用户其他属性
                    foreach ($array_ids as $key => $value) {
                        $data['data'][$key] = array_merge( $data['data'][$key],
                        current(AdminUser::find($value)
                        ->admin_users()
                        ->skip($start)->take($length)
                        ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                        ->get()->toArray()));
                    }
                }
            }

            return response()->json($data);
        }
        //前端选择角色列表
        $datas['roles'] =  Role::all()->toArray();

        return view('admin.permission.user.index',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }
        $data['rolesAll'] = Role::all()->toArray();

        return view('admin.permission.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserCreateRequest $request)
    {
        $user = new AdminUser();
        foreach (array_keys($this->fields) as $field) {
            $user->$field = $request->get($field);
        }
        $user->password = bcrypt($request->get('password'));
        unset($user->roles);
        $user->save();
        if (is_array($request->get('roles'))) {
            $user->giveRoleTo($request->get('roles'));
        }
        //event(new \App\Events\userActionEvent('\App\Models\Admin\AdminUser', $user->id, 1, '添加了用户' . $user->name));

        return redirect('/admin/user')->withSuccess('添加成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //返回全部用户
        $array_ids = array_pluck(AdminUser::all(), 'id');
        foreach ($array_ids as $value) {
            $data[$value] = current(AdminUser::find($value)->admin_users()->where('email', 'LIKE', '%root@%')->get()->toArray());
        }

        dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = AdminUser::find((int)$id);
        if (!$user) return redirect('/admin/user')->withErrors("找不到该用户!");
        $roles = [];
        if ($user->roles) {
            foreach ($user->roles as $v) {
                $roles[] = $v->id;
            }
        }
        $user->roles = $roles;
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $user->$field);
        }
        $data['rolesAll'] = Role::all()->toArray();
        $data['id'] = (int)$id;
        //event(new \App\Events\userActionEvent('\App\Models\Admin\AdminUser', $user->id, 3, '编辑了用户' . $user->name));

        return view('admin.permission.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserUpdateRequest $request, $id)
    {
        $user = AdminUser::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $user->$field = $request->get($field);
        }
        unset($user->roles);
        if ($request->get('password') != '') {
            $user->password = bcrypt($request->get('password'));

        }

        $user->save();
        $user->giveRoleTo($request->get('roles', []));

        return redirect('/admin/user')->withSuccess('修改成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = AdminUser::find((int)$id);
        foreach ($tag->roles as $v) {
            $tag->roles()->detach($v);
        }
        if ($tag && $tag->id != 1) {
            $tag->delete();
        } else {
            return redirect()->back()
                ->withErrors("删除失败");
        }

        return redirect()->back()
            ->withSuccess("删除成功");
    }
}
