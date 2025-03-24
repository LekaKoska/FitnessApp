<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", function ()
{
    return view("welcome");
});

Route::get("/users", [UserController::class, "index"])
->name("users.package");

Route::post("/package/buy/{package}", [PackageController::class, "add"])
->name("package.buy");

Route::get("/package", [PackageController::class, "package"])
->name("package.shop");

Route::get("/package/{package:package}", [PackageController::class, "permalink"])
->name("package.permalink");

Route::get("/shop", [ProductShopController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
