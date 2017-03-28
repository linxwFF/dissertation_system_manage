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
    echo "已经退出"."<a href='/login'>登录</a>";
});

Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/500', function () {
    return view('errors.500');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

//权限管理
Route::get('/permission/index', function () {
    return view('admin.permission.permission.index');
});

Route::any('/permissionIndex', 'Admin\PermissionController@index');
