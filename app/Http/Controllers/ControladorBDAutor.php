<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarAu;

use DB;
use Carbon\Carbon;


class ControladorBDAutor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaAutores= DB::table('tb_autores')->get();
        return view ('VistaAu', compact('ConsultaAutores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Autor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarAu $request)
    {
        DB::table('tb_autores')->insert([
            "Nombre"=> $request->input('txtNom'),
            "Fechanacimiento"=> $request->input('txtfech'),
            "Librospublicados"=> $request->input('txtlib'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('VistaAutor')->with('confirmacion', 'Autor Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('EliminarAu', compact('consultaId'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('tb_autores')->where('idAutor',$id)->first();
        return view('EditarAu', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarAu $request, $id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->update([
            "Nombre"=> $request->input('txtNom'),
            "Fechanacimiento"=> $request->input('txtfech'),
            "Librospublicados"=> $request->input('txtlib'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('VistaAutor')->with('Actualizar', 'Autor Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->delete();

        return redirect('VistaAutor')->with('Eliminado', 'Recuerdo Eliminado');

    }
}
