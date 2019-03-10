<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake Shop</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/pastelitos.png') }}">
    <style>
        #menu{
          background: linear-gradient(to right, rgba(251,166,225,1) 4%, rgba(251,166,225,0.82) 30%, rgba(253,137,215,0.68) 51%, rgba(253,137,215,0.44) 86%);
          border-bottom: 2px solid white;

        }

        #menu .transparente{
          background: rgba(26, 25, 25, 0.062);
        }

        li{
          border: 1px solid white;
          border-radius: 10px;
          margin-right: 2px;
        }
    
    </style>
    <script>
      $(document).on('scroll', function () {
        $('nav').('scrollTop').addClass('transparente');
      })

    </script>

</head>


<body>
    <div class="container text-center">
    <span style="color: red; font-family: Arial;" class="mr-4"> Servicio a Domicilio    </span><span style="color: green; font-family: Luna;" class="mr-4">SIN COSTO EN ÁREA LIMITADA Y EN COMPRAS MAYORES A $200.</span><span style="color: blue; font-family: Helvetica;"> Sujeto a disponibilidad en sucursales.<span>

Siguenos:

    </div>
    <!--Navegacion-->
    <nav class=" navbar navbar-expand-md navbar-dark bg-dark sticky-top text-center " id="menu" >

      <div class="container">
        <a href="/" class="navbar-brand">
          <img src="/" alt="pasteleria" width="50px"  class="d-inline-block align-top" >
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#SecondNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="SecondNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link " href="informacion">Quienes somos</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Pasteles</a>
                <a class="dropdown-item" href="#">Galletas</a>
                <a class="dropdown-item" href="#">Muffins</a>
                <a class="dropdown-item" href="#">Pays</a>
                <a class="dropdown-item" href="#">Gelatinas</a>
               {{-- <div class="dropdown-divider"></div> --}}
               {{--  <a class="dropdown-item" href="#">Something else here</a> --}}
              </div>
          </li>
            <li class="nav-item"><a class="nav-link" href="sucursales">Sucursales</a></li>
            <li class="nav-item"><a class="nav-link" href="promociones">Promociones</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="w-100"></div>

    <main class="">
            @yield('content') <!--aqui inicia la seccion -->
    </main>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>