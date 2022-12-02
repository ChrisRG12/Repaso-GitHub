@extends('plantilla')

@section('contenido')

<div class="col">
    <div class="row-3">

        <div class="container mt-4 mb-4">
            <div class="card text-center mb-2">
                <div class="card-header fw-bolder">
                    Registrar Libro
                 </div>
                 <div class="card-body ">
                    <a href="Autor/create" class="btn btn-outline-success"> Registrar Libro</a>
                 </div>
                
            </div>

            <div class="card text-center mb-2">
                <div class="card-header fw-bolder">
                    Registrar Autor
                 </div>
                 <div class="card-body ">
                    <a href="{{route('Libro.index')}}" class="btn btn-outline-success"> Registar Autor</a>
                </div>

            </div>

            <div class="card text-center mb-2">
                <div class="card-header fw-bolder">
                   Ver Libros
                 </div>
                 <div class="card-body ">
                    <a href="{{route('Libro.index')}}" class="btn btn-outline-primary">Ver Libros</a>
                </div>

            </div>

            <div class="card text-center mb-2">
                <div class="card-header fw-bolder">
                    Ver Autores
                 </div>
                 <div class="card-body ">
                    <a href="{{route('Autor.index')}}" class="btn btn-outline-primary"> Ver autores</a>
                </div>

            </div>

        </div>



    </div>

</div>

@stop