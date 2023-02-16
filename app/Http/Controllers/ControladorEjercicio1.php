<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio1 extends Controller
{
    public function ej1Parametro(){
        return "Éste es el resultado del primer ejercicio de la 
        práctica hecha por Kevin Sama";
    }


    public function ej1ParametroConVariable($texto=''){
        $textoFinal = "Sabias que ";
        $textoFinal .= ($texto == '')?'en terminos':$texto;
        return view('PrimeraView')->with(['texto'=>$textoFinal]);
    }

    public function hola(){
        return view('PrimeraView')-> with(['texto'=>'Vaporeon Blanco']);
    }
}
