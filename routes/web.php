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

//aqui van todas las rutas 

Route::get('/', function () {
    return view('welcome');
});

//primera ruta
//get : se muestran por el navegador, metodo estatico: se permiten ejecutar sin objeto solo con nombre de la clase
//tiene parametros: 1 nombre de la ruta, 2
Route::get('hola', function (){

    echo ("Holi, esta es mi primera ruta en PHP");

});

