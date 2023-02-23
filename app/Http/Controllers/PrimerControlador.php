<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //

    public function arrel(){
        return "Has vuelto a tus raices, joven Uzumaki";
    }

    public function hola(){
        return "Hola, bienvendio al pueblo de la hoja";
    }
}
