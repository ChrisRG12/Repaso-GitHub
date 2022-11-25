@extends('plantilla')

@section('contenido')

@if(session()->has('confirmacion'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> Autor Guardado </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif


<div class="container mt-2  cold-md-5">
    @if ($errors->any())
     
    @foreach ($errors->all() as $error)

    @endforeach
        
    @endif

    <div class="card text-center mb-2">

        <form action="{{route('Autor.store')}}" method="post">
            @csrf

            <div class="card-header fw-bolder">
                Registro  de Libros 
             </div>
     
             <div class="card-body ">
     
     
                 <div class="mb-1">
                   <label class="form-label"> Nombre Completo </label>
                  <input type="text" class="form-control" name="txtNom" value="{{ old('txtNom')}}">
                  <p class="text-secondary fst-Italic"> {{ $errors->first('txtNom') }} </p>
                 </div>
     
     
                 <div class="mb-1">
                  <label class="form-label"> Fecha de Nacimiento </label>
                  <input type="date" class="form-control" name="txtfech" value="{{ old('txtfech')}}">
                  <p class="text-secondary fst-Italic"> {{ $errors->first('txtfech') }}</p>
                 </div>

                 <div class="mb-1">
                  <label class="form-label"> No. Libros Publicados  </label>
                  <input type="number" class="form-control" name="txtlib" value="{{ old('txtlib')}}">
                  <p class="text-secondary fst-Italic"> {{ $errors->first('txtlib') }}</p>
                 </div>
     
     
             </div>
     
             <div class="card-footer text-center">
                 <button type="submit" class="btn btn-secondary btn-lg"> Guardar Libro </button>
     
             </form>
     
             </div>
     
         </div>
     
     
     </div>
    </div>


@stop