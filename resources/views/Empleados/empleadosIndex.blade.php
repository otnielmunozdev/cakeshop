@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('empleados.index')}}</li>
        </ol>
</div>
@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header ">
    <h3 class="card-title">Listado de Empleados</h3>
    <div class="text-right">
    <a href="{{route('empleados.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   
    </div>
</div>
    <div class="row"> 
            <div class="card-body col-xs-12">
                <div class="box">
                    <div class="box-body">
                <table class="table table-responsive table-striped"  id="empleadosTable" >
                    <div class="container"></div>
                    <thead>
                        <th scope="col">Acciones</th> 
                        <th scope="col">ID</th>
                        <th scope="col">ID Sucursal</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                       {{-- <th scope="col">Fecha de Nacimiento</th>--}}
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col">Rol</th>


                    </thead>
                    <tbody>
                      {{-- @foreach ($sucursales as $sucurs)
                            <tr>
                              {{--  <td scope="row">{{$sucurs->id}}</td>
                                <td>{{$sucurs->direccion}}</td>
                                <td>{{$sucurs->horario}}</td>
                                <td>{{$sucurs->mapa}}</td>
                                <td>{{$sucurs->telefono}}</td>
                                <td colspan="">
                                    <a href="{{route('sucursales.show',$sucurs->id)}}" class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalle</a>
                                </td>
                            </tr>
                        @endforeach--}}
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