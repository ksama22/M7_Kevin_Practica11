<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio1 extends Controller
{
    //Devuelve el texto tal cual
    public function ej1Parametro(){
        return "Éste es el resultado del primer ejercicio de la 
        práctica hecha por Kevin Sama";
    }

    //Devuelve el texto mas el texto del parametro /'texto'
    public function ej1ParametroConVariable($texto=''){
        $textoFinal = "";
        // Si el texto es vacio, devuelve 'No hay texto en la ruta'
        $textoFinal .= ($texto == '')?'No hay texto en la ruta /':$texto;
        //Carga en esta vista la variable 'texto' con la variable local 'textoFinal'
        return view('PrimeraView')->with(['texto'=>$textoFinal]);
    }

    //Devuelve el texto mas  texto de los 4 parametros /text1/tex2/tex3/text4'
    public function ej1ParametroMultiVariable($user='',$phone='',$street='',$cp=''){
        return view('SegonaView')->with(['user'=>$user,'phone'=>$phone,'street'=>$street,'cp'=>$cp]);
    }
}
