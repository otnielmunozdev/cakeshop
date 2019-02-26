<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


<body>

    <!--Navegacion-->
    <nav class=" navbar navbar-expand-md navbar-light bg-light sticky-top text-center " >

      <div class="container">
        <a href="/" class="navbar-brand">
          <img src=".png" alt="" width="50px" class="d-inline-block align-top" >
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#SecondNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="SecondNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link " href="">Quienes somos</a></li>
            <li class="nav-item"><a class="nav-link" href="">Productos</a></li>
            <li class="nav-item"><a class="nav-link" href="">Sucursales</a></li>
            <li class="nav-item"><a class="nav-link" href="">Promociones</a></li>
            <li class="nav-item"><a class="nav-link" href="">Contacto</a></li>
          </ul>
        </div>

      </div>
    </nav>

    <main class="py-4 m12">
            @yield('content') <!--aqui inicia la seccion -->
    </main>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>