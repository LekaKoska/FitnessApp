<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminShopRequest;
use Illuminate\Http\Request;

class AdminShopController extends Controller
{
    public function index()
    {
        return view("admin.productForm");
    }

    public function shop(AdminShopRequest $request)
    {

    }
}
