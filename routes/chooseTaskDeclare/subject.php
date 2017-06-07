<?php

// 使用 Auth 中间件,前缀 admin
Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin'],'prefix' => 'chooseTask'], function () {

    Route::get('declare/index', ['as' => 'chooseTask.declare.index', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@index']);
    Route::post('declare/index', ['as' => 'chooseTask.declare.index', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@index']); //dataTable，Ajax请求数据

    Route::get('declare/create', ['as' => 'chooseTask.declare.create', 'uses' => 'Admin\ChooseTaskDeclare\SubjectController@create']);    //课题申报页面

    Route::resource('declare', 'Admin\ChooseTaskDeclare\SubjectController',
    ['names' =>
        [
            'store' => 'chooseTask.declare.create',  //课题申报
            'update' => 'chooseTask.declare.edit',  //课题修改
            'destroy' => 'chooseTask.declare.destroy',  //课题删除
    ]]);

});

//学生业务

//----查看课题任务书

//教师业务

//----填写课题任务书  查看课题任务书  删除任务书

//教研室业务

//----填写课题任务书  查看课题任务书  删除任务书  更新状态（审核）
