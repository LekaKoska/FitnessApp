<?php

use App\Models\PackageModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::prefix("/v1")->group(function ()
{
    Route::get("/user", function ()
    {
        return response()->json(['users' => 'Alek'], 201);

    });
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
