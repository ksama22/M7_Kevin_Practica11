<?php

use Illuminate\Support\Facades\Route;
//Carta el controlador creador 
use App\Http\Controllers\PrimerControlador;
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


Route::get('/test', function () {
    return view('prova');
});

Route::get('/testing', function () {
    return "Retorna tal cual";
});
//Llama el Controlador creador y la primera funcion
Route::get('/pepe', [PrimerControlador::class,'arrel']);


Route::get('/ejercicio1', [ControladorEjercicio1 ::class,'ej1Parametro']);

