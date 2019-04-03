@extends('layouts.Admin')

@section('contenido')


<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('sucursales.index')}}</li>
        </ol>
</div>

<div class="container">
<div class="card">
<div class="card-header ">
    <h3 class="card-title">Listado de Sucursales</h3>
    <div class="text-right">
    <a href="{{route('sucursales.create')}}" class=" btn btn-success btn-sm ">+ Agregar</a>   
    </div>
</div>
    <div class="row">
        <div class="container">
            <div class="card-body">
                <table class="table table-responsive  table-hover">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Direcci&oacute;n</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Mapa</th>
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($sucursales as $sucurs)
                            <tr>
                                <td scope="row">{{$sucurs->id}}</td>
                                <td>{{$sucurs->direccion}}</td>
                                <td>{{$sucurs->horario}}</td>
                                <td>{{$sucurs->mapa}}</td>
                                <td>{{$sucurs->telefono}}</td>
                                <td>
                                    <a href="{{route('sucursales.show',$sucurs->id)}}" class="btn btn-info btn-sm">Detalle</a>
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