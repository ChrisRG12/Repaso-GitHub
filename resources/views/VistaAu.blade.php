@extends('plantilla')

@section('contenido')

<div class="container mt-2  cold-md-5">
    @foreach ($ConsultaRecuerdos as $consulta)

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Libros</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $consulta->idAutor }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Fechanacimiento }}</td>
            <td>{{ $consulta->Librospublicados }}</td>
          </tr>
        </tbody>
      </table>

      @endforeach



</div>
@stop