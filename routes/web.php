<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('login',[AdminController::class,'login']);
Route::post('login',[AdminController::class,'ceklogin']);
Route::get('layout',[AdminController::class,'layout']);
Route::get('pbarang',[AdminController::class,'pbarang']);
Route::get('tambah',[AdminController::class,'tambah']);
Route::post('tambah',[AdminController::class,'tambahk']);
Route::get('edit/{id}',[AdminController::class,'editp']);
Route::post('edit/{id}',[AdminController::class,'ubah_barang']);

