<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputDataSiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KategoriController;
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
Route::get('home', [HomeController::class, 'index']);
Route::resource('/siswa', SiswaController::class);
Route::get('inputdatasiswa', [InputDataSiswaController::class, 'index']);
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('jurusan', [JurusanController::class, 'index']);
Route::get('hasil', [HasilController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
