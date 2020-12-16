<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/get/users",function(){
    return "Fidelis";
});
Route::get('/home/{name}',[HomeController::class,'index'])->name('home.index');