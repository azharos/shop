<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('myshop');
Route::get('/shop/kategori', [HomeController::class, 'kategori_all'])->name('kategori.all');
Route::get('/shop/sub-kategori', [HomeController::class, 'kategori_sub'])->name('kategori.sub');
Route::get('/shop/cara-pembayaran', [HomeController::class, 'cara_pembayaran'])->name('cara.pembayaran');
Route::get('/shop/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
