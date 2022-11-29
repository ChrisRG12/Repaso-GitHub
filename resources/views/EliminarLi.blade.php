@extends('plantilla')

@section('contenido')

<div class="container col-md-6 mb-3 mt-3" >

    <h1 class="display-1 mt-4 mb-4 text-center fw-bold" style="color: aliceblue">Confirma!!</h1>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong> ¿Seguro que vas a Eliminar?</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  
  
         
      <div class="card text-center">
  
        <form method="POST" action="{{route('Libro.destroy', $consultaId->idLibro)}}">
          @csrf
  
          {!!method_field('DELETE')!!}
  
          <div class="card-header">
            <h5 class="text-primary text-center"> Libro </h5>
          </div>
  
          <div class="card-body">
  
            <h5 class="card-title">  {{ $consultaId->Titulo  }}</h5>
            <p class="card-text">  {{ $consultaId->ISBN  }} </p>
            <p class="card-text">  {{ $consultaId->paginas  }} </p>
            <p class="card-text">  {{ $consultaId->editorial  }} </p>

           
          </div>
  
          <div class="card-footer text-muted">
            <button type="submit" class="btn btn-danger">Eliminar Libro</button>
             
          <a href="#" class="btn btn-secondary"> No, Me arrepenti</a>
          </div>
        </form>
  
        </div>
       
  
  </div>











@stop