<?php

namespace App\Http\Controllers\Admin\Column;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\Eloquent\SubjectRepository;
use Response;

class SubjectController extends Controller
{
    protected $Pepo;

    public function __construct(SubjectRepository $Pepo)   //通过构造器注入
    {
        $this->Pepo = $Pepo;
    }

    protected $fields = [
        'parent_id'  => '',
        'title' => '',
        'sort_order' => '',
        'status' => '',
    ];

    public function index()
    {
        $data = [
            'data' => [],
        ];
        $Category = Category::orderBy('sort_order')->get();
        // dd($Category);
        foreach($Category as $k=>$v){
            if($v['parent_id'] == '0'){
                $data['data'][$v->id]['top'] = $v;
            }else{
                $data['data'][$v->parent_id]['sub'][] = $v;
            }
        }
        // dd($data);
        return view('admin.column.index', $data);
    }

    //添加新的栏目
    public function addCategory(Request $request)
    {
        $input = $request->all();
        $result = $this->Pepo->store_one($input);
        return Response::json($result['data'], $result['status']);
    }

    //修改栏目
    public function editCategory(Request $request, $id)
    {
        $input = $request->all();
        if(!empty($id) && $id>0){
            $input['id'] = $id;
            $result = $this->Pepo->update_one($input);
        }else{
            $result = [
                'status' => '404',
                'data' => ['message' => '更新失败！，没有找到该项目']
            ];
        }
        return Response::json($result['data'], $result['status']);
    }

    //删除栏目
    public function deleteCategory($id)
    {
        $child = Category::where('parent_id', $id)->first();
        if ($child) {
            return [
              'status' => '403',
              'data' => ['message' => '请先删除子项目!']
            ];
        }else{
            $result = $this->Pepo->destroy_one($id);
        }

        return Response::json($result['data'], $result['status']);
    }
}
