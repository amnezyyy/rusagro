<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/news', [PagesController::class,'news']);
Route::get('/news/{id}', [PagesController::class, 'oneNews']);
Route::get('/category', [PagesController::class, 'category']);
Route::get('/company', [PagesController::class, 'company']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/profile', [PagesController::class, 'profile']);
Route::get('/basket', [PagesController::class, 'basket']);
Route::get('/catalog/{code}', [PagesController::class, 'catalog']);
Route::get('/catalog/{category}/{code_product}', [PagesController::class, 'product']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/auth', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/basket_product/{id}', [ProductController::class, 'basketProduct']);
Route::post('/plus_count_product/{basket_id}/{product_id}', [ProductController::class, 'plusCount']);
Route::post('/minus_count_product/{basket_id}/{product_id}', [ProductController::class, 'minusCount']);
Route::post('/delete_product/{basket_id}/{product_id}', [ProductController::class, 'deleteProduct']);

Route::get('/order', [OrderController::class, 'order']);
Route::post('/add_order/{count}', [OrderController::class, 'makeOrder']);

Route::group(['middleware' => 'isAdmin' , 'prefix' => 'admin'], function (){
    Route::get('/', [AdminController::class, 'admin']);
    Route::post('/order_edit/{order_id}', [AdminController::class, 'orderEdit']);
    Route::post('/news_create', [AdminController::class, 'newsCreate']);
    Route::post('/news_edit/{news_id}', [AdminController::class, 'newsEdit']);
    Route::post('/delete_news/{news_id}', [AdminController::class, 'newsDelete']);
    Route::post('/add_product', [AdminController::class, 'productCreate']);
    Route::post('/product_edit/{product_id}', [AdminController::class, 'productEdit']);
});






