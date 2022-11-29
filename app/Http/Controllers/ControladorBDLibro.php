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
        $ConsultaLibros= DB::table('tb_libros')->get();
        return view ('VistaLi', compact('ConsultaLibros'));
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
            "Titulo"=> $request->input('txtTitulo'),
            "ISBN"=> $request->input('ISNB'),
            "paginas"=> $request->input('NumPaginas'),
            "autor_id"=> $request->input('txtAutor'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtEmail'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        $tit = $request->input('txtTitulo');

        return redirect('VistaLibro')->with('confirmacion', 'Libro Guardado') -> with('Vari', $tit);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('tb_libros')->where('idLibro', $id)->first();
        $cate = tb_autores::all();
        return view('EditarLib', compact('consultaId', 'cate'));

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
        DB::table('tb_libros')->where('idLibro', $id)->update([

            "Titulo"=> $request->input('txtTitulo'),
            "ISBN"=> $request->input('ISNB'),
            "paginas"=> $request->input('NumPaginas'),
            "autor_id"=> $request->input('txtAutor'),
            "editorial"=> $request->input('txtEditorial'),
            "correo"=> $request->input('txtEmail'),
            "updated_at"=> Carbon::now(),

        ]);

        return redirect('VistaLibro')->with('Actualizar', 'Libro Actualizado');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId = DB::table('tb_libros')->where('idLibro',$id)->first();
        return view('EliminarLi', compact('consultaId'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->delete();
        return redirect('VistaLibro')->with('Eliminado', 'Libro Borrado');
    }
}
