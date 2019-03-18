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

<div class="card">
<div class="card-header">
    <h3 class="card-title">Listado de Sucursales</h3>
</div>
    <div class="row">
        <div class="container">
            <div class="card-body">
                <table class="table table-responsive ">
                    <thead>
                        <th>ID</th>
                        <th>Direcci&oacute;n</th>
                        <th>Horario</th>
                        <th>Mapa</th>
                        <th>Tel&eacute;fono</th>
                    </thead>
                    <tbody>
                        @foreach ($sucursales as $sucurs)
                            <tr>
                                <td>{{$sucurs->id}}</td>
                                <td>{{$sucurs->direccion}}</td>
                                <td>{{$sucurs->horario}}</td>
                                <td class="container">{{$sucurs->mapa}}</td>
                                <td>{{$sucurs->telefono}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection