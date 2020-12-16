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
Route::get("/user/{name?}",function($name){
    return "Hi $name";
});
Route::match(['get','post'],'/student',function(Request $request)
{
    return "Method is ".$request->method();
});

Route::any('/students',function(Request $request)
{
    return "Method is ".$request->method();
});

// Route::post("/users/add",function(Request $request){
//     echo $request->test();
// });
Route::get('/home/{name}',[HomeController::class,'index'])->name('home.index');