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

Route::get('permiso/{nombre}', 'PermisoController@index');//el @ es para llamar metodos de un controlador.
//se pueden pasar varios parametros permiso/{nombre}/{slug?} obs: slug es un parametro opcional.

