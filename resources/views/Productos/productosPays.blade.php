@extends('layouts.app')

@section('content')
<div class="container text-center" id="productosTitulo">
    <h2 class="display-2 p-4">Pays</h2>


        
</div>
<div class="w-100"></div>

<div class="container" id="contenedorProducto">
        <div class="row" id="fondo">
            @foreach ($pays as $pay)   
            
            <div class ="col-md-4 col-xm-12 text-center" id="contenedor">
                <div class="card" id="tarjeta">
                    <div class="card-header">
                        <span class="" id="titulopastel">{{ $pay->nombre}}</span><br>
                    </div>
                    <div class="cardbody" id="descripcion">
                        <img src="images/{{ $pay->imagen}}" alt="" class="card-img-top img-fluid"  style="">
                        <span class="">Precio: ${{ $pay->precio}}</span>
                        <p class="card-text"><strong>Descripción: {{ $pay->descripcion}}</strong></p>
                    <a href="{{route('login')}}" class="btn btn-info btn-md " style="font-family:'Poppins'">Comprar</a> 
                    </div>
                </div>
            </div><br><br>
            

        @endforeach
        <div class="w-100"></div>
</div>
</div>

<footer class="">
        @include('layouts.footer')
</footer>
                
    
@endsection