<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "index"])->name("home");


Route::get("/categories", [ProductController::class, "index"])->name("product-categories");
Route::get("/product/{slug}", [ProductController::class, "productList"])->name("product-list");
Route::get("/products/{slug}/detail", [ProductController::class, "productDetail"])->name("product-detail");


Route::get("/about-us", function () {
    return view('main.pages.about-us');
})->name('about-us');

Route::get("/contact-us", [ContactController::class, 'index'])->name('contact-us');
Route::post("/contact-us/send", [ContactController::class, 'sendMessage'])->name('send-message');

Route::get("/gallery", [GalleryController::class, "index"])->name("gallery");

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/products', [AdminController::class, 'products'])->name('admin-products');
Route::get('/admin/products/add', [AdminController::class, 'newProduct'])->name('add-product');
Route::post('/admin/products/add/save', [AdminController::class, 'saveProduct'])->name('save-product');
Route::post('/admin/products/delete/{id}', [AdminController::class, 'deleteProduct'])->name('delete-product');

Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin-categories');
Route::post('/admin/categories/new', [AdminController::class, 'newCategories'])->name('new-categories');
require __DIR__ . '/auth.php';
