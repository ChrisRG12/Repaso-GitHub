<?php

namespace App\Http\Controllers;
use App\Models\tb_autores;
use App\Models\tb_libros;

use Illuminate\Http\Request;

use App\Http\Requests\validar_Libro;

use DB;
use Carbon\Carbon;

class ControladorBDLibro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = tb_autores::all();
        return view('Registro', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validar_Libro $request)
    {
        DB::table('tb_libros')->insert([
            "Titulo"=> $req->input('txtTitulo'),
            "ISBN"=> $req->input('ISNB'),
            "paginas"=> $req->input('NumPaginas'),
            "autor_id"=> $req->input('txtAutor'),
            "editorial"=> $req->input('txtEditorial'),
            "correo"=> $req->input('txtEmail'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        $tit = $req->input('txtTitulo');

        return redirect('Registro/create')->with('confirmacion', 'Libro Guardado') -> with('Vari', $tit);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
