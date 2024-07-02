<?php

use App\Http\Controllers\addressController;
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
use App\Http\Controllers\SearchProductController;
use App\Http\Controllers\SizeController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\show_active;
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
Route::get('/profile/{id}', [ProfileController::class,'index'])->name('profile');
Route::post('/profile/{userId}', [ProfileController::class,'store'])->name('profile.store');
Route::patch('/profile/update/{userId}', [ProfileController::class,'update'])->name('profile.update');
Route::patch('/profile/update/email/{userId}', [ProfileController::class,'updateEmailProfile'])->name('profile.email.update');
Route::patch('/profile/update/number/{userId}', [ProfileController::class,'updateNumberProfile'])->name('profile.number.update');
Route::patch('/profile/update/password/{userId}', [ProfileController::class,'updatePasswordProfile'])->name('profile.password.update');
Route::delete('/profile/{image_id}', [ProfileController::class, 'destroy'])->name('gallery.destroy');
Route::post('/profile/{id}/create', [addressController::class, 'store'])->name('address.store');
Route::delete('/profile/{id}/delete', [AddressController::class, 'destroy'])->name('address.destroy');
Route::get('/payment_detail/{id}', [DetailController::class, 'payment_detail']);


Route::get('/search/product', [SearchProductController::class, 'index']);

Route::middleware(['showActive', 'check.products'])->group(function () {
    // Rute Anda yang memerlukan pengecekan show_products
    Route::get('/detail/{id}', [DetailController::class,'detail']);
    Route::get('/detail/{id}/check-qty', [DetailController::class, 'checkQty']);
    Route::post('/detail/{id}/update-qty', [DetailController::class, 'updateQty']);
});

Route::get('/carts_detail/{id}', [DetailController::class,'carts_detail']);




Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin_panel', [AdminController::class, 'index']);
    // Route::get('/admin_panel/product', [ProductsController::class, 'index']);
    Route::get('/admin_panel/user', [AdminController::class, 'user']); 
    Route::get('/admin_panel/category', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [HomeController::class, 'showByCategory'])->name('category.products');
    Route::post('/admin_panel/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/admin_panel/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/admin_panel/sizechart', [SizeController::class, 'index']);
    Route::delete('/admin_panel/sizechart/{id}', [SizeController::class, 'destroy']);
    Route::get('/admin_panel/product/bin', [ProductsController::class, 'bin'])->name('product.bin');
    Route::delete('/admin_panel/product/bin/{id}', [ProductsController::class, 'permanentDelete']);
    Route::put('/admin_panel/product/{id}/restore', [ProductsController::class, 'restore'])->name('product.restore');

    Route::post('/admin_panel/sizechart/create', [SizeController::class, 'store'])->name('sizechart.store');

    Route::get('/admin_panel/charts', [AdminController::class,'charts']);
    Route::resource('/admin_panel/product', ProductsController::class);
    Route::get('/admin_panel/product/{id}/update', [ProductsController::class, 'edit']);
    Route::patch('/admin_panel/product/{id}', [ProductsController::class, 'update']);
    Route::delete('/admin_panel/product/{id}', [ProductsController::class, 'destroy']);
    

    Route::get('/admin_panel/product/{id}/gallery', [ProductsGalleryController::class, 'index'])->name('product.gallery.index');
    Route::get('/admin_panel/product/{product_id}/gallery/create', [ProductsGalleryController::class, 'create']);
    Route::post('/product-gallery/store/{productId}', [ProductsGalleryController::class, 'store'])->name('product.gallery.store');
    Route::delete('/admin_panel/product/{product_id}/gallery/{gallery_id}', [ProductsGalleryController::class, 'destroy']);
});

