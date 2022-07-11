<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SupplierApiController;
use \App\Http\Controllers\LoginApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/admin/suppliers', [SupplierApiController::class, 'index']);
Route::post('/admin/suppliers', [SupplierApiController::class, 'store']);
Route::get('/admin/suppliers/{id}', [SupplierApiController::class, 'show']);
Route::put('/admin/suppliers/{id}', [SupplierApiController::class, 'update']);
Route::delete('/admin/suppliers/{id}', [SupplierApiController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
