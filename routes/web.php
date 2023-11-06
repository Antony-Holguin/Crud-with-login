<?php

use App\Http\Controllers\CrearTareaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
    return view('auth.login');
});

Route::resource('login', LoginController::class);
Route::get('login', [LoginController::class,'index'])->name('login.index');

Route::resource('dashboard', DashboardController::class);

Route::resource('register', RegisterController::class);

Route::resource('logout', LogoutController::class)->only('store');

Route::resource('tarea', CrearTareaController::class);