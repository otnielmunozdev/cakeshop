@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('producto.show',$producto->id)}}</li>
        </ol>
</div>

@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header">
<h3 class="card-title">Detalle del producto n&uacute;mero: {{$producto->id}}</h3>
<a href="{{route('producto.index') }}" class="btn btn-info btn-sm"><i class="fas fa-fill"></i> Regresar</a>  
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Tipo del Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col" colspan="6">Acciones</th> 
                    </thead>
                    <tbody>
                            <tr>
                                    <td scope="row">{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->tipo_producto}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td >{{$producto->descripcion}}</td>
                                    <td >{{$producto->imagen}}</td>
                            <td >
                            <a href="{{route('producto.edit',$producto->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>    
                            </td>
                            <td>
                                <form action="{{route('producto.destroy',$producto->id)}}" method="POST">
                                @csrf
                                    <input type="hidden" name="_method" value="DELETE">  {{--se manda un input oculto para que laravel sepa que hacer DELETE / PUT / PATCH--}}
                                    <button  class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Borrar</button>
                                {{--<a href="{{route('sucursales.show',$depen->id)}}" class="btn btn-info btn-sm">Detalle</a>--}}
                                </form>
                            </td>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

</div>



@endsection