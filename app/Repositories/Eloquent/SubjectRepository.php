<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Models\Category;

class SubjectRepository extends Repository
{
	// 实现抽象类的方法  返回一个SubjectModel对象实例
    public function model()
    {
        return Category::class;
    }

    // 以下可以重写基类方法
    // 获取所有的数据
    public function table($orderBy = 'desc')
    {
        $data = [
            'data' => [],
        ];
        $model = $this->model();
        $list = $model::orderBy('sort_order',$orderBy)->get();
        // dd($Category);
        foreach($list as $k=>$v){
            if($v['parent_id'] == '0'){
                $data['data'][$v->id]['top'] = $v;
            }else{
                $data['data'][$v->parent_id]['sub'][] = $v;
            }
        }
        // dd($data);

        return $data;
    }

}
