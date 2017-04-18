<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "已经退出"."<a href='/login'>前台登录</a>"."<br/>";
    echo "已经退出"."<a href='admin/login'>后台登录</a>";
});

Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/500', function () {
    return view('errors.500');
});

//前台登录 (自带的认证驱动)
Auth::routes();
Route::get('/home', function () {
    return view('home');
});

//后台登录
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/logout', 'Admin\oginController@logout')->name('admin.logout');
Route::post('admin/logout', 'Admin\LoginController@logout');

// 使用 Auth 中间件,前缀 admin
Route::group(['middleware' => ['auth:admin', 'menu', 'authAdmin'],'prefix' => 'admin'], function () {

    Route::get('/home', 'Admin\HomeController@index');

    //权限管理/权限列表
    Route::get('/permission/{cid}/create','Admin\Permission\PermissionController@create');    //新增页面
    Route::post('/permission/index', 'Admin\Permission\PermissionController@index');//请求数据/权限列表顶级目录
    Route::get('/permission/{cid?}', 'Admin\Permission\PermissionController@index');//请求数据/权限列表子目录
    Route::resource('permission', 'Admin\Permission\PermissionController');

    //权限管理/角色管理
    Route::get('/role/index', 'Admin\Permission\RoleController@index');
    Route::post('/role/index', 'Admin\Permission\RoleController@index');    //dataTable，Ajax请求数据
    Route::resource('role', 'Admin\Permission\RoleController');

    //权限管理/用户管理
    Route::get('/user/index', 'Admin\Permission\UserController@index');
    Route::post('/user/index', 'Admin\Permission\UserController@index');  //dataTable，Ajax请求数据
    Route::get('/user/extra_property/{id}', 'Admin\Permission\UserController@get_extra_property');//请求用户扩展数据
    Route::resource('user', 'Admin\Permission\UserController');


    Route::get('/getMenuTest', 'Admin\HomeController@getMenuTest');
});
