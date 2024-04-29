<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\IsAdmin;
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
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register']);



Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin_panel', [AdminController::class, 'index']);
    // Route::get('/admin_panel/product', [ProductsController::class, 'index']);
    Route::get('/admin_panel/user', [AdminController::class, 'user']);
    Route::get('/admin_panel/setting', [AdminController::class, 'setting']);

    Route::resource('/admin_panel/product', ProductsController::class);
});


