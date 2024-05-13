<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\ProductController;
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

Route::resource('computadora', ComputadoraController::class)->middleware('auth');

Route::resource('product', ProductController::class)->middleware('admin');
Route::get('/productos', 'App\Http\Controllers\ProductController@productos')->name('productos.index');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/cart', 'App\Http\Controllers\CartController@show')->name('cart.show');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/x/y/demo', function () {
    return view('landing');
})->name('landing');
