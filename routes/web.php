<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductPageController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);
Route::resource('brands', BrandController::class);
Route::resource('categories', CategoryController::class);

Route::post('customkategori/deleteData', [CategoryController::class, "deleteData"])->name('category.deleteData');
Route::post('customekategori/deleteData', [BrandController::class, "deleteData"])->name('brand.deleteData');
Route::post('/product/{id}/productbrand', [BrandController::class, 'showProduct'])->name('product.productbrand');

Route::get('product-page',[ProductPageController::class,'index']);

Route::get('cart', [ProductPageController::class,'cart']);
Route::get('product-page/addcart/{id}',[ProductPageController::class, 'addToCart'])->name('addToCart');