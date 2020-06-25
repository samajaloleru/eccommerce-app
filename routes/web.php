<?php

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

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
Route::get('/view-more', 'HomeController@product_more'); // Home page
Route::get('/about', 'HomeController@show_about'); // About Page
// Route::view('/store', 'store'); // About Page
// Route::view('/new', 'new'); // About Page
// Route::view('/contact', 'contact'); // About Page

Route::post('/search', 'HomeController@search'); //search

//show Product by Category
Route::get('/product_by_category/{category_id}','HomeController@product_by_category');

//show Product by Brand
// Route::get('/product_by_brand/{brand_id}','HomeController@product_by_brand');
Route::get('/view_product/{product_id}','HomeController@view_product');

//cart routes
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart','CartController@update_cart');

//checkout routes
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');
Route::get('/login-check','CheckoutController@login_checkout');
Route::post('/shipping-details','CheckoutController@shipping_details');
Route::get('/checkout','CheckoutController@checkout');

//customer routes
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');

Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');
Route::get('delete-order/{order_id}','CheckoutController@delete_order');
Route::get('unactive-order/{order_id}','CheckoutController@unactive_order');



//Backend Routes-------------------------
Route::get('/logout', 'SuperAdminController@logout'); // Home page
Route::get('/admin', 'AdminController@index'); // Home page
Route::get('/dashboard', 'SuperAdminController@index'); // Home page
Route::post('/admin-dashboard', 'AdminController@dashboard'); // Home page
Route::get('/login', 'AdminController@login'); // Home page
Route::post('/login', 'AdminController@admin_login'); // Home page

//category related route
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('active-category/{category_id}','CategoryController@active_category');
Route::get('edit-category/{category_id}','CategoryController@show');
Route::post('edit-category/{category_id}','CategoryController@edit');
Route::get('delete-category/{category_id}','CategoryController@delete_category');


// //brand related route
// Route::get('/add-brand', 'BrandController@index');
// Route::get('/all-brand', 'BrandController@all_brand');
// Route::post('/save-brand', 'BrandController@save_brand');
// Route::get('unactive-brand/{brand_id}','BrandController@unactive_brand');
// Route::get('active-brand/{brand_id}','BrandController@active_brand');
// Route::get('edit-brand/{brand_id}','BrandController@show');
// Route::post('edit-brand/{brand_id}','BrandController@edit');
// Route::get('delete-brand/{brand_id}','BrandController@delete_brand');


//product related route
Route::get('/add-product', 'ProductController@index');
Route::get('/all-product', 'ProductController@all_product');
Route::post('/save-product', 'ProductController@save_product');
Route::get('unactive-product/{product_id}','ProductController@unactive_product');
Route::get('active-product/{product_id}','ProductController@active_product');
Route::get('edit-product/{product_id}','ProductController@show');
Route::post('edit-product/{product_id}','ProductController@edit');
Route::get('delete-product/{product_id}','ProductController@delete_product');
Route::post('/search-product', 'ProductController@search'); //search


//slider related route
Route::get('/add-slider', 'SliderController@index');
Route::get('/all-slider', 'SliderController@all_slider');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('edit-slider/{slider_id}','SliderController@show');
Route::get('unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('active-slider/{slider_id}','SliderController@active_slider');
Route::post('edit-slider/{slider_id}','SliderController@edit');
Route::get('delete-slider/{slider_id}','SliderController@delete_slider');

//advert related route
Route::get('/add-advert', 'AdvertController@index');
Route::get('/all-advert', 'AdvertController@all_advert');
Route::post('/save-advert', 'AdvertController@save_advert');
Route::get('edit-advert/{advert_id}','AdvertController@show');
Route::get('unactive-advert/{advert_id}','AdvertController@unactive_advert');
Route::get('active-advert/{advert_id}','AdvertController@active_advert');
Route::post('edit-advert/{advert_id}','AdvertController@edit');
Route::get('delete-advert/{advert_id}','AdvertController@delete_advert');