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
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">ISBN</th>
            <th scope="col">Paginas</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Email</th>
            <th scope="col">Opciones</th>
          </tr>

        </thead>
        <tbody>
            @foreach ($ConsultaLibros as $consulta)
          <tr>
            <th scope="row">{{$consulta->idLibro}}</th>
            <td>{{$consulta->Titulo}}</td>
            <td>{{$consulta->ISBN}}</td>
            <td>{{$consulta->paginas}}</td>
            <td>{{$consulta->autor_id}}</td>
            <td>{{$consulta->editorial}}</td>
            <td>{{$consulta->correo}}</td>
             <td>
                <a href="{{route('Eliminar.show' , $consulta->idLibro)}}"> Eliminar</a>
                <a href="{{route('Libro.edit' , $consulta->idLibro)}}">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>





</div>
@stop