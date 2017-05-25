<?php

namespace App\Http\Controllers\Admin\Column;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class SubjectController extends Controller
{

    protected $fields = [
        'parent_id'  => '',
        'title' => '',
        'sort_order' => '',
        'status' => '',
    ];

    public function index()
    {
        $data = [];
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
        // dd($request->all());
        $category = new Category();
        foreach (array_keys($this->fields) as $field) {
            $category->$field = $request->get($field);
        }

        $category->save();
        echo "ok";
    }

    //修改栏目
    public function editCategory(Request $request, $id)
    {
        $category = Category::find((int)$id);
        foreach (array_keys($this->fields) as $field) {
            $category->$field = $request->get($field);
        }
        $category->save();

        echo "ok";
    }

    //删除栏目
    public function deleteCategory($id)
    {
        $child = Category::where('parent_id', $id)->first();
        if ($child) {
            echo "有子项目不运行删除";
        }

        $tag = Category::find((int)$id);
        $tag->delete();

        echo "delete ok";

    }
}
