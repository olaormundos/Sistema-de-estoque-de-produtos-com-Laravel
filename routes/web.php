<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function(){
    return '<h1> Hello World </h1>';
});

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@lista');
Route::get('/produtos/detalhes/{id}', 'App\Http\Controllers\ProdutoController@detalhes')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutoController@novo');
Route::post('/produtos/adiciona', 'App\Http\Controllers\ProdutoController@adiciona');