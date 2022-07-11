<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\SupplierController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\RegisterController;

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
    return view('master');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita1', function () {
    return view('berita1');
});
Route::get('/admin', function () {
    return view('login');
});

Route::resource('/admin/suppliers', SupplierController::class)->middleware('auth');

Route::resource('/admin/products', ProductController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/index', function(){
    return view('dashboard.index');
})->middleware('auth');