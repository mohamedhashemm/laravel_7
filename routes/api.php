<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// API data category
Route::get("/alldata","API\CategoryController@index");
Route::get("/showone/{id}","API\CategoryController@show");
Route::post("/create","API\CategoryController@create");
Route::post("/delete","API\CategoryController@delete");
Route::post("/update","API\CategoryController@update");

// API Membrs in template
Route::get("/allmembers","API\MemberController@index");
Route::get("/showoneMember/{id}","API\MemberController@show");
