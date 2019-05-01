@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('empleados.show',$empleado->id)}}</li>
        </ol>
</div>

@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header">
<h3 class="card-title">Detalle del Empleado n&uacute;mero: {{$empleado->id}}</h3>
<a href="{{route('empleados.index') }}" class="btn btn-info btn-sm"><i class="fas fa-fill"></i> Regresar</a>  
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                        
                        <th scope="col">ID</th>
                        <th scope="col">ID Sucursal</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Password</th>
                        <th scope="col">Acciones</th> 
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="row">{{$empleado->id}}</td>
                                <td>{{$empleado->sucursal_id}}</td>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->apellido}}</td>
                                <td>{{$empleado->email}}</td>
                                <td>{{$empleado->fecha_nac}}</td>
                                <td>{{$empleado->telefono}}</td>
                                <td>{{$empleado->rol}}</td>
                                <td>{{$empleado->password}}</td>
                            <td >
                            <a href="{{route('empleados.edit',$empleado->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>    
                            </td>
                            <td>
                                <form action="{{route('empleados.destroy',$empleado->id)}}" method="POST">
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