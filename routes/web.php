<?php

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

use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos', function () {
   $products = Product::query()
       ->select(['title', 'slug', 'category_id', 'image'])
       ->with('category:id,title,slug')
       ->simplePaginate();

   return view('products', ['products' => $products]);
});
