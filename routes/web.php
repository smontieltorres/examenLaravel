<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/administracion', function(){
    return view('crud-inventario');
})->name('productos');

Route::get('/usuarios', function(){
    return view('crud-user');
})->name('usuarios');

Auth::routes();

Route::get('/user', 'HomeController@index')->name('user');
