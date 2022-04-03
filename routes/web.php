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


Route::get('/auth', function () {
    return view('auth');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('agenda', function () {
    return view('admin/agenda');
});

Route::get('poinku', function () {
    return view('admin/poin');
});
