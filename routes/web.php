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

Route::view('/', 'welcome');

Route::view('/create_blog', 'blog_form')->name('create_blog')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blogs', 'BlogPopulateController@show')->name('blogs');

Route::get('/blog/{id}', 'BlogController@show');

Route::post('/create_blog', 'BlogController@create')->name('create_blog')->middleware('auth');
