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

    public function showRegsitro(){
        return view('Registro');
    }


    public function Procesar_Libro(validar_Libro $req){
        $tit = $req->input('txtTitulo');
        

        return redirect('Registro')->with('confirmacion', 'Libro Guardado') -> with('Vari', $tit);
    }

    public function showAutor(){
        return view('Autor');
    }

    
    public function ProcesarAutor(ValidarAu $req){

        return redirect('Autor')->with('confirmacion', 'Autor Guardado');
    }
}
