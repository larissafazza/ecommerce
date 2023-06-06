<?php

use App\Models\Product;
use App\Models\Client;
use App\Models\Seller;
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

    return view('products', [
        'products' => Product::all()
    ]);
})->name('home');

Route::get('/{product}', function ($id) {
    
    $product = Product::findOrFail($id);
    
    return view('product', [
        'product' => $product,
    ]);
})->name('product');

Route::get('/login', function () {
    return view('login',[
        'sellers' => Seller::all(),
        'clients' => Client::all(),
    ]);
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
