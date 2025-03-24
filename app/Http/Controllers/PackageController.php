<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Models\PackageModel;
use App\Models\UserPackageModel;
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

    public function add(PackageRequest $request, PackageModel $package)
    {

        $user = Auth::user();

            if($user->userPackage !== null)
            {
                return redirect()->back()->with("error", "You already have package");
            }

         UserPackageModel::create(
            [
                'user_id' => $user->id,
                'package_id' => $package->id,

            ]);



       return view("fitness.buyPackage");
    }
}
