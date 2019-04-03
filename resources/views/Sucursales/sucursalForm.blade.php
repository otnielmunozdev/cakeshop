
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                    <input type="text" class="form-control"  placeholder="Direcci&oacute;n de la Sucursal" value="{{$sucursale->direccion ?? ''}}{{ old('direccion') }}"name="direccion" >
                    @if ($errors->has('direccion'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('direccion') }}</strong> 
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Horario</label>
                    <input type="text" class="form-control"  placeholder="hh:mm AM - hh:mm PM" value="{{$sucursale->horario ?? ''}}{{ old('horario') }}"name="horario" >
                    @if ($errors->has('horario'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('horario') }}</strong> 
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Mapa</label>
                    <input type="text" class="form-control"  placeholder="URL del mapa de Google" value="{{$sucursale->mapa ?? ''}}{{ old('mapa') }}"name="mapa" >
                    @if ($errors->has('mapa'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('mapa') }}</strong> 
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-label">Tel&eacute;fono</label>
                    <input type="text" class="form-control"  placeholder="Tel&eacute;fono" value="{{$sucursale->telefono ?? ''}}{{ old('telefono') }}"name="telefono" >
                    @if ($errors->has('telefono'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('telefono') }}</strong> 
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block ">Enviar</button>
                <button type="reset" class="btn btn-info block offset-8">Limpiar Campos</button>
                </div>

        </form>
        </div>
  </div>
</div>
    
@endsection