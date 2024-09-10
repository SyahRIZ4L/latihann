<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//homee
route::get('/',[HomeController::class,'index']);
route::get('/dashboard',[HomeController::class,'dashboard']);
route::get('/biodata',[HomeController::class,'biodata']);
route::get('/barang',[HomeController::class,'tampilBarang']);
Route::get('/barang/tambah',[HomeController::class,'tambahBarang']);
Route::post('/barang/tambah/process', [HomeController::class, 'prosesTambahBarang']);
Route::get('/barang/edit/{id_barang}', [HomeController::class, 'editBarang']);
Route::post('/barang/edit/process', [HomeController::class, 'editBarangProcess']);
Route::delete('/barang/delete', [HomeController::class, 'hapusBarang']);
Route::get('/stiker', [HomeController::class, 'stiker']);

Route::post('cart/process', [HomeController::class, 'addToCart']);
Route::get('cart', [HomeController::class, 'Cart']);
Route::post('cart/update', [HomeController::class, 'updateCart']);

//authh
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login/process', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/process', [AuthController::class, 'reg']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('customer/login/process', [AuthController::class, 'loginCustomer']);
