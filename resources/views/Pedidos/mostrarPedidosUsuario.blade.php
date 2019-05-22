@extends('layouts.UserCount')
@section('contenido')

<div class="page-header ">
        <ol class="breadcrumb ">
                <li class="breadcrumb-item">
                <a href="{{route('pedidosUser.create')}}">Crea otro pedido</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('pedidosUser.index')}}">Ver listado de pedidos</a>
                </li>
                <li class="breadcrumb-item active">!Pide tu pedido ahora mismo!</li>
        </ol>
</div>


@include('partials.mensajes')

@foreach($pedido as $ped)
<div class="container">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">FOLIO DE TU PEDIDO, N&Uacute;MERO {{ $ped->id }}</h3>
            <div class="text-right">
            <a href="{{route('pedidosUser.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   
            </div>
        </div>


            <div class="row text-center"> 
                    <div class="card-body col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="row ">
                                    <div class="col-12 display-4 text-center">
                                        <th >Datos del Cliente</th>
                                    </div>
                                    <hr>
                                    <div class=""><br></div>
                                    <div class="col-12  font-20 bold text-center">
                                            <p> Tu nombre es {{ $ped->user->nombre }} {{ $ped->user->apellido }}</p>
                                            <p> Tu correo es  {{ $ped->user->email }}</p>
                                            <p> Tu telefono es  {{ $ped->user->telefono }}</p>
                                            <p> Tu Folio de Cliente es  {{ $ped->user->id }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col-12 display-4 text-center">
                                        <th>Fechas de entrega</th>
                                    </div>
                                    <hr>
                                    <div class=""><br></div>
                                    <div class="col-12 font-20 bold text-center">
                                            <p> Solicitaste tu pedido el dia {{$ped->fecha_solicitado->format('d/m/Y')}} </p>
                                            <p> La entrega se realizara el dia {{$ped->fecha_entrega->format('d/m/Y')}} </p>
                                    </div>
                                </div>
                                <hr>
                                <div class=" row ">
                                    <div class="col-12 display-4 text-center">
                                        <th>Productos del Pedido</th>
                                    </div>
                                    <hr>
                                    <div class=""><br></div>
                                    <div class="col-lg-6 col-md-12 font-20 bold text-center align-content-around offset-3 ">
                                        @foreach($ped->productos as $produc)
                                            <div class="card" id="tarjeta">
                                                <div class="card-header">
                                                    <span class="" id="titulopastel">{{ $produc->nombre }}</span><br>
                                                </div>
                                                <div class="cardbody" id="descripcion">
                                                    <img src="images/{{$produc->imagen}}" alt="" class="card-img-top img-fluid"  style=""> 
                                                    <span class="">Precio: ${{ $produc->precio }} </span>
                                                    <p class="card-text"><strong>Descripción: {{ $produc->nombre }} </strong></p>   
                                                </div>    
                                            </div>       
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col-12 display-4 text-center">
                                        <th>Aclaraciones , dudas , modificaciones o cancelaciones </th>
                                    </div>
                                    <hr>
                                    <div class=""><br></div>
                                    <div class="col-12 font-20 bold text-center">
                                            <p>Si tienes algun problema con tu pedido contactanos</p>
                                            <a href="{{ action('PaginasController@contacto') }}" class="btn btn-primary">Contacto</a>
                                            <p>Mandanos un correo en el apartado contacto o bien acude a nuestras sucursales.</p>
                                    </div>
                                </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
@endforeach





@endsection