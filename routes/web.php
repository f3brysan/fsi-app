<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/auth', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/beranda', function () {
    return view('admin/dashboard');
});

Route::get('/agenda', function () {
    return view('admin/agenda');
});

Route::get('/poinku', function () {
    return view('admin/poin');
});

Route::get('/adart', function () {
    return view('admin/adart');
});
