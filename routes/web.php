<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::resource('produk', ProdukController::class); //megnatur rute resource untuk CRUD yang dicontroller tadi
Route::get('/user', [UserController::class, 'index']);

Route::get('/', [UserController::class, 'dashboard']);
