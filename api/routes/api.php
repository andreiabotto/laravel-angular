<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// CLIENT
Route::get('/clientes', ['as' => 'api.client.list', 'uses' => 'App\Http\Controllers\Api\ClientController@list']);
Route::get('/clientes/{$id}', ['as' => 'api.client.get', 'uses' => 'App\Http\Controllers\Api\ClientController@get']);
Route::post('/clientes', ['as' => 'api.client.add', 'uses' => 'App\Http\Controllers\Api\ClientController@add']);
Route::put('/clientes/{$id}', ['as' => 'api.client.put', 'uses' => 'App\Http\Controllers\Api\ClientController@update']);
Route::delete('/clientes/{$id}', ['as' => 'api.client.delete', 'uses' => 'App\Http\Controllers\Api\ClientController@delete']);

// PRODUCT
Route::get('/produtos', ['as' => 'api.product.list', 'uses' => 'App\Http\Controllers\Api\ProductController@list']);
Route::get('/produtos/{$id}', ['as' => 'api.product.get', 'uses' => 'App\Http\Controllers\Api\ProductController@get']);
Route::post('/produtos', ['as' => 'api.product.add', 'uses' => 'App\Http\Controllers\Api\ProductController@add']);
Route::put('/produtos/{$id}', ['as' => 'api.product.put', 'uses' => 'App\Http\Controllers\Api\ProductController@update']);
Route::delete('/produtos/{$id}', ['as' => 'api.product.delete', 'uses' => 'App\Http\Controllers\Api\ProductController@delete']);
