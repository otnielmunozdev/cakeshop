@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('pedidos.show',$pedido->id)}}</li>
        </ol>
</div>

@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header">
<h3 class="card-title">Detalle del pedido n&uacute;mero: {{$pedido->id}}</h3>
<a href="{{route('pedidos.index') }}" class="btn btn-info btn-sm"><i class="fas fa-fill"></i> Regresar</a>  
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Sucursal ID</th>
                        <th scope="col">Fecha de entrega</th>
                        <th scope="col">Fecha Solicitado</th>
                        <th scope="col" colspan="6" class="text-center">Acciones</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="row">{{$pedido->id}}</td>
                                <td>{{$pedido->user_id}}</td>
                                <td>{{$pedido->sucursal_id}}</td>
                                <td>{{$pedido->fecha_solicitado}}</td>
                                <td>{{$pedido->fecha_entrega}}</td>
                            <td >
                            <a href="{{route('pedidos.edit',$pedido->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>    
                            </td> 
                            <td>
                                <form action="{{route('pedidos.destroy',$pedido->id)}}" method="POST">
                                @csrf
                                    <input type="hidden" name="_method" value="DELETE">  {{--se manda un input oculto para que laravel sepa que hacer DELETE / PUT / PATCH--}}
                                    <button  class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Borrar</button>
                                {{--<a href="{{route('sucursales.show',$depen->id)}}" class="btn btn-info btn-sm">Detalle</a>--}}
                                </form>
                            </td>

                            </tr>
                    </tbody>
                </table>
                <p>
                        <ul>
                            Productos:
                            <table class="table">
                                @foreach($pedido->productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>
                                        <form action="{{ route('pedidos.eliminaProducto', $pedido->id) }}" method="POST">
                                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
        
                        </ul>
                    </p>
            </div>
        </div>
    </div>
</div>
</div>

</div>



@endsection