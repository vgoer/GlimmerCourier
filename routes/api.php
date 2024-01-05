<?php

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

// 前台接口
Route::group(['prefix' => 'front'], function () {
    // 前台接口
    Route::get('/', function () {
        return 'front works';
    });

    Route::get('/case', [\App\Http\Controllers\Api\CaseContentController::class, 'getList']);
    Route::get('/case/get', [App\Http\Controllers\Api\CaseContentController::class, 'get']);
});

// 后台接口
Route::group(['prefix' => 'end'], function () {
    // 后台接口
    Route::get('/', function () {
        return 'end works';
    });
});
