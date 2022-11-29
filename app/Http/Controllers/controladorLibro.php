<?php

namespace App\Http\Controllers;

use App\Http\Requests\validar_Libro;
use App\Http\Requests\ValidarAu;

use Illuminate\Http\Request;

class controladorLibro extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }

    public function showPrincipal(){
        return view('Principal');
    }

    public function showInicio(){
        return view('Inicio');
    }

    public function showRegsitro(){
      
        
    }


    public function Procesar_Libro(validar_Libro $req){
        $tit = $req->input('txtTitulo');
        

        return redirect('Registro')->with('confirmacion', 'Libro Guardado') -> with('Vari', $tit);
    }

    public function showAutor(){
        
    }

    
    public function ProcesarAutor(ValidarAu $req){

        
    }
}
