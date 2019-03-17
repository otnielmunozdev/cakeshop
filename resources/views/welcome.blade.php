<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pasteleria Cake </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
           /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
            #contenedor{
                background: url('{{ asset('img/fondopasteleria.jpg') }}');
                background-size: auto;
                min-height:100vh;
                background-attachment: fixed;
                padding:0;
                margin:0;
            }
            #contenedor2{
                background: url('{{ asset('img/pastel2.jpg') }}') no-repeat;
                background-size: cover;
                min-height:100vh;
                background-attachment: ;
                padding:0;
                margin:0;
                color:#fff;
            }
            #contenedor .transparente{
                background-color:rgba(0, 0, 0, 0.9); 
                background-size: cover;
                min-height:100vh;
                padding:0;
                margin:0;
            }

            #contenedor2 .transparente{
                background-color:rgba(0, 0, 0, 0.6); 
                background-size: cover;
                min-height:100vh;
                padding:0;
                margin:0;
            }


            #contenedor  .titulo {
                font-family: 'Srisakdi';
                color: #fff;
            }
            #contenedor .p-4{
                font-size: 2em;
                font-style: italic;
                text-align: center;
                /*margin:auto;*/

            }

            #contenedor3{
                background-color: white;
            }

        </style>
    </head>
    <body>
    @extends('layouts.app')

        @section('content')

       {{--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Cake Shop
                </div>

            </div>
        </div> --}}
        
        <div class="container-fluid" id="contenedor">
            <div class=" row align-items-center transparente">
                    <div class="col-12 ">
                        <h1 class="display-3 text-center titulo " style=""><strong><p>Pasteleria Cake Shop</p></strong></h1>
                    </div>
                    <div class="col-12 text-center ">
                        <img src="{{ asset('img/logo2.png') }}" alt="pastel" width="" class="img-fluid">
                    </div>
                    <div class="col-12">
                        <p class="p-4 text-center titulo" >Tenemos los mejores pasteles de GDL. <br>Ademas de muchos otros productos como 
                        Galletas, deliciosos pays, muffins y temblorosas Gelatinas.</p>
                    </div>
            </div>
        </div>

        <!--Seccion-->
        <section class="info-section bg-light text-muted py-5" id="info-seccion">
                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <img src="{{ asset('img/pastel1.png') }}" alt="pastel" width="600px;" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h3>Los mejores Pasteles</h3>
                    <p>Nuestros productos son hechos con la mejor calidad y los ingredientes mas naturales. </p>
                    <!--item-->
                    <div class="d-flex flex-row">
                        <div class="p-4">
                        <i class="fas fa-certificate"></i>
                        </div>
                        <div class="p-2">
                        Ven y disfruta de la mejor calidad y experiencia aqui en Cake Shop.
                        Eventos especiales , pasteles para la novia , para el cumplea&ntilde;ero, para la familia.
                        Tenemos mucha variedad de sabores , entre galletas y gelatinas , ven y desifruta con nosotros.
                        Te esperamos en cualquiera de nuestras sucursales.
                        </div>
                    </div>
                    <br>
                    </div>
                </div>
                </div>
            </section>

            <div class="container-fluid img-fluid" id="contenedor2">
                    <div class=" row align-items-center transparente">
                            <div class="col-12 ">
                                <h1 class="display-3 text-center titulo" style="margin-top:50px;"><strong><p>Disfruta en familia esos buenos momentos.</p></strong></h1>
                            </div>
                            <div class="col-12 container">
                                <p class="text-center titulo " style="margin:-10px;">Checa nuestras promociones , cupones de descuento, dias de oferta, 
                                    descuentos abismales, 2x1, fiestas infantiles , pasteles de bodas , y muchos mas!.
                                </p>
                            </div>
                    </div>
                </div>


            <section class="info-section  text-muted py-5" id="contenedor3">
                    <div class="container">
                      <div class="row">
                        
                        <div class="col-md-6">
                          <h3>Realiza pedidos</h3>
                          <p>Si deseas realizar algun pedido , registrate en la pagina. </p>
                        <!--item-->
                          <div class="d-flex flex-row">
                            <div class="p-4">
                              <i class="fas fa-certificate"></i>
                            </div>
                            <div class="p-2">
                              Uno de nuestros servicios es que se tiene un sistema el cual si requieres hacer algun pedido con gusto lo hacemos.
                              Crea una cuenta para poder acceder a tu sesión , ingresa que productos quieres comprar , el horario en el que lo recogeras ,
                               te aparecera el precio total a pagar y tu acuse que tendras que entregar cuando recogas tus productos, tambien se envia a domicilio
                               con un costo extra.
                            </div>
                          </div>
                          <br>
                        </div>
                        <div class="col-md-6">
                                <img src="{{ asset('img/pedidos.png') }}" alt="pastel" width="400px;" class="img-fluid">
                              </div>
                      </div>
                      <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                    </div>
                  </section>
        
            <footer class="">
                    @include('layouts.footer')
            </footer>

        @endsection

        
    </body>
</html>
