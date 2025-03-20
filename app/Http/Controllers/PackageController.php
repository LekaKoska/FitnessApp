<?php

namespace App\Http\Controllers;

use App\Models\PackageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function package()
    {
        return view("fitness.package");
    }

    public function permalink(PackageModel $package)
    {

        return view("fitness.shop", compact("package"));
    }
}
