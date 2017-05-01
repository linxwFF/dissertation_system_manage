<?php

// 使用 Auth 中间件,前缀 admin
Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin'],'prefix' => 'chooseTask'], function () {

    //课题申报 create  store
    //课题审核 update   update
    //课题情况汇总 chooseTask.declare.taskCollect.index
    //课题删除  delete destroy
    Route::get('declare/taskCollect/index', ['as' => 'chooseTask.declare.taskCollect.index', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@index']);
    Route::post('declare/taskCollect/index', ['as' => 'chooseTask.declare.taskCollect.index', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@index']); //dataTable，Ajax请求数据

    Route::get('declare/taskIndex/index', ['as' => 'chooseTask.declare.taskIndex.index', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@create']);    //课题申报页面

    Route::resource('declare/taskCollect', 'Admin\ChooseTaskDeclare\SubjectController',
    ['names' =>
        [
            'store' => 'chooseTask.declare.taskIndex.index',  //课题申报
            'update' => 'chooseTask.declare.taskReview.index',  //课题审核
            'destroy' => 'chooseTask.declare.subject.delete',  //课题删除
          ]]);

});
