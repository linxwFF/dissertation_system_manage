<?php
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
