<?php

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

Route::get('/', function () {
    return view('main.pages.home');
})->name("home");


Route::get("/products", [ProductController::class, "index"])->name("products-page");
Route::get("/products/{slug}", [ProductController::class, "productDetail"])->name("product-detail");


Route::get("/about-us", function () {
    return view('main.pages.about-us');
})->name('about-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
