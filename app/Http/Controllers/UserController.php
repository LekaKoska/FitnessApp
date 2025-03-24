<?php

namespace App\Http\Controllers;

use App\Models\PackageModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
      $user =  User::all();



      if(Auth::check() !== true)
      {
          return redirect("/")->with("error", "You must be logged");
      }


        $package = PackageModel::all();


       return view("fitness.usersTable", compact("user",  "package"));
    }
}
