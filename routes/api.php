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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//productos
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');
Route::put('/productos/{id}', 'App\Http\Controllers\ProductoController@update');
Route::delete('/productos/{id}', 'App\Http\Controllers\ProductoController@destroy');

//clientes
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store');
Route::put('/clientes/{id}', 'App\Http\Controllers\ClienteController@update');
Route::delete('/clientes/{id}', 'App\Http\Controllers\ClienteController@destroy');

//compras
Route::get('/compras', 'App\Http\Controllers\CompraController@index');
Route::post('/compras', 'App\Http\Controllers\CompraController@store');
Route::put('/compras/{id}', 'App\Http\Controllers\CompraController@update');
Route::delete('/compras/{id}', 'App\Http\Controllers\CompraController@destroy');