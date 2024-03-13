<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

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

 Route::get('/', function () {
     return view('pages.dashboard');
 });

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']);
Route::post('/pelanggan', [PelangganController::class, 'pelanggan']);
Route::get('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'show']);
Route::get('/pelanggan/{ID_Pelanggan}/edit', [PelangganController::class, 'edit']);
Route::put('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'destroy']);
Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index']);
Route::get('/tambahmenu', [\App\Http\Controllers\MenuController::class, 'tambahmenu']);
Route::post('/menu', [\App\Http\Controllers\MenuController::class, 'menu']);
Route::get('/menu/{ID_Menu}', [\App\Http\Controllers\MenuController::class, 'show']);
Route::delete('/menu/{ID_Menu}', [\App\Http\Controllers\MenuController::class, 'destroy']);
