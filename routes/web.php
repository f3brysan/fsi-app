<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\AnggotaKomunitasController;
use App\Http\Controllers\AttendantController;
use App\Http\Controllers\AtttendantController;
use App\Http\Controllers\AtttendatController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\KomunitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengpusAnggotaController;
use App\Http\Controllers\PengpusEventController;
use App\Http\Controllers\PengpusGiftController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\RedeemController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RegisterController;
use App\Models\AnggotaKomunitas;
use App\Models\Attendant;
use App\Models\Biodata;

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
// routing ajax kota-kabupaten
Route::get('/getkabupaten', [IndoRegionController::class, 'getKabupaten']);

// routing login + logout 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


// routing registrasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// USER ROUTING
Route::get('/home', [DashboardController::class, 'index'])->middleware('auth')->name('home');
Route::resource('/biodata', BiodataController::class)->middleware('auth');
Route::resource('/anggotakomunitas', AnggotaKomunitasController::class)->middleware('auth');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
Route::resource('/event', EventController::class, ['names' => 'event'])->middleware('auth');
Route::resource('/attendant', AttendantController::class, ['names' => 'attendant'])->middleware('auth');

Route::get('/poinku', [PoinController::class, 'index'])->name('poin.index');
Route::get('/poinku/redeem', [RedeemController::class, 'index'])->name('redeem.index');

// ROUTING MASTER PP
Route::resource('pengpus/regional',RegionalController::class, ['names' => 'PPregionals']);
Route::resource('pengpus/komunitas',KomunitasController::class, ['names' => 'PPkomunitas']);
Route::resource('pengpus/event',PengpusEventController::class, ['names' => 'PPevents']);
Route::resource('pengpus/gift',PengpusGiftController::class, ['names' => 'PPgifts']);
Route::resource('pengpus/anggota',PengpusAnggotaController::class, ['names' => 'PPanggotas']);
Route::post('/attendant', [AttendantController::class, 'acc'])->name('attendant.acc');

Route::get('/agenda', function () {
    return view('admin/agenda');
});


Route::get('/adart', function () {
    return view('admin/adart');
});

