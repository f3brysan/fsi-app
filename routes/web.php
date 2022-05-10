<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

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

// routing captcha
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);

// routing login + logout 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

// routing registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->Middleware('auth');

Route::resource('regional',RegionalController::class);
// Route::get('/regional', [RegionalController::class, 'index'])->Middleware('auth');

Route::get('/agenda', function () {
    return view('admin/agenda');
});

Route::get('/poinku', function () {
    return view('admin/poin');
});

Route::get('/adart', function () {
    return view('admin/adart');
});
