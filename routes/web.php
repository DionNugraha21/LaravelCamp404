<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
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

Route::get('/beranda', [MenuController::class, 'beranda']);
Route::get('/info_kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('/data_mahasiswa', [MenuController::class, 'data_mahasiswa']);
Route::resource('siswa', SiswaController::class)->middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)->only('show')->middleware('can:isAdminSiswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
