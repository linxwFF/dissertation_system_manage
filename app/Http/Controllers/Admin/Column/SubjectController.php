<?php

namespace App\Http\Controllers\Admin\Column;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    //
    public function index()
    {
        return view('admin.column.index');
    }

    public function addBigTitle(Request $request)
    {
        dd($request->all());
    }
}
