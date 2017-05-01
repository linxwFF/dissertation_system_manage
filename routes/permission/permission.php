<?php
// 使用 Auth 中间件,前缀 admin
Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin'],'prefix' => 'admin'], function () {

    Route::get('/home', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);

    //权限管理/权限列表
    Route::get('permission/{cid}/create', ['as' => 'admin.permission.create', 'uses' => 'Admin\Permission\PermissionController@create']);    //新增页面
    Route::get('permission/{cid?}', ['as' => 'admin.permission.index', 'uses' => 'Admin\Permission\PermissionController@index']);   //请求数据/权限列表子目录
    Route::post('permission/index', ['as' => 'admin.permission.index', 'uses' => 'Admin\Permission\PermissionController@index']);   //请求数据/权限列表顶级目录
    Route::resource('permission', 'Admin\Permission\PermissionController', ['names' => ['update' => 'admin.permission.edit', 'store' => 'admin.permission.create','destroy' => 'admin.permission.destroy']]);

    //权限管理/角色管理
    Route::get('role/index', ['as' => 'admin.role.index', 'uses' => 'Admin\Permission\RoleController@index']);
    Route::post('role/index', ['as' => 'admin.role.index', 'uses' => 'Admin\Permission\RoleController@index']); //dataTable，Ajax请求数据
    Route::resource('role', 'Admin\Permission\RoleController', ['names' => ['update' => 'admin.role.edit', 'store' => 'admin.role.create', 'destroy' => 'admin.role.destroy']]);

    //权限管理/用户管理
    Route::get('user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\Permission\UserController@index']);  //用户管理
    Route::post('user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\Permission\UserController@index']);
    Route::get('user/extra_property/{id}', ['as' => 'admin.user.extra_property', 'uses' => 'Admin\Permission\UserController@get_extra_property']);//请求用户扩展数据
    Route::resource('user', 'Admin\Permission\UserController', ['names' => ['update' => 'admin.user.edit', 'store' => 'admin.user.create', 'destroy' => 'admin.user.destroy']]);

    Route::get('/getMenuTest', 'Admin\HomeController@getMenuTest');
});
