<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
Route::get('/',fn() => redirect()->route('login'));
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticated'])->name('login-authenticated');

Route::middleware('auth')->group(function(){
    Route::get('dashboard',DashboardController::class)->name('dashboard');
    Route::post('logout',LogoutController::class)->name('logout');
});
