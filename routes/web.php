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

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos', function () {
   $products = \App\Product::all();

   return view('products', ['products' => $products]);
});

Route::get('join_2_tables', function () {
    $products = DB::select(
        'SELECT products.id, 
                products.title,
                product_categories.id AS category_id,
                product_categories.title AS category
 
         FROM   product_categories 
                JOIN products ON products.category_id = product_categories.id
     
         WHERE  product_categories.title=?', ['Cursos de Laravel']
    );

    return $products;
});

Route::get('relation_2_models', function(){
    $products = \App\Product::with('category')->get();

    return view('products', ['products' => $products]);
});