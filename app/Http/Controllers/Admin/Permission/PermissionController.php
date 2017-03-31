<?php

namespace App\Http\Controllers\Admin\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    protected $fields = [
    'name'        => '',
    'label'       => '',
    'description' => '',
    'cid'         => 0,
    'icon'        => '',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $cid = 0)
    {
        $cid = (int)$cid;
        //列表数据
        if ($request->ajax()) {
            $data = array();
            $data['draw'] = $request->get('draw');
            $start = $request->get('start');
            $length = $request->get('length');
            $order = $request->get('order');
            $columns = $request->get('columns');
            $search = $request->get('search');
            $cid = $request->get('cid', 0);

            $data['data'] =
            [0 => [
                'id' => 1,
                'name' => "admin.permission",
                'label' => "权限管理",
                'description' => "",
                'cid' => 0,
                'icon' => "fa-users",
                'created_at' => '2016-05-21 10:06:50',
                "updated_at" => "2016-06-22 13:49:09",
            ],
            ];

            $data['draw'] = $request->get('draw');
            $data['recordsFiltered'] = 0;   //过滤的记录
            $data['recordsTotal'] = 0;

            return response()->json($data);
        }

        //子项目列表
        $datas['cid'] = $cid;
        if ($cid > 0) {
            // $datas['data'] = Permission::find($cid);
            $datas['data'] = [
                'id' => 1,
                'name' => "admin.permission",
                'label' => "aaaa",
                'description' => "",
                "cid" => 0,
                "icon" => "fa-users",
                "created_at" => "2016-05-21 10:06:50",
                "updated_at" => "2016-06-22 13:49:09",
            ];
        }

        return view('admin.permission.permission.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(int $cid)
     {
         $data = [];
         foreach ($this->fields as $field => $default) {
             $data[$field] = old($field, $default);
         }
         $data['cid'] = $cid;

         return view('admin.permission.permission.create', $data);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $permission = Permission::find((int)$id);
        $permission = [
            "id" => 1,
            "name" => "admin.permission",
            "label" => "权限管理",
            "description" => "",
            "cid" => 0,
            "icon" => "fa-users",
            "created_at" => "2016-05-21 10:06:50",
            "updated_at" => "2016-06-22 13:49:09",
        ];
        // if (!$permission) return redirect('/admin/permission')->withErrors("找不到该权限!");
        // $data = ['id' => (int)$id];
        // foreach (array_keys($this->fields) as $field) {
        // $data[$field] = old($field, $permission->$field);
        // }
        $data = $permission;

        return view('admin.permission.permission.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo "修改成功"+ $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "删除成功"+ $id;
    }
}
