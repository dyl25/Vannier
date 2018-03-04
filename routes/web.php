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

Route::name('admin.')->group(function () {
    Route::get('/backoffice', 'Admin\DashboardController@index')->name('dashboard');
    Route::resource('/backoffice/creations', 'Admin\CreationController');
    Route::resource('/backoffice/articles', 'Admin\ArticleController');
});

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/creations', 'CreationController@index')->name('creations');
Route::get('/creations/{creation}', 'CreationController@show')->name('creations.show');
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@sendMail')->name('contact.post');
