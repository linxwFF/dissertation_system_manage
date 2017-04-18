<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->get('comData_menu'));
        return view('admin.dashboard');
    }

    public function getMenuTest(Request $request)
    {
        // dd(Gate::forUser(auth('admin')->user())->check('admin.permission'));
        dd($request->get('comData_menu'));
        dd(Gate::forUser(auth('admin')->user()));
    }
}
