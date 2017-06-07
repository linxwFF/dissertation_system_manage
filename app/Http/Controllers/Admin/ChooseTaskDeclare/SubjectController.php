<?php

namespace App\Http\Controllers\Admin\ChooseTaskDeclare;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;

class SubjectController extends Controller
{
    protected $fields = [
        'subject_name' => '',
        'subject_number' => '',
        'teach_reasearch_room' => '',
        'teachBaseInfo_id' => '',
        'suitable_level' => '',
        'project_background' => '',
        'achieve_fun' => '',
        'technology' => '',
        'specification' => '',
        'schedule' => '',
        'subject_content_require' => '',
        'state' => '',
        'opinion_tutor' => '',
        'opinion_trch_room' => '',
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
            $columns = $request->get('columns');
            $search = $request->get('search');
            $data['recordsTotal'] = Subject::count();

            if (strlen($search['value']) > 0) {
                $data['recordsFiltered'] = Subject::where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search['value'] . '%')
                        ->orWhere('description', 'like', '%' . $search['value'] . '%');
                })->count();
                $data['data'] = Subject::where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search['value'] . '%')
                        ->orWhere('description', 'like', '%' . $search['value'] . '%');
                })
                    ->skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            } else {
                $data['recordsFiltered'] = Subject::count();
                $data['data'] = Subject::
                skip($start)->take($length)
                    ->orderBy($columns[$order[0]['column']]['data'], $order[0]['dir'])
                    ->get();
            }

            return response()->json($data);
        }
        return view('admin.chooseTaskDeclare.index');
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

        return view('admin.chooseTaskDeclare.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = new Subject();
        foreach (array_keys($this->fields) as $field) {
            $subject->$field = $request->get($field);
        }

        $subject->save();

        //event(new \App\Events\userActionEvent('\App\Models\Admin\Role',$role->id,1,"用户".Auth::user()->username."{".Auth::user()->id."}添加角色".$role->name."{".$role->id."}"));

        return redirect('/chooseTask/declare/index')->withSuccess('添加成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find((int)$id);
        //if (!$subject) return redirect('/admin/role')->withErrors("找不到该角色!");

        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $subject->$field);
        }
        $data['id'] = $id;

        return view('admin.chooseTaskDeclare.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find((int)$id);
        //if (!$subject) return redirect('/admin/role')->withErrors("找不到该角色!");

        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $subject->$field);
        }
        $data['id'] = $id;

        return view('admin.chooseTaskDeclare.edit', $data);
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
        $subject = Subject::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $subject->$field = $request->get($field);
        }
        $subject->save();

        //event(new \App\Events\userActionEvent('\App\Models\Admin\Role',$role->id,3,"用户".Auth::user()->username."{".Auth::user()->id."}编辑角色".$role->name."{".$role->id."}"));

        return redirect('/chooseTask/declare/index')->withSuccess('修改成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find((int)$id);

        if ($subject) {
            $subject->delete();
        } else {
            return redirect()->back()->withErrors("删除失败,不存在该项目");
        }
        //event(new \App\Events\userActionEvent('\App\Models\Admin\Role',$role->id,2,"用户".Auth::user()->username."{".Auth::user()->id."}删除角色".$role->name."{".$role->id."}"));
        return redirect()->back()->withSuccess("删除成功");
    }
}
