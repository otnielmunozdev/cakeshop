@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{route('sucursales.create')}}</li>
        </ol>
</div>
<div class="card">
    
<div class="card-header">
    <h3 class="card-title">Capturar Sucursal</h3>
</div>
  <div class="card-body">
        <div class="col-md-8 offset-md-2 col-sm-12 ">
        <form action="{{ route('sucursales.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label">Sucursal</label>
                    <input type="text" class="form-control"  placeholder="Direcci&oacute;n de la Sucursal" value=""name="direccion" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Horario</label>
                    <input type="text" class="form-control"  placeholder="hh:mm AM - hh:mm PM" value=""name="horario" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Mapa</label>
                    <input type="text" class="form-control"  placeholder="URL del mapa de Google" value=""name="mapa" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Tel&eacute;fono</label>
                    <input type="text" class="form-control"  placeholder="Tel&eacute;fono" value=""name="telefono" required>
                </div>
                <button type="submit" class="btn btn-primary block">Enviar</button>
                </div>

        </form>
        </div>
  </div>
</div>
    
@endsection