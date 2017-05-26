<?php

namespace App\Repositories\Contracts;

interface BaseInterface{

    // 新增一条记录
    public function store_one($input, $callback = null);

    // 更新一条数据
    public function update_one($input, $callback = null);

    // 删除一条数据
    public function destroy_one($input, $callback = null);

    // 批量删除
    public function destroy_many($input, $callback = null);

    // 不是当前用户的数据
    public function isBelongtoUser($admin_user_id, $id);

    // 是否存在
    public function isExist($id);

    // 获取所有的数据列表
    public function table($fields);

}
