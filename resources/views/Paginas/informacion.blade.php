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

            #quienessomos{
                height:155px; 
                background-color:rgba(97, 46, 4, 0.8);
                color:white;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
          
            #historia{
                background: url('{{ asset('img/fondoquienesomos.jpg') }}');
                background-size: auto;
                min-height:100vh;
                color:#fff;
            }
            #historia2{
                background: url('{{ asset('img/fondoquienesomos2.jpg') }}') no-repeat;
                background-size: auto;
                min-height:100vh;
                color:#fff;
            }
            #historia .transparente{
                background-color:rgba(0, 0, 0, 0.9); 
                background-size: cover;
                height:100vh;
            }

            #historia2 .transparente{
                background-color:rgba(0, 0, 0, 0.6); 
                background-size: cover;
                min-height:100vh;
            }


        </style>
    </head>


    <body>
@extends('layouts.app')

@section('content')



    <div class="container" id="historia">
            <div class=" row align-items-center transparente">
                    <div class="col-12 ">
                        <h1 class="display-3 text-center titulo " style=""><strong><p>Nuestra historia comienza en....</p></strong></h1>
                    </div>
                    <div class="col-12">
                        <div class="container">
                                <p class="text-center titulo" >La palabra pastel deriva del griego ‘pasté’,
                                     que define una mezcla de harina y salsa. El diccionario de la Real 
                                     Academia Española define ‘pastelería’ como el arte de trabajar pasteles 
                                     o pastas, y ‘repostería’ como oficio del repostero, persona que tiene 
                                     por oficio hacer pastas, dulces y algunas bebidas.
                                        El Hotel Ritz en Madrid ha querido profundizar en la dulce historia 
                                        de la pastelería y la repostería, un repaso a estas especialidades 
                                        culinarias a través de las diferentes civilizaciones y culturas.
                                        Uno de los momentos claves de la historia de la pastelería fue la 
                                        llegada a Francia de Catalina de Médici, desde Italia, en 1553. 
                                        Con ella trajo a sus cocineros y pasteleros, quienes introdujeron
                                         muchas recetas, entre ellas el frangipane o ‘franchipán’ en español, 
                                         una crema compuesta de crema de almendra y crema pastelera.En el siglo XVIII se inició en Francia el desarrollo del hojaldre, marcando el comienzo de la pastelería moderna. A finales de este siglo se desplegó la línea bollería vienesa, más tarde Maria Antonieta popularizó el croissant.  No fue hasta éste siglo y los dos siguientes cuando comenzó a existir verdaderamente el arte de la pastelería: en 1863 se crearon las tartaletas de almendras de Ragueneau; en 1740 se introdujo en Francia el Baba, por medio del rey polaco Stanislas Leszczynsky; y en 1805, Lorsa, pastelero bordelés, creó la decoración con cornetes.

                                         El mayor innovador, sin duda, fue Antoine de Carêm, quien a 
                                         principios del siglo XIX publicó el libro El Pastelero Real, 
                                         una obra considerada como la primera descripción de la repostería 
                                         moderna, con un importante repertorio de recetas. Además se le 
                                         atribuyó la croquenbouche, el merengue, el nougat, el voul aun 
                                         vent y el perfeccionamiento de la masa hojaldre.</p>                  
                        </div>
                    </div>
            </div>
        </div>


        <div class="container" id="historia2">
                <div class=" row align-items-center transparente">
                        <div class="col-12 ">
                            <h1 class="display-3 text-center titulo " style=""><strong><p>Tenemos mas de 100 a&ntilde;os contigo</p></strong></h1>
                        </div>
                        <div class="col-12">
                            <p class="p-4 text-center titulo" >Que esperas para venir a probar nuestros decliciosos sabores..</p>
                        </div>
                </div>
            </div>

<footer class="">
    @include('layouts.footer')
</footer>
    
@endsection

        
</body>
</html>
