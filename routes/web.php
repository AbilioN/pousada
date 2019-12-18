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


//Rotas da pagina de fotos

use Illuminate\Routing\Console\MiddlewareMakeCommand;

Route::get('/', function () {
    return view('index');
});
Route::get('/fotos/apousada', function(){
    return view('apousada');
});

Route::get('/fotos/turismo', function(){
    return view('turismo');
});

Route::get('/fotos/eventos', function(){
    return view('eventos');
});


//rotas para servicos

Route::get('/servicos/culinaria' , function(){
    return view('culinaria');

});
Route::get('/servicos/massagem-e-estetica' , function(){
    return view('massagemestetica');
    
});
Route::get('/servicos/guia' , function(){
    return view('guia');
    
});


//Routa para login e contato

Route::get('/login2' , function(){
    return view('login2');
});


Route::get('/contato' , function(){
    return view('contato');
});


Route::post('/contato', 'ContatoControlador@store');



Route::get('login' ,'UserControlador@index' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


