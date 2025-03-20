<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", function ()
{
    return view("welcome");
});


Route::get("/users", [UserController::class, "index"]);

Route::get("/package", [PackageController::class, "package"]);

Route::get("/package/{package:package}", [PackageController::class, "permalink"])
->name("package.permalink");





require __DIR__.'/auth.php';
