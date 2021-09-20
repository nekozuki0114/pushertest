<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/pusher'], function () {
    Route::get('/get', function () {
        return view('pusher-index');
    });

    // 追加
    Route::get('/send',[App\Http\Controllers\testController::class,'send']);
});