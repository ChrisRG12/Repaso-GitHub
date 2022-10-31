@extends('plantilla')

@if(session()->has('confirmacion')) 
{!! " <script> Swal.fire(
 'Good job!',
 'You clicked the button!',
 'success'  ) </script> "!!}

@endif


@section('contenido')

<div class="container mt-5  cold-md-5">
    @if ($errors->any())
     
     @foreach ($errors->all() as $error)
     <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> {{ $error }} </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
         
     @endforeach
        
    @endif

    <div class="card text-center mb-5">

        <form action="LibroGuardado" method="post">
            @csrf


        <div class="card-header fw-bolder">
           Registro  de Libros 
        </div>

        <div class="card-body ">

            <div class="mb-1">
                <label class="form-label"> ISNB </label>
                <input type="Number" class="form-control" name="ISNB" value="{{ old(ISNB)}}">
                <p class="text-secondary fst-Italic"> {{ $errors->first(ISNB)}}</p>
                </div>

            <div class="mb-1">
             <label class="form-label"> Titulo</label>
             <input type="text" class="form-control" name="txtTitulo" value="{{ old(txtTitulo)}}">
             <p class="text-secondary fst-Italic"> {{ $errors->first(txtTitulo)}}</p>
            </div>


            <div class="mb-1">
              <label class="form-label"> Autor</label>
             <input type="text" class="form-control" name="txtAutor" value="{{ old(txtAutor)}}">
             <p class="text-secondary fst-Italic"> {{ $errors->first(txtAutor)}}</p>
            </div>


            <div class="mb-1">
             <label class="form-label"> Paginas</label>
             <input type="Number" class="form-control" name="NumPaginas" value="{{ old(NumPaginas)}}">
             <p class="text-secondary fst-Italic"> {{ $errors->first(NumPaginas)}}</p>
            </div>

            <div class="mb-1">
             <label class="form-label"> Editorial</label>
             <input type="text" class="form-control" name="txtEditorial" value="{{ old(txtEditorial)}}">
             <p class="text-secondary fst-Italic"> {{ $errors->first(txtEditorial)}}</p>
            </div>

            <div class="mb-1">
             <label class="form-label"> Email Editorial </label>
             <input type="Email" class="form-control" name="txtEmail" value="{{ old(txtEmail)}}">
             <p class="text-secondary fst-Italic"> {{ $errors->first(txtEmail)}}</p>
            </div>


        </div>

        <div class="card-footer text-center">
            <button type="submit" class="btn btn-secondary btn-lg"> Guardar Libro </button>

        </form>

        </div>

    </div>


</div>



@stop