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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mascotas_list',['uses'=>'mascotasController@list', 'as'=>'mascotas.list']);
Route::get('mascotas/{id}',['uses'=>'mascotasController@show', 'as'=>'mascotas.show']);
Route::post('mascotas',['uses'=>'mascotasController@store', 'as'=>'mascotas.store']);
Route::put('mascotas/{id}',['uses'=>'mascotasController@update', 'as'=>'mascotas.update']);
Route::delete('mascotas/{id}',['uses'=>'mascotasController@destroy', 'as'=>'mascotas.destroy']);
Route::get('tiposmascotas_list',['uses'=>'tiposmascotasController@index', 'as'=>'tiposmascotas.index']);

