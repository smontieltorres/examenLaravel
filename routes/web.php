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

<<<<<<< HEAD
Route::get('/productos', function(){
=======
Route::get('/administracion', function(){
>>>>>>> 4e9ca2513d30afc875f5490160a188d7170de402
    return view('crud-inventario');
})->name('productos');

Route::get('/usuarios', function(){
    return view('crud-user');
})->name('usuarios');

Auth::routes();

Route::get('/user', 'HomeController@index')->name('user');
