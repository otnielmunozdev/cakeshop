
@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a> 
                </li>
                @if (isset($sucursale))
                <li class="breadcrumb-item active">{{route('sucursales.edit',$sucursale->id)}}</li>
                @else
                <li class="breadcrumb-item active">{{route('sucursales.create')}}</li>
                @endif
                
        </ol>
</div>
<div class="card">
    
<div class="card-header">
        @if (isset($sucursale))
<h3 class="card-title">Modificar Sucursal n&uacute;mero: {{$sucursale->id}}</h3>
        @else
        <h3 class="card-title">Capturar Sucursal</h3> 
        @endif
    
</div>
  <div class="card-body">
        <div class="col-md-8 offset-md-2 col-sm-12 ">
            @if (isset($sucursale))
                <form action="{{ route('sucursales.update',$sucursale->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
            @else
                <form action="{{ route('sucursales.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
            @endif

            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label">Sucursal</label>
                    <input type="text" class="form-control"  placeholder="Direcci&oacute;n de la Sucursal" value="{{$sucursale->direccion ?? ''}}"name="direccion" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Horario</label>
                    <input type="text" class="form-control"  placeholder="hh:mm AM - hh:mm PM" value="{{$sucursale->horario ?? ''}}"name="horario" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Mapa</label>
                    <input type="text" class="form-control"  placeholder="URL del mapa de Google" value="{{$sucursale->mapa ?? ''}}"name="mapa" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Tel&eacute;fono</label>
                    <input type="text" class="form-control"  placeholder="Tel&eacute;fono" value="{{$sucursale->telefono ?? ''}}"name="telefono" required>
                </div>
                <button type="submit" class="btn btn-primary block ">Enviar</button>
                </div>

        </form>
        </div>
  </div>
</div>
    
@endsection