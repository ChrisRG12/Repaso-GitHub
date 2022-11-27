@extends('plantilla')

@section('contenido')

<div class="container mt-2  mb-3 cold-md-5">
    

    <table class="table mt-5 mb-5 ">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Libros</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaAutores as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idAutor }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->Fechanacimiento }}</td>
            <td>{{ $consulta->Librospublicados }}</td>
            <td>
                <a href=""> Eliminar</a>
                <a href="">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>





</div>
@stop