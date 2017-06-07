<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseInterface;
// 模式基类
use Illuminate\Database\Eloquent\Model;
// 容器
use Illuminate\Container\Container as App;
//  验证语言包
use Lang;

use App\Exceptions\RestException as Exception;
use Symfony\Component\HttpFoundation\Response as Error;
use Response;

abstract class Repository implements BaseInterface
{
    /*App容器*/
    protected $app;

    /*操作model*/
    protected $model;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    // 创建指定的 model
    public function makeModel()
    {
        $model = $this->app->make($this->model());
        /*是否是Model实例*/
        if (!$model instanceof Model){
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        $this->model = $model;
    }

    // 指定子类的model
    abstract function model();

    // 实现基类接口的方法

    // 新增一条记录
    public function store_one($input, $callback = null)
    {
        $model = $this->model();
        $item = new $model;

        foreach ($input as $key => $value) {
            if ($key != '_token') {
            	$item->$key = $value;
            }

        }

        if ($callback) {
            try {
            $callback($item);
            } catch (Exception $e){
            return [
              'status' => $e->getCode(),
              'data' => ['message' => Lang::get('messages.stored_failed') . $e->getMessage()]
            ];
            }
        }

        $item->save();

        // $search_fields = $model->search_fields;
        // AdminLog::write(Auth::user()->username, $model->title . '添加' . $model->search_fields . '=' . $item->$search_fields, Request::getClientIp(), date('Y-m-d H:i:s', time()));

        $result = [];
        $result['status'] = Error::HTTP_CREATED;
        $result['data']['message'] = Lang::get('messages.stored');
        $result['data']['item'] = array('id' => $item['id'], 'created_at' => $item['created_at'], 'updated_at' => $item['updated_at']);

        return $result;
    }

    // 更新一条数据
    public function update_one($input, $callback = null) {
      $model = $this->model();
      $result = array('code' => -1, Lang::get('updated_failed'));

      if (!empty($input['id'])) {
        $item = $model::find($input['id']);

        if ($callback) {
          try {
            $callback($item);
          } catch (Exception $e){
            return [
              'status' => $e->getCode(),
              'data' => ['message' => Lang::get('updated_failed') . $e->getMessage()]
            ];
          }
        }

        foreach ($input as $key => $value) {
          if ($key != '_token') {
            $item->$key = $value;
          }
        }

        $item->save();

        // $search_fields = $model->search_fields;
        // AdminLog::write(Auth::user()->username, $model->title . '编辑' . $model->search_fields . '=' . $item->$search_fields, Request::getClientIp(), date('Y-m-d H:i:s', time()));

        $result = [];
        $result['status'] = Error::HTTP_ACCEPTED;
        $result['data']['message'] = Lang::get('messages.updated');
        $result['data']['item'] = array('id' => $item['id'], 'updated_at' => $item['updated_at']);
      }

      return $result;
      }

      // 删除一条数据
      public function destroy_one($id, $callback = null) {
        $model = $this->model();
        $result = [];

        if (!empty($id) && $id > 0) {
          $item = $model::find($id);

          if ($callback) {
            try {
              $callback($item);
            } catch (Exception  $e) {
              return [
                'status' => $e->getCode(),
                'data' => ['message' => $e->getMessage()]
              ];
            }
          }

          $item->delete();

          // $search_fields = $this->search_fields;
          // AdminLog::write(Auth::user()->username, $this->title . '删除 id=' . $id, Request::getClientIp(), date('Y-m-d H:i:s', time()));

          $result['status'] = Error::HTTP_ACCEPTED;
          $result['data']['message'] = Lang::get('messages.deleted');
        } else {
          $result['status'] = Error::HTTP_NOT_FOUND;
          $result['data']['message'] = Lang::get('messages.delete_failed_404');
        }

        return $result;
      }

      // 批量删除
      public function destroy_many($input, $callback = null) {
        $model = $this->model();
        $items = $model::whereIn('id', $input['ids']);

        if ($callback) {
          try {
            $callback($items->get());
          } catch (Exception  $e) {
            return [
              'status' => $e->getCode(),
              'data' => ['message' => $e->getMessage()]
            ];
          }
        }

        $items->delete();

        // $search_fields = $this->search_fields;
        // AdminLog::write(Auth::user()->username, $this->title . '删除 id=' . implode(",", $id), Request::getClientIp(), date('Y-m-d H:i:s', time()));

        $result = [];
        $result['status'] = 202;
        $result['data']['message'] = Lang::get('messages.deleted');

        return $result;
      }

      // 不是当前用户的数据
      public function isBelongtoUser($admin_user_id, $id) {
        $result = true;
        $item = $this->where('admin_user_id', $admin_user_id)->where('id', $id)->first();

        if (!$item) {
          $result = false;
        }

        return $result;
      }

      // 是否存在
      public function isExist($id)
      {
        $result = true;

        if (empty($id) || !is_numeric($id) || !$this->whereNull('deleted_at')->find($id)) {
          $result = false;
        }

        return $result;
      }

      // 获取所有的数据
      public function table($fields, $orderBy = 'desc')
      {
          $model = $this->model();
          $list = $model::select($fields)->orderBy('id',$orderBy)->get()->toArray();
          $result = [
              'data' => $list
          ];
          return $result;
      }
}
