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

//错误页面跳转
require( __DIR__ . '/errors/errors.php');

//前后台登录验证
require( __DIR__ . '/auth/auth.php');

//权限管理
require( __DIR__ . '/permission/permission.php');

//课题申报环节
require( __DIR__ . '/chooseTaskDeclare/subject.php');

//栏目管理
require( __DIR__ . '/column/subject.php');
