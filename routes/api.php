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

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);


Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('logout', 'AuthController@logout');
});

Route::group(['middleware' => 'admin', 'jwt.verify', ], function ($router){
    Route::post('product/create', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::put('product/update', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);
});

Route::group(['middleware' => 'jwt.verify'], function ($router){
    Route::put('user/update', [\App\Http\Controllers\AuthController::class, 'update']);
    Route::delete('user/delete', [\App\Http\Controllers\AuthController::class, 'delete']);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
