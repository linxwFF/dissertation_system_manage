<?php

// 使用 Auth 中间件,前缀 admin
Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin'],'prefix' => 'column'], function () {

    Route::get('subject/index', ['as' => 'column.subject.index', 'uses' => 'Admin\Column\SubjectController@index']);

    Route::post('subject/add', ['as' => 'column.subject.add', 'uses' => 'Admin\Column\SubjectController@addBigTitle']);

});
