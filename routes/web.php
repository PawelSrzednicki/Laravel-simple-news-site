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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('news', 'NewsController');
Route::resource('category', 'CategoriesController');


Route::get('{user}/news','UserController@showNewsByUser')->name('news.byAuthor');
Route::get('myposts','UserController@showNewsOfAuthUser')->name('user.news')->middleware('auth');;
Route::get('{user}/profile','UserController@show')->name('profile')->middleware('auth');;