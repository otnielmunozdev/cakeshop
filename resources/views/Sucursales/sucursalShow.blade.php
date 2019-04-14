@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('sucursales.show',$sucursale->id)}}</li>
        </ol>
</div>
<div class="container">
<div class="card">
<div class="card-header">
<h3 class="card-title">Detalle de Sucursal n&uacute;mero: {{$sucursale->id}}</h3>
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Direcci&oacute;n</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Mapa</th>
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col" colspan="6" class="text-center">Acciones</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="row">{{$sucursale->id}}</td>
                                <td>{{$sucursale->direccion}}</td>
                                <td>{{$sucursale->horario}}</td>
                                <td>{{$sucursale->mapa}}</td>
                                <td>{{$sucursale->telefono}}</td>
                            <td >
                            <a href="{{route('sucursales.edit',$sucursale->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>    
                            </td>
                            <td>
                                <form action="{{route('sucursales.destroy',$sucursale->id)}}" method="POST">
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