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


// Rotas para servicos

Route::get('/servicos/culinaria' , function(){
    return view('culinaria');

});
Route::get('/servicos/massagem-e-estetica' , function(){
    return view('massagemestetica');
    
});
Route::get('/servicos/guia' , function(){
    return view('guia')->name('guia');
    
});



Auth::routes();

//Rotas para logins

Route::get('/login2' , function(){
    return view('login2');
})->name('login2');

Route::post('/login2' , 'Auth\LoginController@login2')->name('login2');

Route::get('/registrar' , function(){
    return view('registrar');
});
Route::post('/registrar' , 'Auth\LoginController@registrar' )->name('registrar');



// Rotas para contato

Route::get('/contato' , function(){
    return view('contato');
});

Route::post('/contato', 'ContatoControlador@store');


// Rotas para Usuario

Route::get('/login' ,'UserControlador@index' );
Route::get('/get-user-data' , 'UserControlador@getUserData')->name('get-user-data');

// todo: newService ainda será refatorado tanto aqui quanto no front end

Route::post('getServices' , 'ServiceController@getAll')->name('getServices');
Route::post('teste' , function(){
    return 'json';
});



// Route::get('/home', 'HomeController@index')->name('home');

// rotas para admnistrador (login e requisicoes)
Route::get('/admin-login' , 'Auth\AdminLoginController@index')->name('admin-login');
Route::post('/admin-login' , 'Auth\AdminLoginController@login')->name('admin-login-submit');
Route::get('/admin' , 'AdminControlador@index')->name('admin-home');



Route::post('/nova-os' , 'OrdemServicoController@newOS');





Route::get('/teste-view-com-side-bar', function() { return view('index'); });







Route::post('/login__2' , 'ContatoControlador@teste')->name('login__2');