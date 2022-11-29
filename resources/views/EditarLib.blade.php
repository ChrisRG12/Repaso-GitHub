@extends('plantilla')

@section('contenido')





<div class="container mt-2  cold-md-5">
    @if ($errors->any())
     
     @foreach ($errors->all() as $error)
     <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> {{ $error }} </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
         
     @endforeach
        
    @endif

    <div class="card text-center mb-2">

        <form action="#" method="post">
            @csrf
            @method('PUT');


        <div class="card-header fw-bolder">
            Correcciones !!
        </div>

        <div class="card-body ">

            <div class="mb-1">
                <label class="form-label"> ISNB </label>
                <input type="Number" class="form-control" name="ISNB" placeholder="ISNB --Solo Numeros, Minimo 13--" value="{{ $consultaId->ISNB }}">>
                <p class="text-secondary fst-Italic"></p>
                </div>

            <div class="mb-1">
             <label class="form-label"> Titulo</label>
             <input type="text" class="form-control" name="txtTitulo" placeholder="Titulo" value="{{ $consultaId->Titulo }}">>
             <p class="text-secondary fst-Italic"></p>
            </div>

            <div class="mb-4">
                <label for="text" class="form-label" placeholder="Autor">Autor</label>
                <select class="form-select" name="txtAutor" aria-label="Default select example">
                    <option selected>Selecciona un autor:</option>
                    
                    @foreach ($categorias as $tb_autores)
                        <option value="{{$tb_autores['idAutor']}}">{{$tb_autores['Nombre']}}</option>
                    @endforeach

                  </select>
                <p class="text-secondary fst-Italic">
                    {{$errors->first('txtAutor')}}
                </p>
            </div>


            <div class="mb-1">
             <label class="form-label"> Paginas</label>
             <input type="Number" class="form-control" name="NumPaginas" placeholder="Numero de Paginas --Solo numeros--" value="{{ $consultaId->paginas }}">>
             <p class="text-secondary fst-Italic"></p>
            </div>

            <div class="mb-1">
             <label class="form-label"> Editorial</label>
             <input type="text" class="form-control" name="txtEditorial" placeholder="Editorial" value="{{ $consultaId->editorial }}">>
             <p class="text-secondary fst-Italic"></p>
            </div>

            <div class="mb-1">
             <label class="form-label"> Email Editorial </label>
             <input type="Email" class="form-control" name="txtEmail" placeholder="Correo de la Editorial " value="{{ $consultaId->correo }}">>
             <p class="text-secondary fst-Italic"></p>
            </div>


        </div>

        <div class="card-footer text-center">
            <button type="submit" class="btn btn-secondary btn-lg"> Actualizar Libro </button>

        </form>

        </div>

    </div>


</div>



@stop