<?php
use Illuminate\Support\Facades\Route;
//Carta el controlador creador 
use App\Http\Controllers\ControladorEjercicio1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/ejercicio1', [ControladorEjercicio1 ::class,'ej1Parametro']);


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



