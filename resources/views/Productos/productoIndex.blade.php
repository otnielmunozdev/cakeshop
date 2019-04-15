@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('producto.index')}}</li>
        </ol>
</div>
@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header ">
    <h3 class="card-title">Listado de Productos</h3>
    <div class="text-right">
    <a href="{{route('producto.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   
    </div>
</div>
    <div class="row"> 
            <div class="card-body col-xs-12">
                <div class="box">
                    <div class="box-body">
                <table class="table table-responsive table-striped"  id="" >
                    <div class="container"></div>
                    <thead>
                        <th scope="col">Acciones</th> 
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del Producto</th>
                        <th scope="col">Tipo del Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                    </thead>
                    <tbody>
                       @foreach ($producto as $prod)
                            <tr>
                                <td colspan="">
                                    <a href="{{route('producto.show',$prod->id)}}" class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalle</a>
                                </td>
                                <td scope="row">{{$prod->id}}</td>
                                <td>{{$prod->nombre}}</td>
                                <td>{{$prod->tipo_producto}}</td>
                                <td>{{$prod->precio}}</td>
                                <td>{{$prod->descripcion}}</td>
                                <td>{{$prod->imagen}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>

    
@endsection