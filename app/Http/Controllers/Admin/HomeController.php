<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;
use App\Http\Controllers\Controller;

use App\Models\Admin\PermissionRole;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $role = auth('admin')->user()->role_id;
        if($role == 1){
            return view('admin.Tea_dashboard');
        }else if($role == 2){
            return view('admin.Stu_dashboard');
        }
    }

    public function getMenuTest(Request $request)
    {
        dd(auth('admin')->user()->role->toArray()['name']);
    }
}
