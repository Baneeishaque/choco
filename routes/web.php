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
    return view('index');
});

Route::get('/grid_blog', function () {
    return view('grid-blog');
});
Route::get('/contact-us',function(){
    return view('contact-us');
});
Route::get('/grid_products', 'HomeController@products');
// admin routes
Auth::routes();
Route::get('/admin', 'HomeController@admin');
Route::get('/admin/products', 'ProductController@index');
Route::get('product/create', 'ProductController@create');
Route::post('/createProduct','ProductController@store');
Route::get('deleteProduct/{id}','ProductController@destroy');
Route::get('editProduct/{id}','ProductController@edit');
Route::post('/updateProduct/{id}','ProductController@update');

Route::get('/admin/blogs', 'BlogController@index');
Route::get('blog/create', 'BlogController@create');
Route::post('/createBlog','BlogController@store');
Route::get('deleteBlog/{id}','BlogController@destroy');
Route::get('editBlog/{id}','BlogController@edit');
Route::post('/updateBlog/{id}','BlogController@update');
