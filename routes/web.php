<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;

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
Route::get('/login/siswa',fn() => 'This is siswa login')->name('login.siswa');
Route::get('/',fn() => redirect()->route('login.admin'));
Route::get('/login/admin', [LoginController::class,'login'])->name('login.admin');
Route::post('/login/admin',[LoginController::class,'authenticated'])->name('login.admin.authenticated');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard',DashboardController::class)->name('admin.dashboard');
    });
    Route::post('logout',LogoutController::class)->name('logout');
});
