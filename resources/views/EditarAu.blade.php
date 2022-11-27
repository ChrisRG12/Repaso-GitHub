@extends('plantilla')

@section('contenido')


<div class="container mt-2  cold-md-5">
  @if ($errors->any())
   
  @foreach ($errors->all() as $error)

  @endforeach
      
  @endif

  <div class="card text-center mb-2">

      <form action="{{route('Autor.update', $consultaId->idAutor)}}" method="post">
          @csrf

          @method('PUT');

          <div class="card-header fw-bolder">
              Correcciones !!
           </div>
   
           <div class="card-body ">
   
   
               <div class="mb-1">
                 <label class="form-label"> Nombre Completo </label>
                <input type="text" class="form-control" name="txtNom" value="{{ $consultaId->Nombre }}">
                <p class="text-secondary fst-Italic"> {{ $errors->first('txtNom') }} </p>
               </div>
   
   
               <div class="mb-1">
                <label class="form-label"> Fecha de Nacimiento </label>
                <input type="date" class="form-control" name="txtfech" value="{{ $consultaId->Fechanacimiento }}">
                <p class="text-secondary fst-Italic"> {{ $errors->first('txtfech') }}</p>
               </div>

               <div class="mb-1">
                <label class="form-label"> No. Libros Publicados  </label>
                <input type="number" class="form-control" name="txtlib" value="{{ $consultaId->Librospublicados }}">
                <p class="text-secondary fst-Italic"> {{ $errors->first('txtlib') }}</p>
               </div>
   
   
           </div>
   
           <div class="card-footer text-center">
               <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Autor </button>
   
           </form>
   
           </div>
   
       </div>
   
   
   </div>
  </div>
@stop