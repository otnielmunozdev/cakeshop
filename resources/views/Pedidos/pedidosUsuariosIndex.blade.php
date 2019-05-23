@extends('layouts.UserCount')
@section('contenido')

<div class="page-header ">
        <ol class="breadcrumb ">
                <li class="breadcrumb-item">
                <a href="{{route('pedidosUser.create')}}">Crea otro pedido</a>
                </li>
                <li class="breadcrumb-item active">!Pide tu pedido ahora mismo!</li>
        </ol>
</div>


@include('partials.mensajes')

<div class="container">
        <div class="card">
        <div class="card-header ">
            <h3 class="card-title">Listado de Pedidos</h3>
            <a href="{{url('pedidoUserLista') }}" class="btn btn-dark btn-sm "><i class="fas fa-fill"></i>Ver tus pedidos</a> 
            <div class="text-right">
            <a href="{{route('pedidosUser.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   

            </div>
        </div>
            <div class="row"> 
                    <div class="card-body col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table class="table table-responsive table-striped"  id="" >
                                        <thead>
                                                <tr>
                                                    
                                                    {{--<th>Acciones</th>
                                                    <th>ID</th>
                                                    <th>User ID</th>--}}
                                                    <th>Datos del Cliente</th>
                                                    <th>Fecha Solicitado - Fecha de Entrega</th>
                                                  {{--  <th>Producto ID</th>--}}
                                                    <th>Productos</th>
                                                    <th>Sucursal</th>
                                                    
                            
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pedido as $ped) 
                                                    <tr>
                                                       {{-- <td>
                                                            <a href="{{route('pedidosUser.show',$ped->id)}}" class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalle</a>
                                                        </td>
                                                        <td>{{ $ped->id }}</td>
                                                        <td>{{ $ped->user_id }}</td>--}}
                                                        <td>{{ $ped->user->nombre }} ({{ $ped->user->email }})</td>
                                                        <td>{{$ped->solicitado_entrega}} </td>
                                                        {{--<td>
                                                            <ul>
                                                                @foreach($ped->productos as $produc)
                                                                    <li>{{ $produc->id }}</li>                      
                                                                @endforeach
                                                            </ul>
                                                        </td>--}}
                                                        <td>
                                                            <ul>
                                                                @foreach($ped->productos as $produc)
                                                                    <li>{{ $produc->nombre }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            {{$ped->sucursal_id}}
                                                        </td>
                                                        {{--<td>
                                                            <a href="{{route('pedidosUser.edit',$ped->id)}}" class="btn btn-sm btn-warning">
                                                                Editar
                                                            </a>
                                                        </td>--}}
                                                        {{--<td>
                                                            <form action="{{route('pedidosUser.destroy',$ped->id)}}" method="POST">
                                                                    @csrf
                                                                        <input type="hidden" name="_method" value="DELETE">  
                                                                        <button  class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Borrar</button>
                            
                                                            </form>--}}
                                                        </td>
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





@endsection