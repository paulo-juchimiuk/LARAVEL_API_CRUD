<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Projeto Origo
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group( function(){

    Route::post('/cliente/novo', 'ClienteController@create');
    Route::post('/plano/assinar', 'ChaveController@add');
    Route::put('/cliente/update/{id}', 'ClienteController@update');
    Route::delete('/cliente/delete/{id}', 'ClienteController@delete');

    Route::get('/clientes', 'ClienteController@show');
    Route::get('/clientes/{id}', 'ClienteController@select');


});
