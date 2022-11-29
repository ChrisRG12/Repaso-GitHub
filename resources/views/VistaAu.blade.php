@extends('plantilla')

@section('contenido')
@if(session()->has('confirmacion'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> Autor Guardado </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

@if(session()->has('Actualizar'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Editado',
      'success'  
) </script> "!!}

@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Eliminado',
      'success'  
) </script> "!!}

@endif


<div class="container mt-2  mb-3 cold-md-5">
    

    <table class="table table-secondary table-striped mt-5 mb-5 ">

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
                <a href="{{route('Eliminar.show' , $consulta->idAutor)}}" class="btn btn-outline-danger"> Eliminar</a>
                <a href="{{route('Autor.edit' , $consulta->idAutor)}}" class="btn btn-outline-success">Editar</a>
            </td>

          </tr>
          @endforeach
        </tbody>

      </table>





</div>
@stop