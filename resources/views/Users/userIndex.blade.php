@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('user.index')}}</li>
        </ol>
</div>
@include('partials.mensajes')
<div class="container">
<div class="card">
<div class="card-header ">
    <h3 class="card-title">Listado de Clientes</h3>
    <div class="text-right">
    <a href="{{route('user.create')}}" class=" btn btn-success btn-sm "><i class="fas fa-plus"></i> Agregar</a>   
    </div>
</div>
    <div class="row"> 
            <div class="card-body col-xs-12">
                <div class="box">
                    <div class="box-body">
                <table class="table table-responsive table-striped"  id="usersTable" >
                    <div class="container"></div>
                    <thead>
                        <th scope="col">Acciones</th> 
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>

                    </thead>
                    <tbody>
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