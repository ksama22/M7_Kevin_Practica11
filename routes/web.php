<?php
use Illuminate\Support\Facades\Route;
//Carta el controlador creador 
use App\Http\Controllers\ControladorEjercicio1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Ruta con path , llama la funcion del controlador
Route::get('/ejercicio1', [ControladorEjercicio1 ::class,'ej1Parametro']);

//Ruta con path/{variable} y parametros, llama la funcion del controlador
Route::get('/hola/{texto?}', [ControladorEjercicio1 ::class,
'ej1ParametroConVariable']);

//Ruta con path/{variable} y parametros, llama la funcion del controlador
Route::get('/multi/{user?}/{phone?}/{street?}/{cp?}', [ControladorEjercicio1 ::class,
'ej1ParametroMultiVariable']);


//Ruta por defecto
Route::get('/', function () {
    return view('welcome');
});

//Devuelve la view prova.blade.php en la ruta /test
Route::get('/test', function () {
    return view('prova');
});
//Devuelve 'retorna tal cual' en la ruta /testing

Route::get('/testing', function () {
    return "Retorna tal cual";
});


//En la ruta 'ejercicio1' usa el controlador 'ControladorEjercicio1' i usa la funcion 'ej1Parametro'
//Route::get('/ejercicio1', [ControladorEjercicio1 ::class,'ej1Parametro']);