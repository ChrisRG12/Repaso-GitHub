@extends('plantilla')


@section('contenido')

<div class="container mt-5  cold-md-5">

    <div class="card text-center mb-5">

        <form action="LibroGuardado" method="post">
            @csrf


        <div class="card-header fw-bolder">
           Registro  de Libros 
        </div>

        <div class="card-body ">

            <div class="mb-1">
            <label class="form-label"> ISNB</label>
            <input type="Number" class="form-control" name="NumISNB" >
            </div>


            <div class="mb-1">
             <label class="form-label"> Titulo</label>
             <input type="text" class="form-control" name="txtTitulo">
            </div>


            <div class="mb-1">
              <label class="form-label"> Autor</label>
             <input type="text" class="form-control" name="txtAutor">
            </div>


            <div class="mb-1">
             <label class="form-label"> Paginas</label>
             <input type="Number" class="form-control" name="NumPaginas">
            </div>

            <div class="mb-1">
             <label class="form-label"> Editorial</label>
             <input type="text" class="form-control" name="txtEditorial">
            </div>

            <div class="mb-1">
             <label class="form-label"> Email Editorial </label>
             <input type="Email" class="form-control" name="txtEmail">
            </div>


        </div>

        <div class="card-footer text-center">
            <button type="submit" class="btn btn-secondary btn-lg"> Guardar Libro </button>

        </form>

        </div>

    </div>


</div>



@stop