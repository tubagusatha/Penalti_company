<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\DetailController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsGallery;
use App\Http\Controllers\ProductsGalleryController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/menu_item/{id}', [MenuItemController::class, 'showz']);
// Route::get('/menu_item/{id}', [MenuItemController::class, 'nav']);
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/profile/{id}', [ProfileController::class,'profile']);

Route::get('/detail', [DetailController::class,'detail']);
Route::get('/detail/tshirt', [DetailController::class,'detail_tshirt']);
Route::get('/detail/shirt', [DetailController::class,'detail_shirt']);
Route::get('/detail/pants', [DetailController::class,'detail_pants']);
Route::get('/detail/accessories', [DetailController::class,'detail_accessories']);

Route::get('/carts_detail', [DetailController::class,'carts_detail']);


Route::get('/admin_panel', [AdminController::class,'index']);

Route::get('/admin_panel/sign_in', [AdminController::class,'signin']);
Route::get('/admin_panel/sign_up', [AdminController::class,'signup']);
Route::get('/admin_panel/resetpassword', [AdminController::class,'resetpassword']);
Route::get('/admin_panel/forgotpassword', [AdminController::class,'forgotpassword']);
Route::get('/admin_panel/profilelock', [AdminController::class,'profilelock']);




Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin_panel', [AdminController::class, 'index']);
    // Route::get('/admin_panel/product', [ProductsController::class, 'index']);
    Route::get('/admin_panel/user', [AdminController::class, 'user']); 
    Route::get('/admin_panel/setting', [AdminController::class, 'setting']);
    Route::get('/admin_panel/category', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [HomeController::class, 'showByCategory'])->name('category.products');
    Route::post('/admin_panel/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/admin_panel/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/admin_panel/product/bin', [ProductsController::class, 'bin'])->name('product.bin');
    Route::delete('/admin_panel/product/bin/{id}', [ProductsController::class, 'permanentDelete']);
    Route::put('/admin_panel/product/{id}/restore', [ProductsController::class, 'restore'])->name('product.restore');

    Route::get('/admin_panel/charts', [AdminController::class,'charts']);
    Route::resource('/admin_panel/product', ProductsController::class);
    Route::get('/admin_panel/product/{id}/edit', [ProductsController::class, 'edit']);
    Route::patch('/admin_panel/product/{id}', [ProductsController::class, 'update']);
    Route::delete('/admin_panel/product/{id}', [ProductsController::class, 'destroy']);
    

    Route::get('/admin_panel/product/{id}/gallery', [ProductsGalleryController::class, 'index'])->name('product.gallery.index');
    Route::get('/admin_panel/product/{product_id}/gallery/create', [ProductsGalleryController::class, 'create']);
    Route::post('/product-gallery/store/{productId}', [ProductsGalleryController::class, 'store'])->name('product.gallery.store');
    Route::delete('/admin_panel/product/{product_id}/gallery/{gallery_id}', [ProductsGalleryController::class, 'destroy']);
});

