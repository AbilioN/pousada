<?php

use App\Produto;
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


Route::get('contato' , function(){

    return response('as aulas do papi');
});


// Rotas de dados da aplicação

Route::get('/getServicesJson' ,'ServiceController@getAllJson')->name('getServicesJson');

Route::get('/teste' , function(){
    return view('teste');
})->name('teste');