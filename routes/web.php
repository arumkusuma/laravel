<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Auth;
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
     return view('landing');
 });

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']);
Route::post('/pelanggan', [PelangganController::class, 'pelanggan']);
Route::get('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'show']);
Route::get('/pelanggan/{ID_Pelanggan}/edit', [PelangganController::class, 'edit']);
Route::put('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/{ID_Pelanggan}', [PelangganController::class, 'destroy']);
});
Route::middleware('auth', 'admin')->group(function () {
    
    Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'index']);
    Route::get('/tambahmenu', [\App\Http\Controllers\MenuController::class, 'tambahmenu']);
    Route::post('/menu', [\App\Http\Controllers\MenuController::class, 'menu']);
    Route::get('/menu/{ID_Menu}', [\App\Http\Controllers\MenuController::class, 'show']);
    Route::get('/menu/{ID_Menu}/edit', [\App\Http\Controllers\MenuController::class, 'edit']);
    Route::put('/menu/{ID_Menu}', [\App\Http\Controllers\MenuController::class, 'update']);
    Route::delete('/menu/{ID_Menu}', [\App\Http\Controllers\MenuController::class, 'destroy']);
});


Route::resource('kategori', \App\Http\Controllers\KategoriController::class)->middleware('auth', 'admin');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
