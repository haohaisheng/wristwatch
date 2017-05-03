<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function productList()
    {
        return view('admin/product_list');
    }

    public function orderList()
    {
        return view('admin/order_list');
    }
}
