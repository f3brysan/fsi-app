<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KomunitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengpusEventController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RegisterController;
use App\Models\Biodata;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

// routing registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/biodata', BiodataController::class)->middleware('auth');

// ROUTING MASTER REGIONAL
Route::resource('pengpus/regional',RegionalController::class);
// Route::get('/regional', [RegionalController::class, 'index'])->Middleware('auth');

Route::resource('pengpus/komunitas',KomunitasController::class);

Route::resource('pengpus/event',PengpusEventController::class);

Route::get('/agenda', function () {
    return view('admin/agenda');
});

Route::get('/poinku', function () {
    return view('admin/poin');
});

Route::get('/adart', function () {
    return view('admin/adart');
});
