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
Route::view('/', 'welcome'); // Home page
Route::view('/about', 'about'); // About Page
Route::view('/store', 'store'); // About Page
Route::view('/new', 'new'); // About Page
Route::view('/contact', 'contact'); // About Page


//Backend Routes-------------------------
Route::get('/logout', 'SuperAdminController@logout'); // Home page
Route::get('/admin', 'AdminController@index'); // Home page
Route::get('/dashboard', 'AdminController@show_dashboard'); // Home page
Route::post('/admin-dashboard', 'AdminController@dashboard'); // Home page

//category related route
Route::get('/add-category', 'CategoryController@index');