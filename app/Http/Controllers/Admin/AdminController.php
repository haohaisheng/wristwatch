<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /* public function __construct()
     {
         $this->middleware('auth', ['except' => 'logout']);
     }*/

    public function adm(Request $request)
    {
        return view('admin/index');
    }

    public function index(Request $request)
    {
        return view('web/index');
    }

    public function detail(Request $request)
    {
        return view('web/detail');
    }

    public function category()
    {
        return view('web/category');
    }

    public function welcome()
    {
        return view('admin/welcome');
    }
}
