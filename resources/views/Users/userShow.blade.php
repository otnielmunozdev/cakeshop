@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('user.show',$user->id)}}</li>
        </ol>
</div>

@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header">
<h3 class="card-title">Detalle de Cliente n&uacute;mero: {{$user->id}}</h3>
<a href="{{route('user.index') }}" class="btn btn-info btn-sm"><i class="fas fa-fill"></i> Regresar</a>  
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                        <th scope="col" colspan="6" class="text-center">Acciones</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->telefono}}</td>
                            <td >
                            <a href="{{route('user.edit',$user->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>    
                            </td>
                            <td>
                                <form action="{{route('user.destroy',$user->id)}}" method="POST">
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