<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('login',[AdminController::class,'login']);
Route::post('login',[AdminController::class,'ceklogin']);
Route::get('index',[AdminController::class,'index']);
Route::get('layout',[AdminController::class,'layout']);
Route::get('pbarang',[AdminController::class,'pbarang']);
Route::get('tambah',[AdminController::class,'tambah']);
Route::post('tambah',[AdminController::class,'tambahk']);
Route::get('edit/{id}',[AdminController::class,'edit']);
Route::post('edit/{id}',[AdminController::class,'ubah_barang']);
Route::get('pelanggan',[AdminController::class,'pelanggan']);
Route::get('tambahpel',[AdminController::class,'tambahpel']);
Route::post('tambahpel',[AdminController::class,'tambahki']);
Route::get('editpel/{id}',[AdminController::class,'editi']);
Route::post('editpel/{id}',[AdminController::class,'ubah_pelanggan']);

