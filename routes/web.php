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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/creations', 'CreationController@index')->name('creations');
Route::get('/creations/{creation}', 'CreationController@show')->name('creations.show');
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/{article}', 'ArticleController@index')->name('articles.show');
Route::get('/contact', 'HomeController@index')->name('contact');
