@extends('plantilla')

@section('contenido')

@if(session()->has('confirmacion'))

<?php
$titulo = session()->get('Vari');
?>

{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Libro: {$titulo} Registrado Correctamente',
      'success'  
) </script> "!!}

@endif



<div class="container mt-2  mb-3 cold-md-5">
    

    <table class="table table-success table-striped mt-5 mb-5 ">

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
                <a href="{{route('Eliminar.show' , $consulta->idAutor)}}"> Eliminar</a>
                <a href="{{route('Autor.edit' , $consulta->idAutor)}}">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>





</div>
@stop