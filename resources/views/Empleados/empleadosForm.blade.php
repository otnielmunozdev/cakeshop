
@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a> 
                </li>
                @if (isset($empleado))
                <li class="breadcrumb-item active">{{route('empleados.update',$empleado->id)}}</li>
                @else
                <li class="breadcrumb-item active">{{route('empleados.create')}}</li>
                @endif

                
        </ol>
</div>
<div class="card">
    
<div class="card-header">
        @if (isset($empleado))
        <h3 class="card-title">Modificar Empleado: {{$empleado->id}}</h3>
        @else
        <h3 class="card-title">Capturar Empleado</h3> 
        @endif
        
    
</div>
  <div class="card-body">

        @include('partials.formErrors')
        
        <div class="col-md-8 offset-md-2 col-sm-12 ">

            @if (isset($empleado))
                <form action="{{ route('empleados.update',$empleado->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
            @else
                <form action="{{ route('empleados.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
            @endif
    
            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label"><strong>Empleado</strong></label>
                    <input type="text" class="form-control"  placeholder="Nombre del empleado" value="{{$empleado->nombre ?? ''}}{{ old('nombre') }}"name="nombre" >
                    @if ($errors->has('nombre'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong> 
                        </span>
                    @endif
                    
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Apellido</strong></label>
                        <input type="text" class="form-control"  placeholder="Apellido del empleado" value="{{$empleado->apellido ?? ''}}{{ old('apellido') }}"name="apellido" >
                        @if ($errors->has('apellido'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('apellido') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Correo El&eacute;ctronico</strong></label>
                        <input type="text" class="form-control"  placeholder="Correo del empleado" value="{{$empleado->correo ?? ''}}{{ old('correo') }}"name="correo" >
                        @if ($errors->has('correo'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('correo') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Fecha de nacimiento</strong></label>
                        <input type="date" class="form-control"  placeholder="Fecha de nacimiento del empleado" value="{{$empleado->fecha_nac ?? ''}}{{ old('fecha_nac') }}"name="fecha_nac" min="1940-01-01" max="2002-01-01">
                        @if ($errors->has('fecha_nac'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('fecha_nac') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Telefono</strong></label>
                        <input type="text" class="form-control"  placeholder="Telefono del empleado" value="{{$empleado->telefono ?? ''}}{{ old('telefono') }}"name="telefono" >
                        @if ($errors->has('telefono'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('telefono') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Rol (Puesto dentro de la empresa)</strong></label>
                        <input type="text" class="form-control"  placeholder="Puesto del empleado" value="{{$empleado->rol ?? ''}}{{ old('rol') }}"name="rol" >
                        @if ($errors->has('rol'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('rol') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label">Sucursal en la que trabajara</label>
                        <select name="sucursal_id" class="form-control" id="">
                            @foreach ($sucursales as $sucur)
                                <option value="{{ $sucur->id }}" {{ isset($empleado) && $empleado->sucursal_id == $sucur->id ? 'selected' : '' }}>{{$sucur->direccion}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('sucursal_id'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('sucursal_id') }}</strong> 
                        </span>
                    @endif
                    </div>
                
                <button type="submit" class="btn btn-primary block "><i class="fas fa-save"></i> Guardar</button>
                <button type="reset" class="btn btn-info block offset-9"><i class="fas fa-minus"></i>  Limpiar Campos</button>
                </div>

        </form>
        </div>
  </div>
</div>
    
@endsection