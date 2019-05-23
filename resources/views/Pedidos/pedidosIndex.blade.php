@extends('layouts.Admin')
@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('pedidos.index')}}</li>
        </ol>
</div>


@include('partials.mensajes')

<div class="container">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Listado de Pedidos</h3>
            <div class="text-right">
            <a href="{{route('pedidos.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   
            </div>
        </div>
            <div class="row"> 
                    <div class="card-body col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table class="table table-responsive table-striped"  id="" >
                                        <thead>
                                            <tr>
                                                
                                                <th>Acciones</th>
                                                <th>ID</th>
                                                <th>User ID</th>
                                                <th>Sucursal ID</th>
                                                <th>Datos del Cliente</th>
                                                <th>Fecha Solicitado</th>
                                                <th>Fecha Entrega</th>
                                                <th>Producto ID</th>
                                                <th>Productos</th>
                                                
                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pedido as $ped)
                                                <tr>
                                                    <td>
                                                        <a href="{{route('pedidos.show',$ped->id)}}" class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalle</a>
                                                    </td>
                                                    <td>{{ $ped->id }}</td>
                                                    <td>{{ $ped->user_id }}</td>
                                                    <td>{{$ped->sucursal_id}}</td>
                                                    <td>{{ $ped->user->nombre }} ({{ $ped->user->email }})</td>
                                                    <td>{{$ped->fecha_solicitado->format('d/m/Y')}} </td>
                                                    <td>{{$ped->fecha_entrega->format('d/m/Y')}} </td>
                                                    <td>
                                                        <ol type="a">
                                                            @foreach($ped->productos as $produc)
                                                                <li>{{ $produc->id }}</li>                      
                                                            @endforeach
                                                        </ol>
                                                    </td>
                                                    <td>
                                                            <ol  type="a">
                                                                    @foreach($ped->productos as $produc)
                                                                        <li>{{ $produc->nombre }}</li>
                                                                    @endforeach
                                                            </ol>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('pedidos.edit',$ped->id)}}" class="btn btn-sm btn-warning">
                                                            Editar
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$pedido->links()}}
                        
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>


@endsection