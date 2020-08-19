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


Route::view('/create_blog', 'blog_form', ['editing' => false])->name('create_blog')->middleware('auth');

Auth::routes();

Route::get('/', 'BlogPopulateController@show')->name('blogs');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog/{id}', 'BlogController@show');

Route::get('/edit_blog', 'BlogContoller@edit')->name('edit_blog')->middleware('auth');

Route::post('/create_blog', 'BlogController@create')->name('create_blog')->middleware('auth');

Route::put('/edit_blog', 'BlogController@update')->name('edit_blog')->middleware('auth');

Route::post('/create_comment', 'CommentController@show')->name('create_comment')->middleware('auth');
