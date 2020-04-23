<?php

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

//Frontend Routes
Route::get('/', 'HomeController@index'); // Home page
Route::get('/about', 'HomeController@show_about'); // About Page
// Route::view('/store', 'store'); // About Page
// Route::view('/new', 'new'); // About Page
// Route::view('/contact', 'contact'); // About Page

//show Product by Category
Route::get('/product_by_category/{category_id}','HomeController@product_by_category');

//show Product by Brand
Route::get('/product_by_brand/{brand_id}','HomeController@product_by_brand');
Route::get('/view_product/{product_id}','HomeController@view_product');



//Backend Routes-------------------------
Route::get('/logout', 'SuperAdminController@logout'); // Home page
Route::get('/admin', 'AdminController@index'); // Home page
Route::get('/dashboard', 'SuperAdminController@index'); // Home page
Route::post('/admin-dashboard', 'AdminController@dashboard'); // Home page

//category related route
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('edit-category/{category_id}','CategoryController@show');
Route::post('edit-category/{category_id}','CategoryController@edit');
Route::get('delete-category/{category_id}','CategoryController@delete_category');


//brand related route
Route::get('/add-brand', 'BrandController@index');
Route::get('/all-brand', 'BrandController@all_brand');
Route::post('/save-brand', 'BrandController@save_brand');
Route::get('edit-brand/{brand_id}','BrandController@show');
Route::post('edit-brand/{brand_id}','BrandController@edit');
Route::get('delete-brand/{brand_id}','BrandController@delete_brand');


//product related route
Route::get('/add-product', 'ProductController@index');
Route::get('/all-product', 'ProductController@all_product');
Route::post('/save-product', 'ProductController@save_product');
Route::get('edit-product/{product_id}','ProductController@show');
Route::post('edit-product/{product_id}','ProductController@edit');
Route::get('delete-product/{product_id}','ProductController@delete_product');


//slider related route
Route::get('/add-slider', 'SliderController@index');
Route::get('/all-slider', 'SliderController@all_slider');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('edit-slider/{slider_id}','SliderController@show');
Route::get('unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('active-slider/{slider_id}','SliderController@active_slider');
Route::post('edit-slider/{slider_id}','SliderController@edit');
Route::get('delete-slider/{slider_id}','SliderController@delete_slider');