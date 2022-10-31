<?php

namespace App\Http\Controllers;

use App\Http\Requests\validar_Libro;

use Illuminate\Http\Request;

class controladorLibro extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }

    public function showPrincipal(){
        return view('Principal');
    }

    public function showRegsitro(){
        return view('Registro');
    }

    public function Procesar_Libro(validar_Libro $req){
        return redirect('Registro')->with('confirmacion' , ' Su Recuerdo se ha guardado correctamente');;
    }
}
