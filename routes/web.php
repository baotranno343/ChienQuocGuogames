<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regController;
use App\Http\Controllers\logController;
use App\Http\Controllers\forgetController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\cashController;
use App\Http\Controllers\changeController;
use App\Http\Controllers\TrangchuController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLogin2;
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

Route::get('/', [TrangchuController::class, 'index']);
Route::get('/topic', [TrangchuController::class, 'topic']);
Route::get('/post_detail', [TrangchuController::class, 'post_detail']);
Route::post('/post_detail', [TrangchuController::class, 'post_detail_submit']);
Route::get('/detail/{id}', [TrangchuController::class, 'detail']);
Route::post('/detail/{id}', [TrangchuController::class, 'delete_post']);
Route::middleware([CheckLogin::class])->group(function () {

    Route::get('/show', [indexController::class, 'index']);
    Route::get('/cash', [CashController::class, 'index']);
    Route::post('/cash', [CashController::class, 'traxoat']);
    Route::post('/checkcash', [CashController::class, 'checkcash']);
	    Route::post('/ghifile', [CashController::class, 'ghifile']);
    Route::get('/change', [changeController::class, 'index']);
    Route::post('/change', [changeController::class, 'change']);
    Route::get('/thongke', [CashController::class, 'thongke']);
    Route::get('/logout', [logController::class, 'logout']);
});
Route::middleware([CheckLogin2::class])->group(function () {
    Route::get('/reg', [regController::class, 'index']);
    Route::post('/reg', [regController::class, 'reg']);
    Route::get('/log', [logController::class, 'index']);
    Route::get('/forget', [forgetController::class, 'index']);
    Route::get('/forget_success_view', [forgetController::class, 'forget_success_view']);
    Route::post('/forget_success_view', [forgetController::class, 'forget_success']);
    Route::post('/forget', [forgetController::class, 'forget']);
    Route::post('/log', [logController::class, 'log']);
});
