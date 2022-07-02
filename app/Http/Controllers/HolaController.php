<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){
        $hola = "Hola Mundo!! Hecho por 111175 , Daniel alexander Carrasco Cunza";
        return view("welcome", compact("hola"));
    }
}
