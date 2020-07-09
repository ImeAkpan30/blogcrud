<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/blog', 'ApiController@create');

Route::get('/blogs', 'ApiController@show');

Route::get('/blog/{id}', 'ApiController@showbyid');

Route::put('/blogupdate/{id}', 'ApiController@updateById');

Route::delete('/blogdelete/{id}', 'ApiController@deleteById');
