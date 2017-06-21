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

Route::get('/', function () {
    return view('index');
});

// Route::get('/home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'auth' => 'Auth\PasswordController',
// ]);

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo/', 'ProdutoController@novo');
Route::post('/produtos/salvar/', 'ProdutoController@salvar');
Route::get('/produtos/retornaJson/', 'ProdutoController@retornaJson');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');