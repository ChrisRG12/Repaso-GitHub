<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Libreria </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</head>


<body class=" text-center ">
    <!-- Agregamos un style para el fondo de las vistas -->
    <style>
        body{
            background: #626a7a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, rgb(15, 62, 136), #373B44);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #0f3e8b, #40444d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>

    <!-- NavBar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"> Libreria</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/" >Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Registro/create" >Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Autor" >Autor</a>
              </li>
          </div>
        </div>
      </nav>


    <!-- Contenido -->

@yield('contenido') 



 <!-- Pie de Pagina -->

<div class="alert alert-dark" role="alert">
  Libreria 2022 CopyRight© 
  <?php

  date_default_timezone_set('America/Mexico_City');
  $fecha = date('d/m/y h:i');

  echo "$fecha <br>";
  
  ?>

</div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>




</html>