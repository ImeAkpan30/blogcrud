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



Route::get('/', 'BlogController@index');
Route::get('/create', 'BlogController@create');
Route::get('/blogs/{id}/edit', 'BlogController@edit')->name('blogs.edit');
Route::get('/blogs/{id}/delete', 'BlogController@destroy')->name('blogs.destroy');
Route::get('/blogs/{id}/show', 'BlogController@show')->name('blogs.show');
Route::post('/create', 'BlogController@store')->name('blogs.store');
Route::post('/blog/update', 'BlogController@update')->name('blogs.update');