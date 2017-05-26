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

}
